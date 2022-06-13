<?php

namespace Theme;

use Theme\Hooks\FilesRegister;
use Theme\Hooks\Supports;

class Setup
{
    public function __construct()
    {
        /**
         * Init
         */
        $this->initAutoload();
        /**
         * Register
         */
        $this->registerHooks();
        $this->registerCPTs();
        $this->registerFields();
    }

    public function initAutoload()
    {
        if (file_exists(ABSPATH . 'vendor/autoload.php')) {
            require_once ABSPATH . 'vendor/autoload.php';
        }

        spl_autoload_register(function (string $class) {
            $path = get_theme_file_path() . '/' . str_replace(['Theme', '\\'], ['app', '/'], $class) . '.php';
            if (file_exists($path)) {
                require_once $path;
            }
        });
    }

    public function registerHooks()
    {
        FilesRegister::add();
        Supports::add();
    }

    public function registerCPTs()
    {

    }

    public function registerFields()
    {
        
    }
}