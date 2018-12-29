<?php

namespace Tests;

use App\Role;
use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setup()
    {
        parent::setup();
    }

    /**
     * Return an admin user
     * @return User $admin
     */
    protected function admin($overrides = [])
    {
        $admin = $this->user($overides);
        $admin->roles()->attach(
            factory(Role::class)->states('admin')->create()
        );

        return $admin;
    }

    /**
     * Return a user
     * @return User
     */
    protected function user($overrides = [])
    {
        return factory(User::class)->create($overides);
    }

    /**
     * Acting as an admin
     */
    protected function actingAsAdmin($Api = null)
    {
        $this->actingAs($this->admin(), $Api);

        return $this;
    }

    /**
     * Acting as an user
     */
    protected function actingAsUser($Api = null)
    {
        $this->actingAs($this->user(), $Api);

        return $this;
    }
}
