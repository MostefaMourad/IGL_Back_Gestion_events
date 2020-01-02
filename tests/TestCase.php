<?php

namespace Tests;

use Faker\Factory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication , DatabaseMigrations;
    
    public $faker;

    public function setUp():void 
    {

        parent::setUp();
        $this->faker = Factory::create();
    }
}
