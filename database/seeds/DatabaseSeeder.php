<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use App\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	// Post::factory(10)->create();
    	$categories = factory(Category::class)->times(20)->create();
    	$tags = factory(Tag::class)->times(20)->create();
    	$posts = factory(Post::class)->times(100)->create();

    	foreach ($posts as $post) {
    		$tagsIds = $tags->random(5)->pluck('id');
    		$post->tags()->attach($tagsIds);
    	}
        // $this->call(UserSeeder::class);
    }
}
