// console.log('mix opts', mix);
let wpk = new WebpackConfigLoader({
    options: {
        typeLoad : 'all' // front / back / custom / basic
        // recursive : true, // tell how the file finder work
        // logger: true, // just logger in v3
        // purgeCssOptions : {
        //     enabled: true // purge css options availables here https://github.com/spatie/laravel-mix-purgecss
        // },
        // webp: false, // tell if you wants images webp generation for your projet
        // webpOptions: { // options of this plugins to generate webp formats https://github.com/imagemin/imagemin-webp
        //     quality: 70 
        // },
        // mixOverride : (mixInstance) => {} // a hook to surcache mix options like mix.webpackConfig()
     }
});
wpk.run();