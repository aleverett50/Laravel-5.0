@extends('app')

@section('content')

<div class="container">

	<h1>Create Blog</h1>


{!! Form::open(array('route' => 'post_create', 'class' => 'form-horizontal')) !!}

<div class="form-group">
{!! Form::label('title', 'Blog Title', ['class' => 'col-md-4 control-label']) !!}
	<div class="col-md-6">
		{!! Form::input('text', 'title', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
{!! Form::label('post', 'Blog Text', ['class' => 'col-md-4 control-label']) !!}
	<div class="col-md-6">
		{!! Form::textarea('post', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">

	<div class="col-md-6 col-md-offset-4"><button type="submit" class="btn btn-default">Submit</button></div>

</div>


{!! Form::close() !!}

</div>


@endsection