<?php

namespace Theme\Hooks;

use Theme\Core\Hookable\Hookable;

class Supports extends Hookable
{
    public function register()
    {
        add_action('init', [$this, 'register_theme_supports']);
    }

    public function register_theme_supports()
    {
        add_theme_support('html5');
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
    }
}