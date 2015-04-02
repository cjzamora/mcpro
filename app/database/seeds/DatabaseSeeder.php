<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
		$this->call('ProvincesTableSeeder');
		$this->call('CitiesTableSeeder');		
		$this->call('UsersTableSeeder');
		$this->call('CityAreaTableSeeder');
		$this->call('BarangayTableSeeder');
	}

}
