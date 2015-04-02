<?php

class ProvincesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('provinces')->delete();
		
		\DB::table('provinces')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'Abra',
			),
			1 => 
			array (
				'id' => '2',
				'name' => 'Agusan del Norte',
			),
			2 => 
			array (
				'id' => '3',
				'name' => 'Agusan del Sur',
			),
			3 => 
			array (
				'id' => '4',
				'name' => 'Aklan',
			),
			4 => 
			array (
				'id' => '5',
				'name' => 'Albay',
			),
			5 => 
			array (
				'id' => '6',
				'name' => 'Antique',
			),
			6 => 
			array (
				'id' => '7',
				'name' => 'Apayao',
			),
			7 => 
			array (
				'id' => '8',
				'name' => 'Aurora',
			),
			8 => 
			array (
				'id' => '9',
				'name' => 'Basilan',
			),
			9 => 
			array (
				'id' => '10',
				'name' => 'Bataan',
			),
			10 => 
			array (
				'id' => '11',
				'name' => 'Batanes',
			),
			11 => 
			array (
				'id' => '12',
				'name' => 'Batangas',
			),
			12 => 
			array (
				'id' => '13',
				'name' => 'Benguet',
			),
			13 => 
			array (
				'id' => '14',
				'name' => 'Biliran',
			),
			14 => 
			array (
				'id' => '15',
				'name' => 'Bohol',
			),
			15 => 
			array (
				'id' => '16',
				'name' => 'Bukidnon',
			),
			16 => 
			array (
				'id' => '17',
				'name' => 'Bulacan',
			),
			17 => 
			array (
				'id' => '18',
				'name' => 'Cagayan',
			),
			18 => 
			array (
				'id' => '19',
				'name' => 'Camarines Norte',
			),
			19 => 
			array (
				'id' => '20',
				'name' => 'Camarines Sur',
			),
			20 => 
			array (
				'id' => '21',
				'name' => 'Camiguin',
			),
			21 => 
			array (
				'id' => '22',
				'name' => 'Capiz',
			),
			22 => 
			array (
				'id' => '23',
				'name' => 'Catanduanes',
			),
			23 => 
			array (
				'id' => '24',
				'name' => 'Cavite',
			),
			24 => 
			array (
				'id' => '25',
				'name' => 'Cebu',
			),
			25 => 
			array (
				'id' => '26',
				'name' => 'Compostela Valley',
			),
			26 => 
			array (
				'id' => '27',
				'name' => 'Cotabato',
			),
			27 => 
			array (
				'id' => '28',
				'name' => 'Davao del Norte',
			),
			28 => 
			array (
				'id' => '29',
				'name' => 'Davao del Sur',
			),
			29 => 
			array (
				'id' => '30',
				'name' => 'Davao Oriental',
			),
			30 => 
			array (
				'id' => '31',
				'name' => 'Eastern Samar',
			),
			31 => 
			array (
				'id' => '32',
				'name' => 'Guimaras',
			),
			32 => 
			array (
				'id' => '33',
				'name' => 'Ifugao',
			),
			33 => 
			array (
				'id' => '34',
				'name' => 'Ilocos Norte',
			),
			34 => 
			array (
				'id' => '35',
				'name' => 'Ilocos Sur',
			),
			35 => 
			array (
				'id' => '36',
				'name' => 'Iloilo',
			),
			36 => 
			array (
				'id' => '37',
				'name' => 'Isabela',
			),
			37 => 
			array (
				'id' => '38',
				'name' => 'Kalinga',
			),
			38 => 
			array (
				'id' => '39',
				'name' => 'La Union',
			),
			39 => 
			array (
				'id' => '40',
				'name' => 'Laguna',
			),
			40 => 
			array (
				'id' => '41',
				'name' => 'Lanao del Norte',
			),
			41 => 
			array (
				'id' => '42',
				'name' => 'Lanao del Sur',
			),
			42 => 
			array (
				'id' => '43',
				'name' => 'Leyte',
			),
			43 => 
			array (
				'id' => '44',
				'name' => 'Maguindanao',
			),
			44 => 
			array (
				'id' => '45',
				'name' => 'Marinduque',
			),
			45 => 
			array (
				'id' => '46',
				'name' => 'Masbate',
			),
			46 => 
			array (
				'id' => '47',
				'name' => 'Metro Manila',
			),
			47 => 
			array (
				'id' => '48',
				'name' => 'Misamis Occidental',
			),
			48 => 
			array (
				'id' => '49',
				'name' => 'Misamis Oriental',
			),
			49 => 
			array (
				'id' => '50',
				'name' => 'Mountain Province',
			),
			50 => 
			array (
				'id' => '51',
				'name' => 'Negros Occidental',
			),
			51 => 
			array (
				'id' => '52',
				'name' => 'Negros Oriental',
			),
			52 => 
			array (
				'id' => '53',
				'name' => 'Northern Samar',
			),
			53 => 
			array (
				'id' => '54',
				'name' => 'Nueva Ecija',
			),
			54 => 
			array (
				'id' => '55',
				'name' => 'Nueva Vizcaya',
			),
			55 => 
			array (
				'id' => '56',
				'name' => 'Occidental Mindoro',
			),
			56 => 
			array (
				'id' => '57',
				'name' => 'Oriental Mindoro',
			),
			57 => 
			array (
				'id' => '58',
				'name' => 'Palawan',
			),
			58 => 
			array (
				'id' => '59',
				'name' => 'Pampanga',
			),
			59 => 
			array (
				'id' => '60',
				'name' => 'Pangasinan',
			),
			60 => 
			array (
				'id' => '61',
				'name' => 'Quezon',
			),
			61 => 
			array (
				'id' => '62',
				'name' => 'Quirino',
			),
			62 => 
			array (
				'id' => '63',
				'name' => 'Rizal',
			),
			63 => 
			array (
				'id' => '64',
				'name' => 'Romblon',
			),
			64 => 
			array (
				'id' => '65',
				'name' => 'Samar',
			),
			65 => 
			array (
				'id' => '66',
				'name' => 'Sarangani',
			),
			66 => 
			array (
				'id' => '67',
				'name' => 'Siquijor',
			),
			67 => 
			array (
				'id' => '68',
				'name' => 'Sorsogon',
			),
			68 => 
			array (
				'id' => '69',
				'name' => 'South Cotabato',
			),
			69 => 
			array (
				'id' => '70',
				'name' => 'Southern Leyte',
			),
			70 => 
			array (
				'id' => '71',
				'name' => 'Sultan Kudarat',
			),
			71 => 
			array (
				'id' => '72',
				'name' => 'Sulu',
			),
			72 => 
			array (
				'id' => '73',
				'name' => 'Surigao del Norte',
			),
			73 => 
			array (
				'id' => '74',
				'name' => 'Surigao del Sur',
			),
			74 => 
			array (
				'id' => '75',
				'name' => 'Tarlac',
			),
			75 => 
			array (
				'id' => '76',
				'name' => 'Tawi-Tawi',
			),
			76 => 
			array (
				'id' => '77',
				'name' => 'Zambales',
			),
			77 => 
			array (
				'id' => '78',
				'name' => 'Zamboanga del Norte',
			),
			78 => 
			array (
				'id' => '79',
				'name' => 'Zamboanga del Sur',
			),
			79 => 
			array (
				'id' => '80',
				'name' => 'Zamboanga Sibugay',
			),
		));
	}

}
