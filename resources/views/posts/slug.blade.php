@extends('app')

@section('content')

<div class="container">

<h1>{{ $post->title }}</h1>

<h2> {{ $post->postCategory->title }} </h2>

<p>{{ $post->post }}</p>

</div>


@endsection