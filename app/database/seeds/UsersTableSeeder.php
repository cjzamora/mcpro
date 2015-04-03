<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->delete();
        
		\DB::table('users')->insert(array (
			0 => 
			array (
				'id_user' => '1',
				'firstname' => 'John',
				'lastname' => 'Doe',
				'email' => 'admin@admin.com',
				'password' => Hash::make('Testing123'),
				'status' => '1',
				'id_role' => '1',
				'remember_token' => NULL,
				'password_reset' => Hash::make('ResetPassWord!!'),
			),
		));
	}

}
