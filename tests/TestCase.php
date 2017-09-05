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

    protected function signIn(User $user = null)
    {
        if (!$user instanceof User) {
            $user = factory(User::class)->create();
        }

        $this->be($user);
    }
}
