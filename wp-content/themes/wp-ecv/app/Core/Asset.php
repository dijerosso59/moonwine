<?php

namespace Theme\Core;

class Asset
{
    public static function path($path): string
    {
        return get_template_directory_uri() . '/dist/' . $path;
    }
}