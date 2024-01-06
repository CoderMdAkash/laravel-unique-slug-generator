<?php
namespace Akash\LaravelUniqueSlug\Facades;
use Illuminate\Support\Facades\Facade;

class UniqueSlug extends Facade
{
    protected static function getFacadeAccessor(): string{
        return 'laravel-unique-slug';
    }
}