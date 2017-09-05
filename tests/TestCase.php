<?php

namespace Tests;

use App\Models\User;
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

    /**
     * @param null $user
     * @return $this
     */
    protected function signIn($user = null)
    {
        $user = $user ?: create(User::class);

        $this->actingAs($user);

        return $this;
    }
}
