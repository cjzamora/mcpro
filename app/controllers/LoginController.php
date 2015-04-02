<?php

class LoginController extends BaseController {

	public function __construct()
	{
		$this->layout = 'admin.tpl.main';
	}

	public function index()
	{
		$data['uri'] 			= Request::path();
		$this->layout->content 	= View::make('admin.login', $data);
	}

	public function submit()
	{
		$rules = array(
			'email'=>'required|email',
			'password'=>'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->passes()) :

			if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'), 'status' => 1))) :
				
				$userdata = array(
				    'email'      => Input::get('email'),
				    'password'   => Input::get('password')
				);				
				
				if (Auth::attempt($userdata)) :
					return Redirect::to('admin')->with('message', 'You are now logged in!');
				else: die('2222');
					return Redirect::to('login')->with('error', 'Your email/password combination is incorrect. Please try again.')->withInput(Input::except('password'));
				endif;
			else:
				return Redirect::to('login')->with('error', 'Your Account is disabled. Please contact our customer support.')->withInput(Input::except('password'));
			endif;
		else:
			return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
		endif;
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('login')->with('success', 'Your have been logged out to the application.');
	}

	public function password()
	{
		$this->layout->content 	= View::make('admin.password');
	}

	public function passwordSubmit()
	{
		/*VALIDATE THE EMAIL FIELD*/
		$rules = array(
			'email'			=> 'required|email'
		);

		$validator 				= Validator::make(Input::all(), $rules);

		if ($validator->fails()) :

			return Redirect::to(Request::path())->withErrors($validator);
		else:

			/*CHECK FOR THE VALIDITY OF THE USER IN THE DATABASE*/			
			$count = User::where('email', '=', Input::get('email'))->count();

			/*IF THE USER IS EXISTING, SEND THE EMAIL WITH THE CODE*/
			if( $count > 0 ) :
				
				$token 	= DB::table('users')->where('email', Input::get('email'))->pluck('password_reset');

				$data 	= array('token' => $token);

				Mail::send('emails.auth.reminder', $data, function($message) use ($data)
				{
				    $message->to(Input::get('email'))->subject('Password Reset');
				});
			else:
				return Redirect::to(Request::path())->with('error', 'Sorry, we do not recognize you in our system.');
			endif;
		endif;
	}

	public function password_reset()
	{
		/*VALIDATE IF THE TOKEN IS CREDIBLE*/
		$count = User::where('password_reset', '=', Request::segment(3))->count();

		if( $count > 0 ) :
			$this->layout->content 	= View::make('admin.password_reset');
		else:
			return Redirect::to('login')->with('error', 'Sorry, we do not recognize you in our system.');
		endif;
	}

	public function password_reset_submit()
	{
		/*VALIDATE THE EMAIL FIELD*/
		$rules = array(
			'password'			=> 'required'
		);

		$validator 				= Validator::make(Input::all(), $rules);

		if ($validator->fails()) :
			return Redirect::to(Request::path())->withErrors($validator);
		else:

			//VERIFY THE TOKEN AND PROCESS THE CHANGE PASSWORD
			$count = User::where('password_reset', '=', Input::get('password_reset'))->count();
			
			if( $count > 0 ) :

				DB::table('users')
				            ->where('password_reset', Input::get('password_reset'))
				            ->update(array('password' => Hash::make(Input::get('password'))));				

				return Redirect::to('login')->with('success', 'You have successfully changed your password. Please login now.');
			else:
				return Redirect::to('login')->with('error', 'Sorry, we do not recognize you in our system.');
			endif;		

		endif;
	}
}