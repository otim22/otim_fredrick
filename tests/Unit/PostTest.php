<?php

namespace Tests\Unit;

use App\Post;
use Carbon\Carbon;
use Faker\Factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function testLimitLastMonth()
    {
        $limit = 5;
        factory(Post::class, 6)->create();
        $lastPosts = Post::lastMonth($limit)->get();

        $this->assertEquals($limit, $lastPosts->count());
    }

    public function testGettingOnlyLastMonthPosts()
    {
        $faker = Factory::create();

        // Older Posts
        factory(Post::class, 3)
            ->create()
            ->each(function ($post) use ($faker) {
                $post->posted_at = $faker->dateTimeBetween(carbon('3 months'), carbon('2 months'));
                $post->save();
            });

        // Newer Posts
        factory(Post::class, 3)
            ->create()
            ->each(function ($post) use ($faker) {
                $post->posted_at = $faker->dateTimeBetween(carbon('3 weeks'), carbon('2 weeks'));
                $post->save();
            });

        $isDuringLastMonth = true;
        foreach (Post::lastMonth()->get() as $post) {
            $isDuringLastMonth = $post->posted_at->between(carbon('1 month'), now());

            if (! $isDuringLastMonth) {
                break;
            }
        }

        $this->assertTrue($isDuringLastMonth);
    }

    public function testGettingOnlyLastWeekPosts()
    {
        $faker = Factory::create();

        // Older Posts
        factory(Post::class, 3)
                ->create()
                ->each(function ($post) use ($faker) {
                    $post->posted_at = $faker->dateTimeBetween(carbon('3 months ago'), carbon('2 months ago'));
                    $post->save();
                });

        // Newer Posts
        factory(Post::class, 3)
                ->create()
                ->each(function ($post) use ($faker) {
                    $post->posted_at = $faker->dateTimeBetween(carbon('1 week ago'), now());
                    $post->save();
                });
                
        $isDuringLastWeek = true;
        foreach (Post::lastWeek()->get() as $post) {
            $isDuringLastWeek = $post->posted_at->between(carbon('1 week ago'), now());
            if (! $isDuringLastWeek) {
                break;
            }
        }
        $this->assertTrue($isDuringLastWeek);
    }

    public function testSearch()
    {
        factory(Post::class)->create(['title' => 'Hello Luke']);
        factory(Post::class)->create(['title' => 'Hello Leia']);

        $this->assertCount(0, Post::search('Hi Anakin')->get());
        $this->assertCount(1, Post::search('Hello Lu')->get());
        $this->assertCount(2, Post::search('Hello')->get());
    }

}
