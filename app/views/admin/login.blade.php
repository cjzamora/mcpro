@extends('admin.tpl.main')

@section('meta-title')
	Login
@show
@section('css') {{-- additional css --}}
	@parent
	{{ HTML::style('assets/css/admin/signin.css') }}
@show
@section('topbar') {{-- hide topbar --}}
@stop

@section('content')
	{{ Form::open(array('url'=>'login', 'role="form" class'=>'form-signin')) }}
	   
		<h2 class="form-signup-heading">Please Login</h2>	
	
		@if($errors->all())
			<ul>
				@foreach($errors->all() as $error)
					<li class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						{{ $error }}
					</li>
				@endforeach
			</ul>
		@endif

		@if(Session::get('success'))
			<p class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				{{ Session::get('success') }}
			</p>
		@elseif(Session::get('error'))
			<p class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				{{ Session::get('error') }}
			</p>
		@endif

		<input type="email" name="email" class="form-control" value="{{ Input::old('email') }}" placeholder="Email address" required autofocus/>
		<input type="password" name="password" class="form-control" placeholder="Password" required />
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	{{ Form::close() }}    
@stop

@section('js')
 {{ HTML::script('https://code.jquery.com/jquery-1.10.2.min.js') }}
 {{ HTML::script('assets/js/bootstrap.min.js') }}
@stop