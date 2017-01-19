@extends('app')

@section('content')

<div class="container">

	@foreach ($posts as $post)

	<h3>Category: {{ $post->postCategory->title }}</h3>

	<h4>{{ $post->title }} </h4>

	<p>
	  {{ $post->post }} <br /> <br /> 

	  <a href="{{ url('post/'.$post->slug) }}">View</a>

	</p>

	@endforeach



</div>





@endsection