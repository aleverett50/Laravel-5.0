@extends('app')

@section('content')

<div class="container">

<h1>View All Posts</h1>

<a class="btn btn-default" href="{{ url('admin/posts/create') }}">Create Blog Post</a>

<br /> <br /> <br /> 

<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    @foreach( $posts as $post )

    
       <tr>
        <td>{{ $post->title }}</td>
        <td><a class="btn btn-default" href="{{ url('admin/posts/'.$post->id.'/edit') }}">Edit</a></td>
      </tr>   	


    @endforeach


    </tbody>
  </table>
</div>

</div>

@endsection