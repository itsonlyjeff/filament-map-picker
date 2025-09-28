<?php

namespace ItsOnlyJeff\FilamentMapPicker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ItsOnlyJeff\FilamentMapPicker\FilamentMapPicker
 */
class FilamentMapPicker extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ItsOnlyJeff\FilamentMapPicker\FilamentMapPicker::class;
    }
}
