<?php

namespace Tests;

use Faker\Factory;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * @var Faker
     */
    protected $fake;

    /**
     * Setup unit tests
     */
    public function setUp()
    {
        parent::setUp();

        $this->fake = Factory::create();
    }
}
