<?php

namespace Theme\Core\Hookable;

abstract class Hookable implements HookableInterface
{
    public function __construct()
    {
        $this->register();
    }

    public static function add(): Hookable
    {
        return new static();
    }
}