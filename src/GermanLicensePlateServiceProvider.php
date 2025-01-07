<?php

namespace Ikromjon1998\LaravelGermanLicensePlateValidator;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class GermanLicensePlateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/german_license_plate.php' => config_path('german_license_plate.php'),
        ], 'config');

        Validator::extend('german_license_plate', function ($attribute, $value, $parameters, $validator) {
            $pattern = config('german_license_plate.regex');

            return preg_match("/$pattern/", $value);
        });

        Validator::replacer('german_license_plate', function ($message, $attribute, $rule, $parameters) {
            return $message ?: config('german_license_plate.error_message');
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/german_license_plate.php', 'german_license_plate');
    }
}
