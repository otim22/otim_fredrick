<?php

namespace Tests\Unit;

use App\Role;
use App\User;
use Faker\Factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function testUserHasRole()
    {
        $user = factory(User::class)->create();
        $role = factory(Role::class)->create();
        $user->roles()->attach($role);

        $this->assertTrue($user->hasRole($role->name));
    }

    public function testUserIsAdmin()
    {
        $admin = factory(User::class)->create();
        $role_editor = factory(Role::class)->states('editor')->create();
        $role_admin = factory(Role::class)->states('admin')->create();

        $admin->roles()->sync([$role_admin->id, $role_editor->id]);

        $this->assertTrue($admin->isAdmin());
    }

    public function testUserIsNotAdmin()
    {
        $user = factory(User::class)->create();
        $user->roles()->attach(
            factory(Role::class)->states('editor')->create()
        );

        $this->assertFalse($user->isAdmin());
    }

    public function testAuthorScope()
    {
        $editor = factory(Role::class)->states('editor')->create();
        factory(User::class, 10)->create();
        factory(User::class, 3)
            ->create()
            ->each(function ($user) use ($editor) {
                $user->roles()->attach($editor);
            });

        $authors = User::authors()->get();

        $hasOnlyAuthors = true;
        foreach ($authors as $author) {
            if (! $author->canBeAuthor()) {
                $hasOnlyAuthors = false;
                break;
            }
        }

        $this->assertTrue($hasOnlyAuthors);
        $this->assertCount(3, $authors);
    }
}
