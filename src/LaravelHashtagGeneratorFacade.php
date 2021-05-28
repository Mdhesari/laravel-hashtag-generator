<?php

namespace Mdhesari\LaravelHashtagGenerator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mdhesari\LaravelHashtagGenerator\LaravelHashtagGenerator
 */
class LaravelHashtagGeneratorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-hashtag-generator';
    }
}
