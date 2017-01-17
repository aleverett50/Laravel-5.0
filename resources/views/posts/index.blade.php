@extends('app')

@section('content')

<div class="container">

	<h1>Blog Posts</h1>

	@foreach ($posts as $post)

	<h1> {{ $post->postCategory->title }} </h1>

	<h4>{{ $post->title }} - {{ date('d/m/Y', strtotime($post->created_at)) }}</h4>

		<p> {{ $post->post }} </p>

	@endforeach

</div>

@endsection