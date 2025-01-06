<?php

namespace Ikromjon1998\LaravelGermanLicensePlateValidator;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class GermanLicensePlateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register the custom validation rule
        Validator::extend('german_license_plate', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^[A-ZÄÖÜ]{1,3}-[A-Z]{1,2}-[0-9]{1,4}$/', $value);
        });

        Validator::replacer('german_license_plate', function ($message, $attribute, $rule, $parameters) {
            return "The $attribute must be a valid German license plate.";
        });
    }

    public function register()
    {

    }
}
