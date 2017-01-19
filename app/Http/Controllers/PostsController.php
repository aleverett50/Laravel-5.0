<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\PostCategories;

use Illuminate\Http\Request;

class PostsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
		
		return view('posts.index')->withPosts($posts);
	}

	public function indexAdmin()
	{
		$posts = Post::all();
		
		return view('admin.posts')->withPosts($posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	public function category($category)
	{
		
		$posts = Post::whereHas('postCategory', function($q) use ($category)
		
		{

		    $q->whereTitle($category);

		})->get();


		return view('posts.category')->withPosts($posts);

	}

    public function showBlogBySlug($slug)
    {

    	$post = Post::whereSlug($slug)->first();

    	return view('posts.slug')->withPost($post);

    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
