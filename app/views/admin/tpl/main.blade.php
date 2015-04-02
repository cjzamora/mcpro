<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> @yield('meta-title') </title>
	@section('css')
		{{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}		
	@show

</head>
<body>
        @section('topbar')
		    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		      <div class="container-fluid">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="{{ URL::to('admin/dashboard') }}">Dashboard</a>
		        </div>
		        <div class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
		            <li><a href="{{ URL::to('admin/dashboard') }}">Dashboard</a></li>
		            <li><a href="#">Settings</a></li>
		            <li><a href="#">Profile</a></li>
		            <li><a href="{{ URL::to('admin/logout') }}">Logout</a></li>
		          </ul>
		          <form class="navbar-form navbar-right">
		            <input type="text" class="form-control" placeholder="Search...">
		          </form>
		        </div>
		      </div>
		    </div>
        @show

        <div class="container">
            @yield('content')
        </div>
	@section('js')
	@show
</body>
</html>