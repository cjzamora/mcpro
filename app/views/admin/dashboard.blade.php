@extends('admin.tpl.main')

@section('meta-title')
	Dashboard
@show
@section('css') {{-- additional css --}}
	@parent
	{{ HTML::style('assets/css/admin/dashboard.css') }}
@show

@section('content')	
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
            @if(Session::get('message'))
              <p class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ Session::get('message') }}
              </p>              
            @endif
        </div>
      </div>
    </div>
@stop

@section('js')
 {{ HTML::script('https://code.jquery.com/jquery-1.10.2.min.js') }}
 {{ HTML::script('assets/js/bootstrap.min.js') }}
 {{ HTML::script('assets/js/docs.min.js') }}
@stop