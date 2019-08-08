let path = require('path');
let fs = require('fs');

let mix = require('laravel-mix');
require('laravel-mix-purgecss');
const imagemin = require('imagemin');
const imageminWebp = require('imagemin-webp');
const jsonfile = require('jsonfile');
const os = require('os');




const default_mix_options = {
	postCss: [require('autoprefixer')({
		browsers: ['last 5 versions'],
		flexbox: "no-2009"
	})],
	terser: {
		parallel: 8, // Use multithreading for the processing
		terserOptions: {
			mangle: true,
			compress: true // The slow bit
		}
	}
}

const default_folders = {
    cwd : process.cwd(),
    resources : 'resources',
    assets: 'assets',
    images: 'images',
    public: 'public',
    js : 'js',
    css: 'css',
    sass: 'sass',
    back: 'back',
    front: 'front',
    customJsPath : '',
    customSassPath : ''
 }

 const default_opts = {
     typeLoad : 'basic', // front / back / custom / basic
     recursive : true, // tell how the file finder work
     logger: true, // just logger in v3
     purgeCssOptions : {
         enabled: true // purge css options availables here https://github.com/spatie/laravel-mix-purgecss
     },
     webp: false, // tell if you wants images webp generation for your projet
     webpOptions: { // options of this plugins to generate webp formats https://github.com/imagemin/imagemin-webp
         quality: 70
     },
     mixOverride : (mixInstance) => {} // a hook to surcache mix options like mix.webpackConfig()
  }

  class WpkLoader {
      constructor(opts) {
        typeof opts === 'object' && opts.folders ? this.folders = Object.assign(default_folders, opts.folders) : this.folders = default_folders
        typeof opts === 'object' && opts.options ? this.options = Object.assign(default_opts, opts.options) : this.options = default_opts
        this.paths = {
            jsPath: path.join(this.folders.cwd, this.folders.resources, this.folders.assets, this.folders.js),
            sassPath: path.join(this.folders.cwd, this.folders.resources, this.folders.assets, this.folders.sass),
            destPath: path.join(this.folders.cwd, this.folders.public),
            imagesPath: path.join(this.folders.cwd, this.folders.resources, this.folders.assets, this.folders.images),
            destImagesPath: path.join(this.folders.cwd, this.folders.public, this.folders.images),
            jsPathBack: path.join(this.folders.cwd, this.folders.resources, this.folders.assets, this.folders.js, this.folders.back),
            jsPathFront: path.join(this.folders.cwd, this.folders.resources, this.folders.assets, this.folders.js, this.folders.front),
            sassPathBack: path.join(this.folders.cwd, this.folders.resources, this.folders.assets, this.folders.sass, this.folders.back),
            sassPathFront: path.join(this.folders.cwd, this.folders.resources, this.folders.assets, this.folders.sass, this.folders.front),
            customJsPath: path.join(this.folders.cwd, this.folders.customJsPath),
            customSassPath: path.join(this.folders.cwd, this.folders.customSassPath)
        }
      }
      run() {
          var allLinks = this.assets();
          var linkedFiles =  this.localize(allLinks);
          var label = this.mixWorker(linkedFiles);
      }
      assets() {
        let allLinks = new Array();

        switch (this.options.typeLoad) {
            case 'all':
                allLinks = [this.paths.jsPathBack, this.paths.jsPathFront, this.paths.sassPathBack, this.paths.sassPathFront]
                break;
            case 'front':
                allLinks = [this.paths.jsPathFront, this.paths.sassPathFront]
                break;
            case 'back':
                allLinks = [this.paths.jsPathBack, this.paths.sassPathBack]
                break;
            case 'basic':
                allLinks = [this.paths.jsPath, this.paths.sassPath]
                break;
            case 'custom':
                allLinks = [this.paths.customJsPath, this.paths.customSassPath]
                break;

            default:
                break;
        }

        return allLinks;
      }
      walker(dir, filelist, recursive) {
        var fs = fs || require('fs'),
        files = fs.readdirSync(dir);
        filelist = filelist || [];
        let that = this;
        files = fs.readdirSync(dir);
            filelist = filelist || [];
            files.forEach(function(file) {
                if(recursive != undefined && recursive) {
                    if (fs.statSync(path.join(dir, file)).isDirectory()) {
                        filelist = that.walker(path.join(dir, file), filelist, true);
                    }
                    else {
                        filelist.push(path.join(dir, file));
                    }
                }
                else {
                    var full_path = path.join(dir, file);
                    if(that.isFile(full_path) === true) {
                        filelist.push(path.join(dir, file));
                    }

                }

            });
            //  console.log('debug folder recursive', filelist)
            return filelist;
      }
      isFile(str) {
        let rt = false;
        // // console.log('isFile debug', str)
        var fileSpl = os.platform() != 'win32' ? str.split('/') : str.split('\\');
        var filetoTest = fileSpl[fileSpl.length - 1];
        // console.log('file to test', filetoTest)
        if(filetoTest.endsWith('.js') || filetoTest.endsWith('.sass') || filetoTest.endsWith('.scss')) {
            rt = true;
        }
        return rt;
      }
      getFile(str) {
        //   console.log('hostname os', os.platform())
        var fileSpl =  os.platform() != 'win32' ? str.split('/') : str.split('\\');
        var filetoTest = fileSpl[fileSpl.length - 1];
        return filetoTest;
      }
      getNameFile(str) {
        var fileSpl = str.split('.');
        var filetoTest = fileSpl[0];
        return filetoTest;
      }
      getExt(str) {
        var fileSpl = str.split('.');
        var filetoTest = fileSpl[fileSpl.length - 1];
        return filetoTest;
      }
      isFrontorBack(str) {
          let rt = false;
          if(str.includes(this.folders.back) == true ) {
            rt = this.folders.back;
          }
          if(str.includes(this.folders.front) == true) {
            rt = this.folders.front;
          }
          return rt
      }
      getTheHash(str) {
        let strSpl = str.split('?id=');
        return strSpl[strSpl.length - 1];
      }
      manifestProcess() {
          let mixManifest = path.join(this.folders.public, 'mix-manifest.json');
          var that = this;
          jsonfile.readFile(mixManifest, function (err, obj) {
              // console.log('obj manifest', obj)
              var jsonStr = {};
              for (const key in obj) {
                  if (obj.hasOwnProperty(key)) {
                      const element = obj[key];
                      // console.log('element', element)
                      var file = that.getFile(key);

                      var tmpPath = require('path').dirname(key);

                      var dirSeparator = '/';
                      if(tmpPath.includes("\\")){
                          var dirSeparator = "\\";
                      }

                      var keyInManifest = that.getExt(file)+'.'+tmpPath.substring(tmpPath.indexOf(dirSeparator,2) + 1).replace(/\W/g, ".")+'.'+that.getNameFile(file);

                      if(that.isFrontorBack(element) === that.folders.front || that.isFrontorBack(element) === that.folders.back) {
                          jsonStr[keyInManifest] = { 'file' : key, 'hash': that.getTheHash(element) };
                      }
                      else {
                          jsonStr[''+that.getExt(file) + '.' + that.getNameFile(file)+''] = { 'file' : key, 'hash': that.getTheHash(element) };
                      }
                  }
              }

              jsonfile.writeFile(path.join(that.folders.public, 'mdassets-autoload.json'), jsonStr, {spaces: 2}, function (err) {
                  if (err) console.error(err);
              });
          });
      }
      mixWorker(links) {

        this.options.mixOverride(mix);

        if (!mix.inProduction()) {

            mix.webpackConfig({
                devtool: 'source-map'
            })
            .sourceMaps();
        }


        if(this.options.webp) {
            imagemin(['/'+ this.folders.resources + this.folders.assets + this.folders.images + '/*.{jpg,png}'], path.join(this.folders.public , this.folders.images) , {
                use: [
                    imageminWebp(this.options.webpOptions)
                ]
            }).then(() => {
                console.log('Images optimized');
            });
        }

        console.log('links', links)

        links.forEach((linked) => {
            mix[linked.type === 'js' ? 'js' : 'sass'](linked.pathFile, linked.pathDest).purgeCss(this.options.purgeCssOptions).version()
        })
        mix.then((stats) => {
            this.manifestProcess();
       });

        // console.log('mix', mix);

        return 'Process link completed';

      }
      getPathDest(link) {
        var transformed_link = '';
        var file = this.getFile(link);
        var extension = this.getExt(file);

        var name = this.getNameFile(file);
        extension === 'scss' || extension === 'sass' ? transformed_link = link.replace( path.join(this.folders.resources, this.folders.assets) , path.join(this.folders.public)).replace( file , name+'.'+'css' ) : transformed_link = link.replace( path.join(this.folders.resources, this.folders.assets) , path.join(this.folders.public));
        return transformed_link;
      }
      linkBuilder(links, mode) {
        let builder = [];
            links.forEach((link) => {
                var objToLocatedFile = {};
                // console.log('mode true', link)
                let type = this.fileAnalyser(link);
                let destPath = this.getPathDest(link);
                if(type.compile) {
                    objToLocatedFile.pathFile = link;
                    objToLocatedFile.pathDest = destPath;
                    objToLocatedFile.type = type.mime;
                    if(builder.includes(link) == false) {
                        builder.push(objToLocatedFile);
                    }
                }
            })
        // console.log('link builder ouput', builder)

        return builder;
      }
      localize(links) {
        let that = this;
        if(!links) {
            throw new Error('An array of links must be given');
        }
        let fileLocated = new Array();
        links.forEach((link) => {
            var localFileLocalizated;
            that.options.recursive === true ? localFileLocalizated = this.walker(link, [], true) : localFileLocalizated = this.walker(link, [], false);
            that.options.recursive === true ? this.linkBuilder(localFileLocalizated) : this.linkBuilder(localFileLocalizated);
            Array.prototype.push.apply(fileLocated, this.linkBuilder(localFileLocalizated, true));

        })
        return fileLocated;

      }
      fileAnalyser(link) {
        let rt = {mime: '', compile: ''};
        var fileSpl = os.platform() != 'win32' ? link.split('/') : link.split('\\');
        var file = fileSpl[fileSpl.length - 1];
        if(file.endsWith('.sass') && !file.startsWith('_') || file.endsWith('.scss') && !file.startsWith('_')) {
            rt = { mime : 'sass', compile: true };
        }
        else if(file.endsWith('.sass') && file.startsWith('_') || file.endsWith('.scss') && file.startsWith('_')) {
            rt = { mime : 'sass', compile: false };
        }
        else if(file.endsWith('.js') && !file.startsWith('_')) {
            rt = { mime : 'js', compile: true };
        }
        else if(file.endsWith('.js') && file.startsWith('_')) {
            rt = { mime : 'js', compile: false };
        }
        else if(file === '.DS_Store') {
            rt = { mime : 'system', compile: false };
        }
        else {
            throw new Error('File type is not recognized (File: '+ file +')');
        }
        return rt;
      }
      isDir(pth) {
        let rt = false;
        var stat = fs.lstatSync(pth);
        if(stat.isDirectory()) {
            rt = true;
        }
        return rt;
      }

  }

  module.exports = WpkLoader;
