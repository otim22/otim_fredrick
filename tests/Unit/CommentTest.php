<?php

namespace Tests\Unit;

use App\Comment;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Carbon\Carbon;

class CommentTest extends TestCase
{
    use RefreshDatabase;

    public function testPostedAt()
    {
        $comment = factory(Comment::class)->create();

        $this->assertEquals(Carbon::now()->toDayDateTimeString(), $comment->created_at->toDayDateTimeString());
    }

    public function testGettingOnlyLastWeekComments()
    {
        $faker = Factory::create();

        // Older Comments
        factory(Comment::class, 3)
                ->create()
                ->each(function ($comment) use ($faker) {
                        $comment->posted_at = $faker->dateTimeBetween(Carbon::now()->subMonth(2), Carbon::now());

                        $comment->save();
                });

        // Newer Comments
        factory(Comment::class, 3)
                ->create()
                ->each(function ($comment) use ($faker) {
                        $comment->posted_at = $faker->dateTimeBetween(Carbon::now()->subWeek(1), Carbon::now());

                        $comment->save();
                });

        $isDuringLastWeek = true;

        foreach (Comment::lastWeek()->get() as $comment) {
            $isDuringLastWeek = $comment->posted_at->between(Carbon::now()->subWeek(1), Carbon::now());

            if (! $isDuringLastWeek) {
                break;
            }
            
        }

        $this->assertTrue($isDuringLastWeek);
    }
}
