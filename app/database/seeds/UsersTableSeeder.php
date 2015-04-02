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
				'id_user' => '4',
				'firstname' => 'John',
				'lastname' => 'Doe',
				'email' => 'admin@admin.com',
				'password' => '$2y$10$To9p5w5m6IMqiE7J7TkyNuIF/B4bjIaZUWuSsoP.FC9IkThWdWJCO',
				'status' => '1',
				'id_role' => '1',
				'remember_token' => NULL,
				'password_reset' => '$2y$10$.sFCbVKn7/cRy0F3npNp9OGxifI5zb1dFFlBgNhYSQkWsRzWgIgUm',
				'created_at' => '2014-11-05 10:19:49',
				'updated_at' => '2014-11-05 10:19:49',
			),
		));
	}

}
