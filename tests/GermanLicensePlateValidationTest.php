<?php

namespace Ikromjon1998\LaravelGermanLicensePlateValidator\Tests;

use Ikromjon1998\LaravelGermanLicensePlateValidator\GermanLicensePlateServiceProvider;
use Illuminate\Support\Facades\Validator;
use Orchestra\Testbench\TestCase;

class GermanLicensePlateValidationTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [GermanLicensePlateServiceProvider::class];
    }

    public function test_valid_german_license_plate()
    {
        $validator = Validator::make(['license_plate' => 'B-MW-123'], [
            'license_plate' => 'german_license_plate',
        ]);

        $this->assertFalse($validator->fails());
    }

    public function test_invalid_german_license_plate()
    {
        $validator = Validator::make(['license_plate' => '123-BMW'], [
            'license_plate' => 'german_license_plate',
        ]);

        $this->assertTrue($validator->fails());
    }
}
