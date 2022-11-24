<?php

namespace Khoale\CustomfieldLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Khoale\CustomfieldLaravel\CustomfieldLaravel
 */
class CustomfieldLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Khoale\CustomfieldLaravel\CustomfieldLaravel::class;
    }
}
