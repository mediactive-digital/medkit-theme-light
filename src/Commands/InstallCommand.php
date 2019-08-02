<?php

namespace MediactiveDigital\MedKitTheme\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class InstallCommand extends Command
{


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'medkit-theme:install {--force}';
    protected $description = 'Installation du theme';

    
    private $promptConfirmation = true;



    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     * @return mixed
     */
    public function handle()
    {

        if (!$this->promptConfirmation || $this->option('force') || $this->confirm("Confirm installation ?")  ) {

            $this->line('--------------------------------');
            $this->line('|   Medkit theme');
            $this->line('--------------------------------');
            $this->line('Copying theme files');
            $this->copyFolder(__DIR__ . '/../../publishable/', base_path());
           

            $this->info('Waiting for NPM ... ');

            $this->doCommand( 'npm install' );
            $this->doCommand('npm run dev');


            $this->info('Theme ready.');
        }
    }





    private function copyFolder($src, $dst)
    {
        $dir = opendir($src);
        @mkdir($dst);
        while (false !== ($file = readdir($dir))) {
            if (($file != '.') && ($file != '..')) {
                if (is_dir($src . '/' . $file)) {
                    $this->copyFolder($src . '/' . $file, $dst . '/' . $file);
                } else {
                    copy($src . '/' . $file, $dst . '/' . $file);
                }
            }
        }
        closedir($dir);
    }



    /**
     * Execute a command
     *
     * @param [type] $command
     * @return void
     */
    private function doCommand($command)
    {
        $process = new Process($command);
        $process->setTimeout(null); // Setting timeout to null to prevent installation from stopping at a certain point in time

        $process->setWorkingDirectory(base_path())->run(function ($type, $buffer) {
            $this->line($buffer);
        });
    }
}
