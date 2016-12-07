<?php

use Illuminate\Database\Seeder;
use App\PostCategory;

class PostCategoriesTableSeeder extends Seeder
{

    public function run()
    {

	DB::table('post_categories')->delete();
	
	PostCategory::create([ 'title' => 'Movies' ]);
	PostCategory::create([ 'title' => 'Sports' ]);
	PostCategory::create([ 'title' => 'Animals' ]);

    }

}