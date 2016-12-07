<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{

	public function run()
	{
	
		DB::table('posts')->delete();
		
		Post::create([ 'title' => 'My First Blog Post', 'post_category_id' => 2, 'slug' => 'my-first-blog', 'post' => 'this is the text for my first post' ]);
		Post::create([ 'title' => 'My 2nd Blog Post', 'post_category_id' => 1, 'slug' => 'my-second-blog', 'post' => 'this is 2nd text for my first post' ]);
	
	}
	

}