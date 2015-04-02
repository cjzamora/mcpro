<?php

class AdminController extends BaseController
{
	protected $layout = "admin.tpl.main";

	public function getIndex()
	{
		$this->layout->content = View::make('admin.dashboard');
	}

	public function getLogin()
	{
		if (Auth::check()) :
			$this->layout->content = View::make('admin.dashboard');
		else :
			return Redirect::to('login')->with('error', 'You need to log in to view this page.');
		endif;
	}

	public function getDashboard()
	{		
		if (Auth::check()) :
			$this->layout->content = View::make('admin.dashboard');
		else :
			return Redirect::to('admin/login')->with('error', 'You need to log in to view this page.');
		endif;
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('admin/login')->with('error', 'Your have been logged out to the application.');
	}	

	public function postRegister() {
		
		$rules = array(
			'email'=>'required|email|unique:users',
			'password'=>'required|alpha_num|between:8,12'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->passes()) :
			$user = User::create(array(
				'email' 	=> Input::get('email'),
				'password' 	=> Hash::make(Input::get('password'))
			));
			return Redirect::to('admin/login')->with('success', 'Thanks for registering! Please log-in now.');
		else :
			return Redirect::to('admin/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		endif;
	}

	public function postLogin()
	{
		die('111');
		$userdata = array(
		    'email'      => Input::get('email'),
		    'password'   => Input::get('password') 
		);		

		if (Auth::attempt($userdata)) :
			return Redirect::intended('admin/dashboard')->with('message', 'You are now logged in!');			
		endif;

		return Redirect::to('admin/login')->with('error', 'Your email/password combination is incorrect. Please try again.')->withInput();
	}	
}