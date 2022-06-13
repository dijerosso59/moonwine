<?php

namespace Theme\Hooks;

use Theme\Core\Asset;
use Theme\Core\Hookable\Hookable;

class FilesRegister extends Hookable
{
    public function register()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueueScripts']);
        add_action('admin_enqueue_scripts', [$this, 'enqueueScripts']);
    }

    public function enqueueScripts()
    {
        /*
         * Enqueue scripts
         */
        wp_enqueue_script('theme/app.js', Asset::path('scripts/app.js'), [], null, true);
        wp_enqueue_script('theme/alpine.js', Asset::path('scripts/alpine.js'), [], null, true);
        wp_localize_script('theme/alpine.js', 'ajaxurl',  admin_url( 'admin-ajax.php' ));

        /*
         * Enqueue styles
         */
        wp_enqueue_style('theme/app.css', Asset::path('styles/app.css'), false, null);
    }
}