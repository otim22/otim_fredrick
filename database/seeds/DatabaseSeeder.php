<?php

use App\Role;
use App\Post;
use App\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // Roles
        Role::firstOrCreate(['name' => Role::ROLE_EDITOR]);
        $role_admin = Role::firstOrCreate(['name' => Role::ROLE_ADMIN]);

        // Users
        $user = User::firstOrCreate(
            ['email' => 'otim@gmail.com'],
            [
                'name' => 'otim',
                'password' => Hash::make('otim'),
                'email_verified_at' => now()
            ]
         );

         $user->roles()->sync([$role_admin->id]);

         // Posts
         $post = Post::firstOrCreate(
             [
                 'title' => 'Hello world',
                 'author_id' => $user->id
             ],
             [
                 'posted_id' => now(),
                 'content' => "
                    Welcome to Laravel-blog !<br><br>
                    Don't forget to read the README before starting.<br><br>
                    Feel free to add a star on Laravel-blog on Github !<br><br>
                    You can open an issue or (better) a PR if something went wrong."
             ]
          );

          // Comments
          Comment::firstOrCreate(
              [
                  'author_id' => $user->id,
                  'post_id' => $post->id
              ],
              [
                  'posted_id' => now(),
                  'content' => "Hey ! I'm a comment as example."
              ]
          );
          
    }
}
