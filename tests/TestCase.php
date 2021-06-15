<?php

namespace StijnVanouplines\BladeCountryFlags\Tests;

use Orchestra\Testbench;
use BladeUI\Icons\BladeIconsServiceProvider;
use StijnVanouplines\BladeCountryFlags\BladeCountryFlagsServiceProvider;

class TestCase extends Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            BladeIconsServiceProvider::class,
            BladeCountryFlagsServiceProvider::class,
        ];
    }
}