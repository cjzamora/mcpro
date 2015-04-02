@extends('admin.tpl.main')

@section('meta-title')
	Register
@show
@section('css') {{-- additional css --}}
	@parent
	{{ HTML::style('assets/css/admin/signin.css') }}	
@show
@section('topbar') {{-- hide topbar --}}
@stop

@section('content')
	{{ Form::open(array('url'=>'users/register', 'role="form" class'=>'form-signin')) }}
	   <h2 class="form-signup-heading">Please Register</h2>	
		@if($errors->all())
		<ul>
	      @foreach($errors->all() as $error)
	         <li class="alert alert-danger">{{ $error }}</li>
	      @endforeach
	   </ul>
		@endif

		<input type="email" name="email" class="form-control" placeholder="Email address" required autofocus/>
		<input type="password" name="password" class="form-control" placeholder="Password" required />
		<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
	{{ Form::close() }}    
@stop