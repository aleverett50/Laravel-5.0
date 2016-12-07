@extends('app')

@section('title', '- Contact Us')

@section('content')

<div class="container">

	<h1>Contact</h1>
	
	@if ( Session::has('success') )
	
	<div class="alert alert-success">
	
		{{ Session::get('success') }}
	
	</div>
	
	@endif
	
  <div class="panel panel-default">
    <div class="panel-heading">Contact Us</div>
    <div class="panel-body">
    
    
 {!! Form::open(array('route' => 'post.contact', 'class' => 'form-horizontal')) !!}
 
 <div class="form-group"> 

	{!! Form::label('name', 'Your Name', ['class' => 'col-md-4 control-label']) !!}

	<div class="col-md-6">

		{!! Form::input('text', 'name', null, ['class' => 'form-control']) !!}

	</div>

</div>

<div class="form-group">

	{!!  Form::label('phone', 'Phone', ['class' => 'col-md-4 control-label'])  !!}
	
	<div class="col-md-6">
	
		{!!  Form::input('text', 'phone', null, ['class' => 'form-control'])  !!}
	
	</div>

</div>

<div class="form-group">

	{!!  Form::label('email', 'Email', ['class' => 'control-label col-md-4'])  !!}
	
	<div class="col-md-6">
	
	{!!  Form::input('email', 'email', null, ['class' => 'form-control']) !!}
	
	</div>
	
</div>

<div class="form-group">

	{!!  Form::label('message', 'Message', ['class' => 'control-label col-md-4'])  !!}
	
	<div class="col-md-6">
	
	{!! Form::textarea('message', null, ['class' => 'form-control', 'rows' => 3]) !!}
	
	</div>

</div>


<div class="form-group">

	<div class="col-md-6 col-md-offset-4"><button type="submit" class="btn btn-default">Submit</button></div>

</div>

{!! Form::close() !!}   
    
    
    </div>
  </div>
	


</div>

@endsection