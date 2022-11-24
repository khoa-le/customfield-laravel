<?php

namespace Khoale\CustomfieldLaravel\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Khoale\CustomfieldLaravel\CustomfieldLaravelServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Khoale\\CustomfieldLaravel\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            CustomfieldLaravelServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_customfield-laravel_table.php.stub';
        $migration->up();
        */
    }
}
