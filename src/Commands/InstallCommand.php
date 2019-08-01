<?php

namespace MediactiveDigital\MedKitThemeLight\Commands;

use Illuminate\Console\Command;


class InstallCommand extends Command
{


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'medkit-theme-light:install';
    protected $description = 'Installation du theme';

    private $pathToPackageRoot = __DIR__ . '/../../';
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

        if (!$this->promptConfirmation || $this->confirm("Confirm installation ?")) {
            $this->line('Copying theme files');
            $this->copyFolder(__DIR__ . '/../../publishable/', base_path());
            $this->line('Theme ready.');
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
}
