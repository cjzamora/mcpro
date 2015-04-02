<?php

class CityAreaTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('city_area')->delete();
        
		\DB::table('city_area')->insert(array (
			0 => 
			array (
				'id' => 1,
				'id_city' => 1,
				'area' => 'Bangued',
				'zip_code' => 2800,
			),
			1 => 
			array (
				'id' => 2,
				'id_city' => 2,
				'area' => 'Boliney',
				'zip_code' => 2815,
			),
			2 => 
			array (
				'id' => 3,
				'id_city' => 3,
				'area' => 'Bucay',
				'zip_code' => 2805,
			),
			3 => 
			array (
				'id' => 4,
				'id_city' => 4,
				'area' => 'Bucloc',
				'zip_code' => 2817,
			),
			4 => 
			array (
				'id' => 5,
				'id_city' => 5,
				'area' => 'Daguioman',
				'zip_code' => 2816,
			),
			5 => 
			array (
				'id' => 6,
				'id_city' => 6,
				'area' => 'Danglas',
				'zip_code' => 2825,
			),
			6 => 
			array (
				'id' => 7,
				'id_city' => 7,
				'area' => 'Dolores',
				'zip_code' => 2801,
			),
			7 => 
			array (
				'id' => 8,
				'id_city' => 8,
				'area' => 'La Paz',
				'zip_code' => 2826,
			),
			8 => 
			array (
				'id' => 9,
				'id_city' => 9,
				'area' => 'Lacub',
				'zip_code' => 2821,
			),
			9 => 
			array (
				'id' => 10,
				'id_city' => 10,
				'area' => 'Lagangilang',
				'zip_code' => 2802,
			),
			10 => 
			array (
				'id' => 11,
				'id_city' => 11,
				'area' => 'Lagayan',
				'zip_code' => 2824,
			),
			11 => 
			array (
				'id' => 12,
				'id_city' => 12,
				'area' => 'Langiden',
				'zip_code' => 2807,
			),
			12 => 
			array (
				'id' => 13,
				'id_city' => 14,
				'area' => 'Luba',
				'zip_code' => 2813,
			),
			13 => 
			array (
				'id' => 14,
				'id_city' => 15,
				'area' => 'Malibcong',
				'zip_code' => 2820,
			),
			14 => 
			array (
				'id' => 15,
				'id_city' => 16,
				'area' => 'Manabo',
				'zip_code' => 2810,
			),
			15 => 
			array (
				'id' => 16,
				'id_city' => 18,
				'area' => 'Pidigan',
				'zip_code' => 2806,
			),
			16 => 
			array (
				'id' => 17,
				'id_city' => 19,
				'area' => 'Pilar',
				'zip_code' => 2812,
			),
			17 => 
			array (
				'id' => 18,
				'id_city' => 20,
				'area' => 'Sallapadan',
				'zip_code' => 2818,
			),
			18 => 
			array (
				'id' => 19,
				'id_city' => 21,
				'area' => 'San Isidro',
				'zip_code' => 2809,
			),
			19 => 
			array (
				'id' => 20,
				'id_city' => 22,
				'area' => 'San Juan',
				'zip_code' => 2823,
			),
			20 => 
			array (
				'id' => 21,
				'id_city' => 23,
				'area' => 'San Quintin',
				'zip_code' => 2808,
			),
			21 => 
			array (
				'id' => 22,
				'id_city' => 24,
				'area' => 'Tayum',
				'zip_code' => 2803,
			),
			22 => 
			array (
				'id' => 23,
				'id_city' => 25,
				'area' => 'Tineg',
				'zip_code' => 2822,
			),
			23 => 
			array (
				'id' => 24,
				'id_city' => 26,
				'area' => 'Tubo',
				'zip_code' => 2814,
			),
			24 => 
			array (
				'id' => 25,
				'id_city' => 27,
				'area' => 'Villaviciosa',
				'zip_code' => 2811,
			),
			25 => 
			array (
				'id' => 26,
				'id_city' => 28,
				'area' => 'Butuan City',
				'zip_code' => 8600,
			),
			26 => 
			array (
				'id' => 27,
				'id_city' => 29,
				'area' => 'Buenavista',
				'zip_code' => 8601,
			),
			27 => 
			array (
				'id' => 28,
				'id_city' => 31,
				'area' => 'Carmen',
				'zip_code' => 8603,
			),
			28 => 
			array (
				'id' => 29,
				'id_city' => 32,
				'area' => 'Jabonga',
				'zip_code' => 8607,
			),
			29 => 
			array (
				'id' => 30,
				'id_city' => 33,
				'area' => 'Kitcharao',
				'zip_code' => 8609,
			),
			30 => 
			array (
				'id' => 31,
				'id_city' => 34,
				'area' => 'Las Nieves',
				'zip_code' => 8610,
			),
			31 => 
			array (
				'id' => 32,
				'id_city' => 35,
				'area' => 'Magallanes',
				'zip_code' => 8604,
			),
			32 => 
			array (
				'id' => 33,
				'id_city' => 36,
				'area' => 'Nasipit',
				'zip_code' => 8602,
			),
			33 => 
			array (
				'id' => 34,
				'id_city' => 37,
				'area' => 'Remedios T. Romualdez',
				'zip_code' => 8611,
			),
			34 => 
			array (
				'id' => 35,
				'id_city' => 38,
				'area' => 'Santiago',
				'zip_code' => 8608,
			),
			35 => 
			array (
				'id' => 36,
				'id_city' => 39,
				'area' => 'Tubay',
				'zip_code' => 8606,
			),
			36 => 
			array (
				'id' => 37,
				'id_city' => 40,
				'area' => 'Bayugan',
				'zip_code' => 8502,
			),
			37 => 
			array (
				'id' => 38,
				'id_city' => 41,
				'area' => 'Bunawan',
				'zip_code' => 8506,
			),
			38 => 
			array (
				'id' => 39,
				'id_city' => 42,
				'area' => 'Esperanza',
				'zip_code' => 8513,
			),
			39 => 
			array (
				'id' => 40,
				'id_city' => 43,
				'area' => 'La Paz',
				'zip_code' => 8508,
			),
			40 => 
			array (
				'id' => 41,
				'id_city' => 44,
				'area' => 'Loreto',
				'zip_code' => 8507,
			),
			41 => 
			array (
				'id' => 42,
				'id_city' => 45,
				'area' => 'Prosperidad',
				'zip_code' => 8500,
			),
			42 => 
			array (
				'id' => 43,
				'id_city' => 46,
				'area' => 'Rosario',
				'zip_code' => 8504,
			),
			43 => 
			array (
				'id' => 44,
				'id_city' => 47,
				'area' => 'San Francisco',
				'zip_code' => 8501,
			),
			44 => 
			array (
				'id' => 45,
				'id_city' => 48,
				'area' => 'San Luis',
				'zip_code' => 8511,
			),
			45 => 
			array (
				'id' => 46,
				'id_city' => 49,
				'area' => 'Santa Josefa',
				'zip_code' => 8512,
			),
			46 => 
			array (
				'id' => 47,
				'id_city' => 50,
				'area' => 'Sibagat',
				'zip_code' => 8503,
			),
			47 => 
			array (
				'id' => 48,
				'id_city' => 51,
				'area' => 'Talacogon',
				'zip_code' => 8510,
			),
			48 => 
			array (
				'id' => 49,
				'id_city' => 52,
				'area' => 'Trento',
				'zip_code' => 8505,
			),
			49 => 
			array (
				'id' => 50,
				'id_city' => 53,
				'area' => 'Veruela',
				'zip_code' => 8509,
			),
			50 => 
			array (
				'id' => 51,
				'id_city' => 54,
				'area' => 'Altavas',
				'zip_code' => 5616,
			),
			51 => 
			array (
				'id' => 52,
				'id_city' => 55,
				'area' => 'Balete',
				'zip_code' => 5614,
			),
			52 => 
			array (
				'id' => 53,
				'id_city' => 56,
				'area' => 'Banga',
				'zip_code' => 5601,
			),
			53 => 
			array (
				'id' => 54,
				'id_city' => 57,
				'area' => 'Batan',
				'zip_code' => 5615,
			),
			54 => 
			array (
				'id' => 55,
				'id_city' => 58,
				'area' => 'Buruanga',
				'zip_code' => 5609,
			),
			55 => 
			array (
				'id' => 56,
				'id_city' => 59,
				'area' => 'Ibajay',
				'zip_code' => 5613,
			),
			56 => 
			array (
				'id' => 57,
				'id_city' => 60,
				'area' => 'Kalibo',
				'zip_code' => 5600,
			),
			57 => 
			array (
				'id' => 58,
				'id_city' => 61,
				'area' => 'Lezo',
				'zip_code' => 5605,
			),
			58 => 
			array (
				'id' => 59,
				'id_city' => 62,
				'area' => 'Libacao',
				'zip_code' => 5602,
			),
			59 => 
			array (
				'id' => 60,
				'id_city' => 63,
				'area' => 'Madalag',
				'zip_code' => 5603,
			),
			60 => 
			array (
				'id' => 61,
				'id_city' => 64,
				'area' => 'Makato',
				'zip_code' => 5611,
			),
			61 => 
			array (
				'id' => 62,
				'id_city' => 65,
				'area' => 'Malay',
				'zip_code' => 5608,
			),
			62 => 
			array (
				'id' => 63,
				'id_city' => 66,
				'area' => 'Malinao',
				'zip_code' => 5606,
			),
			63 => 
			array (
				'id' => 64,
				'id_city' => 67,
				'area' => 'Nabas',
				'zip_code' => 5607,
			),
			64 => 
			array (
				'id' => 65,
				'id_city' => 68,
				'area' => 'New Washington',
				'zip_code' => 5610,
			),
			65 => 
			array (
				'id' => 66,
				'id_city' => 69,
				'area' => 'Numancia',
				'zip_code' => 5604,
			),
			66 => 
			array (
				'id' => 67,
				'id_city' => 70,
				'area' => 'Tangalan',
				'zip_code' => 5612,
			),
			67 => 
			array (
				'id' => 68,
				'id_city' => 71,
				'area' => 'Legazpi City',
				'zip_code' => 4500,
			),
			68 => 
			array (
				'id' => 69,
				'id_city' => 72,
				'area' => 'Ligao City',
				'zip_code' => 4504,
			),
			69 => 
			array (
				'id' => 70,
				'id_city' => 73,
				'area' => 'Tabaco City',
				'zip_code' => 4511,
			),
			70 => 
			array (
				'id' => 71,
				'id_city' => 74,
				'area' => 'Bacacay',
				'zip_code' => 4509,
			),
			71 => 
			array (
				'id' => 72,
				'id_city' => 75,
				'area' => 'Camalig',
				'zip_code' => 4502,
			),
			72 => 
			array (
				'id' => 73,
				'id_city' => 77,
				'area' => 'Guinobatan',
				'zip_code' => 4503,
			),
			73 => 
			array (
				'id' => 74,
				'id_city' => 78,
				'area' => 'Jovellar',
				'zip_code' => 4515,
			),
			74 => 
			array (
				'id' => 75,
				'id_city' => 79,
				'area' => 'Libon',
				'zip_code' => 4507,
			),
			75 => 
			array (
				'id' => 76,
				'id_city' => 80,
				'area' => 'Malilipot',
				'zip_code' => 4510,
			),
			76 => 
			array (
				'id' => 77,
				'id_city' => 81,
				'area' => 'Malinao',
				'zip_code' => 4512,
			),
			77 => 
			array (
				'id' => 78,
				'id_city' => 82,
				'area' => 'Manito',
				'zip_code' => 4514,
			),
			78 => 
			array (
				'id' => 79,
				'id_city' => 83,
				'area' => 'Oas',
				'zip_code' => 4505,
			),
			79 => 
			array (
				'id' => 80,
				'id_city' => 85,
				'area' => 'Polangui',
				'zip_code' => 4506,
			),
			80 => 
			array (
				'id' => 81,
				'id_city' => 86,
				'area' => 'Rapu-Rapu',
				'zip_code' => 4517,
			),
			81 => 
			array (
				'id' => 82,
				'id_city' => 87,
				'area' => 'Santo Domingo',
				'zip_code' => 4508,
			),
			82 => 
			array (
				'id' => 83,
				'id_city' => 88,
				'area' => 'Tiwi',
				'zip_code' => 4513,
			),
			83 => 
			array (
				'id' => 84,
				'id_city' => 89,
				'area' => 'Anini-y',
				'zip_code' => 5717,
			),
			84 => 
			array (
				'id' => 85,
				'id_city' => 90,
				'area' => 'Barbaza',
				'zip_code' => 5706,
			),
			85 => 
			array (
				'id' => 86,
				'id_city' => 91,
				'area' => 'Belison',
				'zip_code' => 5701,
			),
			86 => 
			array (
				'id' => 87,
				'id_city' => 92,
				'area' => 'Bugasong',
				'zip_code' => 5704,
			),
			87 => 
			array (
				'id' => 88,
				'id_city' => 93,
				'area' => 'Caluya',
				'zip_code' => 5711,
			),
			88 => 
			array (
				'id' => 89,
				'id_city' => 94,
				'area' => 'Culasi',
				'zip_code' => 5708,
			),
			89 => 
			array (
				'id' => 90,
				'id_city' => 95,
				'area' => 'Hamtic',
				'zip_code' => 5715,
			),
			90 => 
			array (
				'id' => 91,
				'id_city' => 96,
				'area' => 'Laua-an',
				'zip_code' => 5705,
			),
			91 => 
			array (
				'id' => 92,
				'id_city' => 97,
				'area' => 'Libertad',
				'zip_code' => 5710,
			),
			92 => 
			array (
				'id' => 93,
				'id_city' => 98,
				'area' => 'Pandan',
				'zip_code' => 5712,
			),
			93 => 
			array (
				'id' => 94,
				'id_city' => 99,
				'area' => 'Patnongon',
				'zip_code' => 5702,
			),
			94 => 
			array (
				'id' => 95,
				'id_city' => 100,
				'area' => 'San Jose',
				'zip_code' => 5700,
			),
			95 => 
			array (
				'id' => 96,
				'id_city' => 101,
				'area' => 'San Remigio',
				'zip_code' => 5714,
			),
			96 => 
			array (
				'id' => 97,
				'id_city' => 102,
				'area' => 'Sebaste',
				'zip_code' => 5709,
			),
			97 => 
			array (
				'id' => 98,
				'id_city' => 103,
				'area' => 'Sibalom',
				'zip_code' => 5713,
			),
			98 => 
			array (
				'id' => 99,
				'id_city' => 104,
				'area' => 'Tibiao',
				'zip_code' => 5707,
			),
			99 => 
			array (
				'id' => 100,
				'id_city' => 106,
				'area' => 'Valderrama',
				'zip_code' => 5703,
			),
			100 => 
			array (
				'id' => 101,
				'id_city' => 108,
				'area' => 'Conner',
				'zip_code' => 3807,
			),
			101 => 
			array (
				'id' => 102,
				'id_city' => 109,
				'area' => 'Flora',
				'zip_code' => 3810,
			),
			102 => 
			array (
				'id' => 103,
				'id_city' => 110,
				'area' => 'Kabugao',
				'zip_code' => 3809,
			),
			103 => 
			array (
				'id' => 104,
				'id_city' => 111,
				'area' => 'Luna',
				'zip_code' => 3813,
			),
			104 => 
			array (
				'id' => 105,
				'id_city' => 112,
				'area' => 'Pudtol',
				'zip_code' => 3812,
			),
			105 => 
			array (
				'id' => 106,
				'id_city' => 113,
				'area' => 'Santa Marcela',
				'zip_code' => 3811,
			),
			106 => 
			array (
				'id' => 107,
				'id_city' => 114,
				'area' => 'Baler',
				'zip_code' => 3200,
			),
			107 => 
			array (
				'id' => 108,
				'id_city' => 115,
				'area' => 'Casiguran',
				'zip_code' => 3204,
			),
			108 => 
			array (
				'id' => 109,
				'id_city' => 116,
				'area' => 'Dilasag',
				'zip_code' => 3205,
			),
			109 => 
			array (
				'id' => 110,
				'id_city' => 117,
				'area' => 'Dinalungan',
				'zip_code' => 3206,
			),
			110 => 
			array (
				'id' => 111,
				'id_city' => 118,
				'area' => 'Dingalan',
				'zip_code' => 3207,
			),
			111 => 
			array (
				'id' => 112,
				'id_city' => 119,
				'area' => 'Dipaculao',
				'zip_code' => 3203,
			),
			112 => 
			array (
				'id' => 113,
				'id_city' => 120,
				'area' => 'Maria Aurora',
				'zip_code' => 3202,
			),
			113 => 
			array (
				'id' => 114,
				'id_city' => 121,
				'area' => 'San Luis',
				'zip_code' => 3201,
			),
			114 => 
			array (
				'id' => 115,
				'id_city' => 122,
				'area' => 'Isabela City',
				'zip_code' => 7300,
			),
			115 => 
			array (
				'id' => 116,
				'id_city' => 128,
				'area' => 'Lantawan',
				'zip_code' => 7301,
			),
			116 => 
			array (
				'id' => 117,
				'id_city' => 129,
				'area' => 'Maluso',
				'zip_code' => 7303,
			),
			117 => 
			array (
				'id' => 118,
				'id_city' => 130,
				'area' => 'Sumisip',
				'zip_code' => 7305,
			),
			118 => 
			array (
				'id' => 119,
				'id_city' => 132,
				'area' => 'Tipo-Tipo',
				'zip_code' => 7304,
			),
			119 => 
			array (
				'id' => 120,
				'id_city' => 133,
				'area' => 'Tuburan',
				'zip_code' => 7306,
			),
			120 => 
			array (
				'id' => 121,
				'id_city' => 135,
				'area' => 'Balanga City',
				'zip_code' => 2100,
			),
			121 => 
			array (
				'id' => 122,
				'id_city' => 136,
				'area' => 'Abucay',
				'zip_code' => 2114,
			),
			122 => 
			array (
				'id' => 123,
				'id_city' => 137,
				'area' => 'Bagac',
				'zip_code' => 2107,
			),
			123 => 
			array (
				'id' => 124,
				'id_city' => 138,
				'area' => 'Dinalupihan',
				'zip_code' => 2110,
			),
			124 => 
			array (
				'id' => 125,
				'id_city' => 139,
				'area' => 'Hermosa',
				'zip_code' => 2111,
			),
			125 => 
			array (
				'id' => 126,
				'id_city' => 140,
				'area' => 'Limay',
				'zip_code' => 2103,
			),
			126 => 
			array (
				'id' => 127,
				'id_city' => 141,
				'area' => 'Mariveles',
				'zip_code' => 2105,
			),
			127 => 
			array (
				'id' => 128,
				'id_city' => 142,
				'area' => 'Morong',
				'zip_code' => 2108,
			),
			128 => 
			array (
				'id' => 129,
				'id_city' => 143,
				'area' => 'Orani',
				'zip_code' => 2112,
			),
			129 => 
			array (
				'id' => 130,
				'id_city' => 144,
				'area' => 'Orion',
				'zip_code' => 2102,
			),
			130 => 
			array (
				'id' => 131,
				'id_city' => 145,
				'area' => 'Pilar',
				'zip_code' => 2101,
			),
			131 => 
			array (
				'id' => 132,
				'id_city' => 146,
				'area' => 'Samal',
				'zip_code' => 2113,
			),
			132 => 
			array (
				'id' => 133,
				'id_city' => 147,
				'area' => 'Basco',
				'zip_code' => 3900,
			),
			133 => 
			array (
				'id' => 134,
				'id_city' => 148,
				'area' => 'Itbayat',
				'zip_code' => 3905,
			),
			134 => 
			array (
				'id' => 135,
				'id_city' => 149,
				'area' => 'Ivana',
				'zip_code' => 3902,
			),
			135 => 
			array (
				'id' => 136,
				'id_city' => 150,
				'area' => 'Mahatao',
				'zip_code' => 3901,
			),
			136 => 
			array (
				'id' => 137,
				'id_city' => 151,
				'area' => 'Sabtang',
				'zip_code' => 3904,
			),
			137 => 
			array (
				'id' => 138,
				'id_city' => 152,
				'area' => 'Uyugan',
				'zip_code' => 3903,
			),
			138 => 
			array (
				'id' => 139,
				'id_city' => 153,
				'area' => 'Batangas City',
				'zip_code' => 4200,
			),
			139 => 
			array (
				'id' => 140,
				'id_city' => 154,
				'area' => 'Lipa City',
				'zip_code' => 4217,
			),
			140 => 
			array (
				'id' => 141,
				'id_city' => 155,
				'area' => 'Tanauan City',
				'zip_code' => 4232,
			),
			141 => 
			array (
				'id' => 142,
				'id_city' => 156,
				'area' => 'Agoncillo',
				'zip_code' => 4211,
			),
			142 => 
			array (
				'id' => 143,
				'id_city' => 157,
				'area' => 'Alitagtag',
				'zip_code' => 4205,
			),
			143 => 
			array (
				'id' => 144,
				'id_city' => 158,
				'area' => 'Balayan',
				'zip_code' => 4213,
			),
			144 => 
			array (
				'id' => 145,
				'id_city' => 159,
				'area' => 'Balete',
				'zip_code' => 4219,
			),
			145 => 
			array (
				'id' => 146,
				'id_city' => 160,
				'area' => 'Bauan',
				'zip_code' => 4201,
			),
			146 => 
			array (
				'id' => 147,
				'id_city' => 161,
				'area' => 'Calaca',
				'zip_code' => 4212,
			),
			147 => 
			array (
				'id' => 148,
				'id_city' => 163,
				'area' => 'Cuenca',
				'zip_code' => 4222,
			),
			148 => 
			array (
				'id' => 149,
				'id_city' => 164,
				'area' => 'Ibaan',
				'zip_code' => 4230,
			),
			149 => 
			array (
				'id' => 150,
				'id_city' => 166,
				'area' => 'Lemery',
				'zip_code' => 4209,
			),
			150 => 
			array (
				'id' => 151,
				'id_city' => 169,
				'area' => 'Mabini',
				'zip_code' => 4202,
			),
			151 => 
			array (
				'id' => 152,
				'id_city' => 170,
				'area' => 'Malvar',
				'zip_code' => 4233,
			),
			152 => 
			array (
				'id' => 153,
				'id_city' => 171,
				'area' => 'Mataas na Kahoy',
				'zip_code' => 4223,
			),
			153 => 
			array (
				'id' => 154,
				'id_city' => 173,
				'area' => 'Padre Garcia',
				'zip_code' => 4224,
			),
			154 => 
			array (
				'id' => 155,
				'id_city' => 174,
				'area' => 'Rosario',
				'zip_code' => 4225,
			),
			155 => 
			array (
				'id' => 156,
				'id_city' => 175,
				'area' => 'San Jose',
				'zip_code' => 4227,
			),
			156 => 
			array (
				'id' => 157,
				'id_city' => 176,
				'area' => 'San Juan',
				'zip_code' => 4226,
			),
			157 => 
			array (
				'id' => 158,
				'id_city' => 177,
				'area' => 'San Luis',
				'zip_code' => 4210,
			),
			158 => 
			array (
				'id' => 159,
				'id_city' => 178,
				'area' => 'San Nicolas',
				'zip_code' => 4207,
			),
			159 => 
			array (
				'id' => 160,
				'id_city' => 179,
				'area' => 'San Pascual',
				'zip_code' => 4204,
			),
			160 => 
			array (
				'id' => 161,
				'id_city' => 180,
				'area' => 'Santa Teresita',
				'zip_code' => 4206,
			),
			161 => 
			array (
				'id' => 162,
				'id_city' => 181,
				'area' => 'Santo Tomas',
				'zip_code' => 4234,
			),
			162 => 
			array (
				'id' => 163,
				'id_city' => 182,
				'area' => 'Taal',
				'zip_code' => 4208,
			),
			163 => 
			array (
				'id' => 164,
				'id_city' => 183,
				'area' => 'Talisay',
				'zip_code' => 4220,
			),
			164 => 
			array (
				'id' => 165,
				'id_city' => 184,
				'area' => 'Taysan',
				'zip_code' => 4228,
			),
			165 => 
			array (
				'id' => 166,
				'id_city' => 185,
				'area' => 'Tingloy',
				'zip_code' => 4203,
			),
			166 => 
			array (
				'id' => 167,
				'id_city' => 186,
				'area' => 'Tuy',
				'zip_code' => 4214,
			),
			167 => 
			array (
				'id' => 168,
				'id_city' => 187,
				'area' => 'Baguio City',
				'zip_code' => 2600,
			),
			168 => 
			array (
				'id' => 169,
				'id_city' => 188,
				'area' => 'Atok',
				'zip_code' => 2612,
			),
			169 => 
			array (
				'id' => 170,
				'id_city' => 189,
				'area' => 'Bakun',
				'zip_code' => 2610,
			),
			170 => 
			array (
				'id' => 171,
				'id_city' => 190,
				'area' => 'Bokod',
				'zip_code' => 2605,
			),
			171 => 
			array (
				'id' => 172,
				'id_city' => 191,
				'area' => 'Buguias',
				'zip_code' => 2607,
			),
			172 => 
			array (
				'id' => 173,
				'id_city' => 192,
				'area' => 'Itogon',
				'zip_code' => 2604,
			),
			173 => 
			array (
				'id' => 174,
				'id_city' => 193,
				'area' => 'Kabayan',
				'zip_code' => 2606,
			),
			174 => 
			array (
				'id' => 175,
				'id_city' => 194,
				'area' => 'Kapangan',
				'zip_code' => 2613,
			),
			175 => 
			array (
				'id' => 176,
				'id_city' => 195,
				'area' => 'Kibungan',
				'zip_code' => 2611,
			),
			176 => 
			array (
				'id' => 177,
				'id_city' => 197,
				'area' => 'Mankayan',
				'zip_code' => 2608,
			),
			177 => 
			array (
				'id' => 178,
				'id_city' => 198,
				'area' => 'Sablan',
				'zip_code' => 2614,
			),
			178 => 
			array (
				'id' => 179,
				'id_city' => 200,
				'area' => 'Tublay',
				'zip_code' => 2615,
			),
			179 => 
			array (
				'id' => 180,
				'id_city' => 201,
				'area' => 'Almeria',
				'zip_code' => 6544,
			),
			180 => 
			array (
				'id' => 181,
				'id_city' => 202,
				'area' => 'Biliran',
				'zip_code' => 6549,
			),
			181 => 
			array (
				'id' => 182,
				'id_city' => 203,
				'area' => 'Cabucgayan',
				'zip_code' => 6550,
			),
			182 => 
			array (
				'id' => 183,
				'id_city' => 204,
				'area' => 'Caibiran',
				'zip_code' => 6548,
			),
			183 => 
			array (
				'id' => 184,
				'id_city' => 205,
				'area' => 'Culaba',
				'zip_code' => 6547,
			),
			184 => 
			array (
				'id' => 185,
				'id_city' => 206,
				'area' => 'Kawayan',
				'zip_code' => 6545,
			),
			185 => 
			array (
				'id' => 186,
				'id_city' => 207,
				'area' => 'Maripipi',
				'zip_code' => 6546,
			),
			186 => 
			array (
				'id' => 187,
				'id_city' => 208,
				'area' => 'Naval',
				'zip_code' => 6543,
			),
			187 => 
			array (
				'id' => 188,
				'id_city' => 209,
				'area' => 'Tagbilaran City',
				'zip_code' => 6300,
			),
			188 => 
			array (
				'id' => 189,
				'id_city' => 210,
				'area' => 'Alburquerque',
				'zip_code' => 6302,
			),
			189 => 
			array (
				'id' => 190,
				'id_city' => 211,
				'area' => 'Alicia',
				'zip_code' => 6314,
			),
			190 => 
			array (
				'id' => 191,
				'id_city' => 212,
				'area' => 'Anda',
				'zip_code' => 6311,
			),
			191 => 
			array (
				'id' => 192,
				'id_city' => 213,
				'area' => 'Antequera',
				'zip_code' => 6335,
			),
			192 => 
			array (
				'id' => 193,
				'id_city' => 214,
				'area' => 'Baclayon',
				'zip_code' => 6301,
			),
			193 => 
			array (
				'id' => 194,
				'id_city' => 215,
				'area' => 'Balilihan',
				'zip_code' => 6342,
			),
			194 => 
			array (
				'id' => 195,
				'id_city' => 216,
				'area' => 'Batuan',
				'zip_code' => 6318,
			),
			195 => 
			array (
				'id' => 196,
				'id_city' => 217,
				'area' => 'Bien Unido',
				'zip_code' => 6326,
			),
			196 => 
			array (
				'id' => 197,
				'id_city' => 218,
				'area' => 'Bilar',
				'zip_code' => 6317,
			),
			197 => 
			array (
				'id' => 198,
				'id_city' => 219,
				'area' => 'Buenavista',
				'zip_code' => 6333,
			),
			198 => 
			array (
				'id' => 199,
				'id_city' => 220,
				'area' => 'Calape',
				'zip_code' => 6328,
			),
			199 => 
			array (
				'id' => 200,
				'id_city' => 221,
				'area' => 'Candijay',
				'zip_code' => 6312,
			),
			200 => 
			array (
				'id' => 201,
				'id_city' => 222,
				'area' => 'Carmen',
				'zip_code' => 6319,
			),
			201 => 
			array (
				'id' => 202,
				'id_city' => 223,
				'area' => 'Catigbian',
				'zip_code' => 6343,
			),
			202 => 
			array (
				'id' => 203,
				'id_city' => 224,
				'area' => 'Clarin',
				'zip_code' => 6330,
			),
			203 => 
			array (
				'id' => 204,
				'id_city' => 225,
				'area' => 'Corella',
				'zip_code' => 6337,
			),
			204 => 
			array (
				'id' => 205,
				'id_city' => 226,
				'area' => 'Cortes',
				'zip_code' => 6341,
			),
			205 => 
			array (
				'id' => 206,
				'id_city' => 227,
				'area' => 'Dagohoy',
				'zip_code' => 6322,
			),
			206 => 
			array (
				'id' => 207,
				'id_city' => 228,
				'area' => 'Danao',
				'zip_code' => 6344,
			),
			207 => 
			array (
				'id' => 208,
				'id_city' => 229,
				'area' => 'Dauis',
				'zip_code' => 6339,
			),
			208 => 
			array (
				'id' => 209,
				'id_city' => 230,
				'area' => 'Dimiao',
				'zip_code' => 6305,
			),
			209 => 
			array (
				'id' => 210,
				'id_city' => 231,
				'area' => 'Duero',
				'zip_code' => 6309,
			),
			210 => 
			array (
				'id' => 211,
				'id_city' => 232,
				'area' => 'Garcia Hernandez',
				'zip_code' => 6307,
			),
			211 => 
			array (
				'id' => 212,
				'id_city' => 234,
				'area' => 'Guindulman',
				'zip_code' => 6310,
			),
			212 => 
			array (
				'id' => 213,
				'id_city' => 235,
				'area' => 'Inabanga',
				'zip_code' => 6332,
			),
			213 => 
			array (
				'id' => 214,
				'id_city' => 236,
				'area' => 'Jagna',
				'zip_code' => 6308,
			),
			214 => 
			array (
				'id' => 215,
				'id_city' => 237,
				'area' => 'Lila',
				'zip_code' => 6304,
			),
			215 => 
			array (
				'id' => 216,
				'id_city' => 238,
				'area' => 'Loay',
				'zip_code' => 6202,
			),
			216 => 
			array (
				'id' => 217,
				'id_city' => 239,
				'area' => 'Loboc',
				'zip_code' => 6316,
			),
			217 => 
			array (
				'id' => 218,
				'id_city' => 240,
				'area' => 'Loon',
				'zip_code' => 6327,
			),
			218 => 
			array (
				'id' => 219,
				'id_city' => 241,
				'area' => 'Mabini',
				'zip_code' => 6313,
			),
			219 => 
			array (
				'id' => 220,
				'id_city' => 242,
				'area' => 'Maribojoc',
				'zip_code' => 6336,
			),
			220 => 
			array (
				'id' => 221,
				'id_city' => 243,
				'area' => 'Panglao',
				'zip_code' => 6340,
			),
			221 => 
			array (
				'id' => 222,
				'id_city' => 244,
				'area' => 'Pilar',
				'zip_code' => 6321,
			),
			222 => 
			array (
				'id' => 223,
				'id_city' => 246,
				'area' => 'Sagbayan',
				'zip_code' => 6331,
			),
			223 => 
			array (
				'id' => 224,
				'id_city' => 247,
				'area' => 'San Isidro',
				'zip_code' => 6345,
			),
			224 => 
			array (
				'id' => 225,
				'id_city' => 248,
				'area' => 'San Miguel',
				'zip_code' => 6323,
			),
			225 => 
			array (
				'id' => 226,
				'id_city' => 249,
				'area' => 'Sevilla',
				'zip_code' => 6347,
			),
			226 => 
			array (
				'id' => 227,
				'id_city' => 250,
				'area' => 'Sierra Bullones',
				'zip_code' => 6320,
			),
			227 => 
			array (
				'id' => 228,
				'id_city' => 251,
				'area' => 'Sikatuna',
				'zip_code' => 6338,
			),
			228 => 
			array (
				'id' => 229,
				'id_city' => 252,
				'area' => 'Talibon',
				'zip_code' => 6325,
			),
			229 => 
			array (
				'id' => 230,
				'id_city' => 253,
				'area' => 'Trinidad',
				'zip_code' => 6324,
			),
			230 => 
			array (
				'id' => 231,
				'id_city' => 254,
				'area' => 'Tubigon',
				'zip_code' => 6329,
			),
			231 => 
			array (
				'id' => 232,
				'id_city' => 255,
				'area' => 'Ubay',
				'zip_code' => 6315,
			),
			232 => 
			array (
				'id' => 233,
				'id_city' => 256,
				'area' => 'Valencia',
				'zip_code' => 6306,
			),
			233 => 
			array (
				'id' => 234,
				'id_city' => 257,
				'area' => 'Malaybalay City',
				'zip_code' => 8700,
			),
			234 => 
			array (
				'id' => 235,
				'id_city' => 258,
				'area' => 'Valencia City',
				'zip_code' => 8709,
			),
			235 => 
			array (
				'id' => 236,
				'id_city' => 259,
				'area' => 'Baungon',
				'zip_code' => 8707,
			),
			236 => 
			array (
				'id' => 237,
				'id_city' => 260,
				'area' => 'Cabanglasan',
				'zip_code' => 8723,
			),
			237 => 
			array (
				'id' => 238,
				'id_city' => 261,
				'area' => 'Damulog',
				'zip_code' => 8721,
			),
			238 => 
			array (
				'id' => 239,
				'id_city' => 262,
				'area' => 'Dangcagan',
				'zip_code' => 8719,
			),
			239 => 
			array (
				'id' => 240,
				'id_city' => 263,
				'area' => 'Don Carlos',
				'zip_code' => 8712,
			),
			240 => 
			array (
				'id' => 241,
				'id_city' => 265,
				'area' => 'Kadingilan',
				'zip_code' => 8713,
			),
			241 => 
			array (
				'id' => 242,
				'id_city' => 266,
				'area' => 'Kalilangan',
				'zip_code' => 8718,
			),
			242 => 
			array (
				'id' => 243,
				'id_city' => 267,
				'area' => 'Kibawe',
				'zip_code' => 8720,
			),
			243 => 
			array (
				'id' => 244,
				'id_city' => 268,
				'area' => 'Kitaotao',
				'zip_code' => 8716,
			),
			244 => 
			array (
				'id' => 245,
				'id_city' => 269,
				'area' => 'Lantapan',
				'zip_code' => 8722,
			),
			245 => 
			array (
				'id' => 246,
				'id_city' => 270,
				'area' => 'Libona',
				'zip_code' => 8706,
			),
			246 => 
			array (
				'id' => 247,
				'id_city' => 271,
				'area' => 'Malitbog',
				'zip_code' => 8704,
			),
			247 => 
			array (
				'id' => 248,
				'id_city' => 272,
				'area' => 'Manolo Fortich',
				'zip_code' => 8703,
			),
			248 => 
			array (
				'id' => 249,
				'id_city' => 273,
				'area' => 'Maramag',
				'zip_code' => 8714,
			),
			249 => 
			array (
				'id' => 250,
				'id_city' => 274,
				'area' => 'Pangantucan',
				'zip_code' => 8717,
			),
			250 => 
			array (
				'id' => 251,
				'id_city' => 275,
				'area' => 'Quezon',
				'zip_code' => 8715,
			),
			251 => 
			array (
				'id' => 252,
				'id_city' => 276,
				'area' => 'San Fernando',
				'zip_code' => 8711,
			),
			252 => 
			array (
				'id' => 253,
				'id_city' => 277,
				'area' => 'Sumilao',
				'zip_code' => 8701,
			),
			253 => 
			array (
				'id' => 254,
				'id_city' => 278,
				'area' => 'Talakag',
				'zip_code' => 8708,
			),
			254 => 
			array (
				'id' => 255,
				'id_city' => 279,
				'area' => 'Malolos City',
				'zip_code' => 3000,
			),
			255 => 
			array (
				'id' => 256,
				'id_city' => 280,
				'area' => 'Meycauayan City',
				'zip_code' => 3020,
			),
			256 => 
			array (
				'id' => 257,
				'id_city' => 281,
				'area' => 'San Jose del Monte City',
				'zip_code' => 3023,
			),
			257 => 
			array (
				'id' => 258,
				'id_city' => 282,
				'area' => 'Angat',
				'zip_code' => 3012,
			),
			258 => 
			array (
				'id' => 259,
				'id_city' => 284,
				'area' => 'Baliuag',
				'zip_code' => 3006,
			),
			259 => 
			array (
				'id' => 260,
				'id_city' => 285,
				'area' => 'Bocaue',
				'zip_code' => 3018,
			),
			260 => 
			array (
				'id' => 261,
				'id_city' => 286,
				'area' => 'Bulacan',
				'zip_code' => 3017,
			),
			261 => 
			array (
				'id' => 262,
				'id_city' => 287,
				'area' => 'Bustos',
				'zip_code' => 3007,
			),
			262 => 
			array (
				'id' => 263,
				'id_city' => 288,
				'area' => 'Calumpit',
				'zip_code' => 3003,
			),
			263 => 
			array (
				'id' => 264,
				'id_city' => 290,
				'area' => 'Guiguinto',
				'zip_code' => 3015,
			),
			264 => 
			array (
				'id' => 265,
				'id_city' => 291,
				'area' => 'Hagonoy',
				'zip_code' => 3002,
			),
			265 => 
			array (
				'id' => 266,
				'id_city' => 292,
				'area' => 'Marilao',
				'zip_code' => 3019,
			),
			266 => 
			array (
				'id' => 267,
				'id_city' => 293,
				'area' => 'Norzagaray',
				'zip_code' => 3013,
			),
			267 => 
			array (
				'id' => 268,
				'id_city' => 294,
				'area' => 'Obando',
				'zip_code' => 3021,
			),
			268 => 
			array (
				'id' => 269,
				'id_city' => 295,
				'area' => 'Pandi',
				'zip_code' => 3014,
			),
			269 => 
			array (
				'id' => 270,
				'id_city' => 296,
				'area' => 'Paombong',
				'zip_code' => 3001,
			),
			270 => 
			array (
				'id' => 271,
				'id_city' => 297,
				'area' => 'Plaridel',
				'zip_code' => 3004,
			),
			271 => 
			array (
				'id' => 272,
				'id_city' => 298,
				'area' => 'Pulilan',
				'zip_code' => 3005,
			),
			272 => 
			array (
				'id' => 273,
				'id_city' => 299,
				'area' => 'San Ildefonso',
				'zip_code' => 3010,
			),
			273 => 
			array (
				'id' => 274,
				'id_city' => 300,
				'area' => 'San Miguel',
				'zip_code' => 3011,
			),
			274 => 
			array (
				'id' => 275,
				'id_city' => 301,
				'area' => 'San Rafael',
				'zip_code' => 3008,
			),
			275 => 
			array (
				'id' => 276,
				'id_city' => 302,
				'area' => 'Santa Maria',
				'zip_code' => 3022,
			),
			276 => 
			array (
				'id' => 277,
				'id_city' => 303,
				'area' => 'Tuguegarao City',
				'zip_code' => 3500,
			),
			277 => 
			array (
				'id' => 278,
				'id_city' => 304,
				'area' => 'Abulug',
				'zip_code' => 3517,
			),
			278 => 
			array (
				'id' => 279,
				'id_city' => 305,
				'area' => 'Alcala',
				'zip_code' => 3507,
			),
			279 => 
			array (
				'id' => 280,
				'id_city' => 306,
				'area' => 'Allacapan',
				'zip_code' => 3523,
			),
			280 => 
			array (
				'id' => 281,
				'id_city' => 307,
				'area' => 'Amulung',
				'zip_code' => 3505,
			),
			281 => 
			array (
				'id' => 282,
				'id_city' => 308,
				'area' => 'Aparri',
				'zip_code' => 3515,
			),
			282 => 
			array (
				'id' => 283,
				'id_city' => 309,
				'area' => 'Baggao',
				'zip_code' => 3506,
			),
			283 => 
			array (
				'id' => 284,
				'id_city' => 310,
				'area' => 'Ballesteros',
				'zip_code' => 3516,
			),
			284 => 
			array (
				'id' => 285,
				'id_city' => 311,
				'area' => 'Buguey',
				'zip_code' => 3511,
			),
			285 => 
			array (
				'id' => 286,
				'id_city' => 312,
				'area' => 'Calayan',
				'zip_code' => 3520,
			),
			286 => 
			array (
				'id' => 287,
				'id_city' => 313,
				'area' => 'Camalaniugan',
				'zip_code' => 3510,
			),
			287 => 
			array (
				'id' => 288,
				'id_city' => 314,
				'area' => 'Claveria',
				'zip_code' => 3519,
			),
			288 => 
			array (
				'id' => 289,
				'id_city' => 315,
				'area' => 'Enrile',
				'zip_code' => 3501,
			),
			289 => 
			array (
				'id' => 290,
				'id_city' => 316,
				'area' => 'Gattaran',
				'zip_code' => 3508,
			),
			290 => 
			array (
				'id' => 291,
				'id_city' => 317,
				'area' => 'Gonzaga',
				'zip_code' => 3513,
			),
			291 => 
			array (
				'id' => 292,
				'id_city' => 318,
				'area' => 'Iguig',
				'zip_code' => 3504,
			),
			292 => 
			array (
				'id' => 293,
				'id_city' => 320,
				'area' => 'Lasam',
				'zip_code' => 3524,
			),
			293 => 
			array (
				'id' => 294,
				'id_city' => 321,
				'area' => 'Pamplona',
				'zip_code' => 3522,
			),
			294 => 
			array (
				'id' => 295,
				'id_city' => 323,
				'area' => 'Piat',
				'zip_code' => 3527,
			),
			295 => 
			array (
				'id' => 296,
				'id_city' => 324,
				'area' => 'Rizal',
				'zip_code' => 3526,
			),
			296 => 
			array (
				'id' => 297,
				'id_city' => 325,
				'area' => 'Sanchez-Mira',
				'zip_code' => 3518,
			),
			297 => 
			array (
				'id' => 298,
				'id_city' => 326,
				'area' => 'Santa Ana',
				'zip_code' => 3514,
			),
			298 => 
			array (
				'id' => 299,
				'id_city' => 327,
				'area' => 'Santa Praxedes',
				'zip_code' => 3521,
			),
			299 => 
			array (
				'id' => 300,
				'id_city' => 328,
				'area' => 'Santa Teresita',
				'zip_code' => 3512,
			),
			300 => 
			array (
				'id' => 301,
				'id_city' => 330,
				'area' => 'Solana',
				'zip_code' => 3503,
			),
			301 => 
			array (
				'id' => 302,
				'id_city' => 331,
				'area' => 'Tuao',
				'zip_code' => 3528,
			),
			302 => 
			array (
				'id' => 303,
				'id_city' => 332,
				'area' => 'Basud',
				'zip_code' => 4608,
			),
			303 => 
			array (
				'id' => 304,
				'id_city' => 333,
				'area' => 'Capalonga',
				'zip_code' => 4607,
			),
			304 => 
			array (
				'id' => 305,
				'id_city' => 334,
				'area' => 'Daet',
				'zip_code' => 4600,
			),
			305 => 
			array (
				'id' => 306,
				'id_city' => 335,
				'area' => 'Jose Panganiban',
				'zip_code' => 4606,
			),
			306 => 
			array (
				'id' => 307,
				'id_city' => 336,
				'area' => 'Labo',
				'zip_code' => 4604,
			),
			307 => 
			array (
				'id' => 308,
				'id_city' => 337,
				'area' => 'Mercedes',
				'zip_code' => 4601,
			),
			308 => 
			array (
				'id' => 309,
				'id_city' => 338,
				'area' => 'Paracale',
				'zip_code' => 4605,
			),
			309 => 
			array (
				'id' => 310,
				'id_city' => 340,
				'area' => 'San Vicente',
				'zip_code' => 4609,
			),
			310 => 
			array (
				'id' => 311,
				'id_city' => 341,
				'area' => 'Santa Elena',
				'zip_code' => 4611,
			),
			311 => 
			array (
				'id' => 312,
				'id_city' => 342,
				'area' => 'Talisay',
				'zip_code' => 4602,
			),
			312 => 
			array (
				'id' => 313,
				'id_city' => 343,
				'area' => 'Vinzons',
				'zip_code' => 4603,
			),
			313 => 
			array (
				'id' => 314,
				'id_city' => 344,
				'area' => 'Iriga City',
				'zip_code' => 4431,
			),
			314 => 
			array (
				'id' => 315,
				'id_city' => 345,
				'area' => 'Naga City',
				'zip_code' => 4400,
			),
			315 => 
			array (
				'id' => 316,
				'id_city' => 346,
				'area' => 'Baao',
				'zip_code' => 4432,
			),
			316 => 
			array (
				'id' => 317,
				'id_city' => 347,
				'area' => 'Balatan',
				'zip_code' => 4436,
			),
			317 => 
			array (
				'id' => 318,
				'id_city' => 348,
				'area' => 'Bato',
				'zip_code' => 4435,
			),
			318 => 
			array (
				'id' => 319,
				'id_city' => 349,
				'area' => 'Bombon',
				'zip_code' => 4404,
			),
			319 => 
			array (
				'id' => 320,
				'id_city' => 350,
				'area' => 'Buhi',
				'zip_code' => 4433,
			),
			320 => 
			array (
				'id' => 321,
				'id_city' => 351,
				'area' => 'Bula',
				'zip_code' => 4430,
			),
			321 => 
			array (
				'id' => 322,
				'id_city' => 352,
				'area' => 'Cabusao',
				'zip_code' => 4406,
			),
			322 => 
			array (
				'id' => 323,
				'id_city' => 353,
				'area' => 'Calabanga',
				'zip_code' => 4405,
			),
			323 => 
			array (
				'id' => 324,
				'id_city' => 354,
				'area' => 'Camaligan',
				'zip_code' => 4401,
			),
			324 => 
			array (
				'id' => 325,
				'id_city' => 355,
				'area' => 'Canaman',
				'zip_code' => 4402,
			),
			325 => 
			array (
				'id' => 326,
				'id_city' => 356,
				'area' => 'Caramoan',
				'zip_code' => 4429,
			),
			326 => 
			array (
				'id' => 327,
				'id_city' => 357,
				'area' => 'Del Gallego',
				'zip_code' => 4411,
			),
			327 => 
			array (
				'id' => 328,
				'id_city' => 358,
				'area' => 'Gainza',
				'zip_code' => 4412,
			),
			328 => 
			array (
				'id' => 329,
				'id_city' => 359,
				'area' => 'Garchitorena',
				'zip_code' => 4428,
			),
			329 => 
			array (
				'id' => 330,
				'id_city' => 360,
				'area' => 'Goa',
				'zip_code' => 4422,
			),
			330 => 
			array (
				'id' => 331,
				'id_city' => 361,
				'area' => 'Lagonoy',
				'zip_code' => 4425,
			),
			331 => 
			array (
				'id' => 332,
				'id_city' => 362,
				'area' => 'Libmanan',
				'zip_code' => 4407,
			),
			332 => 
			array (
				'id' => 333,
				'id_city' => 363,
				'area' => 'Lupi',
				'zip_code' => 4409,
			),
			333 => 
			array (
				'id' => 334,
				'id_city' => 364,
				'area' => 'Magarao',
				'zip_code' => 4403,
			),
			334 => 
			array (
				'id' => 335,
				'id_city' => 365,
				'area' => 'Milaor',
				'zip_code' => 4413,
			),
			335 => 
			array (
				'id' => 336,
				'id_city' => 366,
				'area' => 'Minalabac',
				'zip_code' => 4414,
			),
			336 => 
			array (
				'id' => 337,
				'id_city' => 367,
				'area' => 'Nabua',
				'zip_code' => 4434,
			),
			337 => 
			array (
				'id' => 338,
				'id_city' => 368,
				'area' => 'Ocampo',
				'zip_code' => 4419,
			),
			338 => 
			array (
				'id' => 339,
				'id_city' => 369,
				'area' => 'Pamplona',
				'zip_code' => 4416,
			),
			339 => 
			array (
				'id' => 340,
				'id_city' => 370,
				'area' => 'Pasacao',
				'zip_code' => 4417,
			),
			340 => 
			array (
				'id' => 341,
				'id_city' => 371,
				'area' => 'Pili',
				'zip_code' => 4418,
			),
			341 => 
			array (
				'id' => 342,
				'id_city' => 372,
				'area' => 'Presentacion',
				'zip_code' => 4424,
			),
			342 => 
			array (
				'id' => 343,
				'id_city' => 373,
				'area' => 'Ragay',
				'zip_code' => 4410,
			),
			343 => 
			array (
				'id' => 344,
				'id_city' => 375,
				'area' => 'San Fernando',
				'zip_code' => 4415,
			),
			344 => 
			array (
				'id' => 345,
				'id_city' => 376,
				'area' => 'San Jose',
				'zip_code' => 4423,
			),
			345 => 
			array (
				'id' => 346,
				'id_city' => 377,
				'area' => 'Sipocot',
				'zip_code' => 4408,
			),
			346 => 
			array (
				'id' => 347,
				'id_city' => 378,
				'area' => 'Siruma',
				'zip_code' => 4427,
			),
			347 => 
			array (
				'id' => 348,
				'id_city' => 379,
				'area' => 'Tigaon',
				'zip_code' => 4420,
			),
			348 => 
			array (
				'id' => 349,
				'id_city' => 380,
				'area' => 'Tinambac',
				'zip_code' => 4426,
			),
			349 => 
			array (
				'id' => 350,
				'id_city' => 381,
				'area' => 'Catarman',
				'zip_code' => 9104,
			),
			350 => 
			array (
				'id' => 351,
				'id_city' => 382,
				'area' => 'Guinsiliban',
				'zip_code' => 9102,
			),
			351 => 
			array (
				'id' => 352,
				'id_city' => 383,
				'area' => 'Mahinog',
				'zip_code' => 9101,
			),
			352 => 
			array (
				'id' => 353,
				'id_city' => 384,
				'area' => 'Mambajao',
				'zip_code' => 9100,
			),
			353 => 
			array (
				'id' => 354,
				'id_city' => 385,
				'area' => 'Sagay',
				'zip_code' => 9103,
			),
			354 => 
			array (
				'id' => 355,
				'id_city' => 386,
				'area' => 'Roxas City',
				'zip_code' => 5800,
			),
			355 => 
			array (
				'id' => 356,
				'id_city' => 387,
				'area' => 'Cuartero',
				'zip_code' => 5811,
			),
			356 => 
			array (
				'id' => 357,
				'id_city' => 388,
				'area' => 'Dao',
				'zip_code' => 5810,
			),
			357 => 
			array (
				'id' => 358,
				'id_city' => 389,
				'area' => 'Dumalag',
				'zip_code' => 5813,
			),
			358 => 
			array (
				'id' => 359,
				'id_city' => 390,
				'area' => 'Dumarao',
				'zip_code' => 5812,
			),
			359 => 
			array (
				'id' => 360,
				'id_city' => 391,
				'area' => 'Ivisan',
				'zip_code' => 5805,
			),
			360 => 
			array (
				'id' => 361,
				'id_city' => 392,
				'area' => 'Jamindan',
				'zip_code' => 5808,
			),
			361 => 
			array (
				'id' => 362,
				'id_city' => 393,
				'area' => 'Ma-ayon',
				'zip_code' => 5809,
			),
			362 => 
			array (
				'id' => 363,
				'id_city' => 394,
				'area' => 'Mambusao',
				'zip_code' => 5807,
			),
			363 => 
			array (
				'id' => 364,
				'id_city' => 395,
				'area' => 'Panay',
				'zip_code' => 5801,
			),
			364 => 
			array (
				'id' => 365,
				'id_city' => 396,
				'area' => 'Panitan',
				'zip_code' => 5815,
			),
			365 => 
			array (
				'id' => 366,
				'id_city' => 397,
				'area' => 'Pilar',
				'zip_code' => 5804,
			),
			366 => 
			array (
				'id' => 367,
				'id_city' => 398,
				'area' => 'Pontevedra',
				'zip_code' => 5802,
			),
			367 => 
			array (
				'id' => 368,
				'id_city' => 399,
				'area' => 'President Roxas',
				'zip_code' => 5803,
			),
			368 => 
			array (
				'id' => 369,
				'id_city' => 401,
				'area' => 'Sigma',
				'zip_code' => 5816,
			),
			369 => 
			array (
				'id' => 370,
				'id_city' => 402,
				'area' => 'Tapaz',
				'zip_code' => 5814,
			),
			370 => 
			array (
				'id' => 371,
				'id_city' => 403,
				'area' => 'Bagamanoc',
				'zip_code' => 4807,
			),
			371 => 
			array (
				'id' => 372,
				'id_city' => 404,
				'area' => 'Baras',
				'zip_code' => 4803,
			),
			372 => 
			array (
				'id' => 373,
				'id_city' => 405,
				'area' => 'Bato',
				'zip_code' => 4801,
			),
			373 => 
			array (
				'id' => 374,
				'id_city' => 406,
				'area' => 'Caramoran',
				'zip_code' => 4808,
			),
			374 => 
			array (
				'id' => 375,
				'id_city' => 407,
				'area' => 'Gigmoto',
				'zip_code' => 4804,
			),
			375 => 
			array (
				'id' => 376,
				'id_city' => 408,
				'area' => 'Pandan',
				'zip_code' => 4809,
			),
			376 => 
			array (
				'id' => 377,
				'id_city' => 409,
				'area' => 'Panganiban',
				'zip_code' => 4806,
			),
			377 => 
			array (
				'id' => 378,
				'id_city' => 410,
				'area' => 'San Andres',
				'zip_code' => 4810,
			),
			378 => 
			array (
				'id' => 379,
				'id_city' => 411,
				'area' => 'San Miguel',
				'zip_code' => 4802,
			),
			379 => 
			array (
				'id' => 380,
				'id_city' => 412,
				'area' => 'Viga',
				'zip_code' => 4805,
			),
			380 => 
			array (
				'id' => 381,
				'id_city' => 413,
				'area' => 'Virac',
				'zip_code' => 4800,
			),
			381 => 
			array (
				'id' => 382,
				'id_city' => 414,
				'area' => 'Cavite City',
				'zip_code' => 4100,
			),
			382 => 
			array (
				'id' => 383,
				'id_city' => 416,
				'area' => 'Tagaytay City',
				'zip_code' => 4120,
			),
			383 => 
			array (
				'id' => 384,
				'id_city' => 417,
				'area' => 'Trece Martires City',
				'zip_code' => 4109,
			),
			384 => 
			array (
				'id' => 385,
				'id_city' => 418,
				'area' => 'Alfonso',
				'zip_code' => 4123,
			),
			385 => 
			array (
				'id' => 386,
				'id_city' => 419,
				'area' => 'Amadeo',
				'zip_code' => 4119,
			),
			386 => 
			array (
				'id' => 387,
				'id_city' => 420,
				'area' => 'Bacoor',
				'zip_code' => 4102,
			),
			387 => 
			array (
				'id' => 388,
				'id_city' => 421,
				'area' => 'Carmona',
				'zip_code' => 4116,
			),
			388 => 
			array (
				'id' => 389,
				'id_city' => 422,
				'area' => 'General Mariano Alvarez',
				'zip_code' => 4117,
			),
			389 => 
			array (
				'id' => 390,
				'id_city' => 424,
				'area' => 'General Trias',
				'zip_code' => 4107,
			),
			390 => 
			array (
				'id' => 391,
				'id_city' => 425,
				'area' => 'Imus',
				'zip_code' => 4103,
			),
			391 => 
			array (
				'id' => 392,
				'id_city' => 426,
				'area' => 'Indang',
				'zip_code' => 4122,
			),
			392 => 
			array (
				'id' => 393,
				'id_city' => 427,
				'area' => 'Kawit',
				'zip_code' => 4104,
			),
			393 => 
			array (
				'id' => 394,
				'id_city' => 428,
				'area' => 'Magallanes',
				'zip_code' => 4113,
			),
			394 => 
			array (
				'id' => 395,
				'id_city' => 429,
				'area' => 'Maragondon',
				'zip_code' => 4112,
			),
			395 => 
			array (
				'id' => 396,
				'id_city' => 431,
				'area' => 'Naic',
				'zip_code' => 4110,
			),
			396 => 
			array (
				'id' => 397,
				'id_city' => 432,
				'area' => 'Noveleta',
				'zip_code' => 4105,
			),
			397 => 
			array (
				'id' => 398,
				'id_city' => 433,
				'area' => 'Rosario',
				'zip_code' => 4106,
			),
			398 => 
			array (
				'id' => 399,
				'id_city' => 434,
				'area' => 'Silang',
				'zip_code' => 4118,
			),
			399 => 
			array (
				'id' => 400,
				'id_city' => 435,
				'area' => 'Tanza',
				'zip_code' => 4108,
			),
			400 => 
			array (
				'id' => 401,
				'id_city' => 437,
				'area' => 'Bogo City',
				'zip_code' => 6010,
			),
			401 => 
			array (
				'id' => 402,
				'id_city' => 438,
				'area' => 'Cebu City',
				'zip_code' => 6000,
			),
			402 => 
			array (
				'id' => 403,
				'id_city' => 439,
				'area' => 'Carcar City',
				'zip_code' => 6019,
			),
			403 => 
			array (
				'id' => 404,
				'id_city' => 440,
				'area' => 'Danao City',
				'zip_code' => 6004,
			),
			404 => 
			array (
				'id' => 405,
				'id_city' => 442,
				'area' => 'Mandaue City',
				'zip_code' => 6014,
			),
			405 => 
			array (
				'id' => 406,
				'id_city' => 444,
				'area' => 'Talisay City',
				'zip_code' => 6045,
			),
			406 => 
			array (
				'id' => 407,
				'id_city' => 445,
				'area' => 'Toledo City',
				'zip_code' => 6038,
			),
			407 => 
			array (
				'id' => 408,
				'id_city' => 446,
				'area' => 'Alcantara',
				'zip_code' => 6055,
			),
			408 => 
			array (
				'id' => 409,
				'id_city' => 447,
				'area' => 'Alcoy',
				'zip_code' => 6066,
			),
			409 => 
			array (
				'id' => 410,
				'id_city' => 448,
				'area' => 'Alegria',
				'zip_code' => 6077,
			),
			410 => 
			array (
				'id' => 411,
				'id_city' => 449,
				'area' => 'Aloguinsan',
				'zip_code' => 6088,
			),
			411 => 
			array (
				'id' => 412,
				'id_city' => 450,
				'area' => 'Argao',
				'zip_code' => 6099,
			),
			412 => 
			array (
				'id' => 413,
				'id_city' => 451,
				'area' => 'Asturias',
				'zip_code' => 6010,
			),
			413 => 
			array (
				'id' => 414,
				'id_city' => 452,
				'area' => 'Badian',
				'zip_code' => 6011,
			),
			414 => 
			array (
				'id' => 415,
				'id_city' => 453,
				'area' => 'Balamban',
				'zip_code' => 6041,
			),
			415 => 
			array (
				'id' => 416,
				'id_city' => 454,
				'area' => 'Bantayan',
				'zip_code' => 6052,
			),
			416 => 
			array (
				'id' => 417,
				'id_city' => 455,
				'area' => 'Barili',
				'zip_code' => 6036,
			),
			417 => 
			array (
				'id' => 418,
				'id_city' => 456,
				'area' => 'Boljoon',
				'zip_code' => 6024,
			),
			418 => 
			array (
				'id' => 419,
				'id_city' => 457,
				'area' => 'Borbon',
				'zip_code' => 6008,
			),
			419 => 
			array (
				'id' => 420,
				'id_city' => 458,
				'area' => 'Carmen',
				'zip_code' => 6005,
			),
			420 => 
			array (
				'id' => 421,
				'id_city' => 459,
				'area' => 'Catmon',
				'zip_code' => 6006,
			),
			421 => 
			array (
				'id' => 422,
				'id_city' => 460,
				'area' => 'Compostela',
				'zip_code' => 6003,
			),
			422 => 
			array (
				'id' => 423,
				'id_city' => 461,
				'area' => 'Consolacion',
				'zip_code' => 6001,
			),
			423 => 
			array (
				'id' => 424,
				'id_city' => 463,
				'area' => 'Daanbantayan',
				'zip_code' => 6013,
			),
			424 => 
			array (
				'id' => 425,
				'id_city' => 464,
				'area' => 'Dalaguete',
				'zip_code' => 6022,
			),
			425 => 
			array (
				'id' => 426,
				'id_city' => 465,
				'area' => 'Dumanjug',
				'zip_code' => 6035,
			),
			426 => 
			array (
				'id' => 427,
				'id_city' => 466,
				'area' => 'Ginatilan',
				'zip_code' => 6028,
			),
			427 => 
			array (
				'id' => 428,
				'id_city' => 467,
				'area' => 'Liloan',
				'zip_code' => 6002,
			),
			428 => 
			array (
				'id' => 429,
				'id_city' => 468,
				'area' => 'Madridejos',
				'zip_code' => 6053,
			),
			429 => 
			array (
				'id' => 430,
				'id_city' => 469,
				'area' => 'Malabuyoc',
				'zip_code' => 6029,
			),
			430 => 
			array (
				'id' => 431,
				'id_city' => 470,
				'area' => 'Medellin',
				'zip_code' => 6012,
			),
			431 => 
			array (
				'id' => 432,
				'id_city' => 471,
				'area' => 'Minglanilla',
				'zip_code' => 6046,
			),
			432 => 
			array (
				'id' => 433,
				'id_city' => 472,
				'area' => 'Moalboal',
				'zip_code' => 6032,
			),
			433 => 
			array (
				'id' => 434,
				'id_city' => 473,
				'area' => 'Oslob',
				'zip_code' => 6025,
			),
			434 => 
			array (
				'id' => 435,
				'id_city' => 474,
				'area' => 'Pilar',
				'zip_code' => 6048,
			),
			435 => 
			array (
				'id' => 436,
				'id_city' => 475,
				'area' => 'Pinamungahan',
				'zip_code' => 6039,
			),
			436 => 
			array (
				'id' => 437,
				'id_city' => 476,
				'area' => 'Poro',
				'zip_code' => 6049,
			),
			437 => 
			array (
				'id' => 438,
				'id_city' => 477,
				'area' => 'Ronda',
				'zip_code' => 6034,
			),
			438 => 
			array (
				'id' => 439,
				'id_city' => 478,
				'area' => 'Samboan',
				'zip_code' => 6027,
			),
			439 => 
			array (
				'id' => 440,
				'id_city' => 479,
				'area' => 'San Fernando',
				'zip_code' => 6018,
			),
			440 => 
			array (
				'id' => 441,
				'id_city' => 480,
				'area' => 'San Francisco',
				'zip_code' => 6050,
			),
			441 => 
			array (
				'id' => 442,
				'id_city' => 481,
				'area' => 'San Remigio',
				'zip_code' => 6011,
			),
			442 => 
			array (
				'id' => 443,
				'id_city' => 482,
				'area' => 'Santa Fe',
				'zip_code' => 6047,
			),
			443 => 
			array (
				'id' => 444,
				'id_city' => 483,
				'area' => 'Santander',
				'zip_code' => 6026,
			),
			444 => 
			array (
				'id' => 445,
				'id_city' => 484,
				'area' => 'Sibonga',
				'zip_code' => 6020,
			),
			445 => 
			array (
				'id' => 446,
				'id_city' => 485,
				'area' => 'Sogod',
				'zip_code' => 6007,
			),
			446 => 
			array (
				'id' => 447,
				'id_city' => 486,
				'area' => 'Tabogon',
				'zip_code' => 6009,
			),
			447 => 
			array (
				'id' => 448,
				'id_city' => 487,
				'area' => 'Tabuelan',
				'zip_code' => 6044,
			),
			448 => 
			array (
				'id' => 449,
				'id_city' => 488,
				'area' => 'Tuburan',
				'zip_code' => 6043,
			),
			449 => 
			array (
				'id' => 450,
				'id_city' => 489,
				'area' => 'Tudela',
				'zip_code' => 6051,
			),
			450 => 
			array (
				'id' => 451,
				'id_city' => 490,
				'area' => 'Compostela',
				'zip_code' => 8109,
			),
			451 => 
			array (
				'id' => 452,
				'id_city' => 493,
				'area' => 'Maco',
				'zip_code' => 8114,
			),
			452 => 
			array (
				'id' => 453,
				'id_city' => 495,
				'area' => 'Mawab',
				'zip_code' => 8108,
			),
			453 => 
			array (
				'id' => 454,
				'id_city' => 496,
				'area' => 'Monkayo',
				'zip_code' => 8111,
			),
			454 => 
			array (
				'id' => 455,
				'id_city' => 497,
				'area' => 'Montevista',
				'zip_code' => 8107,
			),
			455 => 
			array (
				'id' => 456,
				'id_city' => 498,
				'area' => 'Nabunturan',
				'zip_code' => 8106,
			),
			456 => 
			array (
				'id' => 457,
				'id_city' => 499,
				'area' => 'New Bataan',
				'zip_code' => 8110,
			),
			457 => 
			array (
				'id' => 458,
				'id_city' => 500,
				'area' => 'Pantukan',
				'zip_code' => 8117,
			),
			458 => 
			array (
				'id' => 459,
				'id_city' => 501,
				'area' => 'Kidapawan City',
				'zip_code' => 9400,
			),
			459 => 
			array (
				'id' => 460,
				'id_city' => 502,
				'area' => 'Alamada',
				'zip_code' => 9413,
			),
			460 => 
			array (
				'id' => 461,
				'id_city' => 503,
				'area' => 'Aleosan',
				'zip_code' => 9415,
			),
			461 => 
			array (
				'id' => 462,
				'id_city' => 504,
				'area' => 'Antipas',
				'zip_code' => 9414,
			),
			462 => 
			array (
				'id' => 463,
				'id_city' => 505,
				'area' => 'Arakan',
				'zip_code' => 9417,
			),
			463 => 
			array (
				'id' => 464,
				'id_city' => 506,
				'area' => 'Banisilan',
				'zip_code' => 9416,
			),
			464 => 
			array (
				'id' => 465,
				'id_city' => 507,
				'area' => 'Carmen',
				'zip_code' => 9408,
			),
			465 => 
			array (
				'id' => 466,
				'id_city' => 508,
				'area' => 'Kabacan',
				'zip_code' => 9407,
			),
			466 => 
			array (
				'id' => 467,
				'id_city' => 509,
				'area' => 'Libungan',
				'zip_code' => 9411,
			),
			467 => 
			array (
				'id' => 468,
				'id_city' => 511,
				'area' => 'Magpet',
				'zip_code' => 9404,
			),
			468 => 
			array (
				'id' => 469,
				'id_city' => 512,
				'area' => 'Makilala',
				'zip_code' => 9401,
			),
			469 => 
			array (
				'id' => 470,
				'id_city' => 513,
				'area' => 'Matalam',
				'zip_code' => 9406,
			),
			470 => 
			array (
				'id' => 471,
				'id_city' => 514,
				'area' => 'Midsayap',
				'zip_code' => 9410,
			),
			471 => 
			array (
				'id' => 472,
				'id_city' => 515,
				'area' => 'Pigkawayan',
				'zip_code' => 9412,
			),
			472 => 
			array (
				'id' => 473,
				'id_city' => 516,
				'area' => 'Pikit',
				'zip_code' => 9409,
			),
			473 => 
			array (
				'id' => 474,
				'id_city' => 517,
				'area' => 'President Roxas',
				'zip_code' => 9405,
			),
			474 => 
			array (
				'id' => 475,
				'id_city' => 518,
				'area' => 'Tulunan',
				'zip_code' => 9403,
			),
			475 => 
			array (
				'id' => 476,
				'id_city' => 519,
				'area' => 'Panabo City',
				'zip_code' => 8105,
			),
			476 => 
			array (
				'id' => 477,
				'id_city' => 520,
				'area' => 'Island Garden City of Samal',
				'zip_code' => 8119,
			),
			477 => 
			array (
				'id' => 478,
				'id_city' => 521,
				'area' => 'Tagum City',
				'zip_code' => 8100,
			),
			478 => 
			array (
				'id' => 479,
				'id_city' => 522,
				'area' => 'Asuncion',
				'zip_code' => 8102,
			),
			479 => 
			array (
				'id' => 480,
				'id_city' => 524,
				'area' => 'Carmen',
				'zip_code' => 8101,
			),
			480 => 
			array (
				'id' => 481,
				'id_city' => 525,
				'area' => 'Kapalong',
				'zip_code' => 8113,
			),
			481 => 
			array (
				'id' => 482,
				'id_city' => 526,
				'area' => 'New Corella',
				'zip_code' => 8104,
			),
			482 => 
			array (
				'id' => 483,
				'id_city' => 528,
				'area' => 'Santo Tomas',
				'zip_code' => 8112,
			),
			483 => 
			array (
				'id' => 484,
				'id_city' => 530,
				'area' => 'Davao City',
				'zip_code' => 8000,
			),
			484 => 
			array (
				'id' => 485,
				'id_city' => 531,
				'area' => 'Digos City',
				'zip_code' => 8002,
			),
			485 => 
			array (
				'id' => 486,
				'id_city' => 532,
				'area' => 'Bansalan',
				'zip_code' => 8005,
			),
			486 => 
			array (
				'id' => 487,
				'id_city' => 533,
				'area' => 'Don Marcelino',
				'zip_code' => 8013,
			),
			487 => 
			array (
				'id' => 488,
				'id_city' => 534,
				'area' => 'Hagonoy',
				'zip_code' => 8006,
			),
			488 => 
			array (
				'id' => 489,
				'id_city' => 535,
				'area' => 'Jose Abad Santos',
				'zip_code' => 8014,
			),
			489 => 
			array (
				'id' => 490,
				'id_city' => 536,
				'area' => 'Kiblawan',
				'zip_code' => 8008,
			),
			490 => 
			array (
				'id' => 491,
				'id_city' => 537,
				'area' => 'Magsaysay',
				'zip_code' => 8004,
			),
			491 => 
			array (
				'id' => 492,
				'id_city' => 538,
				'area' => 'Malalag',
				'zip_code' => 8010,
			),
			492 => 
			array (
				'id' => 493,
				'id_city' => 539,
				'area' => 'Malita',
				'zip_code' => 8012,
			),
			493 => 
			array (
				'id' => 494,
				'id_city' => 540,
				'area' => 'Matanao',
				'zip_code' => 8003,
			),
			494 => 
			array (
				'id' => 495,
				'id_city' => 541,
				'area' => 'Padada',
				'zip_code' => 8007,
			),
			495 => 
			array (
				'id' => 496,
				'id_city' => 542,
				'area' => 'Santa Cruz',
				'zip_code' => 8001,
			),
			496 => 
			array (
				'id' => 497,
				'id_city' => 543,
				'area' => 'Santa Maria',
				'zip_code' => 8011,
			),
			497 => 
			array (
				'id' => 498,
				'id_city' => 544,
				'area' => 'Sarangani',
				'zip_code' => 8015,
			),
			498 => 
			array (
				'id' => 499,
				'id_city' => 545,
				'area' => 'Sulop',
				'zip_code' => 8009,
			),
			499 => 
			array (
				'id' => 500,
				'id_city' => 557,
				'area' => 'Arteche',
				'zip_code' => 6822,
			),
		));
		\DB::table('city_area')->insert(array (
			0 => 
			array (
				'id' => 501,
				'id_city' => 558,
				'area' => 'Balangiga',
				'zip_code' => 6812,
			),
			1 => 
			array (
				'id' => 502,
				'id_city' => 559,
				'area' => 'Balangkayan',
				'zip_code' => 6801,
			),
			2 => 
			array (
				'id' => 503,
				'id_city' => 560,
				'area' => 'Borongan',
				'zip_code' => 6800,
			),
			3 => 
			array (
				'id' => 504,
				'id_city' => 561,
				'area' => 'Can-avid',
				'zip_code' => 6806,
			),
			4 => 
			array (
				'id' => 505,
				'id_city' => 562,
				'area' => 'Dolores',
				'zip_code' => 6817,
			),
			5 => 
			array (
				'id' => 506,
				'id_city' => 563,
				'area' => 'General MacArthur',
				'zip_code' => 6805,
			),
			6 => 
			array (
				'id' => 507,
				'id_city' => 564,
				'area' => 'Giporlos',
				'zip_code' => 6811,
			),
			7 => 
			array (
				'id' => 508,
				'id_city' => 565,
				'area' => 'Guiuan',
				'zip_code' => 6809,
			),
			8 => 
			array (
				'id' => 509,
				'id_city' => 566,
				'area' => 'Hernani',
				'zip_code' => 6804,
			),
			9 => 
			array (
				'id' => 510,
				'id_city' => 567,
				'area' => 'Jipapad',
				'zip_code' => 6819,
			),
			10 => 
			array (
				'id' => 511,
				'id_city' => 568,
				'area' => 'Lawaan',
				'zip_code' => 6813,
			),
			11 => 
			array (
				'id' => 512,
				'id_city' => 569,
				'area' => 'Llorente',
				'zip_code' => 6803,
			),
			12 => 
			array (
				'id' => 513,
				'id_city' => 570,
				'area' => 'Maslog',
				'zip_code' => 6820,
			),
			13 => 
			array (
				'id' => 514,
				'id_city' => 571,
				'area' => 'Maydolong',
				'zip_code' => 6802,
			),
			14 => 
			array (
				'id' => 515,
				'id_city' => 572,
				'area' => 'Mercedes',
				'zip_code' => 6808,
			),
			15 => 
			array (
				'id' => 516,
				'id_city' => 573,
				'area' => 'Oras',
				'zip_code' => 6818,
			),
			16 => 
			array (
				'id' => 517,
				'id_city' => 574,
				'area' => 'Quinapondan',
				'zip_code' => 6810,
			),
			17 => 
			array (
				'id' => 518,
				'id_city' => 575,
				'area' => 'Salcedo',
				'zip_code' => 6807,
			),
			18 => 
			array (
				'id' => 519,
				'id_city' => 576,
				'area' => 'San Julian',
				'zip_code' => 6814,
			),
			19 => 
			array (
				'id' => 520,
				'id_city' => 577,
				'area' => 'San Policarpo',
				'zip_code' => 6821,
			),
			20 => 
			array (
				'id' => 521,
				'id_city' => 578,
				'area' => 'Sulat',
				'zip_code' => 6815,
			),
			21 => 
			array (
				'id' => 522,
				'id_city' => 579,
				'area' => 'Taft',
				'zip_code' => 6816,
			),
			22 => 
			array (
				'id' => 523,
				'id_city' => 580,
				'area' => 'Buenavista',
				'zip_code' => 5044,
			),
			23 => 
			array (
				'id' => 524,
				'id_city' => 581,
				'area' => 'Jordan',
				'zip_code' => 5045,
			),
			24 => 
			array (
				'id' => 525,
				'id_city' => 582,
				'area' => 'Nueva Valencia',
				'zip_code' => 5046,
			),
			25 => 
			array (
				'id' => 526,
				'id_city' => 583,
				'area' => 'San Lorenzo',
				'zip_code' => 5047,
			),
			26 => 
			array (
				'id' => 527,
				'id_city' => 584,
				'area' => 'Sibunag',
				'zip_code' => 5048,
			),
			27 => 
			array (
				'id' => 528,
				'id_city' => 585,
				'area' => 'Aguinaldo',
				'zip_code' => 3606,
			),
			28 => 
			array (
				'id' => 529,
				'id_city' => 587,
				'area' => 'Asipulo',
				'zip_code' => 3610,
			),
			29 => 
			array (
				'id' => 530,
				'id_city' => 588,
				'area' => 'Banaue',
				'zip_code' => 3601,
			),
			30 => 
			array (
				'id' => 531,
				'id_city' => 589,
				'area' => 'Hingyon',
				'zip_code' => 3607,
			),
			31 => 
			array (
				'id' => 532,
				'id_city' => 590,
				'area' => 'Hungduan',
				'zip_code' => 3603,
			),
			32 => 
			array (
				'id' => 533,
				'id_city' => 591,
				'area' => 'Kiangan',
				'zip_code' => 3604,
			),
			33 => 
			array (
				'id' => 534,
				'id_city' => 592,
				'area' => 'Lagawe',
				'zip_code' => 3600,
			),
			34 => 
			array (
				'id' => 535,
				'id_city' => 593,
				'area' => 'Lamut',
				'zip_code' => 3605,
			),
			35 => 
			array (
				'id' => 536,
				'id_city' => 595,
				'area' => 'Tinoc',
				'zip_code' => 3609,
			),
			36 => 
			array (
				'id' => 537,
				'id_city' => 597,
				'area' => 'Laoag City',
				'zip_code' => 2900,
			),
			37 => 
			array (
				'id' => 538,
				'id_city' => 598,
				'area' => 'Adams',
				'zip_code' => 2922,
			),
			38 => 
			array (
				'id' => 539,
				'id_city' => 599,
				'area' => 'Bacarra',
				'zip_code' => 2916,
			),
			39 => 
			array (
				'id' => 540,
				'id_city' => 600,
				'area' => 'Badoc',
				'zip_code' => 2904,
			),
			40 => 
			array (
				'id' => 541,
				'id_city' => 601,
				'area' => 'Bangui',
				'zip_code' => 2920,
			),
			41 => 
			array (
				'id' => 542,
				'id_city' => 603,
				'area' => 'Burgos',
				'zip_code' => 2918,
			),
			42 => 
			array (
				'id' => 543,
				'id_city' => 604,
				'area' => 'Carasi',
				'zip_code' => 2911,
			),
			43 => 
			array (
				'id' => 544,
				'id_city' => 605,
				'area' => 'Currimao',
				'zip_code' => 2903,
			),
			44 => 
			array (
				'id' => 545,
				'id_city' => 606,
				'area' => 'Dingras',
				'zip_code' => 2913,
			),
			45 => 
			array (
				'id' => 546,
				'id_city' => 607,
				'area' => 'Dumalneg',
				'zip_code' => 2921,
			),
			46 => 
			array (
				'id' => 547,
				'id_city' => 608,
				'area' => 'Marcos',
				'zip_code' => 2907,
			),
			47 => 
			array (
				'id' => 548,
				'id_city' => 609,
				'area' => 'Nueva Era',
				'zip_code' => 2909,
			),
			48 => 
			array (
				'id' => 549,
				'id_city' => 610,
				'area' => 'Pagudpud',
				'zip_code' => 2919,
			),
			49 => 
			array (
				'id' => 550,
				'id_city' => 611,
				'area' => 'Paoay',
				'zip_code' => 2902,
			),
			50 => 
			array (
				'id' => 551,
				'id_city' => 612,
				'area' => 'Pasuquin',
				'zip_code' => 2917,
			),
			51 => 
			array (
				'id' => 552,
				'id_city' => 613,
				'area' => 'Piddig',
				'zip_code' => 2912,
			),
			52 => 
			array (
				'id' => 553,
				'id_city' => 614,
				'area' => 'Pinili',
				'zip_code' => 2905,
			),
			53 => 
			array (
				'id' => 554,
				'id_city' => 615,
				'area' => 'San Nicolas',
				'zip_code' => 2901,
			),
			54 => 
			array (
				'id' => 555,
				'id_city' => 616,
				'area' => 'Sarrat',
				'zip_code' => 2914,
			),
			55 => 
			array (
				'id' => 556,
				'id_city' => 617,
				'area' => 'Solsona',
				'zip_code' => 2910,
			),
			56 => 
			array (
				'id' => 557,
				'id_city' => 618,
				'area' => 'Vintar',
				'zip_code' => 2915,
			),
			57 => 
			array (
				'id' => 558,
				'id_city' => 619,
				'area' => 'Candon City',
				'zip_code' => 2710,
			),
			58 => 
			array (
				'id' => 559,
				'id_city' => 620,
				'area' => 'Vigan City',
				'zip_code' => 2700,
			),
			59 => 
			array (
				'id' => 560,
				'id_city' => 621,
				'area' => 'Alilem',
				'zip_code' => 2716,
			),
			60 => 
			array (
				'id' => 561,
				'id_city' => 622,
				'area' => 'Banayoyo',
				'zip_code' => 2708,
			),
			61 => 
			array (
				'id' => 562,
				'id_city' => 623,
				'area' => 'Bantay',
				'zip_code' => 2727,
			),
			62 => 
			array (
				'id' => 563,
				'id_city' => 624,
				'area' => 'Burgos',
				'zip_code' => 2724,
			),
			63 => 
			array (
				'id' => 564,
				'id_city' => 625,
				'area' => 'Cabugao',
				'zip_code' => 2732,
			),
			64 => 
			array (
				'id' => 565,
				'id_city' => 626,
				'area' => 'Caoayan',
				'zip_code' => 2702,
			),
			65 => 
			array (
				'id' => 566,
				'id_city' => 627,
				'area' => 'Cervantes',
				'zip_code' => 2718,
			),
			66 => 
			array (
				'id' => 567,
				'id_city' => 628,
				'area' => 'Galimuyod',
				'zip_code' => 2709,
			),
			67 => 
			array (
				'id' => 568,
				'id_city' => 630,
				'area' => 'Lidlidda',
				'zip_code' => 2723,
			),
			68 => 
			array (
				'id' => 569,
				'id_city' => 631,
				'area' => 'Magsingal',
				'zip_code' => 2730,
			),
			69 => 
			array (
				'id' => 570,
				'id_city' => 632,
				'area' => 'Nagbukel',
				'zip_code' => 2725,
			),
			70 => 
			array (
				'id' => 571,
				'id_city' => 633,
				'area' => 'Narvacan',
				'zip_code' => 2704,
			),
			71 => 
			array (
				'id' => 572,
				'id_city' => 636,
				'area' => 'San Emilio',
				'zip_code' => 2722,
			),
			72 => 
			array (
				'id' => 573,
				'id_city' => 637,
				'area' => 'San Esteban',
				'zip_code' => 2706,
			),
			73 => 
			array (
				'id' => 574,
				'id_city' => 638,
				'area' => 'San Ildefonso',
				'zip_code' => 2728,
			),
			74 => 
			array (
				'id' => 575,
				'id_city' => 640,
				'area' => 'San Vicente',
				'zip_code' => 2726,
			),
			75 => 
			array (
				'id' => 576,
				'id_city' => 641,
				'area' => 'Santa',
				'zip_code' => 2703,
			),
			76 => 
			array (
				'id' => 577,
				'id_city' => 642,
				'area' => 'Santa Catalina',
				'zip_code' => 2701,
			),
			77 => 
			array (
				'id' => 578,
				'id_city' => 643,
				'area' => 'Santa Cruz',
				'zip_code' => 2713,
			),
			78 => 
			array (
				'id' => 579,
				'id_city' => 644,
				'area' => 'Santa Lucia',
				'zip_code' => 2712,
			),
			79 => 
			array (
				'id' => 580,
				'id_city' => 645,
				'area' => 'Santa Maria',
				'zip_code' => 2705,
			),
			80 => 
			array (
				'id' => 581,
				'id_city' => 646,
				'area' => 'Santiago',
				'zip_code' => 2707,
			),
			81 => 
			array (
				'id' => 582,
				'id_city' => 647,
				'area' => 'Santo Domingo',
				'zip_code' => 2729,
			),
			82 => 
			array (
				'id' => 583,
				'id_city' => 648,
				'area' => 'Sigay',
				'zip_code' => 2719,
			),
			83 => 
			array (
				'id' => 584,
				'id_city' => 649,
				'area' => 'Sinait',
				'zip_code' => 2733,
			),
			84 => 
			array (
				'id' => 585,
				'id_city' => 650,
				'area' => 'Sugpon',
				'zip_code' => 2717,
			),
			85 => 
			array (
				'id' => 586,
				'id_city' => 651,
				'area' => 'Suyo',
				'zip_code' => 2715,
			),
			86 => 
			array (
				'id' => 587,
				'id_city' => 652,
				'area' => 'Tagudin',
				'zip_code' => 2714,
			),
			87 => 
			array (
				'id' => 588,
				'id_city' => 653,
				'area' => 'Iloilo City',
				'zip_code' => 5000,
			),
			88 => 
			array (
				'id' => 589,
				'id_city' => 654,
				'area' => 'Passi City',
				'zip_code' => 5037,
			),
			89 => 
			array (
				'id' => 590,
				'id_city' => 655,
				'area' => 'Ajuy',
				'zip_code' => 5012,
			),
			90 => 
			array (
				'id' => 591,
				'id_city' => 656,
				'area' => 'Alimodian',
				'zip_code' => 5028,
			),
			91 => 
			array (
				'id' => 592,
				'id_city' => 657,
				'area' => 'Anilao',
				'zip_code' => 5009,
			),
			92 => 
			array (
				'id' => 593,
				'id_city' => 658,
				'area' => 'Badiangan',
				'zip_code' => 5033,
			),
			93 => 
			array (
				'id' => 594,
				'id_city' => 659,
				'area' => 'Balasan',
				'zip_code' => 5018,
			),
			94 => 
			array (
				'id' => 595,
				'id_city' => 660,
				'area' => 'Banate',
				'zip_code' => 5010,
			),
			95 => 
			array (
				'id' => 596,
				'id_city' => 663,
				'area' => 'Batad',
				'zip_code' => 5016,
			),
			96 => 
			array (
				'id' => 597,
				'id_city' => 664,
				'area' => 'Bingawan',
				'zip_code' => 5041,
			),
			97 => 
			array (
				'id' => 598,
				'id_city' => 665,
				'area' => 'Cabatuan',
				'zip_code' => 5031,
			),
			98 => 
			array (
				'id' => 599,
				'id_city' => 666,
				'area' => 'Calinog',
				'zip_code' => 5040,
			),
			99 => 
			array (
				'id' => 600,
				'id_city' => 667,
				'area' => 'Carles',
				'zip_code' => 5019,
			),
			100 => 
			array (
				'id' => 601,
				'id_city' => 668,
				'area' => 'Concepcion',
				'zip_code' => 5013,
			),
			101 => 
			array (
				'id' => 602,
				'id_city' => 669,
				'area' => 'Dingle',
				'zip_code' => 5035,
			),
			102 => 
			array (
				'id' => 603,
				'id_city' => 671,
				'area' => 'Dumangas',
				'zip_code' => 5006,
			),
			103 => 
			array (
				'id' => 604,
				'id_city' => 672,
				'area' => 'Estancia',
				'zip_code' => 5017,
			),
			104 => 
			array (
				'id' => 605,
				'id_city' => 673,
				'area' => 'Guimbal',
				'zip_code' => 5022,
			),
			105 => 
			array (
				'id' => 606,
				'id_city' => 674,
				'area' => 'Igbaras',
				'zip_code' => 5029,
			),
			106 => 
			array (
				'id' => 607,
				'id_city' => 675,
				'area' => 'Janiuay',
				'zip_code' => 5034,
			),
			107 => 
			array (
				'id' => 608,
				'id_city' => 676,
				'area' => 'Lambunao',
				'zip_code' => 5042,
			),
			108 => 
			array (
				'id' => 609,
				'id_city' => 677,
				'area' => 'Leganes',
				'zip_code' => 5003,
			),
			109 => 
			array (
				'id' => 610,
				'id_city' => 678,
				'area' => 'Lemery',
				'zip_code' => 5043,
			),
			110 => 
			array (
				'id' => 611,
				'id_city' => 679,
				'area' => 'Leon',
				'zip_code' => 5026,
			),
			111 => 
			array (
				'id' => 612,
				'id_city' => 680,
				'area' => 'Maasin',
				'zip_code' => 5030,
			),
			112 => 
			array (
				'id' => 613,
				'id_city' => 681,
				'area' => 'Miagao',
				'zip_code' => 5023,
			),
			113 => 
			array (
				'id' => 614,
				'id_city' => 682,
				'area' => 'Mina',
				'zip_code' => 5032,
			),
			114 => 
			array (
				'id' => 615,
				'id_city' => 683,
				'area' => 'New Lucena',
				'zip_code' => 5005,
			),
			115 => 
			array (
				'id' => 616,
				'id_city' => 684,
				'area' => 'Oton',
				'zip_code' => 5020,
			),
			116 => 
			array (
				'id' => 617,
				'id_city' => 685,
				'area' => 'Pavia',
				'zip_code' => 5001,
			),
			117 => 
			array (
				'id' => 618,
				'id_city' => 686,
				'area' => 'Pototan',
				'zip_code' => 5008,
			),
			118 => 
			array (
				'id' => 619,
				'id_city' => 687,
				'area' => 'San Dionisio',
				'zip_code' => 5015,
			),
			119 => 
			array (
				'id' => 620,
				'id_city' => 688,
				'area' => 'San Enrique',
				'zip_code' => 5036,
			),
			120 => 
			array (
				'id' => 621,
				'id_city' => 689,
				'area' => 'San Joaquin',
				'zip_code' => 5024,
			),
			121 => 
			array (
				'id' => 622,
				'id_city' => 690,
				'area' => 'San Miguel',
				'zip_code' => 5025,
			),
			122 => 
			array (
				'id' => 623,
				'id_city' => 691,
				'area' => 'San Rafael',
				'zip_code' => 5039,
			),
			123 => 
			array (
				'id' => 624,
				'id_city' => 692,
				'area' => 'Santa Barbara',
				'zip_code' => 5002,
			),
			124 => 
			array (
				'id' => 625,
				'id_city' => 693,
				'area' => 'Sara',
				'zip_code' => 5014,
			),
			125 => 
			array (
				'id' => 626,
				'id_city' => 694,
				'area' => 'Tigbauan',
				'zip_code' => 5021,
			),
			126 => 
			array (
				'id' => 627,
				'id_city' => 695,
				'area' => 'Tubungan',
				'zip_code' => 5027,
			),
			127 => 
			array (
				'id' => 628,
				'id_city' => 696,
				'area' => 'Zarraga',
				'zip_code' => 5004,
			),
			128 => 
			array (
				'id' => 629,
				'id_city' => 697,
				'area' => 'Cauayan City',
				'zip_code' => 3305,
			),
			129 => 
			array (
				'id' => 630,
				'id_city' => 698,
				'area' => 'Santiago City',
				'zip_code' => 3311,
			),
			130 => 
			array (
				'id' => 631,
				'id_city' => 699,
				'area' => 'Alicia',
				'zip_code' => 3306,
			),
			131 => 
			array (
				'id' => 632,
				'id_city' => 700,
				'area' => 'Angadanan',
				'zip_code' => 3307,
			),
			132 => 
			array (
				'id' => 633,
				'id_city' => 701,
				'area' => 'Aurora',
				'zip_code' => 3316,
			),
			133 => 
			array (
				'id' => 634,
				'id_city' => 702,
				'area' => 'Benito Soliven',
				'zip_code' => 3331,
			),
			134 => 
			array (
				'id' => 635,
				'id_city' => 703,
				'area' => 'Burgos',
				'zip_code' => 3322,
			),
			135 => 
			array (
				'id' => 636,
				'id_city' => 704,
				'area' => 'Cabagan',
				'zip_code' => 3328,
			),
			136 => 
			array (
				'id' => 637,
				'id_city' => 705,
				'area' => 'Cabatuan',
				'zip_code' => 3315,
			),
			137 => 
			array (
				'id' => 638,
				'id_city' => 706,
				'area' => 'Cordon',
				'zip_code' => 3312,
			),
			138 => 
			array (
				'id' => 639,
				'id_city' => 707,
				'area' => 'Delfin Albano',
				'zip_code' => 3326,
			),
			139 => 
			array (
				'id' => 640,
				'id_city' => 709,
				'area' => 'Divilacan',
				'zip_code' => 3335,
			),
			140 => 
			array (
				'id' => 641,
				'id_city' => 710,
				'area' => 'Echague',
				'zip_code' => 3309,
			),
			141 => 
			array (
				'id' => 642,
				'id_city' => 711,
				'area' => 'Gamu',
				'zip_code' => 3301,
			),
			142 => 
			array (
				'id' => 643,
				'id_city' => 712,
				'area' => 'Ilagan',
				'zip_code' => 3300,
			),
			143 => 
			array (
				'id' => 644,
				'id_city' => 713,
				'area' => 'Jones',
				'zip_code' => 3313,
			),
			144 => 
			array (
				'id' => 645,
				'id_city' => 714,
				'area' => 'Luna',
				'zip_code' => 3304,
			),
			145 => 
			array (
				'id' => 646,
				'id_city' => 715,
				'area' => 'Maconacon',
				'zip_code' => 3333,
			),
			146 => 
			array (
				'id' => 647,
				'id_city' => 716,
				'area' => 'Mallig',
				'zip_code' => 3323,
			),
			147 => 
			array (
				'id' => 648,
				'id_city' => 718,
				'area' => 'Palanan',
				'zip_code' => 3334,
			),
			148 => 
			array (
				'id' => 649,
				'id_city' => 719,
				'area' => 'Quezon',
				'zip_code' => 3324,
			),
			149 => 
			array (
				'id' => 650,
				'id_city' => 720,
				'area' => 'Quirino',
				'zip_code' => 3321,
			),
			150 => 
			array (
				'id' => 651,
				'id_city' => 721,
				'area' => 'Ramon',
				'zip_code' => 3319,
			),
			151 => 
			array (
				'id' => 652,
				'id_city' => 722,
				'area' => 'Reina Mercedes',
				'zip_code' => 3303,
			),
			152 => 
			array (
				'id' => 653,
				'id_city' => 723,
				'area' => 'Roxas',
				'zip_code' => 3320,
			),
			153 => 
			array (
				'id' => 654,
				'id_city' => 724,
				'area' => 'San Agustin',
				'zip_code' => 3314,
			),
			154 => 
			array (
				'id' => 655,
				'id_city' => 725,
				'area' => 'San Guillermo',
				'zip_code' => 3308,
			),
			155 => 
			array (
				'id' => 656,
				'id_city' => 726,
				'area' => 'San Isidro',
				'zip_code' => 3310,
			),
			156 => 
			array (
				'id' => 657,
				'id_city' => 728,
				'area' => 'San Mariano',
				'zip_code' => 3332,
			),
			157 => 
			array (
				'id' => 658,
				'id_city' => 729,
				'area' => 'San Mateo',
				'zip_code' => 3318,
			),
			158 => 
			array (
				'id' => 659,
				'id_city' => 730,
				'area' => 'San Pablo',
				'zip_code' => 3329,
			),
			159 => 
			array (
				'id' => 660,
				'id_city' => 731,
				'area' => 'Santa Maria',
				'zip_code' => 3330,
			),
			160 => 
			array (
				'id' => 661,
				'id_city' => 732,
				'area' => 'Santo Tomas',
				'zip_code' => 3327,
			),
			161 => 
			array (
				'id' => 662,
				'id_city' => 733,
				'area' => 'Tumauini',
				'zip_code' => 3325,
			),
			162 => 
			array (
				'id' => 663,
				'id_city' => 735,
				'area' => 'Balbalan',
				'zip_code' => 3801,
			),
			163 => 
			array (
				'id' => 664,
				'id_city' => 736,
				'area' => 'Lubuagan',
				'zip_code' => 3802,
			),
			164 => 
			array (
				'id' => 665,
				'id_city' => 737,
				'area' => 'Pasil',
				'zip_code' => 3803,
			),
			165 => 
			array (
				'id' => 666,
				'id_city' => 738,
				'area' => 'Pinukpuk',
				'zip_code' => 3806,
			),
			166 => 
			array (
				'id' => 667,
				'id_city' => 740,
				'area' => 'Tanudan',
				'zip_code' => 3805,
			),
			167 => 
			array (
				'id' => 668,
				'id_city' => 741,
				'area' => 'Tinglayan',
				'zip_code' => 3804,
			),
			168 => 
			array (
				'id' => 669,
				'id_city' => 742,
				'area' => 'San Fernando City',
				'zip_code' => 2500,
			),
			169 => 
			array (
				'id' => 670,
				'id_city' => 743,
				'area' => 'Agoo',
				'zip_code' => 2504,
			),
			170 => 
			array (
				'id' => 671,
				'id_city' => 744,
				'area' => 'Aringay',
				'zip_code' => 2503,
			),
			171 => 
			array (
				'id' => 672,
				'id_city' => 745,
				'area' => 'Bacnotan',
				'zip_code' => 2515,
			),
			172 => 
			array (
				'id' => 673,
				'id_city' => 746,
				'area' => 'Bagulin',
				'zip_code' => 2512,
			),
			173 => 
			array (
				'id' => 674,
				'id_city' => 747,
				'area' => 'Balaoan',
				'zip_code' => 2517,
			),
			174 => 
			array (
				'id' => 675,
				'id_city' => 748,
				'area' => 'Bangar',
				'zip_code' => 2519,
			),
			175 => 
			array (
				'id' => 676,
				'id_city' => 749,
				'area' => 'Bauang',
				'zip_code' => 2501,
			),
			176 => 
			array (
				'id' => 677,
				'id_city' => 750,
				'area' => 'Burgos',
				'zip_code' => 2510,
			),
			177 => 
			array (
				'id' => 678,
				'id_city' => 751,
				'area' => 'Caba',
				'zip_code' => 2502,
			),
			178 => 
			array (
				'id' => 679,
				'id_city' => 752,
				'area' => 'Luna',
				'zip_code' => 2518,
			),
			179 => 
			array (
				'id' => 680,
				'id_city' => 754,
				'area' => 'Pugo',
				'zip_code' => 2508,
			),
			180 => 
			array (
				'id' => 681,
				'id_city' => 755,
				'area' => 'Rosario',
				'zip_code' => 2506,
			),
			181 => 
			array (
				'id' => 682,
				'id_city' => 756,
				'area' => 'San Gabriel',
				'zip_code' => 2513,
			),
			182 => 
			array (
				'id' => 683,
				'id_city' => 757,
				'area' => 'San Juan',
				'zip_code' => 2514,
			),
			183 => 
			array (
				'id' => 684,
				'id_city' => 758,
				'area' => 'Santo Tomas',
				'zip_code' => 2505,
			),
			184 => 
			array (
				'id' => 685,
				'id_city' => 759,
				'area' => 'Santol',
				'zip_code' => 2516,
			),
			185 => 
			array (
				'id' => 686,
				'id_city' => 761,
				'area' => 'Tubao',
				'zip_code' => 2509,
			),
			186 => 
			array (
				'id' => 687,
				'id_city' => 763,
				'area' => 'Calamba City',
				'zip_code' => 4027,
			),
			187 => 
			array (
				'id' => 688,
				'id_city' => 764,
				'area' => 'San Pablo City',
				'zip_code' => 4000,
			),
			188 => 
			array (
				'id' => 689,
				'id_city' => 765,
				'area' => 'Santa Rosa City',
				'zip_code' => 4026,
			),
			189 => 
			array (
				'id' => 690,
				'id_city' => 766,
				'area' => 'Alaminos',
				'zip_code' => 4001,
			),
			190 => 
			array (
				'id' => 691,
				'id_city' => 767,
				'area' => 'Bay',
				'zip_code' => 4033,
			),
			191 => 
			array (
				'id' => 692,
				'id_city' => 768,
				'area' => 'Cabuyao',
				'zip_code' => 4025,
			),
			192 => 
			array (
				'id' => 693,
				'id_city' => 769,
				'area' => 'Calauan',
				'zip_code' => 4012,
			),
			193 => 
			array (
				'id' => 694,
				'id_city' => 770,
				'area' => 'Cavinti',
				'zip_code' => 4013,
			),
			194 => 
			array (
				'id' => 695,
				'id_city' => 771,
				'area' => 'Famy',
				'zip_code' => 4021,
			),
			195 => 
			array (
				'id' => 696,
				'id_city' => 772,
				'area' => 'Kalayaan',
				'zip_code' => 4015,
			),
			196 => 
			array (
				'id' => 697,
				'id_city' => 773,
				'area' => 'Liliw',
				'zip_code' => 4004,
			),
			197 => 
			array (
				'id' => 698,
				'id_city' => 775,
				'area' => 'Luisiana',
				'zip_code' => 4032,
			),
			198 => 
			array (
				'id' => 699,
				'id_city' => 776,
				'area' => 'Lumban',
				'zip_code' => 4014,
			),
			199 => 
			array (
				'id' => 700,
				'id_city' => 777,
				'area' => 'Mabitac',
				'zip_code' => 4020,
			),
			200 => 
			array (
				'id' => 701,
				'id_city' => 778,
				'area' => 'Magdalena',
				'zip_code' => 4007,
			),
			201 => 
			array (
				'id' => 702,
				'id_city' => 779,
				'area' => 'Majayjay',
				'zip_code' => 4005,
			),
			202 => 
			array (
				'id' => 703,
				'id_city' => 780,
				'area' => 'Nagcarlan',
				'zip_code' => 4002,
			),
			203 => 
			array (
				'id' => 704,
				'id_city' => 781,
				'area' => 'Paete',
				'zip_code' => 4016,
			),
			204 => 
			array (
				'id' => 705,
				'id_city' => 782,
				'area' => 'Pagsanjan',
				'zip_code' => 4008,
			),
			205 => 
			array (
				'id' => 706,
				'id_city' => 783,
				'area' => 'Pakil',
				'zip_code' => 4017,
			),
			206 => 
			array (
				'id' => 707,
				'id_city' => 784,
				'area' => 'Pangil',
				'zip_code' => 4018,
			),
			207 => 
			array (
				'id' => 708,
				'id_city' => 785,
				'area' => 'Pila',
				'zip_code' => 4010,
			),
			208 => 
			array (
				'id' => 709,
				'id_city' => 786,
				'area' => 'Rizal',
				'zip_code' => 4003,
			),
			209 => 
			array (
				'id' => 710,
				'id_city' => 787,
				'area' => 'San Pedro',
				'zip_code' => 4023,
			),
			210 => 
			array (
				'id' => 711,
				'id_city' => 788,
				'area' => 'Santa Cruz',
				'zip_code' => 4009,
			),
			211 => 
			array (
				'id' => 712,
				'id_city' => 789,
				'area' => 'Santa Maria',
				'zip_code' => 4022,
			),
			212 => 
			array (
				'id' => 713,
				'id_city' => 790,
				'area' => 'Siniloan',
				'zip_code' => 4019,
			),
			213 => 
			array (
				'id' => 714,
				'id_city' => 791,
				'area' => 'Victoria',
				'zip_code' => 4011,
			),
			214 => 
			array (
				'id' => 715,
				'id_city' => 792,
				'area' => 'Iligan City',
				'zip_code' => 9200,
			),
			215 => 
			array (
				'id' => 716,
				'id_city' => 793,
				'area' => 'Bacolod',
				'zip_code' => 9205,
			),
			216 => 
			array (
				'id' => 717,
				'id_city' => 794,
				'area' => 'Baloi',
				'zip_code' => 9217,
			),
			217 => 
			array (
				'id' => 718,
				'id_city' => 795,
				'area' => 'Baroy',
				'zip_code' => 9210,
			),
			218 => 
			array (
				'id' => 719,
				'id_city' => 796,
				'area' => 'Kapatagan',
				'zip_code' => 9214,
			),
			219 => 
			array (
				'id' => 720,
				'id_city' => 797,
				'area' => 'Kauswagan',
				'zip_code' => 9202,
			),
			220 => 
			array (
				'id' => 721,
				'id_city' => 799,
				'area' => 'Lala',
				'zip_code' => 9211,
			),
			221 => 
			array (
				'id' => 722,
				'id_city' => 800,
				'area' => 'Linamon',
				'zip_code' => 9201,
			),
			222 => 
			array (
				'id' => 723,
				'id_city' => 801,
				'area' => 'Magsaysay',
				'zip_code' => 9221,
			),
			223 => 
			array (
				'id' => 724,
				'id_city' => 802,
				'area' => 'Maigo',
				'zip_code' => 9206,
			),
			224 => 
			array (
				'id' => 725,
				'id_city' => 803,
				'area' => 'Matungao',
				'zip_code' => 9203,
			),
			225 => 
			array (
				'id' => 726,
				'id_city' => 804,
				'area' => 'Munai',
				'zip_code' => 9219,
			),
			226 => 
			array (
				'id' => 727,
				'id_city' => 805,
				'area' => 'Nunungan',
				'zip_code' => 9216,
			),
			227 => 
			array (
				'id' => 728,
				'id_city' => 806,
				'area' => 'Pantao Ragat',
				'zip_code' => 9208,
			),
			228 => 
			array (
				'id' => 729,
				'id_city' => 807,
				'area' => 'Pantar',
				'zip_code' => 9218,
			),
			229 => 
			array (
				'id' => 730,
				'id_city' => 808,
				'area' => 'Poona Piagapo',
				'zip_code' => 9204,
			),
			230 => 
			array (
				'id' => 731,
				'id_city' => 809,
				'area' => 'Salvador',
				'zip_code' => 9212,
			),
			231 => 
			array (
				'id' => 732,
				'id_city' => 810,
				'area' => 'Sapad',
				'zip_code' => 9213,
			),
			232 => 
			array (
				'id' => 733,
				'id_city' => 812,
				'area' => 'Tagoloan',
				'zip_code' => 9222,
			),
			233 => 
			array (
				'id' => 734,
				'id_city' => 814,
				'area' => 'Tubod',
				'zip_code' => 9209,
			),
			234 => 
			array (
				'id' => 735,
				'id_city' => 815,
				'area' => 'Marawi City',
				'zip_code' => 9700,
			),
			235 => 
			array (
				'id' => 736,
				'id_city' => 817,
				'area' => 'Balabagan',
				'zip_code' => 9302,
			),
			236 => 
			array (
				'id' => 737,
				'id_city' => 818,
				'area' => 'Balindong',
				'zip_code' => 9318,
			),
			237 => 
			array (
				'id' => 738,
				'id_city' => 819,
				'area' => 'Bayang',
				'zip_code' => 9309,
			),
			238 => 
			array (
				'id' => 739,
				'id_city' => 820,
				'area' => 'Binidayan',
				'zip_code' => 9310,
			),
			239 => 
			array (
				'id' => 740,
				'id_city' => 822,
				'area' => 'Bubong',
				'zip_code' => 9708,
			),
			240 => 
			array (
				'id' => 741,
				'id_city' => 823,
				'area' => 'Bumbaran',
				'zip_code' => 9320,
			),
			241 => 
			array (
				'id' => 742,
				'id_city' => 824,
				'area' => 'Butig',
				'zip_code' => 9305,
			),
			242 => 
			array (
				'id' => 743,
				'id_city' => 825,
				'area' => 'Calanogas',
				'zip_code' => 9319,
			),
			243 => 
			array (
				'id' => 744,
				'id_city' => 827,
				'area' => 'Ganassi',
				'zip_code' => 9311,
			),
			244 => 
			array (
				'id' => 745,
				'id_city' => 828,
				'area' => 'Kapai',
				'zip_code' => 9709,
			),
			245 => 
			array (
				'id' => 746,
				'id_city' => 832,
				'area' => 'Lumbatan',
				'zip_code' => 9307,
			),
			246 => 
			array (
				'id' => 747,
				'id_city' => 833,
				'area' => 'Lumbayanague',
				'zip_code' => 9306,
			),
			247 => 
			array (
				'id' => 748,
				'id_city' => 834,
				'area' => 'Madalum',
				'zip_code' => 9315,
			),
			248 => 
			array (
				'id' => 749,
				'id_city' => 835,
				'area' => 'Madamba',
				'zip_code' => 9314,
			),
			249 => 
			array (
				'id' => 750,
				'id_city' => 836,
				'area' => 'Maguing',
				'zip_code' => 9715,
			),
			250 => 
			array (
				'id' => 751,
				'id_city' => 837,
				'area' => 'Malabang',
				'zip_code' => 9300,
			),
			251 => 
			array (
				'id' => 752,
				'id_city' => 838,
				'area' => 'Marantao',
				'zip_code' => 9711,
			),
			252 => 
			array (
				'id' => 753,
				'id_city' => 839,
				'area' => 'Marogong',
				'zip_code' => 9303,
			),
			253 => 
			array (
				'id' => 754,
				'id_city' => 841,
				'area' => 'Mulondo',
				'zip_code' => 9702,
			),
			254 => 
			array (
				'id' => 755,
				'id_city' => 842,
				'area' => 'Pagayawan',
				'zip_code' => 9312,
			),
			255 => 
			array (
				'id' => 756,
				'id_city' => 843,
				'area' => 'Piagapo',
				'zip_code' => 9710,
			),
			256 => 
			array (
				'id' => 757,
				'id_city' => 844,
				'area' => 'Poona Bayabao',
				'zip_code' => 9705,
			),
			257 => 
			array (
				'id' => 758,
				'id_city' => 845,
				'area' => 'Pualas',
				'zip_code' => 9313,
			),
			258 => 
			array (
				'id' => 759,
				'id_city' => 846,
				'area' => 'Saguiaran',
				'zip_code' => 9701,
			),
			259 => 
			array (
				'id' => 760,
				'id_city' => 850,
				'area' => 'Tamparan',
				'zip_code' => 9704,
			),
			260 => 
			array (
				'id' => 761,
				'id_city' => 851,
				'area' => 'Taraka',
				'zip_code' => 9712,
			),
			261 => 
			array (
				'id' => 762,
				'id_city' => 852,
				'area' => 'Tubaran',
				'zip_code' => 9304,
			),
			262 => 
			array (
				'id' => 763,
				'id_city' => 853,
				'area' => 'Tugaya',
				'zip_code' => 9317,
			),
			263 => 
			array (
				'id' => 764,
				'id_city' => 854,
				'area' => 'Wao',
				'zip_code' => 9716,
			),
			264 => 
			array (
				'id' => 765,
				'id_city' => 855,
				'area' => 'Ormoc City',
				'zip_code' => 6541,
			),
			265 => 
			array (
				'id' => 766,
				'id_city' => 856,
				'area' => 'Tacloban City',
				'zip_code' => 6500,
			),
			266 => 
			array (
				'id' => 767,
				'id_city' => 857,
				'area' => 'Abuyog',
				'zip_code' => 6510,
			),
			267 => 
			array (
				'id' => 768,
				'id_city' => 858,
				'area' => 'Alangalang',
				'zip_code' => 6517,
			),
			268 => 
			array (
				'id' => 769,
				'id_city' => 859,
				'area' => 'Albuera',
				'zip_code' => 6542,
			),
			269 => 
			array (
				'id' => 770,
				'id_city' => 860,
				'area' => 'Babatngon',
				'zip_code' => 6520,
			),
			270 => 
			array (
				'id' => 771,
				'id_city' => 861,
				'area' => 'Barugo',
				'zip_code' => 6519,
			),
			271 => 
			array (
				'id' => 772,
				'id_city' => 862,
				'area' => 'Bato',
				'zip_code' => 6525,
			),
			272 => 
			array (
				'id' => 773,
				'id_city' => 863,
				'area' => 'Baybay',
				'zip_code' => 6521,
			),
			273 => 
			array (
				'id' => 774,
				'id_city' => 864,
				'area' => 'Burauen',
				'zip_code' => 6516,
			),
			274 => 
			array (
				'id' => 775,
				'id_city' => 865,
				'area' => 'Calubian',
				'zip_code' => 6534,
			),
			275 => 
			array (
				'id' => 776,
				'id_city' => 866,
				'area' => 'Capoocan',
				'zip_code' => 6530,
			),
			276 => 
			array (
				'id' => 777,
				'id_city' => 867,
				'area' => 'Carigara',
				'zip_code' => 6529,
			),
			277 => 
			array (
				'id' => 778,
				'id_city' => 868,
				'area' => 'Dagami',
				'zip_code' => 6515,
			),
			278 => 
			array (
				'id' => 779,
				'id_city' => 869,
				'area' => 'Dulag',
				'zip_code' => 6505,
			),
			279 => 
			array (
				'id' => 780,
				'id_city' => 870,
				'area' => 'Hilongos',
				'zip_code' => 6524,
			),
			280 => 
			array (
				'id' => 781,
				'id_city' => 871,
				'area' => 'Hindang',
				'zip_code' => 6523,
			),
			281 => 
			array (
				'id' => 782,
				'id_city' => 872,
				'area' => 'Inopacan',
				'zip_code' => 6522,
			),
			282 => 
			array (
				'id' => 783,
				'id_city' => 873,
				'area' => 'Isabel',
				'zip_code' => 6539,
			),
			283 => 
			array (
				'id' => 784,
				'id_city' => 874,
				'area' => 'Jaro',
				'zip_code' => 6527,
			),
			284 => 
			array (
				'id' => 785,
				'id_city' => 875,
				'area' => 'Javier',
				'zip_code' => 6511,
			),
			285 => 
			array (
				'id' => 786,
				'id_city' => 876,
				'area' => 'Julita',
				'zip_code' => 6506,
			),
			286 => 
			array (
				'id' => 787,
				'id_city' => 877,
				'area' => 'Kananga',
				'zip_code' => 6531,
			),
			287 => 
			array (
				'id' => 788,
				'id_city' => 878,
				'area' => 'La Paz',
				'zip_code' => 6508,
			),
			288 => 
			array (
				'id' => 789,
				'id_city' => 879,
				'area' => 'Leyte',
				'zip_code' => 6533,
			),
			289 => 
			array (
				'id' => 790,
				'id_city' => 882,
				'area' => 'Mahaplag',
				'zip_code' => 6512,
			),
			290 => 
			array (
				'id' => 791,
				'id_city' => 883,
				'area' => 'Matag-ob',
				'zip_code' => 6532,
			),
			291 => 
			array (
				'id' => 792,
				'id_city' => 884,
				'area' => 'Matalom',
				'zip_code' => 6526,
			),
			292 => 
			array (
				'id' => 793,
				'id_city' => 885,
				'area' => 'Mayorga',
				'zip_code' => 6507,
			),
			293 => 
			array (
				'id' => 794,
				'id_city' => 886,
				'area' => 'Merida',
				'zip_code' => 6540,
			),
			294 => 
			array (
				'id' => 795,
				'id_city' => 887,
				'area' => 'Palo',
				'zip_code' => 6501,
			),
			295 => 
			array (
				'id' => 796,
				'id_city' => 888,
				'area' => 'Palompon',
				'zip_code' => 6538,
			),
			296 => 
			array (
				'id' => 797,
				'id_city' => 889,
				'area' => 'Pastrana',
				'zip_code' => 6514,
			),
			297 => 
			array (
				'id' => 798,
				'id_city' => 890,
				'area' => 'San Isidro',
				'zip_code' => 6535,
			),
			298 => 
			array (
				'id' => 799,
				'id_city' => 891,
				'area' => 'San Miguel',
				'zip_code' => 6518,
			),
			299 => 
			array (
				'id' => 800,
				'id_city' => 892,
				'area' => 'Santa Fe',
				'zip_code' => 6513,
			),
			300 => 
			array (
				'id' => 801,
				'id_city' => 894,
				'area' => 'Tabango',
				'zip_code' => 6536,
			),
			301 => 
			array (
				'id' => 802,
				'id_city' => 895,
				'area' => 'Tabontabon',
				'zip_code' => 6504,
			),
			302 => 
			array (
				'id' => 803,
				'id_city' => 897,
				'area' => 'Tolosa',
				'zip_code' => 6503,
			),
			303 => 
			array (
				'id' => 804,
				'id_city' => 898,
				'area' => 'Tunga',
				'zip_code' => 6528,
			),
			304 => 
			array (
				'id' => 805,
				'id_city' => 899,
				'area' => 'Villaba',
				'zip_code' => 6537,
			),
			305 => 
			array (
				'id' => 806,
				'id_city' => 900,
				'area' => 'Cotabato City',
				'zip_code' => 9600,
			),
			306 => 
			array (
				'id' => 807,
				'id_city' => 901,
				'area' => 'Ampatuan',
				'zip_code' => 9609,
			),
			307 => 
			array (
				'id' => 808,
				'id_city' => 904,
				'area' => 'Buluan',
				'zip_code' => 9616,
			),
			308 => 
			array (
				'id' => 809,
				'id_city' => 911,
				'area' => 'Datu Paglas',
				'zip_code' => 9617,
			),
			309 => 
			array (
				'id' => 810,
				'id_city' => 912,
				'area' => 'Datu Piang',
				'zip_code' => 9607,
			),
			310 => 
			array (
				'id' => 811,
				'id_city' => 923,
				'area' => 'Pagalungan',
				'zip_code' => 9610,
			),
			311 => 
			array (
				'id' => 812,
				'id_city' => 930,
				'area' => 'South Upi',
				'zip_code' => 9603,
			),
			312 => 
			array (
				'id' => 813,
				'id_city' => 933,
				'area' => 'Sultan sa Barongis',
				'zip_code' => 9611,
			),
			313 => 
			array (
				'id' => 814,
				'id_city' => 934,
				'area' => 'Talayan',
				'zip_code' => 9612,
			),
			314 => 
			array (
				'id' => 815,
				'id_city' => 937,
				'area' => 'Boac',
				'zip_code' => 4900,
			),
			315 => 
			array (
				'id' => 816,
				'id_city' => 938,
				'area' => 'Buenavista',
				'zip_code' => 4904,
			),
			316 => 
			array (
				'id' => 817,
				'id_city' => 939,
				'area' => 'Gasan',
				'zip_code' => 4905,
			),
			317 => 
			array (
				'id' => 818,
				'id_city' => 940,
				'area' => 'Mogpog',
				'zip_code' => 4901,
			),
			318 => 
			array (
				'id' => 819,
				'id_city' => 941,
				'area' => 'Santa Cruz',
				'zip_code' => 4902,
			),
			319 => 
			array (
				'id' => 820,
				'id_city' => 942,
				'area' => 'Torrijos',
				'zip_code' => 4903,
			),
			320 => 
			array (
				'id' => 821,
				'id_city' => 943,
				'area' => 'Masbate City',
				'zip_code' => 5400,
			),
			321 => 
			array (
				'id' => 822,
				'id_city' => 944,
				'area' => 'Aroroy',
				'zip_code' => 5414,
			),
			322 => 
			array (
				'id' => 823,
				'id_city' => 945,
				'area' => 'Baleno',
				'zip_code' => 5413,
			),
			323 => 
			array (
				'id' => 824,
				'id_city' => 946,
				'area' => 'Balud',
				'zip_code' => 5412,
			),
			324 => 
			array (
				'id' => 825,
				'id_city' => 947,
				'area' => 'Batuan',
				'zip_code' => 5415,
			),
			325 => 
			array (
				'id' => 826,
				'id_city' => 948,
				'area' => 'Cataingan',
				'zip_code' => 5405,
			),
			326 => 
			array (
				'id' => 827,
				'id_city' => 949,
				'area' => 'Cawayan',
				'zip_code' => 5409,
			),
			327 => 
			array (
				'id' => 828,
				'id_city' => 950,
				'area' => 'Claveria',
				'zip_code' => 5419,
			),
			328 => 
			array (
				'id' => 829,
				'id_city' => 951,
				'area' => 'Dimasalang',
				'zip_code' => 5403,
			),
			329 => 
			array (
				'id' => 830,
				'id_city' => 952,
				'area' => 'Esperanza',
				'zip_code' => 5407,
			),
			330 => 
			array (
				'id' => 831,
				'id_city' => 953,
				'area' => 'Mandaon',
				'zip_code' => 5411,
			),
			331 => 
			array (
				'id' => 832,
				'id_city' => 954,
				'area' => 'Milagros',
				'zip_code' => 5410,
			),
			332 => 
			array (
				'id' => 833,
				'id_city' => 955,
				'area' => 'Mobo',
				'zip_code' => 5401,
			),
			333 => 
			array (
				'id' => 834,
				'id_city' => 956,
				'area' => 'Monreal',
				'zip_code' => 5418,
			),
			334 => 
			array (
				'id' => 835,
				'id_city' => 957,
				'area' => 'Palanas',
				'zip_code' => 5404,
			),
			335 => 
			array (
				'id' => 836,
				'id_city' => 958,
				'area' => 'Pio V. Corpuz',
				'zip_code' => 5406,
			),
			336 => 
			array (
				'id' => 837,
				'id_city' => 959,
				'area' => 'Placer',
				'zip_code' => 5408,
			),
			337 => 
			array (
				'id' => 838,
				'id_city' => 960,
				'area' => 'San Fernando',
				'zip_code' => 5416,
			),
			338 => 
			array (
				'id' => 839,
				'id_city' => 961,
				'area' => 'San Jacinto',
				'zip_code' => 5417,
			),
			339 => 
			array (
				'id' => 840,
				'id_city' => 962,
				'area' => 'San Pascual',
				'zip_code' => 5420,
			),
			340 => 
			array (
				'id' => 841,
				'id_city' => 963,
				'area' => 'Uson',
				'zip_code' => 5402,
			),
			341 => 
			array (
				'id' => 842,
				'id_city' => 981,
				'area' => 'Oroquieta City',
				'zip_code' => 7207,
			),
			342 => 
			array (
				'id' => 843,
				'id_city' => 983,
				'area' => 'Tangub City',
				'zip_code' => 7214,
			),
			343 => 
			array (
				'id' => 844,
				'id_city' => 984,
				'area' => 'Aloran',
				'zip_code' => 7206,
			),
			344 => 
			array (
				'id' => 845,
				'id_city' => 985,
				'area' => 'Baliangao',
				'zip_code' => 7211,
			),
			345 => 
			array (
				'id' => 846,
				'id_city' => 986,
				'area' => 'Bonifacio',
				'zip_code' => 7215,
			),
			346 => 
			array (
				'id' => 847,
				'id_city' => 987,
				'area' => 'Calamba',
				'zip_code' => 7210,
			),
			347 => 
			array (
				'id' => 848,
				'id_city' => 988,
				'area' => 'Clarin',
				'zip_code' => 7201,
			),
			348 => 
			array (
				'id' => 849,
				'id_city' => 989,
				'area' => 'Concepcion',
				'zip_code' => 7213,
			),
			349 => 
			array (
				'id' => 850,
				'id_city' => 991,
				'area' => 'Jimenez',
				'zip_code' => 7204,
			),
			350 => 
			array (
				'id' => 851,
				'id_city' => 992,
				'area' => 'Lopez Jaena',
				'zip_code' => 7208,
			),
			351 => 
			array (
				'id' => 852,
				'id_city' => 993,
				'area' => 'Panaon',
				'zip_code' => 7205,
			),
			352 => 
			array (
				'id' => 853,
				'id_city' => 994,
				'area' => 'Plaridel',
				'zip_code' => 7209,
			),
			353 => 
			array (
				'id' => 854,
				'id_city' => 995,
				'area' => 'Sapang Dalaga',
				'zip_code' => 7212,
			),
			354 => 
			array (
				'id' => 855,
				'id_city' => 996,
				'area' => 'Sinacaban',
				'zip_code' => 7203,
			),
			355 => 
			array (
				'id' => 856,
				'id_city' => 997,
				'area' => 'Tudela',
				'zip_code' => 7202,
			),
			356 => 
			array (
				'id' => 857,
				'id_city' => 999,
				'area' => 'Gingoog City',
				'zip_code' => 9014,
			),
			357 => 
			array (
				'id' => 858,
				'id_city' => 1000,
				'area' => 'Alubijid',
				'zip_code' => 9018,
			),
			358 => 
			array (
				'id' => 859,
				'id_city' => 1001,
				'area' => 'Balingasag',
				'zip_code' => 9005,
			),
			359 => 
			array (
				'id' => 860,
				'id_city' => 1003,
				'area' => 'Binuangan',
				'zip_code' => 9008,
			),
			360 => 
			array (
				'id' => 861,
				'id_city' => 1004,
				'area' => 'Claveria',
				'zip_code' => 9004,
			),
			361 => 
			array (
				'id' => 862,
				'id_city' => 1005,
				'area' => 'El Salvador',
				'zip_code' => 9017,
			),
			362 => 
			array (
				'id' => 863,
				'id_city' => 1006,
				'area' => 'Gitagum',
				'zip_code' => 9020,
			),
			363 => 
			array (
				'id' => 864,
				'id_city' => 1007,
				'area' => 'Initao',
				'zip_code' => 9022,
			),
			364 => 
			array (
				'id' => 865,
				'id_city' => 1008,
				'area' => 'Jasaan',
				'zip_code' => 9003,
			),
			365 => 
			array (
				'id' => 866,
				'id_city' => 1010,
				'area' => 'Lagonglong',
				'zip_code' => 9006,
			),
			366 => 
			array (
				'id' => 867,
				'id_city' => 1011,
				'area' => 'Laguindingan',
				'zip_code' => 9019,
			),
			367 => 
			array (
				'id' => 868,
				'id_city' => 1012,
				'area' => 'Libertad',
				'zip_code' => 9021,
			),
			368 => 
			array (
				'id' => 869,
				'id_city' => 1013,
				'area' => 'Lugait',
				'zip_code' => 9025,
			),
			369 => 
			array (
				'id' => 870,
				'id_city' => 1014,
				'area' => 'Magsaysay',
				'zip_code' => 9015,
			),
			370 => 
			array (
				'id' => 871,
				'id_city' => 1015,
				'area' => 'Manticao',
				'zip_code' => 9024,
			),
			371 => 
			array (
				'id' => 872,
				'id_city' => 1016,
				'area' => 'Medina',
				'zip_code' => 9013,
			),
			372 => 
			array (
				'id' => 873,
				'id_city' => 1017,
				'area' => 'Naawan',
				'zip_code' => 9023,
			),
			373 => 
			array (
				'id' => 874,
				'id_city' => 1018,
				'area' => 'Opol',
				'zip_code' => 9016,
			),
			374 => 
			array (
				'id' => 875,
				'id_city' => 1019,
				'area' => 'Salay',
				'zip_code' => 9007,
			),
			375 => 
			array (
				'id' => 876,
				'id_city' => 1021,
				'area' => 'Tagoloan',
				'zip_code' => 9001,
			),
			376 => 
			array (
				'id' => 877,
				'id_city' => 1022,
				'area' => 'Talisayan',
				'zip_code' => 9012,
			),
			377 => 
			array (
				'id' => 878,
				'id_city' => 1023,
				'area' => 'Villanueva',
				'zip_code' => 9002,
			),
			378 => 
			array (
				'id' => 879,
				'id_city' => 1024,
				'area' => 'Barlig',
				'zip_code' => 2623,
			),
			379 => 
			array (
				'id' => 880,
				'id_city' => 1025,
				'area' => 'Bauko',
				'zip_code' => 2621,
			),
			380 => 
			array (
				'id' => 881,
				'id_city' => 1026,
				'area' => 'Besao',
				'zip_code' => 2618,
			),
			381 => 
			array (
				'id' => 882,
				'id_city' => 1027,
				'area' => 'Bontoc',
				'zip_code' => 2616,
			),
			382 => 
			array (
				'id' => 883,
				'id_city' => 1028,
				'area' => 'Natonin',
				'zip_code' => 2624,
			),
			383 => 
			array (
				'id' => 884,
				'id_city' => 1029,
				'area' => 'Paracelis',
				'zip_code' => 2625,
			),
			384 => 
			array (
				'id' => 885,
				'id_city' => 1030,
				'area' => 'Sabangan',
				'zip_code' => 2622,
			),
			385 => 
			array (
				'id' => 886,
				'id_city' => 1031,
				'area' => 'Sadanga',
				'zip_code' => 2617,
			),
			386 => 
			array (
				'id' => 887,
				'id_city' => 1032,
				'area' => 'Sagada',
				'zip_code' => 2619,
			),
			387 => 
			array (
				'id' => 888,
				'id_city' => 1033,
				'area' => 'Tadian',
				'zip_code' => 2620,
			),
			388 => 
			array (
				'id' => 889,
				'id_city' => 1034,
				'area' => 'Bacolod City',
				'zip_code' => 6100,
			),
			389 => 
			array (
				'id' => 890,
				'id_city' => 1035,
				'area' => 'Bago City',
				'zip_code' => 6101,
			),
			390 => 
			array (
				'id' => 891,
				'id_city' => 1036,
				'area' => 'Cadiz City',
				'zip_code' => 6121,
			),
			391 => 
			array (
				'id' => 892,
				'id_city' => 1037,
				'area' => 'Escalante City',
				'zip_code' => 6124,
			),
			392 => 
			array (
				'id' => 893,
				'id_city' => 1038,
				'area' => 'Himamaylan City',
				'zip_code' => 6108,
			),
			393 => 
			array (
				'id' => 894,
				'id_city' => 1039,
				'area' => 'Kabankalan City',
				'zip_code' => 6111,
			),
			394 => 
			array (
				'id' => 895,
				'id_city' => 1040,
				'area' => 'La Carlota City',
				'zip_code' => 6130,
			),
			395 => 
			array (
				'id' => 896,
				'id_city' => 1041,
				'area' => 'Sagay City',
				'zip_code' => 6122,
			),
			396 => 
			array (
				'id' => 897,
				'id_city' => 1042,
				'area' => 'San Carlos City',
				'zip_code' => 6127,
			),
			397 => 
			array (
				'id' => 898,
				'id_city' => 1043,
				'area' => 'Silay City',
				'zip_code' => 6116,
			),
			398 => 
			array (
				'id' => 899,
				'id_city' => 1044,
				'area' => 'Sipalay City',
				'zip_code' => 6113,
			),
			399 => 
			array (
				'id' => 900,
				'id_city' => 1045,
				'area' => 'Talisay City',
				'zip_code' => 6115,
			),
			400 => 
			array (
				'id' => 901,
				'id_city' => 1046,
				'area' => 'Victorias City',
				'zip_code' => 6119,
			),
			401 => 
			array (
				'id' => 902,
				'id_city' => 1048,
				'area' => 'Calatrava',
				'zip_code' => 6126,
			),
			402 => 
			array (
				'id' => 903,
				'id_city' => 1049,
				'area' => 'Candoni',
				'zip_code' => 6110,
			),
			403 => 
			array (
				'id' => 904,
				'id_city' => 1050,
				'area' => 'Cauayan',
				'zip_code' => 6112,
			),
			404 => 
			array (
				'id' => 905,
				'id_city' => 1053,
				'area' => 'Hinoba-an',
				'zip_code' => 6114,
			),
			405 => 
			array (
				'id' => 906,
				'id_city' => 1054,
				'area' => 'Ilog',
				'zip_code' => 6109,
			),
			406 => 
			array (
				'id' => 907,
				'id_city' => 1055,
				'area' => 'Isabela',
				'zip_code' => 6128,
			),
			407 => 
			array (
				'id' => 908,
				'id_city' => 1057,
				'area' => 'Manapla',
				'zip_code' => 6120,
			),
			408 => 
			array (
				'id' => 909,
				'id_city' => 1058,
				'area' => 'Moises Padilla',
				'zip_code' => 6132,
			),
			409 => 
			array (
				'id' => 910,
				'id_city' => 1059,
				'area' => 'Murcia',
				'zip_code' => 6129,
			),
			410 => 
			array (
				'id' => 911,
				'id_city' => 1060,
				'area' => 'Pontevedra',
				'zip_code' => 6105,
			),
			411 => 
			array (
				'id' => 912,
				'id_city' => 1061,
				'area' => 'Pulupandan',
				'zip_code' => 6102,
			),
			412 => 
			array (
				'id' => 913,
				'id_city' => 1063,
				'area' => 'San Enrique',
				'zip_code' => 6104,
			),
			413 => 
			array (
				'id' => 914,
				'id_city' => 1064,
				'area' => 'Toboso',
				'zip_code' => 6125,
			),
			414 => 
			array (
				'id' => 915,
				'id_city' => 1065,
				'area' => 'Valladolid',
				'zip_code' => 6103,
			),
			415 => 
			array (
				'id' => 916,
				'id_city' => 1066,
				'area' => 'Bais City',
				'zip_code' => 6206,
			),
			416 => 
			array (
				'id' => 917,
				'id_city' => 1067,
				'area' => 'Bayawan City',
				'zip_code' => 6221,
			),
			417 => 
			array (
				'id' => 918,
				'id_city' => 1068,
				'area' => 'Canlaon City',
				'zip_code' => 6223,
			),
			418 => 
			array (
				'id' => 919,
				'id_city' => 1070,
				'area' => 'Dumaguete City',
				'zip_code' => 6200,
			),
			419 => 
			array (
				'id' => 920,
				'id_city' => 1071,
				'area' => 'Tanjay City',
				'zip_code' => 6204,
			),
			420 => 
			array (
				'id' => 921,
				'id_city' => 1072,
				'area' => 'Amlan',
				'zip_code' => 6203,
			),
			421 => 
			array (
				'id' => 922,
				'id_city' => 1073,
				'area' => 'Ayungon',
				'zip_code' => 6210,
			),
			422 => 
			array (
				'id' => 923,
				'id_city' => 1074,
				'area' => 'Bacong',
				'zip_code' => 6216,
			),
			423 => 
			array (
				'id' => 924,
				'id_city' => 1075,
				'area' => 'Basay',
				'zip_code' => 6222,
			),
			424 => 
			array (
				'id' => 925,
				'id_city' => 1076,
				'area' => 'Bindoy',
				'zip_code' => 6209,
			),
			425 => 
			array (
				'id' => 926,
				'id_city' => 1077,
				'area' => 'Dauin',
				'zip_code' => 6217,
			),
			426 => 
			array (
				'id' => 927,
				'id_city' => 1078,
				'area' => 'Jimalalud',
				'zip_code' => 6212,
			),
			427 => 
			array (
				'id' => 928,
				'id_city' => 1079,
				'area' => 'La Libertad',
				'zip_code' => 6213,
			),
			428 => 
			array (
				'id' => 929,
				'id_city' => 1080,
				'area' => 'Mabinay',
				'zip_code' => 6207,
			),
			429 => 
			array (
				'id' => 930,
				'id_city' => 1081,
				'area' => 'Manjuyod',
				'zip_code' => 6208,
			),
			430 => 
			array (
				'id' => 931,
				'id_city' => 1082,
				'area' => 'Pamplona',
				'zip_code' => 6205,
			),
			431 => 
			array (
				'id' => 932,
				'id_city' => 1083,
				'area' => 'San Jose',
				'zip_code' => 6202,
			),
			432 => 
			array (
				'id' => 933,
				'id_city' => 1085,
				'area' => 'Siaton',
				'zip_code' => 6219,
			),
			433 => 
			array (
				'id' => 934,
				'id_city' => 1086,
				'area' => 'Sibulan',
				'zip_code' => 6201,
			),
			434 => 
			array (
				'id' => 935,
				'id_city' => 1087,
				'area' => 'Tayasan',
				'zip_code' => 6211,
			),
			435 => 
			array (
				'id' => 936,
				'id_city' => 1088,
				'area' => 'Valencia',
				'zip_code' => 6215,
			),
			436 => 
			array (
				'id' => 937,
				'id_city' => 1090,
				'area' => 'Zamboanguita',
				'zip_code' => 6218,
			),
			437 => 
			array (
				'id' => 938,
				'id_city' => 1091,
				'area' => 'Allen',
				'zip_code' => 6405,
			),
			438 => 
			array (
				'id' => 939,
				'id_city' => 1092,
				'area' => 'Biri',
				'zip_code' => 6410,
			),
			439 => 
			array (
				'id' => 940,
				'id_city' => 1093,
				'area' => 'Bobon',
				'zip_code' => 6401,
			),
			440 => 
			array (
				'id' => 941,
				'id_city' => 1094,
				'area' => 'Capul',
				'zip_code' => 6408,
			),
			441 => 
			array (
				'id' => 942,
				'id_city' => 1095,
				'area' => 'Catarman',
				'zip_code' => 6400,
			),
			442 => 
			array (
				'id' => 943,
				'id_city' => 1096,
				'area' => 'Catubig',
				'zip_code' => 6418,
			),
			443 => 
			array (
				'id' => 944,
				'id_city' => 1097,
				'area' => 'Gamay',
				'zip_code' => 6422,
			),
			444 => 
			array (
				'id' => 945,
				'id_city' => 1098,
				'area' => 'Laoang',
				'zip_code' => 6411,
			),
			445 => 
			array (
				'id' => 946,
				'id_city' => 1099,
				'area' => 'Lapinig',
				'zip_code' => 6423,
			),
			446 => 
			array (
				'id' => 947,
				'id_city' => 1100,
				'area' => 'Las Navas',
				'zip_code' => 6420,
			),
			447 => 
			array (
				'id' => 948,
				'id_city' => 1101,
				'area' => 'Lavezares',
				'zip_code' => 6404,
			),
			448 => 
			array (
				'id' => 949,
				'id_city' => 1102,
				'area' => 'Lope de Vega',
				'zip_code' => 6403,
			),
			449 => 
			array (
				'id' => 950,
				'id_city' => 1103,
				'area' => 'Mapanas',
				'zip_code' => 6412,
			),
			450 => 
			array (
				'id' => 951,
				'id_city' => 1104,
				'area' => 'Mondragon',
				'zip_code' => 6417,
			),
			451 => 
			array (
				'id' => 952,
				'id_city' => 1105,
				'area' => 'Palapag',
				'zip_code' => 6421,
			),
			452 => 
			array (
				'id' => 953,
				'id_city' => 1106,
				'area' => 'Pambujan',
				'zip_code' => 6413,
			),
			453 => 
			array (
				'id' => 954,
				'id_city' => 1107,
				'area' => 'Rosario',
				'zip_code' => 6416,
			),
			454 => 
			array (
				'id' => 955,
				'id_city' => 1108,
				'area' => 'San Antonio',
				'zip_code' => 6407,
			),
			455 => 
			array (
				'id' => 956,
				'id_city' => 1109,
				'area' => 'San Isidro',
				'zip_code' => 6409,
			),
			456 => 
			array (
				'id' => 957,
				'id_city' => 1110,
				'area' => 'San Jose',
				'zip_code' => 6402,
			),
			457 => 
			array (
				'id' => 958,
				'id_city' => 1111,
				'area' => 'San Roque',
				'zip_code' => 6415,
			),
			458 => 
			array (
				'id' => 959,
				'id_city' => 1112,
				'area' => 'San Vicente',
				'zip_code' => 6419,
			),
			459 => 
			array (
				'id' => 960,
				'id_city' => 1113,
				'area' => 'Silvino Lobos',
				'zip_code' => 6414,
			),
			460 => 
			array (
				'id' => 961,
				'id_city' => 1114,
				'area' => 'Victoria',
				'zip_code' => 6406,
			),
			461 => 
			array (
				'id' => 962,
				'id_city' => 1115,
				'area' => 'Cabanatuan City',
				'zip_code' => 3100,
			),
			462 => 
			array (
				'id' => 963,
				'id_city' => 1116,
				'area' => 'Gapan City',
				'zip_code' => 3105,
			),
			463 => 
			array (
				'id' => 964,
				'id_city' => 1118,
				'area' => 'Palayan City',
				'zip_code' => 3132,
			),
			464 => 
			array (
				'id' => 965,
				'id_city' => 1119,
				'area' => 'San Jose City',
				'zip_code' => 3121,
			),
			465 => 
			array (
				'id' => 966,
				'id_city' => 1120,
				'area' => 'Aliaga',
				'zip_code' => 3111,
			),
			466 => 
			array (
				'id' => 967,
				'id_city' => 1121,
				'area' => 'Bongabon',
				'zip_code' => 3128,
			),
			467 => 
			array (
				'id' => 968,
				'id_city' => 1122,
				'area' => 'Cabiao',
				'zip_code' => 3107,
			),
			468 => 
			array (
				'id' => 969,
				'id_city' => 1123,
				'area' => 'Carranglan',
				'zip_code' => 3123,
			),
			469 => 
			array (
				'id' => 970,
				'id_city' => 1124,
				'area' => 'Cuyapo',
				'zip_code' => 3117,
			),
			470 => 
			array (
				'id' => 971,
				'id_city' => 1125,
				'area' => 'Gabaldon',
				'zip_code' => 3131,
			),
			471 => 
			array (
				'id' => 972,
				'id_city' => 1127,
				'area' => 'General Tinio',
				'zip_code' => 3104,
			),
			472 => 
			array (
				'id' => 973,
				'id_city' => 1128,
				'area' => 'Guimba',
				'zip_code' => 3115,
			),
			473 => 
			array (
				'id' => 974,
				'id_city' => 1129,
				'area' => 'Jaen',
				'zip_code' => 3109,
			),
			474 => 
			array (
				'id' => 975,
				'id_city' => 1130,
				'area' => 'Laur',
				'zip_code' => 3129,
			),
			475 => 
			array (
				'id' => 976,
				'id_city' => 1131,
				'area' => 'Licab',
				'zip_code' => 3112,
			),
			476 => 
			array (
				'id' => 977,
				'id_city' => 1132,
				'area' => 'Llanera',
				'zip_code' => 3126,
			),
			477 => 
			array (
				'id' => 978,
				'id_city' => 1133,
				'area' => 'Lupao',
				'zip_code' => 3122,
			),
			478 => 
			array (
				'id' => 979,
				'id_city' => 1134,
				'area' => 'Nampicuan',
				'zip_code' => 3116,
			),
			479 => 
			array (
				'id' => 980,
				'id_city' => 1135,
				'area' => 'Pantabangan',
				'zip_code' => 3124,
			),
			480 => 
			array (
				'id' => 981,
				'id_city' => 1137,
				'area' => 'Quezon',
				'zip_code' => 3113,
			),
			481 => 
			array (
				'id' => 982,
				'id_city' => 1138,
				'area' => 'Rizal',
				'zip_code' => 3127,
			),
			482 => 
			array (
				'id' => 983,
				'id_city' => 1139,
				'area' => 'San Antonio',
				'zip_code' => 3108,
			),
			483 => 
			array (
				'id' => 984,
				'id_city' => 1140,
				'area' => 'San Isidro',
				'zip_code' => 3106,
			),
			484 => 
			array (
				'id' => 985,
				'id_city' => 1141,
				'area' => 'San Leonardo',
				'zip_code' => 3102,
			),
			485 => 
			array (
				'id' => 986,
				'id_city' => 1142,
				'area' => 'Santa Rosa',
				'zip_code' => 3101,
			),
			486 => 
			array (
				'id' => 987,
				'id_city' => 1143,
				'area' => 'Santo Domingo',
				'zip_code' => 3133,
			),
			487 => 
			array (
				'id' => 988,
				'id_city' => 1144,
				'area' => 'Talavera',
				'zip_code' => 3114,
			),
			488 => 
			array (
				'id' => 989,
				'id_city' => 1146,
				'area' => 'Zaragoza',
				'zip_code' => 3110,
			),
			489 => 
			array (
				'id' => 990,
				'id_city' => 1148,
				'area' => 'Ambaguio',
				'zip_code' => 3701,
			),
			490 => 
			array (
				'id' => 991,
				'id_city' => 1149,
				'area' => 'Aritao',
				'zip_code' => 3704,
			),
			491 => 
			array (
				'id' => 992,
				'id_city' => 1150,
				'area' => 'Bagabag',
				'zip_code' => 3711,
			),
			492 => 
			array (
				'id' => 993,
				'id_city' => 1151,
				'area' => 'Bambang',
				'zip_code' => 3702,
			),
			493 => 
			array (
				'id' => 994,
				'id_city' => 1152,
				'area' => 'Bayombong',
				'zip_code' => 3700,
			),
			494 => 
			array (
				'id' => 995,
				'id_city' => 1153,
				'area' => 'Diadi',
				'zip_code' => 3712,
			),
			495 => 
			array (
				'id' => 996,
				'id_city' => 1154,
				'area' => 'Dupax del Norte',
				'zip_code' => 3706,
			),
			496 => 
			array (
				'id' => 997,
				'id_city' => 1155,
				'area' => 'Dupax del Sur',
				'zip_code' => 3707,
			),
			497 => 
			array (
				'id' => 998,
				'id_city' => 1156,
				'area' => 'Kasibu',
				'zip_code' => 3703,
			),
			498 => 
			array (
				'id' => 999,
				'id_city' => 1157,
				'area' => 'Kayapa',
				'zip_code' => 3708,
			),
			499 => 
			array (
				'id' => 1000,
				'id_city' => 1158,
				'area' => 'Quezon',
				'zip_code' => 3714,
			),
		));
		\DB::table('city_area')->insert(array (
			0 => 
			array (
				'id' => 1001,
				'id_city' => 1160,
				'area' => 'Solano',
				'zip_code' => 3709,
			),
			1 => 
			array (
				'id' => 1002,
				'id_city' => 1162,
				'area' => 'Abra de Ilog',
				'zip_code' => 5108,
			),
			2 => 
			array (
				'id' => 1003,
				'id_city' => 1163,
				'area' => 'Calintaan',
				'zip_code' => 5102,
			),
			3 => 
			array (
				'id' => 1004,
				'id_city' => 1164,
				'area' => 'Looc',
				'zip_code' => 5111,
			),
			4 => 
			array (
				'id' => 1005,
				'id_city' => 1165,
				'area' => 'Lubang',
				'zip_code' => 5109,
			),
			5 => 
			array (
				'id' => 1006,
				'id_city' => 1166,
				'area' => 'Magsaysay',
				'zip_code' => 5101,
			),
			6 => 
			array (
				'id' => 1007,
				'id_city' => 1167,
				'area' => 'Mamburao',
				'zip_code' => 5106,
			),
			7 => 
			array (
				'id' => 1008,
				'id_city' => 1168,
				'area' => 'Paluan',
				'zip_code' => 5107,
			),
			8 => 
			array (
				'id' => 1009,
				'id_city' => 1169,
				'area' => 'Rizal',
				'zip_code' => 5103,
			),
			9 => 
			array (
				'id' => 1010,
				'id_city' => 1170,
				'area' => 'Sablayan',
				'zip_code' => 5104,
			),
			10 => 
			array (
				'id' => 1011,
				'id_city' => 1171,
				'area' => 'San Jose',
				'zip_code' => 5100,
			),
			11 => 
			array (
				'id' => 1012,
				'id_city' => 1172,
				'area' => 'Santa Cruz',
				'zip_code' => 5105,
			),
			12 => 
			array (
				'id' => 1013,
				'id_city' => 1174,
				'area' => 'Baco',
				'zip_code' => 5201,
			),
			13 => 
			array (
				'id' => 1014,
				'id_city' => 1175,
				'area' => 'Bansud',
				'zip_code' => 5210,
			),
			14 => 
			array (
				'id' => 1015,
				'id_city' => 1177,
				'area' => 'Bulalacao',
				'zip_code' => 5214,
			),
			15 => 
			array (
				'id' => 1016,
				'id_city' => 1178,
				'area' => 'Gloria',
				'zip_code' => 5209,
			),
			16 => 
			array (
				'id' => 1017,
				'id_city' => 1179,
				'area' => 'Mansalay',
				'zip_code' => 5213,
			),
			17 => 
			array (
				'id' => 1018,
				'id_city' => 1180,
				'area' => 'Naujan',
				'zip_code' => 5204,
			),
			18 => 
			array (
				'id' => 1019,
				'id_city' => 1181,
				'area' => 'Pinamalayan',
				'zip_code' => 5208,
			),
			19 => 
			array (
				'id' => 1020,
				'id_city' => 1182,
				'area' => 'Pola',
				'zip_code' => 5206,
			),
			20 => 
			array (
				'id' => 1021,
				'id_city' => 1183,
				'area' => 'Puerto Galera',
				'zip_code' => 5203,
			),
			21 => 
			array (
				'id' => 1022,
				'id_city' => 1184,
				'area' => 'Roxas',
				'zip_code' => 5212,
			),
			22 => 
			array (
				'id' => 1023,
				'id_city' => 1185,
				'area' => 'San Teodoro',
				'zip_code' => 5202,
			),
			23 => 
			array (
				'id' => 1024,
				'id_city' => 1186,
				'area' => 'Socorro',
				'zip_code' => 5207,
			),
			24 => 
			array (
				'id' => 1025,
				'id_city' => 1187,
				'area' => 'Victoria',
				'zip_code' => 5205,
			),
			25 => 
			array (
				'id' => 1026,
				'id_city' => 1189,
				'area' => 'Aborlan',
				'zip_code' => 5302,
			),
			26 => 
			array (
				'id' => 1027,
				'id_city' => 1190,
				'area' => 'Agutaya',
				'zip_code' => 5320,
			),
			27 => 
			array (
				'id' => 1028,
				'id_city' => 1191,
				'area' => 'Araceli',
				'zip_code' => 5311,
			),
			28 => 
			array (
				'id' => 1029,
				'id_city' => 1192,
				'area' => 'Balabac',
				'zip_code' => 5307,
			),
			29 => 
			array (
				'id' => 1030,
				'id_city' => 1193,
				'area' => 'Bataraza',
				'zip_code' => 5306,
			),
			30 => 
			array (
				'id' => 1031,
				'id_city' => 1194,
				'area' => 'Brooke\'s Point',
				'zip_code' => 5305,
			),
			31 => 
			array (
				'id' => 1032,
				'id_city' => 1195,
				'area' => 'Busuanga',
				'zip_code' => 5317,
			),
			32 => 
			array (
				'id' => 1033,
				'id_city' => 1196,
				'area' => 'Cagayancillo',
				'zip_code' => 5321,
			),
			33 => 
			array (
				'id' => 1034,
				'id_city' => 1197,
				'area' => 'Coron',
				'zip_code' => 5316,
			),
			34 => 
			array (
				'id' => 1035,
				'id_city' => 1198,
				'area' => 'Culion',
				'zip_code' => 5315,
			),
			35 => 
			array (
				'id' => 1036,
				'id_city' => 1199,
				'area' => 'Cuyo',
				'zip_code' => 5318,
			),
			36 => 
			array (
				'id' => 1037,
				'id_city' => 1200,
				'area' => 'Dumaran',
				'zip_code' => 5310,
			),
			37 => 
			array (
				'id' => 1038,
				'id_city' => 1202,
				'area' => 'Kalayaan',
				'zip_code' => 5322,
			),
			38 => 
			array (
				'id' => 1039,
				'id_city' => 1203,
				'area' => 'Linapacan',
				'zip_code' => 5314,
			),
			39 => 
			array (
				'id' => 1040,
				'id_city' => 1204,
				'area' => 'Magsaysay',
				'zip_code' => 5319,
			),
			40 => 
			array (
				'id' => 1041,
				'id_city' => 1206,
				'area' => 'Quezon',
				'zip_code' => 5304,
			),
			41 => 
			array (
				'id' => 1042,
				'id_city' => 1208,
				'area' => 'Roxas',
				'zip_code' => 5308,
			),
			42 => 
			array (
				'id' => 1043,
				'id_city' => 1209,
				'area' => 'San Vicente',
				'zip_code' => 5309,
			),
			43 => 
			array (
				'id' => 1044,
				'id_city' => 1211,
				'area' => 'Taytay',
				'zip_code' => 5312,
			),
			44 => 
			array (
				'id' => 1045,
				'id_city' => 1213,
				'area' => 'City of San Fernando',
				'zip_code' => 2000,
			),
			45 => 
			array (
				'id' => 1046,
				'id_city' => 1214,
				'area' => 'Apalit',
				'zip_code' => 2016,
			),
			46 => 
			array (
				'id' => 1047,
				'id_city' => 1215,
				'area' => 'Arayat',
				'zip_code' => 2012,
			),
			47 => 
			array (
				'id' => 1048,
				'id_city' => 1216,
				'area' => 'Bacolor',
				'zip_code' => 2001,
			),
			48 => 
			array (
				'id' => 1049,
				'id_city' => 1217,
				'area' => 'Candaba',
				'zip_code' => 2013,
			),
			49 => 
			array (
				'id' => 1050,
				'id_city' => 1218,
				'area' => 'Floridablanca',
				'zip_code' => 2006,
			),
			50 => 
			array (
				'id' => 1051,
				'id_city' => 1219,
				'area' => 'Guagua',
				'zip_code' => 2003,
			),
			51 => 
			array (
				'id' => 1052,
				'id_city' => 1220,
				'area' => 'Lubao',
				'zip_code' => 2005,
			),
			52 => 
			array (
				'id' => 1053,
				'id_city' => 1221,
				'area' => 'Mabalacat',
				'zip_code' => 2010,
			),
			53 => 
			array (
				'id' => 1054,
				'id_city' => 1222,
				'area' => 'Macabebe',
				'zip_code' => 2018,
			),
			54 => 
			array (
				'id' => 1055,
				'id_city' => 1223,
				'area' => 'Magalang',
				'zip_code' => 2011,
			),
			55 => 
			array (
				'id' => 1056,
				'id_city' => 1224,
				'area' => 'Masantol',
				'zip_code' => 2017,
			),
			56 => 
			array (
				'id' => 1057,
				'id_city' => 1225,
				'area' => 'Mexico',
				'zip_code' => 2021,
			),
			57 => 
			array (
				'id' => 1058,
				'id_city' => 1226,
				'area' => 'Minalin',
				'zip_code' => 2019,
			),
			58 => 
			array (
				'id' => 1059,
				'id_city' => 1227,
				'area' => 'Porac',
				'zip_code' => 2008,
			),
			59 => 
			array (
				'id' => 1060,
				'id_city' => 1228,
				'area' => 'San Luis',
				'zip_code' => 2014,
			),
			60 => 
			array (
				'id' => 1061,
				'id_city' => 1229,
				'area' => 'San Simon',
				'zip_code' => 2015,
			),
			61 => 
			array (
				'id' => 1062,
				'id_city' => 1230,
				'area' => 'Santa Ana',
				'zip_code' => 2022,
			),
			62 => 
			array (
				'id' => 1063,
				'id_city' => 1231,
				'area' => 'Santa Rita',
				'zip_code' => 2002,
			),
			63 => 
			array (
				'id' => 1064,
				'id_city' => 1232,
				'area' => 'Santo Tomas',
				'zip_code' => 2020,
			),
			64 => 
			array (
				'id' => 1065,
				'id_city' => 1235,
				'area' => 'Dagupan City',
				'zip_code' => 2400,
			),
			65 => 
			array (
				'id' => 1066,
				'id_city' => 1236,
				'area' => 'San Carlos City',
				'zip_code' => 2420,
			),
			66 => 
			array (
				'id' => 1067,
				'id_city' => 1238,
				'area' => 'Agno',
				'zip_code' => 2408,
			),
			67 => 
			array (
				'id' => 1068,
				'id_city' => 1239,
				'area' => 'Aguilar',
				'zip_code' => 2415,
			),
			68 => 
			array (
				'id' => 1069,
				'id_city' => 1240,
				'area' => 'Alcala',
				'zip_code' => 2425,
			),
			69 => 
			array (
				'id' => 1070,
				'id_city' => 1241,
				'area' => 'Anda',
				'zip_code' => 2405,
			),
			70 => 
			array (
				'id' => 1071,
				'id_city' => 1242,
				'area' => 'Asingan',
				'zip_code' => 2439,
			),
			71 => 
			array (
				'id' => 1072,
				'id_city' => 1243,
				'area' => 'Balungao',
				'zip_code' => 2442,
			),
			72 => 
			array (
				'id' => 1073,
				'id_city' => 1244,
				'area' => 'Bani',
				'zip_code' => 2407,
			),
			73 => 
			array (
				'id' => 1074,
				'id_city' => 1245,
				'area' => 'Basista',
				'zip_code' => 2422,
			),
			74 => 
			array (
				'id' => 1075,
				'id_city' => 1246,
				'area' => 'Bautista',
				'zip_code' => 2424,
			),
			75 => 
			array (
				'id' => 1076,
				'id_city' => 1247,
				'area' => 'Bayambang',
				'zip_code' => 2423,
			),
			76 => 
			array (
				'id' => 1077,
				'id_city' => 1248,
				'area' => 'Binalonan',
				'zip_code' => 2436,
			),
			77 => 
			array (
				'id' => 1078,
				'id_city' => 1249,
				'area' => 'Binmaley',
				'zip_code' => 2417,
			),
			78 => 
			array (
				'id' => 1079,
				'id_city' => 1250,
				'area' => 'Bolinao',
				'zip_code' => 2406,
			),
			79 => 
			array (
				'id' => 1080,
				'id_city' => 1251,
				'area' => 'Bugallon',
				'zip_code' => 2416,
			),
			80 => 
			array (
				'id' => 1081,
				'id_city' => 1252,
				'area' => 'Burgos',
				'zip_code' => 2410,
			),
			81 => 
			array (
				'id' => 1082,
				'id_city' => 1253,
				'area' => 'Calasiao',
				'zip_code' => 2418,
			),
			82 => 
			array (
				'id' => 1083,
				'id_city' => 1254,
				'area' => 'Dasol',
				'zip_code' => 2411,
			),
			83 => 
			array (
				'id' => 1084,
				'id_city' => 1255,
				'area' => 'Infanta',
				'zip_code' => 2412,
			),
			84 => 
			array (
				'id' => 1085,
				'id_city' => 1256,
				'area' => 'Labrador',
				'zip_code' => 2402,
			),
			85 => 
			array (
				'id' => 1086,
				'id_city' => 1257,
				'area' => 'Laoac',
				'zip_code' => 2437,
			),
			86 => 
			array (
				'id' => 1087,
				'id_city' => 1258,
				'area' => 'Lingayen',
				'zip_code' => 2401,
			),
			87 => 
			array (
				'id' => 1088,
				'id_city' => 1259,
				'area' => 'Mabini',
				'zip_code' => 2409,
			),
			88 => 
			array (
				'id' => 1089,
				'id_city' => 1260,
				'area' => 'Malasiqui',
				'zip_code' => 2421,
			),
			89 => 
			array (
				'id' => 1090,
				'id_city' => 1261,
				'area' => 'Manaoag',
				'zip_code' => 2430,
			),
			90 => 
			array (
				'id' => 1091,
				'id_city' => 1262,
				'area' => 'Mangaldan',
				'zip_code' => 2432,
			),
			91 => 
			array (
				'id' => 1092,
				'id_city' => 1263,
				'area' => 'Mangatarem',
				'zip_code' => 2413,
			),
			92 => 
			array (
				'id' => 1093,
				'id_city' => 1264,
				'area' => 'Mapandan',
				'zip_code' => 2429,
			),
			93 => 
			array (
				'id' => 1094,
				'id_city' => 1265,
				'area' => 'Natividad',
				'zip_code' => 2446,
			),
			94 => 
			array (
				'id' => 1095,
				'id_city' => 1267,
				'area' => 'Rosales',
				'zip_code' => 2441,
			),
			95 => 
			array (
				'id' => 1096,
				'id_city' => 1268,
				'area' => 'San Fabian',
				'zip_code' => 2433,
			),
			96 => 
			array (
				'id' => 1097,
				'id_city' => 1269,
				'area' => 'San Jacinto',
				'zip_code' => 2431,
			),
			97 => 
			array (
				'id' => 1098,
				'id_city' => 1270,
				'area' => 'San Manuel',
				'zip_code' => 2438,
			),
			98 => 
			array (
				'id' => 1099,
				'id_city' => 1271,
				'area' => 'San Nicolas',
				'zip_code' => 2447,
			),
			99 => 
			array (
				'id' => 1100,
				'id_city' => 1272,
				'area' => 'San Quintin',
				'zip_code' => 2444,
			),
			100 => 
			array (
				'id' => 1101,
				'id_city' => 1273,
				'area' => 'Santa Barbara',
				'zip_code' => 2419,
			),
			101 => 
			array (
				'id' => 1102,
				'id_city' => 1274,
				'area' => 'Santa Maria',
				'zip_code' => 2440,
			),
			102 => 
			array (
				'id' => 1103,
				'id_city' => 1275,
				'area' => 'Santo Tomas',
				'zip_code' => 2426,
			),
			103 => 
			array (
				'id' => 1104,
				'id_city' => 1276,
				'area' => 'Sison',
				'zip_code' => 2434,
			),
			104 => 
			array (
				'id' => 1105,
				'id_city' => 1277,
				'area' => 'Sual',
				'zip_code' => 2403,
			),
			105 => 
			array (
				'id' => 1106,
				'id_city' => 1278,
				'area' => 'Tayug',
				'zip_code' => 2445,
			),
			106 => 
			array (
				'id' => 1107,
				'id_city' => 1279,
				'area' => 'Umingan',
				'zip_code' => 2443,
			),
			107 => 
			array (
				'id' => 1108,
				'id_city' => 1280,
				'area' => 'Urbiztondo',
				'zip_code' => 2414,
			),
			108 => 
			array (
				'id' => 1109,
				'id_city' => 1281,
				'area' => 'Villasis',
				'zip_code' => 2427,
			),
			109 => 
			array (
				'id' => 1110,
				'id_city' => 1282,
				'area' => 'Lucena City',
				'zip_code' => 4301,
			),
			110 => 
			array (
				'id' => 1111,
				'id_city' => 1284,
				'area' => 'Agdangan',
				'zip_code' => 4304,
			),
			111 => 
			array (
				'id' => 1112,
				'id_city' => 1285,
				'area' => 'Alabat',
				'zip_code' => 4333,
			),
			112 => 
			array (
				'id' => 1113,
				'id_city' => 1286,
				'area' => 'Atimonan',
				'zip_code' => 4331,
			),
			113 => 
			array (
				'id' => 1114,
				'id_city' => 1287,
				'area' => 'Buenavista',
				'zip_code' => 4320,
			),
			114 => 
			array (
				'id' => 1115,
				'id_city' => 1288,
				'area' => 'Burdeos',
				'zip_code' => 4340,
			),
			115 => 
			array (
				'id' => 1116,
				'id_city' => 1289,
				'area' => 'Calauag',
				'zip_code' => 4318,
			),
			116 => 
			array (
				'id' => 1117,
				'id_city' => 1290,
				'area' => 'Candelaria',
				'zip_code' => 4323,
			),
			117 => 
			array (
				'id' => 1118,
				'id_city' => 1291,
				'area' => 'Catanauan',
				'zip_code' => 4311,
			),
			118 => 
			array (
				'id' => 1119,
				'id_city' => 1292,
				'area' => 'Dolores',
				'zip_code' => 4326,
			),
			119 => 
			array (
				'id' => 1120,
				'id_city' => 1294,
				'area' => 'General Nakar',
				'zip_code' => 4338,
			),
			120 => 
			array (
				'id' => 1121,
				'id_city' => 1295,
				'area' => 'Guinayangan',
				'zip_code' => 4319,
			),
			121 => 
			array (
				'id' => 1122,
				'id_city' => 1296,
				'area' => 'Gumaca',
				'zip_code' => 4307,
			),
			122 => 
			array (
				'id' => 1123,
				'id_city' => 1297,
				'area' => 'Infanta',
				'zip_code' => 4336,
			),
			123 => 
			array (
				'id' => 1124,
				'id_city' => 1298,
				'area' => 'Jomalig',
				'zip_code' => 4342,
			),
			124 => 
			array (
				'id' => 1125,
				'id_city' => 1299,
				'area' => 'Lopez',
				'zip_code' => 4316,
			),
			125 => 
			array (
				'id' => 1126,
				'id_city' => 1300,
				'area' => 'Lucban',
				'zip_code' => 4328,
			),
			126 => 
			array (
				'id' => 1127,
				'id_city' => 1301,
				'area' => 'Macalelon',
				'zip_code' => 4309,
			),
			127 => 
			array (
				'id' => 1128,
				'id_city' => 1302,
				'area' => 'Mauban',
				'zip_code' => 4330,
			),
			128 => 
			array (
				'id' => 1129,
				'id_city' => 1303,
				'area' => 'Mulanay',
				'zip_code' => 4312,
			),
			129 => 
			array (
				'id' => 1130,
				'id_city' => 1304,
				'area' => 'Padre Burgos',
				'zip_code' => 4303,
			),
			130 => 
			array (
				'id' => 1131,
				'id_city' => 1305,
				'area' => 'Pagbilao',
				'zip_code' => 4302,
			),
			131 => 
			array (
				'id' => 1132,
				'id_city' => 1306,
				'area' => 'Panukulan',
				'zip_code' => 4337,
			),
			132 => 
			array (
				'id' => 1133,
				'id_city' => 1307,
				'area' => 'Patnanungan',
				'zip_code' => 4341,
			),
			133 => 
			array (
				'id' => 1134,
				'id_city' => 1308,
				'area' => 'Perez',
				'zip_code' => 4334,
			),
			134 => 
			array (
				'id' => 1135,
				'id_city' => 1309,
				'area' => 'Pitogo',
				'zip_code' => 4308,
			),
			135 => 
			array (
				'id' => 1136,
				'id_city' => 1310,
				'area' => 'Plaridel',
				'zip_code' => 4306,
			),
			136 => 
			array (
				'id' => 1137,
				'id_city' => 1312,
				'area' => 'Quezon',
				'zip_code' => 4332,
			),
			137 => 
			array (
				'id' => 1138,
				'id_city' => 1313,
				'area' => 'Real',
				'zip_code' => 4335,
			),
			138 => 
			array (
				'id' => 1139,
				'id_city' => 1314,
				'area' => 'Sampaloc',
				'zip_code' => 4329,
			),
			139 => 
			array (
				'id' => 1140,
				'id_city' => 1315,
				'area' => 'San Andres',
				'zip_code' => 4314,
			),
			140 => 
			array (
				'id' => 1141,
				'id_city' => 1316,
				'area' => 'San Antonio',
				'zip_code' => 4324,
			),
			141 => 
			array (
				'id' => 1142,
				'id_city' => 1318,
				'area' => 'San Narciso',
				'zip_code' => 4313,
			),
			142 => 
			array (
				'id' => 1143,
				'id_city' => 1319,
				'area' => 'Sariaya',
				'zip_code' => 4322,
			),
			143 => 
			array (
				'id' => 1144,
				'id_city' => 1320,
				'area' => 'Tagkawayan',
				'zip_code' => 4321,
			),
			144 => 
			array (
				'id' => 1145,
				'id_city' => 1321,
				'area' => 'Tiaong',
				'zip_code' => 4325,
			),
			145 => 
			array (
				'id' => 1146,
				'id_city' => 1322,
				'area' => 'Unisan',
				'zip_code' => 4305,
			),
			146 => 
			array (
				'id' => 1147,
				'id_city' => 1323,
				'area' => 'Aglipay',
				'zip_code' => 3403,
			),
			147 => 
			array (
				'id' => 1148,
				'id_city' => 1324,
				'area' => 'Cabarroguis',
				'zip_code' => 3400,
			),
			148 => 
			array (
				'id' => 1149,
				'id_city' => 1325,
				'area' => 'Diffun',
				'zip_code' => 3401,
			),
			149 => 
			array (
				'id' => 1150,
				'id_city' => 1326,
				'area' => 'Maddela',
				'zip_code' => 3404,
			),
			150 => 
			array (
				'id' => 1151,
				'id_city' => 1328,
				'area' => 'Saguday',
				'zip_code' => 3402,
			),
			151 => 
			array (
				'id' => 1152,
				'id_city' => 1329,
				'area' => 'Antipolo City',
				'zip_code' => 1870,
			),
			152 => 
			array (
				'id' => 1153,
				'id_city' => 1330,
				'area' => 'Angono',
				'zip_code' => 1930,
			),
			153 => 
			array (
				'id' => 1154,
				'id_city' => 1331,
				'area' => 'Baras',
				'zip_code' => 1970,
			),
			154 => 
			array (
				'id' => 1155,
				'id_city' => 1332,
				'area' => 'Binangonan',
				'zip_code' => 1940,
			),
			155 => 
			array (
				'id' => 1156,
				'id_city' => 1333,
				'area' => 'Cainta',
				'zip_code' => 1900,
			),
			156 => 
			array (
				'id' => 1157,
				'id_city' => 1334,
				'area' => 'Cardona',
				'zip_code' => 1950,
			),
			157 => 
			array (
				'id' => 1158,
				'id_city' => 1335,
				'area' => 'Jalajala',
				'zip_code' => 1900,
			),
			158 => 
			array (
				'id' => 1159,
				'id_city' => 1336,
				'area' => 'Morong',
				'zip_code' => 1960,
			),
			159 => 
			array (
				'id' => 1160,
				'id_city' => 1337,
				'area' => 'Pililla',
				'zip_code' => 1910,
			),
			160 => 
			array (
				'id' => 1161,
				'id_city' => 1338,
				'area' => 'Rodriguez',
				'zip_code' => 1860,
			),
			161 => 
			array (
				'id' => 1162,
				'id_city' => 1339,
				'area' => 'San Mateo',
				'zip_code' => 1850,
			),
			162 => 
			array (
				'id' => 1163,
				'id_city' => 1340,
				'area' => 'Tanay',
				'zip_code' => 1980,
			),
			163 => 
			array (
				'id' => 1164,
				'id_city' => 1341,
				'area' => 'Taytay',
				'zip_code' => 1920,
			),
			164 => 
			array (
				'id' => 1165,
				'id_city' => 1342,
				'area' => 'Teresa',
				'zip_code' => 1880,
			),
			165 => 
			array (
				'id' => 1166,
				'id_city' => 1343,
				'area' => 'Alcantara',
				'zip_code' => 5509,
			),
			166 => 
			array (
				'id' => 1167,
				'id_city' => 1345,
				'area' => 'Cajidiocan',
				'zip_code' => 5512,
			),
			167 => 
			array (
				'id' => 1168,
				'id_city' => 1346,
				'area' => 'Calatrava',
				'zip_code' => 5503,
			),
			168 => 
			array (
				'id' => 1169,
				'id_city' => 1347,
				'area' => 'Concepcion',
				'zip_code' => 5516,
			),
			169 => 
			array (
				'id' => 1170,
				'id_city' => 1348,
				'area' => 'Corcuera',
				'zip_code' => 5514,
			),
			170 => 
			array (
				'id' => 1171,
				'id_city' => 1349,
				'area' => 'Ferrol',
				'zip_code' => 5506,
			),
			171 => 
			array (
				'id' => 1172,
				'id_city' => 1350,
				'area' => 'Looc',
				'zip_code' => 5507,
			),
			172 => 
			array (
				'id' => 1173,
				'id_city' => 1351,
				'area' => 'Magdiwang',
				'zip_code' => 5511,
			),
			173 => 
			array (
				'id' => 1174,
				'id_city' => 1352,
				'area' => 'Odiongan',
				'zip_code' => 5505,
			),
			174 => 
			array (
				'id' => 1175,
				'id_city' => 1353,
				'area' => 'Romblon',
				'zip_code' => 5500,
			),
			175 => 
			array (
				'id' => 1176,
				'id_city' => 1354,
				'area' => 'San Agustin',
				'zip_code' => 5501,
			),
			176 => 
			array (
				'id' => 1177,
				'id_city' => 1355,
				'area' => 'San Andres',
				'zip_code' => 5504,
			),
			177 => 
			array (
				'id' => 1178,
				'id_city' => 1356,
				'area' => 'San Fernando',
				'zip_code' => 5513,
			),
			178 => 
			array (
				'id' => 1179,
				'id_city' => 1357,
				'area' => 'San Jose',
				'zip_code' => 5510,
			),
			179 => 
			array (
				'id' => 1180,
				'id_city' => 1358,
				'area' => 'Santa Fe',
				'zip_code' => 5508,
			),
			180 => 
			array (
				'id' => 1181,
				'id_city' => 1386,
				'area' => 'Alabel',
				'zip_code' => 9501,
			),
			181 => 
			array (
				'id' => 1182,
				'id_city' => 1387,
				'area' => 'Glan',
				'zip_code' => 9517,
			),
			182 => 
			array (
				'id' => 1183,
				'id_city' => 1388,
				'area' => 'Kiamba',
				'zip_code' => 9514,
			),
			183 => 
			array (
				'id' => 1184,
				'id_city' => 1389,
				'area' => 'Maasim',
				'zip_code' => 9502,
			),
			184 => 
			array (
				'id' => 1185,
				'id_city' => 1390,
				'area' => 'Maitum',
				'zip_code' => 9515,
			),
			185 => 
			array (
				'id' => 1186,
				'id_city' => 1391,
				'area' => 'Malapatan',
				'zip_code' => 9516,
			),
			186 => 
			array (
				'id' => 1187,
				'id_city' => 1392,
				'area' => 'Malungon',
				'zip_code' => 9503,
			),
			187 => 
			array (
				'id' => 1188,
				'id_city' => 1393,
				'area' => 'Enrique Villanueva',
				'zip_code' => 6230,
			),
			188 => 
			array (
				'id' => 1189,
				'id_city' => 1394,
				'area' => 'Larena',
				'zip_code' => 6226,
			),
			189 => 
			array (
				'id' => 1190,
				'id_city' => 1395,
				'area' => 'Lazi',
				'zip_code' => 6228,
			),
			190 => 
			array (
				'id' => 1191,
				'id_city' => 1396,
				'area' => 'Maria',
				'zip_code' => 6229,
			),
			191 => 
			array (
				'id' => 1192,
				'id_city' => 1397,
				'area' => 'San Juan',
				'zip_code' => 6227,
			),
			192 => 
			array (
				'id' => 1193,
				'id_city' => 1400,
				'area' => 'Barcelona',
				'zip_code' => 4712,
			),
			193 => 
			array (
				'id' => 1194,
				'id_city' => 1401,
				'area' => 'Bulan',
				'zip_code' => 4706,
			),
			194 => 
			array (
				'id' => 1195,
				'id_city' => 1402,
				'area' => 'Bulusan',
				'zip_code' => 4704,
			),
			195 => 
			array (
				'id' => 1196,
				'id_city' => 1403,
				'area' => 'Casiguran',
				'zip_code' => 4702,
			),
			196 => 
			array (
				'id' => 1197,
				'id_city' => 1404,
				'area' => 'Castilla',
				'zip_code' => 4713,
			),
			197 => 
			array (
				'id' => 1198,
				'id_city' => 1405,
				'area' => 'Donsol',
				'zip_code' => 4715,
			),
			198 => 
			array (
				'id' => 1199,
				'id_city' => 1406,
				'area' => 'Gubat',
				'zip_code' => 4710,
			),
			199 => 
			array (
				'id' => 1200,
				'id_city' => 1407,
				'area' => 'Irosin',
				'zip_code' => 4707,
			),
			200 => 
			array (
				'id' => 1201,
				'id_city' => 1408,
				'area' => 'Juban',
				'zip_code' => 4703,
			),
			201 => 
			array (
				'id' => 1202,
				'id_city' => 1409,
				'area' => 'Magallanes',
				'zip_code' => 4705,
			),
			202 => 
			array (
				'id' => 1203,
				'id_city' => 1410,
				'area' => 'Matnog',
				'zip_code' => 4708,
			),
			203 => 
			array (
				'id' => 1204,
				'id_city' => 1411,
				'area' => 'Pilar',
				'zip_code' => 4714,
			),
			204 => 
			array (
				'id' => 1205,
				'id_city' => 1412,
				'area' => 'Prieto Diaz',
				'zip_code' => 4711,
			),
			205 => 
			array (
				'id' => 1206,
				'id_city' => 1413,
				'area' => 'Santa Magdalena',
				'zip_code' => 4709,
			),
			206 => 
			array (
				'id' => 1207,
				'id_city' => 1415,
				'area' => 'Koronadal City',
				'zip_code' => 9506,
			),
			207 => 
			array (
				'id' => 1208,
				'id_city' => 1416,
				'area' => 'Banga',
				'zip_code' => 9511,
			),
			208 => 
			array (
				'id' => 1209,
				'id_city' => 1418,
				'area' => 'Norala',
				'zip_code' => 9508,
			),
			209 => 
			array (
				'id' => 1210,
				'id_city' => 1419,
				'area' => 'Polomolok',
				'zip_code' => 9504,
			),
			210 => 
			array (
				'id' => 1211,
				'id_city' => 1421,
				'area' => 'Surallah',
				'zip_code' => 9512,
			),
			211 => 
			array (
				'id' => 1212,
				'id_city' => 1423,
				'area' => 'Tampakan',
				'zip_code' => 9507,
			),
			212 => 
			array (
				'id' => 1213,
				'id_city' => 1424,
				'area' => 'Tantangan',
				'zip_code' => 9510,
			),
			213 => 
			array (
				'id' => 1214,
				'id_city' => 1425,
				'area' => 'Tupi',
				'zip_code' => 9505,
			),
			214 => 
			array (
				'id' => 1215,
				'id_city' => 1427,
				'area' => 'Anahawan',
				'zip_code' => 6610,
			),
			215 => 
			array (
				'id' => 1216,
				'id_city' => 1428,
				'area' => 'Bontoc',
				'zip_code' => 6604,
			),
			216 => 
			array (
				'id' => 1217,
				'id_city' => 1429,
				'area' => 'Hinunangan',
				'zip_code' => 6608,
			),
			217 => 
			array (
				'id' => 1218,
				'id_city' => 1430,
				'area' => 'Hinundayan',
				'zip_code' => 6609,
			),
			218 => 
			array (
				'id' => 1219,
				'id_city' => 1431,
				'area' => 'Libagon',
				'zip_code' => 6615,
			),
			219 => 
			array (
				'id' => 1220,
				'id_city' => 1432,
				'area' => 'Liloan',
				'zip_code' => 6612,
			),
			220 => 
			array (
				'id' => 1221,
				'id_city' => 1434,
				'area' => 'Macrohon',
				'zip_code' => 6601,
			),
			221 => 
			array (
				'id' => 1222,
				'id_city' => 1435,
				'area' => 'Malitbog',
				'zip_code' => 6603,
			),
			222 => 
			array (
				'id' => 1223,
				'id_city' => 1436,
				'area' => 'Padre Burgos',
				'zip_code' => 6602,
			),
			223 => 
			array (
				'id' => 1224,
				'id_city' => 1437,
				'area' => 'Pintuyan',
				'zip_code' => 6614,
			),
			224 => 
			array (
				'id' => 1225,
				'id_city' => 1439,
				'area' => 'San Francisco',
				'zip_code' => 6613,
			),
			225 => 
			array (
				'id' => 1226,
				'id_city' => 1441,
				'area' => 'San Ricardo',
				'zip_code' => 6617,
			),
			226 => 
			array (
				'id' => 1227,
				'id_city' => 1442,
				'area' => 'Silago',
				'zip_code' => 6607,
			),
			227 => 
			array (
				'id' => 1228,
				'id_city' => 1443,
				'area' => 'Sogod',
				'zip_code' => 6606,
			),
			228 => 
			array (
				'id' => 1229,
				'id_city' => 1444,
				'area' => 'Tomas Oppus',
				'zip_code' => 6605,
			),
			229 => 
			array (
				'id' => 1230,
				'id_city' => 1446,
				'area' => 'Bagumbayan',
				'zip_code' => 9810,
			),
			230 => 
			array (
				'id' => 1231,
				'id_city' => 1447,
				'area' => 'Columbio',
				'zip_code' => 9801,
			),
			231 => 
			array (
				'id' => 1232,
				'id_city' => 1449,
				'area' => 'Isulan',
				'zip_code' => 9805,
			),
			232 => 
			array (
				'id' => 1233,
				'id_city' => 1450,
				'area' => 'Kalamansig',
				'zip_code' => 9808,
			),
			233 => 
			array (
				'id' => 1234,
				'id_city' => 1453,
				'area' => 'Lutayan',
				'zip_code' => 9803,
			),
			234 => 
			array (
				'id' => 1235,
				'id_city' => 1454,
				'area' => 'Palimbang',
				'zip_code' => 9809,
			),
			235 => 
			array (
				'id' => 1236,
				'id_city' => 1459,
				'area' => 'Indanan',
				'zip_code' => 7407,
			),
			236 => 
			array (
				'id' => 1237,
				'id_city' => 1460,
				'area' => 'Jolo',
				'zip_code' => 7400,
			),
			237 => 
			array (
				'id' => 1238,
				'id_city' => 1462,
				'area' => 'Lugus',
				'zip_code' => 7411,
			),
			238 => 
			array (
				'id' => 1239,
				'id_city' => 1463,
				'area' => 'Luuk',
				'zip_code' => 7404,
			),
			239 => 
			array (
				'id' => 1240,
				'id_city' => 1464,
				'area' => 'Maimbung',
				'zip_code' => 7409,
			),
			240 => 
			array (
				'id' => 1241,
				'id_city' => 1468,
				'area' => 'Panglima Estino',
				'zip_code' => 7415,
			),
			241 => 
			array (
				'id' => 1242,
				'id_city' => 1470,
				'area' => 'Parang',
				'zip_code' => 7408,
			),
			242 => 
			array (
				'id' => 1243,
				'id_city' => 1471,
				'area' => 'Pata',
				'zip_code' => 7405,
			),
			243 => 
			array (
				'id' => 1244,
				'id_city' => 1472,
				'area' => 'Patikul',
				'zip_code' => 7401,
			),
			244 => 
			array (
				'id' => 1245,
				'id_city' => 1473,
				'area' => 'Siasi',
				'zip_code' => 7412,
			),
			245 => 
			array (
				'id' => 1246,
				'id_city' => 1474,
				'area' => 'Talipao',
				'zip_code' => 7403,
			),
			246 => 
			array (
				'id' => 1247,
				'id_city' => 1475,
				'area' => 'Tapul',
				'zip_code' => 7410,
			),
			247 => 
			array (
				'id' => 1248,
				'id_city' => 1476,
				'area' => 'Surigao City',
				'zip_code' => 8400,
			),
			248 => 
			array (
				'id' => 1249,
				'id_city' => 1477,
				'area' => 'Alegria',
				'zip_code' => 8425,
			),
			249 => 
			array (
				'id' => 1250,
				'id_city' => 1478,
				'area' => 'Bacuag',
				'zip_code' => 8408,
			),
			250 => 
			array (
				'id' => 1251,
				'id_city' => 1480,
				'area' => 'Burgos',
				'zip_code' => 8424,
			),
			251 => 
			array (
				'id' => 1252,
				'id_city' => 1482,
				'area' => 'Claver',
				'zip_code' => 8410,
			),
			252 => 
			array (
				'id' => 1253,
				'id_city' => 1483,
				'area' => 'Dapa',
				'zip_code' => 8417,
			),
			253 => 
			array (
				'id' => 1254,
				'id_city' => 1484,
				'area' => 'Del Carmen',
				'zip_code' => 8418,
			),
			254 => 
			array (
				'id' => 1255,
				'id_city' => 1487,
				'area' => 'Gigaquit',
				'zip_code' => 8409,
			),
			255 => 
			array (
				'id' => 1256,
				'id_city' => 1490,
				'area' => 'Mainit',
				'zip_code' => 8407,
			),
			256 => 
			array (
				'id' => 1257,
				'id_city' => 1492,
				'area' => 'Pilar',
				'zip_code' => 8420,
			),
			257 => 
			array (
				'id' => 1258,
				'id_city' => 1493,
				'area' => 'Placer',
				'zip_code' => 8405,
			),
			258 => 
			array (
				'id' => 1259,
				'id_city' => 1494,
				'area' => 'San Benito',
				'zip_code' => 8423,
			),
			259 => 
			array (
				'id' => 1260,
				'id_city' => 1495,
				'area' => 'San Francisco',
				'zip_code' => 8401,
			),
			260 => 
			array (
				'id' => 1261,
				'id_city' => 1496,
				'area' => 'San Isidro',
				'zip_code' => 8421,
			),
			261 => 
			array (
				'id' => 1262,
				'id_city' => 1498,
				'area' => 'Santa Monica',
				'zip_code' => 8422,
			),
			262 => 
			array (
				'id' => 1263,
				'id_city' => 1499,
				'area' => 'Sison',
				'zip_code' => 8404,
			),
			263 => 
			array (
				'id' => 1264,
				'id_city' => 1500,
				'area' => 'Socorro',
				'zip_code' => 8416,
			),
			264 => 
			array (
				'id' => 1265,
				'id_city' => 1501,
				'area' => 'Tagana-an',
				'zip_code' => 8403,
			),
			265 => 
			array (
				'id' => 1266,
				'id_city' => 1503,
				'area' => 'Tubod',
				'zip_code' => 8406,
			),
			266 => 
			array (
				'id' => 1267,
				'id_city' => 1506,
				'area' => 'Barobo',
				'zip_code' => 8309,
			),
			267 => 
			array (
				'id' => 1268,
				'id_city' => 1507,
				'area' => 'Bayabas',
				'zip_code' => 8303,
			),
			268 => 
			array (
				'id' => 1269,
				'id_city' => 1508,
				'area' => 'Cagwait',
				'zip_code' => 8304,
			),
			269 => 
			array (
				'id' => 1270,
				'id_city' => 1510,
				'area' => 'Carmen',
				'zip_code' => 8315,
			),
			270 => 
			array (
				'id' => 1271,
				'id_city' => 1511,
				'area' => 'Carrascal',
				'zip_code' => 8318,
			),
			271 => 
			array (
				'id' => 1272,
				'id_city' => 1513,
				'area' => 'Hinatuan',
				'zip_code' => 8310,
			),
			272 => 
			array (
				'id' => 1273,
				'id_city' => 1514,
				'area' => 'Lanuza',
				'zip_code' => 8314,
			),
			273 => 
			array (
				'id' => 1274,
				'id_city' => 1515,
				'area' => 'Lianga',
				'zip_code' => 8307,
			),
			274 => 
			array (
				'id' => 1275,
				'id_city' => 1516,
				'area' => 'Lingig',
				'zip_code' => 8312,
			),
			275 => 
			array (
				'id' => 1276,
				'id_city' => 1517,
				'area' => 'Madrid',
				'zip_code' => 8316,
			),
			276 => 
			array (
				'id' => 1277,
				'id_city' => 1518,
				'area' => 'Marihatag',
				'zip_code' => 8306,
			),
			277 => 
			array (
				'id' => 1278,
				'id_city' => 1519,
				'area' => 'San Agustin',
				'zip_code' => 8305,
			),
			278 => 
			array (
				'id' => 1279,
				'id_city' => 1520,
				'area' => 'San Miguel',
				'zip_code' => 8301,
			),
			279 => 
			array (
				'id' => 1280,
				'id_city' => 1521,
				'area' => 'Tagbina',
				'zip_code' => 8308,
			),
			280 => 
			array (
				'id' => 1281,
				'id_city' => 1522,
				'area' => 'Tago',
				'zip_code' => 8302,
			),
			281 => 
			array (
				'id' => 1282,
				'id_city' => 1523,
				'area' => 'Tarlac City',
				'zip_code' => 2300,
			),
			282 => 
			array (
				'id' => 1283,
				'id_city' => 1524,
				'area' => 'Anao',
				'zip_code' => 2310,
			),
			283 => 
			array (
				'id' => 1284,
				'id_city' => 1525,
				'area' => 'Bamban',
				'zip_code' => 2317,
			),
			284 => 
			array (
				'id' => 1285,
				'id_city' => 1526,
				'area' => 'Camiling',
				'zip_code' => 2306,
			),
			285 => 
			array (
				'id' => 1286,
				'id_city' => 1527,
				'area' => 'Capas',
				'zip_code' => 2333,
			),
			286 => 
			array (
				'id' => 1287,
				'id_city' => 1528,
				'area' => 'Concepcion',
				'zip_code' => 2316,
			),
			287 => 
			array (
				'id' => 1288,
				'id_city' => 1529,
				'area' => 'Gerona',
				'zip_code' => 2302,
			),
			288 => 
			array (
				'id' => 1289,
				'id_city' => 1530,
				'area' => 'La Paz',
				'zip_code' => 2314,
			),
			289 => 
			array (
				'id' => 1290,
				'id_city' => 1531,
				'area' => 'Mayantoc',
				'zip_code' => 2304,
			),
			290 => 
			array (
				'id' => 1291,
				'id_city' => 1532,
				'area' => 'Moncada',
				'zip_code' => 2334,
			),
			291 => 
			array (
				'id' => 1292,
				'id_city' => 1534,
				'area' => 'Pura',
				'zip_code' => 2312,
			),
			292 => 
			array (
				'id' => 1293,
				'id_city' => 1535,
				'area' => 'Ramos',
				'zip_code' => 2311,
			),
			293 => 
			array (
				'id' => 1294,
				'id_city' => 1536,
				'area' => 'San Clemente',
				'zip_code' => 2305,
			),
			294 => 
			array (
				'id' => 1295,
				'id_city' => 1537,
				'area' => 'San Jose',
				'zip_code' => 2301,
			),
			295 => 
			array (
				'id' => 1296,
				'id_city' => 1538,
				'area' => 'San Manuel',
				'zip_code' => 2309,
			),
			296 => 
			array (
				'id' => 1297,
				'id_city' => 1539,
				'area' => 'Santa Ignacia',
				'zip_code' => 2303,
			),
			297 => 
			array (
				'id' => 1298,
				'id_city' => 1540,
				'area' => 'Victoria',
				'zip_code' => 2313,
			),
			298 => 
			array (
				'id' => 1299,
				'id_city' => 1552,
				'area' => 'Olongapo City',
				'zip_code' => 2200,
			),
			299 => 
			array (
				'id' => 1300,
				'id_city' => 1553,
				'area' => 'Botolan',
				'zip_code' => 2202,
			),
			300 => 
			array (
				'id' => 1301,
				'id_city' => 1554,
				'area' => 'Cabangan',
				'zip_code' => 2203,
			),
			301 => 
			array (
				'id' => 1302,
				'id_city' => 1555,
				'area' => 'Candelaria',
				'zip_code' => 2212,
			),
			302 => 
			array (
				'id' => 1303,
				'id_city' => 1556,
				'area' => 'Castillejos',
				'zip_code' => 2208,
			),
			303 => 
			array (
				'id' => 1304,
				'id_city' => 1557,
				'area' => 'Iba',
				'zip_code' => 2201,
			),
			304 => 
			array (
				'id' => 1305,
				'id_city' => 1558,
				'area' => 'Masinloc',
				'zip_code' => 2211,
			),
			305 => 
			array (
				'id' => 1306,
				'id_city' => 1560,
				'area' => 'San Antonio',
				'zip_code' => 2206,
			),
			306 => 
			array (
				'id' => 1307,
				'id_city' => 1561,
				'area' => 'San Felipe',
				'zip_code' => 2204,
			),
			307 => 
			array (
				'id' => 1308,
				'id_city' => 1562,
				'area' => 'San Marcelino',
				'zip_code' => 2207,
			),
			308 => 
			array (
				'id' => 1309,
				'id_city' => 1563,
				'area' => 'San Narciso',
				'zip_code' => 2205,
			),
			309 => 
			array (
				'id' => 1310,
				'id_city' => 1564,
				'area' => 'Santa Cruz',
				'zip_code' => 2213,
			),
			310 => 
			array (
				'id' => 1311,
				'id_city' => 1565,
				'area' => 'Subic',
				'zip_code' => 2209,
			),
			311 => 
			array (
				'id' => 1312,
				'id_city' => 1566,
				'area' => 'Dapitan City',
				'zip_code' => 7101,
			),
			312 => 
			array (
				'id' => 1313,
				'id_city' => 1567,
				'area' => 'Dipolog City',
				'zip_code' => 7100,
			),
			313 => 
			array (
				'id' => 1314,
				'id_city' => 1569,
				'area' => 'Baliguian',
				'zip_code' => 7123,
			),
			314 => 
			array (
				'id' => 1315,
				'id_city' => 1571,
				'area' => 'Gutalac',
				'zip_code' => 7118,
			),
			315 => 
			array (
				'id' => 1316,
				'id_city' => 1573,
				'area' => 'Kalawit',
				'zip_code' => 7124,
			),
			316 => 
			array (
				'id' => 1317,
				'id_city' => 1574,
				'area' => 'Katipunan',
				'zip_code' => 7109,
			),
			317 => 
			array (
				'id' => 1318,
				'id_city' => 1575,
				'area' => 'La Libertad',
				'zip_code' => 7119,
			),
			318 => 
			array (
				'id' => 1319,
				'id_city' => 1576,
				'area' => 'Labason',
				'zip_code' => 7117,
			),
			319 => 
			array (
				'id' => 1320,
				'id_city' => 1577,
				'area' => 'Liloy',
				'zip_code' => 7115,
			),
			320 => 
			array (
				'id' => 1321,
				'id_city' => 1578,
				'area' => 'Manukan',
				'zip_code' => 7110,
			),
			321 => 
			array (
				'id' => 1322,
				'id_city' => 1579,
				'area' => 'Mutia',
				'zip_code' => 7107,
			),
			322 => 
			array (
				'id' => 1323,
				'id_city' => 1581,
				'area' => 'Polanco',
				'zip_code' => 7106,
			),
			323 => 
			array (
				'id' => 1324,
				'id_city' => 1583,
				'area' => 'Rizal',
				'zip_code' => 7104,
			),
			324 => 
			array (
				'id' => 1325,
				'id_city' => 1584,
				'area' => 'Salug',
				'zip_code' => 7114,
			),
			325 => 
			array (
				'id' => 1326,
				'id_city' => 1586,
				'area' => 'Siayan',
				'zip_code' => 7113,
			),
			326 => 
			array (
				'id' => 1327,
				'id_city' => 1587,
				'area' => 'Sibuco',
				'zip_code' => 7122,
			),
			327 => 
			array (
				'id' => 1328,
				'id_city' => 1588,
				'area' => 'Sibutad',
				'zip_code' => 7103,
			),
			328 => 
			array (
				'id' => 1329,
				'id_city' => 1590,
				'area' => 'Siocon',
				'zip_code' => 7120,
			),
			329 => 
			array (
				'id' => 1330,
				'id_city' => 1592,
				'area' => 'Tampilisan',
				'zip_code' => 7116,
			),
			330 => 
			array (
				'id' => 1331,
				'id_city' => 1593,
				'area' => 'Pagadian City',
				'zip_code' => 7016,
			),
			331 => 
			array (
				'id' => 1332,
				'id_city' => 1594,
				'area' => 'Zamboanga City',
				'zip_code' => 7000,
			),
			332 => 
			array (
				'id' => 1333,
				'id_city' => 1595,
				'area' => 'Aurora',
				'zip_code' => 7020,
			),
			333 => 
			array (
				'id' => 1334,
				'id_city' => 1596,
				'area' => 'Bayog',
				'zip_code' => 7011,
			),
			334 => 
			array (
				'id' => 1335,
				'id_city' => 1597,
				'area' => 'Dimataling',
				'zip_code' => 7032,
			),
			335 => 
			array (
				'id' => 1336,
				'id_city' => 1598,
				'area' => 'Dinas',
				'zip_code' => 7030,
			),
			336 => 
			array (
				'id' => 1337,
				'id_city' => 1599,
				'area' => 'Dumalinao',
				'zip_code' => 7015,
			),
			337 => 
			array (
				'id' => 1338,
				'id_city' => 1600,
				'area' => 'Dumingag',
				'zip_code' => 7028,
			),
			338 => 
			array (
				'id' => 1339,
				'id_city' => 1601,
				'area' => 'Guipos',
				'zip_code' => 7042,
			),
			339 => 
			array (
				'id' => 1340,
				'id_city' => 1602,
				'area' => 'Josefina',
				'zip_code' => 7027,
			),
			340 => 
			array (
				'id' => 1341,
				'id_city' => 1603,
				'area' => 'Kumalarang',
				'zip_code' => 7005,
			),
			341 => 
			array (
				'id' => 1342,
				'id_city' => 1604,
				'area' => 'Labangan',
				'zip_code' => 7017,
			),
			342 => 
			array (
				'id' => 1343,
				'id_city' => 1605,
				'area' => 'Lakewood',
				'zip_code' => 7014,
			),
			343 => 
			array (
				'id' => 1344,
				'id_city' => 1606,
				'area' => 'Lapuyan',
				'zip_code' => 7037,
			),
			344 => 
			array (
				'id' => 1345,
				'id_city' => 1607,
				'area' => 'Mahayag',
				'zip_code' => 7026,
			),
			345 => 
			array (
				'id' => 1346,
				'id_city' => 1608,
				'area' => 'Margosatubig',
				'zip_code' => 7035,
			),
			346 => 
			array (
				'id' => 1347,
				'id_city' => 1609,
				'area' => 'Midsalip',
				'zip_code' => 7021,
			),
			347 => 
			array (
				'id' => 1348,
				'id_city' => 1610,
				'area' => 'Molave',
				'zip_code' => 7023,
			),
			348 => 
			array (
				'id' => 1349,
				'id_city' => 1611,
				'area' => 'Pitogo',
				'zip_code' => 7033,
			),
			349 => 
			array (
				'id' => 1350,
				'id_city' => 1613,
				'area' => 'San Miguel',
				'zip_code' => 7029,
			),
			350 => 
			array (
				'id' => 1351,
				'id_city' => 1614,
				'area' => 'San Pablo',
				'zip_code' => 7031,
			),
			351 => 
			array (
				'id' => 1352,
				'id_city' => 1616,
				'area' => 'Tabina',
				'zip_code' => 7034,
			),
			352 => 
			array (
				'id' => 1353,
				'id_city' => 1617,
				'area' => 'Tambulig',
				'zip_code' => 7025,
			),
			353 => 
			array (
				'id' => 1354,
				'id_city' => 1618,
				'area' => 'Tigbao',
				'zip_code' => 7043,
			),
			354 => 
			array (
				'id' => 1355,
				'id_city' => 1619,
				'area' => 'Tukuran',
				'zip_code' => 7019,
			),
			355 => 
			array (
				'id' => 1356,
				'id_city' => 1620,
				'area' => 'Vincenzo A. Sagun',
				'zip_code' => 7036,
			),
			356 => 
			array (
				'id' => 1357,
				'id_city' => 1621,
				'area' => 'Alicia',
				'zip_code' => 7040,
			),
			357 => 
			array (
				'id' => 1358,
				'id_city' => 1622,
				'area' => 'Buug',
				'zip_code' => 7009,
			),
			358 => 
			array (
				'id' => 1359,
				'id_city' => 1623,
				'area' => 'Diplahan',
				'zip_code' => 7039,
			),
			359 => 
			array (
				'id' => 1360,
				'id_city' => 1624,
				'area' => 'Imelda',
				'zip_code' => 7007,
			),
			360 => 
			array (
				'id' => 1361,
				'id_city' => 1625,
				'area' => 'Ipil',
				'zip_code' => 7001,
			),
			361 => 
			array (
				'id' => 1362,
				'id_city' => 1626,
				'area' => 'Kabasalan',
				'zip_code' => 7005,
			),
			362 => 
			array (
				'id' => 1363,
				'id_city' => 1627,
				'area' => 'Mabuhay',
				'zip_code' => 7010,
			),
			363 => 
			array (
				'id' => 1364,
				'id_city' => 1628,
				'area' => 'Malangas',
				'zip_code' => 7038,
			),
			364 => 
			array (
				'id' => 1365,
				'id_city' => 1629,
				'area' => 'Naga',
				'zip_code' => 7004,
			),
			365 => 
			array (
				'id' => 1366,
				'id_city' => 1630,
				'area' => 'Olutanga',
				'zip_code' => 7041,
			),
			366 => 
			array (
				'id' => 1367,
				'id_city' => 1631,
				'area' => 'Payao',
				'zip_code' => 7008,
			),
			367 => 
			array (
				'id' => 1368,
				'id_city' => 1633,
				'area' => 'Siay',
				'zip_code' => 7006,
			),
			368 => 
			array (
				'id' => 1369,
				'id_city' => 1634,
				'area' => 'Talusan',
				'zip_code' => 7012,
			),
			369 => 
			array (
				'id' => 1370,
				'id_city' => 1635,
				'area' => 'Titay',
				'zip_code' => 7003,
			),
			370 => 
			array (
				'id' => 1371,
				'id_city' => 964,
				'area' => 'Kaybiga/Deparo',
				'zip_code' => 1420,
			),
			371 => 
			array (
				'id' => 1372,
				'id_city' => 964,
				'area' => 'Bagumbong/Pag-asa',
				'zip_code' => 1421,
			),
			372 => 
			array (
				'id' => 1373,
				'id_city' => 964,
				'area' => 'Novaliches North',
				'zip_code' => 1422,
			),
			373 => 
			array (
				'id' => 1374,
				'id_city' => 964,
				'area' => 'Lilles Ville Subdivision',
				'zip_code' => 1423,
			),
			374 => 
			array (
				'id' => 1375,
				'id_city' => 964,
				'area' => 'Captol Parkland Subdivision',
				'zip_code' => 1424,
			),
			375 => 
			array (
				'id' => 1376,
				'id_city' => 964,
				'area' => 'Amparo Subdivision',
				'zip_code' => 1425,
			),
			376 => 
			array (
				'id' => 1377,
				'id_city' => 964,
				'area' => 'Bankers Village',
				'zip_code' => 1426,
			),
			377 => 
			array (
				'id' => 1378,
				'id_city' => 964,
				'area' => 'Tala Leprosarium and Victory Heights',
				'zip_code' => 1427,
			),
			378 => 
			array (
				'id' => 1379,
				'id_city' => 964,
				'area' => 'Bagong Silang',
				'zip_code' => 1428,
			),
			379 => 
			array (
				'id' => 1380,
				'id_city' => 964,
				'area' => 'Caloocan City Central Post Office',
				'zip_code' => 1400,
			),
			380 => 
			array (
				'id' => 1381,
				'id_city' => 964,
				'area' => 'Baesa',
				'zip_code' => 1401,
			),
			381 => 
			array (
				'id' => 1382,
				'id_city' => 964,
				'area' => 'Santa Quiteria',
				'zip_code' => 1402,
			),
			382 => 
			array (
				'id' => 1383,
				'id_city' => 964,
				'area' => 'Grace Park East',
				'zip_code' => 1403,
			),
			383 => 
			array (
				'id' => 1384,
				'id_city' => 964,
				'area' => 'San Jose',
				'zip_code' => 1404,
			),
			384 => 
			array (
				'id' => 1385,
				'id_city' => 964,
				'area' => 'First Avenue to Seventh Avenue West',
				'zip_code' => 1405,
			),
			385 => 
			array (
				'id' => 1386,
				'id_city' => 964,
				'area' => 'Grace Park West',
				'zip_code' => 1406,
			),
			386 => 
			array (
				'id' => 1387,
				'id_city' => 964,
				'area' => 'University Hills',
				'zip_code' => 1407,
			),
			387 => 
			array (
				'id' => 1388,
				'id_city' => 964,
				'area' => 'Sangandaan',
				'zip_code' => 1408,
			),
			388 => 
			array (
				'id' => 1389,
				'id_city' => 964,
			'area' => 'Kaunlaran Village (shared with Malabon City and Navotas)',
				'zip_code' => 1409,
			),
			389 => 
			array (
				'id' => 1390,
				'id_city' => 964,
				'area' => 'Maypajo',
				'zip_code' => 1410,
			),
			390 => 
			array (
				'id' => 1391,
				'id_city' => 964,
			'area' => 'Fish Market (shared with Navotas)',
				'zip_code' => 1411,
			),
			391 => 
			array (
				'id' => 1392,
				'id_city' => 964,
				'area' => 'Isla de Cocomo',
				'zip_code' => 1412,
			),
			392 => 
			array (
				'id' => 1393,
				'id_city' => 964,
				'area' => 'Kapitbayahan',
				'zip_code' => 1413,
			),
			393 => 
			array (
				'id' => 1394,
				'id_city' => 965,
				'area' => 'Las Pi?as Central Post Office',
				'zip_code' => 1740,
			),
			394 => 
			array (
				'id' => 1395,
				'id_city' => 965,
				'area' => 'Greymarville Subdivision',
				'zip_code' => 1741,
			),
			395 => 
			array (
				'id' => 1396,
				'id_city' => 965,
				'area' => 'Pulang Lupa and Zapote',
				'zip_code' => 1742,
			),
			396 => 
			array (
				'id' => 1397,
				'id_city' => 965,
				'area' => 'Cut-cut',
				'zip_code' => 1743,
			),
			397 => 
			array (
				'id' => 1398,
				'id_city' => 965,
				'area' => 'Manuyo',
				'zip_code' => 1744,
			),
			398 => 
			array (
				'id' => 1399,
				'id_city' => 965,
				'area' => 'Gatchalian Subdivision',
				'zip_code' => 1745,
			),
			399 => 
			array (
				'id' => 1400,
				'id_city' => 965,
				'area' => 'Verdant Acres Subdivision',
				'zip_code' => 1746,
			),
			400 => 
			array (
				'id' => 1401,
				'id_city' => 965,
				'area' => 'Moonwalk Subdivision and Talon',
				'zip_code' => 1747,
			),
			401 => 
			array (
				'id' => 1402,
				'id_city' => 965,
				'area' => 'Manila Doctors Village',
				'zip_code' => 1748,
			),
			402 => 
			array (
				'id' => 1403,
				'id_city' => 965,
				'area' => 'Angela Village',
				'zip_code' => 1749,
			),
			403 => 
			array (
				'id' => 1404,
				'id_city' => 965,
				'area' => 'Almanza',
				'zip_code' => 1750,
			),
			404 => 
			array (
				'id' => 1405,
				'id_city' => 965,
				'area' => 'T.S. Cruz Subdivision',
				'zip_code' => 1751,
			),
			405 => 
			array (
				'id' => 1406,
				'id_city' => 965,
				'area' => 'Soldiers Hills Subdivision',
				'zip_code' => 1752,
			),
			406 => 
			array (
				'id' => 1407,
				'id_city' => 966,
				'area' => 'Makati Central Post Office',
				'zip_code' => 1200,
			),
			407 => 
			array (
				'id' => 1408,
				'id_city' => 966,
			'area' => 'Fort Bonifacio (now part of Taguig City)',
				'zip_code' => 1201,
			),
			408 => 
			array (
				'id' => 1409,
				'id_city' => 966,
				'area' => 'Fort Bonifacio Naval Station',
				'zip_code' => 1202,
			),
			409 => 
			array (
				'id' => 1410,
				'id_city' => 966,
				'area' => 'San Antonio Village',
				'zip_code' => 1203,
			),
			410 => 
			array (
				'id' => 1411,
				'id_city' => 966,
				'area' => 'La Paz, Singkamas, and Tejeros',
				'zip_code' => 1204,
			),
			411 => 
			array (
				'id' => 1412,
				'id_city' => 966,
				'area' => 'Santa Cruz',
				'zip_code' => 1205,
			),
			412 => 
			array (
				'id' => 1413,
				'id_city' => 966,
				'area' => 'Kasilawan',
				'zip_code' => 1206,
			),
			413 => 
			array (
				'id' => 1414,
				'id_city' => 966,
				'area' => 'Carmona and Olympia',
				'zip_code' => 1207,
			),
			414 => 
			array (
				'id' => 1415,
				'id_city' => 966,
			'area' => 'Valenzuela (includes Rizal, San Miguel, and Santiago Villages)',
				'zip_code' => 1208,
			),
			415 => 
			array (
				'id' => 1416,
				'id_city' => 966,
				'area' => 'Bel-Air',
				'zip_code' => 1209,
			),
			416 => 
			array (
				'id' => 1417,
				'id_city' => 966,
				'area' => 'Poblacion',
				'zip_code' => 1210,
			),
			417 => 
			array (
				'id' => 1418,
				'id_city' => 966,
			'area' => 'Guadalupe Viejo (includes Palm Village)',
				'zip_code' => 1211,
			),
			418 => 
			array (
				'id' => 1419,
				'id_city' => 966,
			'area' => 'Guadalupe Nuevo (includes Visayan Village)',
				'zip_code' => 1212,
			),
			419 => 
			array (
				'id' => 1420,
				'id_city' => 966,
				'area' => 'Pinagkaisahan - Pitogo',
				'zip_code' => 1213,
			),
			420 => 
			array (
				'id' => 1421,
				'id_city' => 966,
				'area' => 'Cembo',
				'zip_code' => 1214,
			),
			421 => 
			array (
				'id' => 1422,
				'id_city' => 966,
				'area' => 'West Rembo',
				'zip_code' => 1215,
			),
			422 => 
			array (
				'id' => 1423,
				'id_city' => 966,
				'area' => 'East Rembo and Malapad na Bato',
				'zip_code' => 1216,
			),
			423 => 
			array (
				'id' => 1424,
				'id_city' => 966,
				'area' => 'Comembo',
				'zip_code' => 1217,
			),
			424 => 
			array (
				'id' => 1425,
				'id_city' => 966,
				'area' => 'Pembo',
				'zip_code' => 1218,
			),
			425 => 
			array (
				'id' => 1426,
				'id_city' => 966,
				'area' => 'Forbes Park North',
				'zip_code' => 1219,
			),
			426 => 
			array (
				'id' => 1427,
				'id_city' => 966,
				'area' => 'Forbes Park South',
				'zip_code' => 1220,
			),
			427 => 
			array (
				'id' => 1428,
				'id_city' => 966,
				'area' => 'Dasmari?as Village North',
				'zip_code' => 1221,
			),
			428 => 
			array (
				'id' => 1429,
				'id_city' => 966,
				'area' => 'Dasmari?as Village South',
				'zip_code' => 1222,
			),
			429 => 
			array (
				'id' => 1430,
				'id_city' => 966,
				'area' => 'San Lorenzo Village',
				'zip_code' => 1223,
			),
			430 => 
			array (
				'id' => 1431,
				'id_city' => 966,
				'area' => 'Makati Commercial Center',
				'zip_code' => 1224,
			),
			431 => 
			array (
				'id' => 1432,
				'id_city' => 966,
				'area' => 'Urdaneta Village',
				'zip_code' => 1225,
			),
			432 => 
			array (
				'id' => 1433,
				'id_city' => 966,
				'area' => 'Ayala Avenue-Paseo de Roxas',
				'zip_code' => 1226,
			),
			433 => 
			array (
				'id' => 1434,
				'id_city' => 966,
				'area' => 'Salcedo Village',
				'zip_code' => 1227,
			),
			434 => 
			array (
				'id' => 1435,
				'id_city' => 966,
				'area' => 'Greenbelt',
				'zip_code' => 1228,
			),
			435 => 
			array (
				'id' => 1436,
				'id_city' => 966,
				'area' => 'Legaspi Village',
				'zip_code' => 1229,
			),
			436 => 
			array (
				'id' => 1437,
				'id_city' => 966,
				'area' => 'Pio del Pilar',
				'zip_code' => 1230,
			),
			437 => 
			array (
				'id' => 1438,
				'id_city' => 966,
				'area' => 'Pasong Tamo and Ecology Village',
				'zip_code' => 1231,
			),
			438 => 
			array (
				'id' => 1439,
				'id_city' => 966,
				'area' => 'Magallanes Village',
				'zip_code' => 1232,
			),
			439 => 
			array (
				'id' => 1440,
				'id_city' => 966,
				'area' => 'Bangkal',
				'zip_code' => 1233,
			),
			440 => 
			array (
				'id' => 1441,
				'id_city' => 966,
				'area' => 'San Isidro',
				'zip_code' => 1234,
			),
			441 => 
			array (
				'id' => 1442,
				'id_city' => 966,
				'area' => 'Palanan',
				'zip_code' => 1235,
			),
			442 => 
			array (
				'id' => 1443,
				'id_city' => 966,
				'area' => 'Plain-Truth',
				'zip_code' => 700,
			),
			443 => 
			array (
				'id' => 1444,
				'id_city' => 966,
				'area' => 'Colgate Palmolive Philippines',
				'zip_code' => 701,
			),
			444 => 
			array (
				'id' => 1445,
				'id_city' => 966,
				'area' => 'Citibank',
				'zip_code' => 702,
			),
			445 => 
			array (
				'id' => 1446,
				'id_city' => 966,
				'area' => 'Sarmiento Enterprises',
				'zip_code' => 703,
			),
			446 => 
			array (
				'id' => 1447,
				'id_city' => 966,
				'area' => 'Producers Bank',
				'zip_code' => 704,
			),
			447 => 
			array (
				'id' => 1448,
				'id_city' => 966,
				'area' => 'Union Ajinomoto',
				'zip_code' => 705,
			),
			448 => 
			array (
				'id' => 1449,
				'id_city' => 966,
				'area' => 'Faith Embassy',
				'zip_code' => 706,
			),
			449 => 
			array (
				'id' => 1450,
				'id_city' => 966,
				'area' => 'Canadian Embassy',
				'zip_code' => 707,
			),
			450 => 
			array (
				'id' => 1451,
				'id_city' => 966,
				'area' => 'Philippine National Oil Company',
				'zip_code' => 708,
			),
			451 => 
			array (
				'id' => 1452,
				'id_city' => 966,
				'area' => 'A-Z Direct Marketing',
				'zip_code' => 709,
			),
			452 => 
			array (
				'id' => 1453,
				'id_city' => 966,
				'area' => 'American Express',
				'zip_code' => 710,
			),
			453 => 
			array (
				'id' => 1454,
				'id_city' => 966,
				'area' => 'Land Bank of the Philippines',
				'zip_code' => 711,
			),
			454 => 
			array (
				'id' => 1455,
				'id_city' => 966,
				'area' => 'Prudential Bank',
				'zip_code' => 712,
			),
			455 => 
			array (
				'id' => 1456,
				'id_city' => 966,
				'area' => 'BPI Family Savings Bank',
				'zip_code' => 713,
			),
			456 => 
			array (
				'id' => 1457,
				'id_city' => 966,
				'area' => 'Philippine Manila Mission',
				'zip_code' => 714,
			),
			457 => 
			array (
				'id' => 1458,
				'id_city' => 966,
				'area' => 'Marcopper Mining Corporation',
				'zip_code' => 715,
			),
			458 => 
			array (
				'id' => 1459,
				'id_city' => 966,
				'area' => 'Allied Bank',
				'zip_code' => 716,
			),
			459 => 
			array (
				'id' => 1460,
				'id_city' => 966,
				'area' => 'Diners Club',
				'zip_code' => 717,
			),
			460 => 
			array (
				'id' => 1461,
				'id_city' => 966,
				'area' => 'International Center for Aquatic Resources',
				'zip_code' => 718,
			),
			461 => 
			array (
				'id' => 1462,
				'id_city' => 966,
				'area' => 'Security Bank',
				'zip_code' => 719,
			),
			462 => 
			array (
				'id' => 1463,
				'id_city' => 966,
				'area' => 'Bank of the Philippine Islands',
				'zip_code' => 720,
			),
			463 => 
			array (
				'id' => 1464,
				'id_city' => 966,
				'area' => 'Philippine Long Distance Telephone Company',
				'zip_code' => 721,
			),
			464 => 
			array (
				'id' => 1465,
				'id_city' => 966,
				'area' => 'World Executive Digest',
				'zip_code' => 722,
			),
			465 => 
			array (
				'id' => 1466,
				'id_city' => 966,
				'area' => 'Japanese Embassy',
				'zip_code' => 723,
			),
			466 => 
			array (
				'id' => 1467,
				'id_city' => 966,
				'area' => 'Sun Life Financial',
				'zip_code' => 724,
			),
			467 => 
			array (
				'id' => 1468,
				'id_city' => 966,
				'area' => 'Insular Life Assurance Company',
				'zip_code' => 725,
			),
			468 => 
			array (
				'id' => 1469,
				'id_city' => 966,
				'area' => 'Equitable PCI Bank',
				'zip_code' => 726,
			),
			469 => 
			array (
				'id' => 1470,
				'id_city' => 966,
				'area' => 'Rizal Commercial Banking Corporation',
				'zip_code' => 727,
			),
			470 => 
			array (
				'id' => 1471,
				'id_city' => 966,
				'area' => 'United Coconut Planters Bank',
				'zip_code' => 728,
			),
			471 => 
			array (
				'id' => 1472,
				'id_city' => 966,
				'area' => 'Not used',
				'zip_code' => 729,
			),
			472 => 
			array (
				'id' => 1473,
				'id_city' => 966,
				'area' => 'Zuellig Pharma',
				'zip_code' => 730,
			),
			473 => 
			array (
				'id' => 1474,
				'id_city' => 966,
				'area' => 'BCD Direct Marketing',
				'zip_code' => 731,
			),
			474 => 
			array (
				'id' => 1475,
				'id_city' => 966,
				'area' => 'Export and Industry Bank',
				'zip_code' => 732,
			),
			475 => 
			array (
				'id' => 1476,
				'id_city' => 966,
				'area' => 'Not used',
				'zip_code' => 733,
			),
			476 => 
			array (
				'id' => 1477,
				'id_city' => 966,
				'area' => 'Sycip, Gorres and Velayo',
				'zip_code' => 740,
			),
			477 => 
			array (
				'id' => 1478,
				'id_city' => 966,
				'area' => 'Philippine Airlines',
				'zip_code' => 750,
			),
			478 => 
			array (
				'id' => 1479,
				'id_city' => 966,
			'area' => 'Pilipinas Shell (subsidiary of Royal Dutch Shell)',
				'zip_code' => 760,
			),
			479 => 
			array (
				'id' => 1480,
				'id_city' => 966,
				'area' => 'ACCRA Law Offices',
				'zip_code' => 770,
			),
			480 => 
			array (
				'id' => 1481,
				'id_city' => 966,
				'area' => 'Mead Johnson Philippines',
				'zip_code' => 780,
			),
			481 => 
			array (
				'id' => 1482,
				'id_city' => 966,
				'area' => 'Directories Pilipinas Corporation',
				'zip_code' => 788,
			),
			482 => 
			array (
				'id' => 1483,
				'id_city' => 966,
				'area' => 'Atlantic, Gulf and Pacific',
				'zip_code' => 790,
			),
			483 => 
			array (
				'id' => 1484,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 1000 to 1099',
				'zip_code' => 1250,
			),
			484 => 
			array (
				'id' => 1485,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 1100 to 1199',
				'zip_code' => 1251,
			),
			485 => 
			array (
				'id' => 1486,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 1200 to 1299',
				'zip_code' => 1252,
			),
			486 => 
			array (
				'id' => 1487,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 1300 to 1399',
				'zip_code' => 1253,
			),
			487 => 
			array (
				'id' => 1488,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 1400 to 1499',
				'zip_code' => 1254,
			),
			488 => 
			array (
				'id' => 1489,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 1500 to 1599',
				'zip_code' => 1255,
			),
			489 => 
			array (
				'id' => 1490,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 1600 to 1699',
				'zip_code' => 1256,
			),
			490 => 
			array (
				'id' => 1491,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 1700 to 1799',
				'zip_code' => 1257,
			),
			491 => 
			array (
				'id' => 1492,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 1800 to 1899',
				'zip_code' => 1258,
			),
			492 => 
			array (
				'id' => 1493,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 1900 to 1999',
				'zip_code' => 1259,
			),
			493 => 
			array (
				'id' => 1494,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 2000 to 2099',
				'zip_code' => 1260,
			),
			494 => 
			array (
				'id' => 1495,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 2100 to 2199',
				'zip_code' => 1261,
			),
			495 => 
			array (
				'id' => 1496,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 2200 to 2299',
				'zip_code' => 1262,
			),
			496 => 
			array (
				'id' => 1497,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 2300 to 2399',
				'zip_code' => 1263,
			),
			497 => 
			array (
				'id' => 1498,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 2400 to 2499',
				'zip_code' => 1264,
			),
			498 => 
			array (
				'id' => 1499,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 2500 to 2599',
				'zip_code' => 1265,
			),
			499 => 
			array (
				'id' => 1500,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 2600 to 2699',
				'zip_code' => 1266,
			),
		));
		\DB::table('city_area')->insert(array (
			0 => 
			array (
				'id' => 1501,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 2700 to 2799',
				'zip_code' => 1267,
			),
			1 => 
			array (
				'id' => 1502,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 2800 to 2899',
				'zip_code' => 1268,
			),
			2 => 
			array (
				'id' => 1503,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 2900 to 2999',
				'zip_code' => 1269,
			),
			3 => 
			array (
				'id' => 1504,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 3000 to 3099',
				'zip_code' => 1270,
			),
			4 => 
			array (
				'id' => 1505,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 3100 to 3199',
				'zip_code' => 1271,
			),
			5 => 
			array (
				'id' => 1506,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 3200 to 3299',
				'zip_code' => 1272,
			),
			6 => 
			array (
				'id' => 1507,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 3300 to 3399',
				'zip_code' => 1273,
			),
			7 => 
			array (
				'id' => 1508,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 3400 to 3499',
				'zip_code' => 1274,
			),
			8 => 
			array (
				'id' => 1509,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 3500 to 3599',
				'zip_code' => 1275,
			),
			9 => 
			array (
				'id' => 1510,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 3600 to 3699',
				'zip_code' => 1276,
			),
			10 => 
			array (
				'id' => 1511,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 3700 to 3799',
				'zip_code' => 1277,
			),
			11 => 
			array (
				'id' => 1512,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 3800 to 3899',
				'zip_code' => 1278,
			),
			12 => 
			array (
				'id' => 1513,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 3900 to 3999',
				'zip_code' => 1279,
			),
			13 => 
			array (
				'id' => 1514,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 4000 to 4099',
				'zip_code' => 1280,
			),
			14 => 
			array (
				'id' => 1515,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 4100 to 4199',
				'zip_code' => 1281,
			),
			15 => 
			array (
				'id' => 1516,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 4200 to 4299',
				'zip_code' => 1282,
			),
			16 => 
			array (
				'id' => 1517,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 4300 to 4399',
				'zip_code' => 1283,
			),
			17 => 
			array (
				'id' => 1518,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 4400 to 4499',
				'zip_code' => 1284,
			),
			18 => 
			array (
				'id' => 1519,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 4500 to 4599',
				'zip_code' => 1285,
			),
			19 => 
			array (
				'id' => 1520,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 4600 to 4699',
				'zip_code' => 1286,
			),
			20 => 
			array (
				'id' => 1521,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 4700 to 4799',
				'zip_code' => 1287,
			),
			21 => 
			array (
				'id' => 1522,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 4800 to 4899',
				'zip_code' => 1288,
			),
			22 => 
			array (
				'id' => 1523,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 4900 to 4999',
				'zip_code' => 1289,
			),
			23 => 
			array (
				'id' => 1524,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 5000 to 5099',
				'zip_code' => 1290,
			),
			24 => 
			array (
				'id' => 1525,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 5100 to 5199',
				'zip_code' => 1291,
			),
			25 => 
			array (
				'id' => 1526,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 5200 to 5299',
				'zip_code' => 1292,
			),
			26 => 
			array (
				'id' => 1527,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 5300 to 5399',
				'zip_code' => 1293,
			),
			27 => 
			array (
				'id' => 1528,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 5400 to 5499',
				'zip_code' => 1294,
			),
			28 => 
			array (
				'id' => 1529,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 5500 to 5599',
				'zip_code' => 1295,
			),
			29 => 
			array (
				'id' => 1530,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 5600 to 5699',
				'zip_code' => 1296,
			),
			30 => 
			array (
				'id' => 1531,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 5700 to 5799',
				'zip_code' => 1297,
			),
			31 => 
			array (
				'id' => 1532,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 5800 to 5899',
				'zip_code' => 1298,
			),
			32 => 
			array (
				'id' => 1533,
				'id_city' => 966,
				'area' => 'Makati CPO-PO Box# 5900 to 5999',
				'zip_code' => 1299,
			),
			33 => 
			array (
				'id' => 1534,
				'id_city' => 967,
			'area' => 'Kaunlaran Village (shared with Caloocan City and Navotas)',
				'zip_code' => 1409,
			),
			34 => 
			array (
				'id' => 1535,
				'id_city' => 967,
				'area' => 'Malabon',
				'zip_code' => 1470,
			),
			35 => 
			array (
				'id' => 1536,
				'id_city' => 967,
				'area' => 'Flores',
				'zip_code' => 1471,
			),
			36 => 
			array (
				'id' => 1537,
				'id_city' => 967,
				'area' => 'Longos',
				'zip_code' => 1472,
			),
			37 => 
			array (
				'id' => 1538,
				'id_city' => 967,
				'area' => 'Tonsuya',
				'zip_code' => 1473,
			),
			38 => 
			array (
				'id' => 1539,
				'id_city' => 967,
				'area' => 'Acacia',
				'zip_code' => 1474,
			),
			39 => 
			array (
				'id' => 1540,
				'id_city' => 967,
				'area' => 'Potrero',
				'zip_code' => 1475,
			),
			40 => 
			array (
				'id' => 1541,
				'id_city' => 967,
				'area' => 'Araneta Subdivision',
				'zip_code' => 1476,
			),
			41 => 
			array (
				'id' => 1542,
				'id_city' => 967,
				'area' => 'Maysilo',
				'zip_code' => 1477,
			),
			42 => 
			array (
				'id' => 1543,
				'id_city' => 967,
				'area' => 'Santolan',
				'zip_code' => 1478,
			),
			43 => 
			array (
				'id' => 1544,
				'id_city' => 967,
				'area' => 'Muzon',
				'zip_code' => 1479,
			),
			44 => 
			array (
				'id' => 1545,
				'id_city' => 967,
				'area' => 'Dampalit',
				'zip_code' => 1480,
			),
			45 => 
			array (
				'id' => 1546,
				'id_city' => 967,
				'area' => 'Tinajeros',
				'zip_code' => 1470,
			),
			46 => 
			array (
				'id' => 1547,
				'id_city' => 968,
				'area' => 'Mandaluyong Central Post Office',
				'zip_code' => 1550,
			),
			47 => 
			array (
				'id' => 1548,
				'id_city' => 968,
				'area' => 'Vergara',
				'zip_code' => 1551,
			),
			48 => 
			array (
				'id' => 1549,
				'id_city' => 968,
				'area' => 'Shaw Boulevard',
				'zip_code' => 1552,
			),
			49 => 
			array (
				'id' => 1550,
				'id_city' => 968,
				'area' => 'National Center for Mental Health',
				'zip_code' => 1553,
			),
			50 => 
			array (
				'id' => 1551,
				'id_city' => 968,
				'area' => 'East EDSA',
				'zip_code' => 1554,
			),
			51 => 
			array (
				'id' => 1552,
				'id_city' => 968,
				'area' => 'Wack Wack',
				'zip_code' => 1555,
			),
			52 => 
			array (
				'id' => 1553,
				'id_city' => 968,
				'area' => 'Greenhills South',
				'zip_code' => 1556,
			),
			53 => 
			array (
				'id' => 1554,
				'id_city' => 969,
				'area' => 'Manila Central Post Office',
				'zip_code' => 1000,
			),
			54 => 
			array (
				'id' => 1555,
				'id_city' => 969,
				'area' => 'Quiapo',
				'zip_code' => 1001,
			),
			55 => 
			array (
				'id' => 1556,
				'id_city' => 969,
				'area' => 'Intramuros',
				'zip_code' => 1002,
			),
			56 => 
			array (
				'id' => 1557,
				'id_city' => 969,
				'area' => 'Santa Cruz South',
				'zip_code' => 1003,
			),
			57 => 
			array (
				'id' => 1558,
				'id_city' => 969,
				'area' => 'Malate',
				'zip_code' => 1004,
			),
			58 => 
			array (
				'id' => 1559,
				'id_city' => 969,
				'area' => 'San Miguel',
				'zip_code' => 1005,
			),
			59 => 
			array (
				'id' => 1560,
				'id_city' => 969,
				'area' => 'Binondo',
				'zip_code' => 1006,
			),
			60 => 
			array (
				'id' => 1561,
				'id_city' => 969,
				'area' => 'Paco',
				'zip_code' => 1007,
			),
			61 => 
			array (
				'id' => 1562,
				'id_city' => 969,
				'area' => 'Sampaloc East',
				'zip_code' => 1008,
			),
			62 => 
			array (
				'id' => 1563,
				'id_city' => 969,
				'area' => 'Santa Ana',
				'zip_code' => 1009,
			),
			63 => 
			array (
				'id' => 1564,
				'id_city' => 969,
				'area' => 'San Nicolas',
				'zip_code' => 1010,
			),
			64 => 
			array (
				'id' => 1565,
				'id_city' => 969,
				'area' => 'Pandacan',
				'zip_code' => 1011,
			),
			65 => 
			array (
				'id' => 1566,
				'id_city' => 969,
				'area' => 'Tondo South',
				'zip_code' => 1012,
			),
			66 => 
			array (
				'id' => 1567,
				'id_city' => 969,
				'area' => 'Tondo North',
				'zip_code' => 1013,
			),
			67 => 
			array (
				'id' => 1568,
				'id_city' => 969,
				'area' => 'Santa Cruz North',
				'zip_code' => 1014,
			),
			68 => 
			array (
				'id' => 1569,
				'id_city' => 969,
				'area' => 'Sampaloc West',
				'zip_code' => 1015,
			),
			69 => 
			array (
				'id' => 1570,
				'id_city' => 969,
				'area' => 'Santa Mesa',
				'zip_code' => 1016,
			),
			70 => 
			array (
				'id' => 1571,
				'id_city' => 969,
				'area' => 'San Andres',
				'zip_code' => 1017,
			),
			71 => 
			array (
				'id' => 1572,
				'id_city' => 969,
				'area' => 'Port Area South',
				'zip_code' => 1018,
			),
			72 => 
			array (
				'id' => 1573,
				'id_city' => 969,
				'area' => 'Manila Bulletin',
				'zip_code' => 900,
			),
			73 => 
			array (
				'id' => 1574,
				'id_city' => 969,
				'area' => 'Adventist University of the Philippines',
				'zip_code' => 901,
			),
			74 => 
			array (
				'id' => 1575,
				'id_city' => 969,
				'area' => 'Far East Broadcasting Corporation',
				'zip_code' => 902,
			),
			75 => 
			array (
				'id' => 1576,
				'id_city' => 969,
				'area' => 'Manila Hilton',
				'zip_code' => 903,
			),
			76 => 
			array (
				'id' => 1577,
				'id_city' => 969,
				'area' => 'Midland Hotel',
				'zip_code' => 904,
			),
			77 => 
			array (
				'id' => 1578,
				'id_city' => 969,
				'area' => 'The Philippine Star',
				'zip_code' => 905,
			),
			78 => 
			array (
				'id' => 1579,
				'id_city' => 969,
				'area' => 'Manila Medical Center',
				'zip_code' => 906,
			),
			79 => 
			array (
				'id' => 1580,
				'id_city' => 969,
				'area' => 'San Miguel Corporation',
				'zip_code' => 907,
			),
			80 => 
			array (
				'id' => 1581,
				'id_city' => 969,
				'area' => 'Pan-Filipino Shipping',
				'zip_code' => 908,
			),
			81 => 
			array (
				'id' => 1582,
				'id_city' => 969,
				'area' => 'Summer Institute of Linguistics',
				'zip_code' => 909,
			),
			82 => 
			array (
				'id' => 1583,
				'id_city' => 969,
				'area' => 'Department of Labor and Employment',
				'zip_code' => 910,
			),
			83 => 
			array (
				'id' => 1584,
				'id_city' => 969,
				'area' => 'National Statistics Office',
				'zip_code' => 911,
			),
			84 => 
			array (
				'id' => 1585,
				'id_city' => 969,
				'area' => 'Bureau of Plant Industry',
				'zip_code' => 912,
			),
			85 => 
			array (
				'id' => 1586,
				'id_city' => 969,
				'area' => 'Manila Hotel',
				'zip_code' => 913,
			),
			86 => 
			array (
				'id' => 1587,
				'id_city' => 969,
				'area' => 'Philippine Refining Company and Unilever Philippines',
				'zip_code' => 914,
			),
			87 => 
			array (
				'id' => 1588,
				'id_city' => 969,
				'area' => 'International Correspondence Institute',
				'zip_code' => 915,
			),
			88 => 
			array (
				'id' => 1589,
				'id_city' => 969,
				'area' => 'Radio Veritas',
				'zip_code' => 916,
			),
			89 => 
			array (
				'id' => 1590,
				'id_city' => 969,
				'area' => 'Ateneo de Manila University',
				'zip_code' => 917,
			),
			90 => 
			array (
				'id' => 1591,
				'id_city' => 969,
				'area' => 'Fil-Japan Shipping Company',
				'zip_code' => 918,
			),
			91 => 
			array (
				'id' => 1592,
				'id_city' => 969,
				'area' => 'Manila Police District',
				'zip_code' => 919,
			),
			92 => 
			array (
				'id' => 1593,
				'id_city' => 969,
				'area' => 'Sunbursts Publications',
				'zip_code' => 920,
			),
			93 => 
			array (
				'id' => 1594,
				'id_city' => 969,
				'area' => 'Philippine Plaza Hotel',
				'zip_code' => 921,
			),
			94 => 
			array (
				'id' => 1595,
				'id_city' => 969,
				'area' => 'De La Salle University',
				'zip_code' => 922,
			),
			95 => 
			array (
				'id' => 1596,
				'id_city' => 969,
				'area' => 'Don Stewart Evangelistic Association',
				'zip_code' => 923,
			),
			96 => 
			array (
				'id' => 1597,
				'id_city' => 969,
				'area' => 'World Map',
				'zip_code' => 924,
			),
			97 => 
			array (
				'id' => 1598,
				'id_city' => 969,
				'area' => 'Chinabank',
				'zip_code' => 925,
			),
			98 => 
			array (
				'id' => 1599,
				'id_city' => 969,
				'area' => 'Caltex Philippines',
				'zip_code' => 926,
			),
			99 => 
			array (
				'id' => 1600,
				'id_city' => 969,
				'area' => 'Philippine Veterans Affairs Office',
				'zip_code' => 927,
			),
			100 => 
			array (
				'id' => 1601,
				'id_city' => 969,
				'area' => 'Philippine Campus Crusade',
				'zip_code' => 928,
			),
			101 => 
			array (
				'id' => 1602,
				'id_city' => 969,
				'area' => 'Not used',
				'zip_code' => 929,
			),
			102 => 
			array (
				'id' => 1603,
				'id_city' => 969,
				'area' => 'United States Embassy',
				'zip_code' => 930,
			),
			103 => 
			array (
				'id' => 1604,
				'id_city' => 969,
				'area' => 'Philippine National Bank',
				'zip_code' => 940,
			),
			104 => 
			array (
				'id' => 1605,
				'id_city' => 969,
				'area' => 'Manila Midtown Hotel',
				'zip_code' => 950,
			),
			105 => 
			array (
				'id' => 1606,
				'id_city' => 969,
				'area' => 'International Rice Research Institute',
				'zip_code' => 960,
			),
			106 => 
			array (
				'id' => 1607,
				'id_city' => 969,
				'area' => 'Department of Justice',
				'zip_code' => 970,
			),
			107 => 
			array (
				'id' => 1608,
				'id_city' => 969,
				'area' => 'Asian Development Bank',
				'zip_code' => 980,
			),
			108 => 
			array (
				'id' => 1609,
				'id_city' => 969,
				'area' => 'Philamlife',
				'zip_code' => 990,
			),
			109 => 
			array (
				'id' => 1610,
				'id_city' => 969,
				'area' => 'Santa Mesa P.O. Box',
				'zip_code' => 1035,
			),
			110 => 
			array (
				'id' => 1611,
				'id_city' => 969,
				'area' => 'Santa Cruz P.O. Box',
				'zip_code' => 1040,
			),
			111 => 
			array (
				'id' => 1612,
				'id_city' => 969,
				'area' => 'Ermita P.O. Box',
				'zip_code' => 1045,
			),
			112 => 
			array (
				'id' => 1613,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 1000 to 1099',
				'zip_code' => 1050,
			),
			113 => 
			array (
				'id' => 1614,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 1100 to 1199',
				'zip_code' => 1051,
			),
			114 => 
			array (
				'id' => 1615,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 1200 to 1299',
				'zip_code' => 1052,
			),
			115 => 
			array (
				'id' => 1616,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 1300 to 1399',
				'zip_code' => 1053,
			),
			116 => 
			array (
				'id' => 1617,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 1400 to 1499',
				'zip_code' => 1054,
			),
			117 => 
			array (
				'id' => 1618,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 1500 to 1599',
				'zip_code' => 1055,
			),
			118 => 
			array (
				'id' => 1619,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 1600 to 1699',
				'zip_code' => 1056,
			),
			119 => 
			array (
				'id' => 1620,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 1700 to 1799',
				'zip_code' => 1057,
			),
			120 => 
			array (
				'id' => 1621,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 1800 to 1899',
				'zip_code' => 1058,
			),
			121 => 
			array (
				'id' => 1622,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 1900 to 1999',
				'zip_code' => 1059,
			),
			122 => 
			array (
				'id' => 1623,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 2000 to 2099',
				'zip_code' => 1060,
			),
			123 => 
			array (
				'id' => 1624,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 2100 to 2199',
				'zip_code' => 1061,
			),
			124 => 
			array (
				'id' => 1625,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 2200 to 2299',
				'zip_code' => 1062,
			),
			125 => 
			array (
				'id' => 1626,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 2300 to 2399',
				'zip_code' => 1063,
			),
			126 => 
			array (
				'id' => 1627,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 2400 to 2499',
				'zip_code' => 1064,
			),
			127 => 
			array (
				'id' => 1628,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 2500 to 2599',
				'zip_code' => 1065,
			),
			128 => 
			array (
				'id' => 1629,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 2600 to 2699',
				'zip_code' => 1066,
			),
			129 => 
			array (
				'id' => 1630,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 2700 to 2799',
				'zip_code' => 1067,
			),
			130 => 
			array (
				'id' => 1631,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 2800 to 2899',
				'zip_code' => 1068,
			),
			131 => 
			array (
				'id' => 1632,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 2900 to 2999',
				'zip_code' => 1069,
			),
			132 => 
			array (
				'id' => 1633,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 3000 to 3099',
				'zip_code' => 1070,
			),
			133 => 
			array (
				'id' => 1634,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 3100 to 3199',
				'zip_code' => 1071,
			),
			134 => 
			array (
				'id' => 1635,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 3200 to 3299',
				'zip_code' => 1072,
			),
			135 => 
			array (
				'id' => 1636,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 3300 to 3399',
				'zip_code' => 1073,
			),
			136 => 
			array (
				'id' => 1637,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 3400 to 3499',
				'zip_code' => 1074,
			),
			137 => 
			array (
				'id' => 1638,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 3500 to 3599',
				'zip_code' => 1075,
			),
			138 => 
			array (
				'id' => 1639,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 3600 to 3699',
				'zip_code' => 1076,
			),
			139 => 
			array (
				'id' => 1640,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 3700 to 3799',
				'zip_code' => 1077,
			),
			140 => 
			array (
				'id' => 1641,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 3800 to 3899',
				'zip_code' => 1078,
			),
			141 => 
			array (
				'id' => 1642,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 3900 to 3999',
				'zip_code' => 1079,
			),
			142 => 
			array (
				'id' => 1643,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 4000 to 4099',
				'zip_code' => 1080,
			),
			143 => 
			array (
				'id' => 1644,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 4100 to 4199',
				'zip_code' => 1081,
			),
			144 => 
			array (
				'id' => 1645,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 4200 to 4299',
				'zip_code' => 1082,
			),
			145 => 
			array (
				'id' => 1646,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 4300 to 4399',
				'zip_code' => 1083,
			),
			146 => 
			array (
				'id' => 1647,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 4400 to 4499',
				'zip_code' => 1084,
			),
			147 => 
			array (
				'id' => 1648,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 4500 to 4599',
				'zip_code' => 1085,
			),
			148 => 
			array (
				'id' => 1649,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 4600 to 4699',
				'zip_code' => 1086,
			),
			149 => 
			array (
				'id' => 1650,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 4700 to 4799',
				'zip_code' => 1087,
			),
			150 => 
			array (
				'id' => 1651,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 4800 to 4899',
				'zip_code' => 1088,
			),
			151 => 
			array (
				'id' => 1652,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 4900 to 4999',
				'zip_code' => 1089,
			),
			152 => 
			array (
				'id' => 1653,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 5000 to 5099',
				'zip_code' => 1090,
			),
			153 => 
			array (
				'id' => 1654,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 5100 to 5199',
				'zip_code' => 1091,
			),
			154 => 
			array (
				'id' => 1655,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 5200 to 5299',
				'zip_code' => 1092,
			),
			155 => 
			array (
				'id' => 1656,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 5300 to 5399',
				'zip_code' => 1093,
			),
			156 => 
			array (
				'id' => 1657,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 5400 to 5499',
				'zip_code' => 1094,
			),
			157 => 
			array (
				'id' => 1658,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 5500 to 5599',
				'zip_code' => 1095,
			),
			158 => 
			array (
				'id' => 1659,
				'id_city' => 969,
				'area' => 'Manila CPO-PO Box# 5600 to 5699',
				'zip_code' => 1096,
			),
			159 => 
			array (
				'id' => 1660,
				'id_city' => 970,
				'area' => 'Marikina Central Post Office',
				'zip_code' => 1800,
			),
			160 => 
			array (
				'id' => 1661,
				'id_city' => 970,
				'area' => 'San Roque-Calumpang',
				'zip_code' => 1801,
			),
			161 => 
			array (
				'id' => 1662,
				'id_city' => 970,
				'area' => 'Industrial Valley',
				'zip_code' => 1802,
			),
			162 => 
			array (
				'id' => 1663,
				'id_city' => 970,
				'area' => 'Barangka and Ta?ong',
				'zip_code' => 1803,
			),
			163 => 
			array (
				'id' => 1664,
				'id_city' => 970,
				'area' => 'J. De La Pe?a',
				'zip_code' => 1804,
			),
			164 => 
			array (
				'id' => 1665,
				'id_city' => 970,
				'area' => 'Malanday',
				'zip_code' => 1805,
			),
			165 => 
			array (
				'id' => 1666,
				'id_city' => 970,
				'area' => 'Northern and Western Marikina River',
				'zip_code' => 1806,
			),
			166 => 
			array (
				'id' => 1667,
				'id_city' => 970,
				'area' => 'Concepcion tarlac',
				'zip_code' => 1807,
			),
			167 => 
			array (
				'id' => 1668,
				'id_city' => 970,
				'area' => 'Nangka',
				'zip_code' => 1808,
			),
			168 => 
			array (
				'id' => 1669,
				'id_city' => 970,
				'area' => 'Parang',
				'zip_code' => 1809,
			),
			169 => 
			array (
				'id' => 1670,
				'id_city' => 970,
				'area' => 'Marikina Heights',
				'zip_code' => 1810,
			),
			170 => 
			array (
				'id' => 1671,
				'id_city' => 970,
				'area' => 'Concepcion 2',
				'zip_code' => 1811,
			),
			171 => 
			array (
				'id' => 1672,
				'id_city' => 970,
				'area' => 'Not used',
				'zip_code' => 1812,
			),
			172 => 
			array (
				'id' => 1673,
				'id_city' => 970,
				'area' => 'Bagong Nayon, Cupang, Mambagat, and Mayamot',
				'zip_code' => 1820,
			),
			173 => 
			array (
				'id' => 1674,
				'id_city' => 971,
				'area' => 'Muntinlupa Central Post Office',
				'zip_code' => 1770,
			),
			174 => 
			array (
				'id' => 1675,
				'id_city' => 971,
				'area' => 'Buli/Cupang',
				'zip_code' => 1771,
			),
			175 => 
			array (
				'id' => 1676,
				'id_city' => 971,
				'area' => 'Bayanan/Putatan',
				'zip_code' => 1772,
			),
			176 => 
			array (
				'id' => 1677,
				'id_city' => 971,
				'area' => 'Soldiers\' Hills',
				'zip_code' => 1772,
			),
			177 => 
			array (
				'id' => 1678,
				'id_city' => 971,
				'area' => 'Tunasan',
				'zip_code' => 1773,
			),
			178 => 
			array (
				'id' => 1679,
				'id_city' => 971,
				'area' => 'Susana Heights',
				'zip_code' => 1774,
			),
			179 => 
			array (
				'id' => 1680,
				'id_city' => 971,
				'area' => 'Pearl Heights',
				'zip_code' => 1775,
			),
			180 => 
			array (
				'id' => 1681,
				'id_city' => 971,
				'area' => 'Poblacion',
				'zip_code' => 1776,
			),
			181 => 
			array (
				'id' => 1682,
				'id_city' => 971,
				'area' => 'Pleasant Village',
				'zip_code' => 1777,
			),
			182 => 
			array (
				'id' => 1683,
				'id_city' => 971,
				'area' => 'Ayala Alabang Subdivision',
				'zip_code' => 1780,
			),
			183 => 
			array (
				'id' => 1684,
				'id_city' => 971,
				'area' => 'Ayala Alabang P.O. Boxes',
				'zip_code' => 1799,
			),
			184 => 
			array (
				'id' => 1685,
				'id_city' => 972,
				'area' => 'Fish Market',
				'zip_code' => 1411,
			),
			185 => 
			array (
				'id' => 1686,
				'id_city' => 972,
				'area' => 'Isla de Cocomo',
				'zip_code' => 1412,
			),
			186 => 
			array (
				'id' => 1687,
				'id_city' => 972,
				'area' => 'Kapitbahayan [East]',
				'zip_code' => 1413,
			),
			187 => 
			array (
				'id' => 1688,
				'id_city' => 972,
				'area' => 'Kaunlaran Village',
				'zip_code' => 1409,
			),
			188 => 
			array (
				'id' => 1689,
				'id_city' => 972,
				'area' => 'Navotas',
				'zip_code' => 1485,
			),
			189 => 
			array (
				'id' => 1690,
				'id_city' => 972,
				'area' => 'Tangos',
				'zip_code' => 1489,
			),
			190 => 
			array (
				'id' => 1691,
				'id_city' => 972,
				'area' => 'Tanza',
				'zip_code' => 1490,
			),
			191 => 
			array (
				'id' => 1692,
				'id_city' => 973,
				'area' => 'Aeropark Subdivision',
				'zip_code' => 1714,
			),
			192 => 
			array (
				'id' => 1693,
				'id_city' => 973,
				'area' => 'Baclaran',
				'zip_code' => 1702,
			),
			193 => 
			array (
				'id' => 1694,
				'id_city' => 973,
				'area' => 'Better Living Subdivision',
				'zip_code' => 1711,
			),
			194 => 
			array (
				'id' => 1695,
				'id_city' => 973,
				'area' => 'BF Homes 1',
				'zip_code' => 1720,
			),
			195 => 
			array (
				'id' => 1696,
				'id_city' => 973,
				'area' => 'BF Homes 2',
				'zip_code' => 1718,
			),
			196 => 
			array (
				'id' => 1697,
				'id_city' => 973,
				'area' => 'Domestic Airport P.O. - P.O. Box Nos. 1000 to 1099',
				'zip_code' => 1375,
			),
			197 => 
			array (
				'id' => 1698,
				'id_city' => 973,
				'area' => 'Domestic Airport P.O. - P.O. Box Nos. 1100 to 1199',
				'zip_code' => 1376,
			),
			198 => 
			array (
				'id' => 1699,
				'id_city' => 973,
				'area' => 'Domestic Airport P.O. - P.O. Box Nos. 1200 to 1299',
				'zip_code' => 1377,
			),
			199 => 
			array (
				'id' => 1700,
				'id_city' => 973,
				'area' => 'Domestic Airport P.O. - P.O. Box Nos. 1300 to 1399',
				'zip_code' => 1378,
			),
			200 => 
			array (
				'id' => 1701,
				'id_city' => 973,
				'area' => 'Domestic Airport P.O. - P.O. Box Nos. 1400 to 1499',
				'zip_code' => 1379,
			),
			201 => 
			array (
				'id' => 1702,
				'id_city' => 973,
				'area' => 'Domestic Airport P.O. - P.O. Box Nos. 1500 to 1599',
				'zip_code' => 1380,
			),
			202 => 
			array (
				'id' => 1703,
				'id_city' => 973,
				'area' => 'Domestic Airport P.O. - P.O. Box Nos. 1600 to 1699',
				'zip_code' => 1381,
			),
			203 => 
			array (
				'id' => 1704,
				'id_city' => 973,
				'area' => 'Executive Heights Subdivision',
				'zip_code' => 1710,
			),
			204 => 
			array (
				'id' => 1705,
				'id_city' => 973,
				'area' => 'Ireneville Subdivision I & III',
				'zip_code' => 1719,
			),
			205 => 
			array (
				'id' => 1706,
				'id_city' => 973,
				'area' => 'Ireneville Subdivision II',
				'zip_code' => 1714,
			),
			206 => 
			array (
				'id' => 1707,
				'id_city' => 973,
				'area' => 'Manila Memorial Park',
				'zip_code' => 1717,
			),
			207 => 
			array (
				'id' => 1708,
				'id_city' => 973,
			'area' => 'Marina Subdivision (Reclamation)',
				'zip_code' => 1703,
			),
			208 => 
			array (
				'id' => 1709,
				'id_city' => 973,
				'area' => 'Maywood Village I',
				'zip_code' => 1719,
			),
			209 => 
			array (
				'id' => 1710,
				'id_city' => 973,
				'area' => 'Maywood Village II',
				'zip_code' => 1716,
			),
			210 => 
			array (
				'id' => 1711,
				'id_city' => 973,
				'area' => 'Miramar Subdivision',
				'zip_code' => 1712,
			),
			211 => 
			array (
				'id' => 1712,
				'id_city' => 973,
				'area' => 'Multinational Village',
				'zip_code' => 1708,
			),
			212 => 
			array (
				'id' => 1713,
				'id_city' => 973,
				'area' => 'Ninoy Aquino International Airport',
				'zip_code' => 1705,
			),
			213 => 
			array (
				'id' => 1714,
				'id_city' => 973,
				'area' => 'Parañaque CPO',
				'zip_code' => 1700,
			),
			214 => 
			array (
				'id' => 1715,
				'id_city' => 973,
				'area' => 'Pulo',
				'zip_code' => 1706,
			),
			215 => 
			array (
				'id' => 1716,
				'id_city' => 973,
				'area' => 'San Antonio Valley 1',
				'zip_code' => 1715,
			),
			216 => 
			array (
				'id' => 1717,
				'id_city' => 973,
				'area' => 'San Antonio Valley 11 & 12',
				'zip_code' => 1707,
			),
			217 => 
			array (
				'id' => 1718,
				'id_city' => 973,
				'area' => 'Santo Niño',
				'zip_code' => 1704,
			),
			218 => 
			array (
				'id' => 1719,
				'id_city' => 973,
				'area' => 'South Admiral Village, Merville Park & Moonwalk Subdivision',
				'zip_code' => 1709,
			),
			219 => 
			array (
				'id' => 1720,
				'id_city' => 973,
				'area' => 'Tambo',
				'zip_code' => 1701,
			),
			220 => 
			array (
				'id' => 1721,
				'id_city' => 973,
				'area' => 'United Parañaque Subdivision',
				'zip_code' => 1713,
			),
			221 => 
			array (
				'id' => 1722,
				'id_city' => 974,
				'area' => 'Pasay City Central Post Office',
				'zip_code' => 1300,
			),
			222 => 
			array (
				'id' => 1723,
				'id_city' => 974,
				'area' => 'Domestic Airport P.O.',
				'zip_code' => 1301,
			),
			223 => 
			array (
				'id' => 1724,
				'id_city' => 974,
				'area' => 'San Rafael',
				'zip_code' => 1302,
			),
			224 => 
			array (
				'id' => 1725,
				'id_city' => 974,
				'area' => 'San Roque',
				'zip_code' => 1303,
			),
			225 => 
			array (
				'id' => 1726,
				'id_city' => 974,
				'area' => 'Santa Clara',
				'zip_code' => 1304,
			),
			226 => 
			array (
				'id' => 1727,
				'id_city' => 974,
				'area' => 'San Jose',
				'zip_code' => 1305,
			),
			227 => 
			array (
				'id' => 1728,
				'id_city' => 974,
				'area' => 'San Isidro',
				'zip_code' => 1306,
			),
			228 => 
			array (
				'id' => 1729,
				'id_city' => 974,
				'area' => 'Philippine International Convention Center',
				'zip_code' => 1307,
			),
			229 => 
			array (
				'id' => 1730,
				'id_city' => 974,
				'area' => 'Bay City',
				'zip_code' => 1308,
			),
			230 => 
			array (
				'id' => 1731,
				'id_city' => 974,
				'area' => 'Villamor Airbase',
				'zip_code' => 1309,
			),
			231 => 
			array (
				'id' => 1732,
				'id_city' => 974,
				'area' => 'Pasay City CPO - P.O. Box Nos. 1000 to 1099',
				'zip_code' => 1350,
			),
			232 => 
			array (
				'id' => 1733,
				'id_city' => 974,
				'area' => 'Pasay City CPO - P.O. Box Nos. 1100 to 1199',
				'zip_code' => 1351,
			),
			233 => 
			array (
				'id' => 1734,
				'id_city' => 974,
				'area' => 'Pasay City CPO - P.O. Box Nos. 1200 to 1299',
				'zip_code' => 1352,
			),
			234 => 
			array (
				'id' => 1735,
				'id_city' => 974,
				'area' => 'Pasay City CPO - P.O. Box Nos. 1300 to 1399',
				'zip_code' => 1353,
			),
			235 => 
			array (
				'id' => 1736,
				'id_city' => 974,
				'area' => 'Pasay City CPO - P.O. Box Nos. 1400 to 1499',
				'zip_code' => 1354,
			),
			236 => 
			array (
				'id' => 1737,
				'id_city' => 975,
				'area' => 'Pasig Central Post Office',
				'zip_code' => 1600,
			),
			237 => 
			array (
				'id' => 1738,
				'id_city' => 975,
				'area' => 'San Joaquin',
				'zip_code' => 1601,
			),
			238 => 
			array (
				'id' => 1739,
				'id_city' => 975,
				'area' => 'Pinagbuhatan',
				'zip_code' => 1602,
			),
			239 => 
			array (
				'id' => 1740,
				'id_city' => 975,
				'area' => 'Kapitolyo',
				'zip_code' => 1603,
			),
			240 => 
			array (
				'id' => 1741,
				'id_city' => 975,
				'area' => 'Ugong',
				'zip_code' => 1604,
			),
			241 => 
			array (
				'id' => 1742,
				'id_city' => 975,
				'area' => 'Ortigas Post Office',
				'zip_code' => 1605,
			),
			242 => 
			array (
				'id' => 1743,
				'id_city' => 975,
				'area' => 'Caniogan',
				'zip_code' => 1606,
			),
			243 => 
			array (
				'id' => 1744,
				'id_city' => 975,
				'area' => 'Maybunga',
				'zip_code' => 1607,
			),
			244 => 
			array (
				'id' => 1745,
				'id_city' => 975,
				'area' => 'Santa Lucia',
				'zip_code' => 1608,
			),
			245 => 
			array (
				'id' => 1746,
				'id_city' => 975,
				'area' => 'Rosario',
				'zip_code' => 1609,
			),
			246 => 
			array (
				'id' => 1747,
				'id_city' => 975,
				'area' => 'Santolan',
				'zip_code' => 1610,
			),
			247 => 
			array (
				'id' => 1748,
				'id_city' => 975,
				'area' => 'Manggahan',
				'zip_code' => 1611,
			),
			248 => 
			array (
				'id' => 1749,
				'id_city' => 975,
				'area' => 'Green Park',
				'zip_code' => 1612,
			),
			249 => 
			array (
				'id' => 1750,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 1000 to 1099',
				'zip_code' => 1650,
			),
			250 => 
			array (
				'id' => 1751,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 1100 to 1199',
				'zip_code' => 1651,
			),
			251 => 
			array (
				'id' => 1752,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 1200 to 1299',
				'zip_code' => 1652,
			),
			252 => 
			array (
				'id' => 1753,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 1300 to 1399',
				'zip_code' => 1653,
			),
			253 => 
			array (
				'id' => 1754,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 1400 to 1499',
				'zip_code' => 1654,
			),
			254 => 
			array (
				'id' => 1755,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 1500 to 1599',
				'zip_code' => 1655,
			),
			255 => 
			array (
				'id' => 1756,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 1600 to 1699',
				'zip_code' => 1656,
			),
			256 => 
			array (
				'id' => 1757,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 1700 to 1799',
				'zip_code' => 1657,
			),
			257 => 
			array (
				'id' => 1758,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 1800 to 1899',
				'zip_code' => 1658,
			),
			258 => 
			array (
				'id' => 1759,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 1900 to 1999',
				'zip_code' => 1659,
			),
			259 => 
			array (
				'id' => 1760,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 2000 to 2099',
				'zip_code' => 1660,
			),
			260 => 
			array (
				'id' => 1761,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 2100 to 2199',
				'zip_code' => 1661,
			),
			261 => 
			array (
				'id' => 1762,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 2200 to 2299',
				'zip_code' => 1662,
			),
			262 => 
			array (
				'id' => 1763,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 2300 to 2399',
				'zip_code' => 1663,
			),
			263 => 
			array (
				'id' => 1764,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 2400 to 2499',
				'zip_code' => 1664,
			),
			264 => 
			array (
				'id' => 1765,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 2500 to 2599',
				'zip_code' => 1665,
			),
			265 => 
			array (
				'id' => 1766,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 2600 to 2699',
				'zip_code' => 1666,
			),
			266 => 
			array (
				'id' => 1767,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 2700 to 2799',
				'zip_code' => 1667,
			),
			267 => 
			array (
				'id' => 1768,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 2800 to 2899',
				'zip_code' => 1668,
			),
			268 => 
			array (
				'id' => 1769,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 2900 to 2999',
				'zip_code' => 1669,
			),
			269 => 
			array (
				'id' => 1770,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 3000 to 3099',
				'zip_code' => 1670,
			),
			270 => 
			array (
				'id' => 1771,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 3100 to 3199',
				'zip_code' => 1671,
			),
			271 => 
			array (
				'id' => 1772,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 3200 to 3299',
				'zip_code' => 1672,
			),
			272 => 
			array (
				'id' => 1773,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 3300 to 3399',
				'zip_code' => 1673,
			),
			273 => 
			array (
				'id' => 1774,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 3400 to 3499',
				'zip_code' => 1674,
			),
			274 => 
			array (
				'id' => 1775,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 3500 to 3599',
				'zip_code' => 1675,
			),
			275 => 
			array (
				'id' => 1776,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 3600 to 3699',
				'zip_code' => 1676,
			),
			276 => 
			array (
				'id' => 1777,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 3700 to 3799',
				'zip_code' => 1677,
			),
			277 => 
			array (
				'id' => 1778,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 3800 to 3899',
				'zip_code' => 1678,
			),
			278 => 
			array (
				'id' => 1779,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 3900 to 3999',
				'zip_code' => 1679,
			),
			279 => 
			array (
				'id' => 1780,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 4000 to 4099',
				'zip_code' => 1680,
			),
			280 => 
			array (
				'id' => 1781,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 4100 to 4199',
				'zip_code' => 1681,
			),
			281 => 
			array (
				'id' => 1782,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 4200 to 4299',
				'zip_code' => 1682,
			),
			282 => 
			array (
				'id' => 1783,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 4300 to 4399',
				'zip_code' => 1683,
			),
			283 => 
			array (
				'id' => 1784,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 4400 to 4499',
				'zip_code' => 1684,
			),
			284 => 
			array (
				'id' => 1785,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 4500 to 4599',
				'zip_code' => 1685,
			),
			285 => 
			array (
				'id' => 1786,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 4600 to 4699',
				'zip_code' => 1686,
			),
			286 => 
			array (
				'id' => 1787,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 4700 to 4799',
				'zip_code' => 1687,
			),
			287 => 
			array (
				'id' => 1788,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 4800 to 4899',
				'zip_code' => 1688,
			),
			288 => 
			array (
				'id' => 1789,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 4900 to 4999',
				'zip_code' => 1689,
			),
			289 => 
			array (
				'id' => 1790,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 5000 to 5099',
				'zip_code' => 1690,
			),
			290 => 
			array (
				'id' => 1791,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 5100 to 5199',
				'zip_code' => 1691,
			),
			291 => 
			array (
				'id' => 1792,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 5200 to 5299',
				'zip_code' => 1692,
			),
			292 => 
			array (
				'id' => 1793,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 5300 to 5399',
				'zip_code' => 1693,
			),
			293 => 
			array (
				'id' => 1794,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 5400 to 5499',
				'zip_code' => 1694,
			),
			294 => 
			array (
				'id' => 1795,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 5500 to 5599',
				'zip_code' => 1695,
			),
			295 => 
			array (
				'id' => 1796,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 5600 to 5699',
				'zip_code' => 1696,
			),
			296 => 
			array (
				'id' => 1797,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 5700 to 5799',
				'zip_code' => 1697,
			),
			297 => 
			array (
				'id' => 1798,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 5800 to 5899',
				'zip_code' => 1698,
			),
			298 => 
			array (
				'id' => 1799,
				'id_city' => 975,
				'area' => 'Pasig Ortigas CTR-PO Box# 5900 to 5999',
				'zip_code' => 1699,
			),
			299 => 
			array (
				'id' => 1800,
				'id_city' => 976,
				'area' => 'Alicia',
				'zip_code' => 1105,
			),
			300 => 
			array (
				'id' => 1801,
				'id_city' => 976,
				'area' => 'Amihan',
				'zip_code' => 1102,
			),
			301 => 
			array (
				'id' => 1802,
				'id_city' => 976,
				'area' => 'Apolonio Samson',
				'zip_code' => 1106,
			),
			302 => 
			array (
				'id' => 1803,
				'id_city' => 976,
				'area' => 'Araneta Center',
				'zip_code' => 810,
			),
			303 => 
			array (
				'id' => 1804,
				'id_city' => 976,
				'area' => 'Araneta Center P.O. Boxes',
				'zip_code' => 1135,
			),
			304 => 
			array (
				'id' => 1805,
				'id_city' => 976,
				'area' => 'Baesa',
				'zip_code' => 1106,
			),
			305 => 
			array (
				'id' => 1806,
				'id_city' => 976,
				'area' => 'Bagbag',
				'zip_code' => 1116,
			),
			306 => 
			array (
				'id' => 1807,
				'id_city' => 976,
				'area' => 'Bagong Bayan',
				'zip_code' => 1110,
			),
			307 => 
			array (
				'id' => 1808,
				'id_city' => 976,
				'area' => 'Bagong Buhay',
				'zip_code' => 1109,
			),
			308 => 
			array (
				'id' => 1809,
				'id_city' => 976,
				'area' => 'Bagong Lipunan',
				'zip_code' => 1111,
			),
			309 => 
			array (
				'id' => 1810,
				'id_city' => 976,
				'area' => 'Bagong Pag-Asa',
				'zip_code' => 1105,
			),
			310 => 
			array (
				'id' => 1811,
				'id_city' => 976,
				'area' => 'Bagong Silangan',
				'zip_code' => 1119,
			),
			311 => 
			array (
				'id' => 1812,
				'id_city' => 976,
				'area' => 'Bahay Toro',
				'zip_code' => 1106,
			),
			312 => 
			array (
				'id' => 1813,
				'id_city' => 976,
				'area' => 'Balingasa',
				'zip_code' => 1115,
			),
			313 => 
			array (
				'id' => 1814,
				'id_city' => 976,
				'area' => 'Balintawak',
				'zip_code' => 1106,
			),
			314 => 
			array (
				'id' => 1815,
				'id_city' => 976,
				'area' => 'Balumbato',
				'zip_code' => 1106,
			),
			315 => 
			array (
				'id' => 1816,
				'id_city' => 976,
				'area' => 'Batasan Hills',
				'zip_code' => 1126,
			),
			316 => 
			array (
				'id' => 1817,
				'id_city' => 976,
				'area' => 'Bayanihan',
				'zip_code' => 1109,
			),
			317 => 
			array (
				'id' => 1818,
				'id_city' => 976,
				'area' => 'BF Homes',
				'zip_code' => 1120,
			),
			318 => 
			array (
				'id' => 1819,
				'id_city' => 976,
				'area' => 'Blue Ridge',
				'zip_code' => 1109,
			),
			319 => 
			array (
				'id' => 1820,
				'id_city' => 976,
				'area' => 'Botocan',
				'zip_code' => 1101,
			),
			320 => 
			array (
				'id' => 1821,
				'id_city' => 976,
				'area' => 'Broadway Center P.O. Boxes',
				'zip_code' => 1141,
			),
			321 => 
			array (
				'id' => 1822,
				'id_city' => 976,
				'area' => 'Bungad',
				'zip_code' => 1105,
			),
			322 => 
			array (
				'id' => 1823,
				'id_city' => 976,
				'area' => 'Bureau of Internal Revenue',
				'zip_code' => 820,
			),
			323 => 
			array (
				'id' => 1824,
				'id_city' => 976,
				'area' => 'Camp Aguinaldo',
				'zip_code' => 1110,
			),
			324 => 
			array (
				'id' => 1825,
				'id_city' => 976,
				'area' => 'Camp Aguinaldo',
				'zip_code' => 802,
			),
			325 => 
			array (
				'id' => 1826,
				'id_city' => 976,
				'area' => 'Camp Crame',
				'zip_code' => 801,
			),
			326 => 
			array (
				'id' => 1827,
				'id_city' => 976,
				'area' => 'Capitol Hills/Park',
				'zip_code' => 1126,
			),
			327 => 
			array (
				'id' => 1828,
				'id_city' => 976,
				'area' => 'Capri',
				'zip_code' => 1117,
			),
			328 => 
			array (
				'id' => 1829,
				'id_city' => 976,
				'area' => 'Central',
				'zip_code' => 1100,
			),
			329 => 
			array (
				'id' => 1830,
				'id_city' => 976,
				'area' => 'Claro',
				'zip_code' => 1102,
			),
			330 => 
			array (
				'id' => 1831,
				'id_city' => 976,
				'area' => 'Commission on Audit',
				'zip_code' => 880,
			),
			331 => 
			array (
				'id' => 1832,
				'id_city' => 976,
				'area' => 'Commonwealth',
				'zip_code' => 1121,
			),
			332 => 
			array (
				'id' => 1833,
				'id_city' => 976,
				'area' => 'Crame',
				'zip_code' => 1111,
			),
			333 => 
			array (
				'id' => 1834,
				'id_city' => 976,
				'area' => 'Cubao',
				'zip_code' => 1109,
			),
			334 => 
			array (
				'id' => 1835,
				'id_city' => 976,
				'area' => 'Culiat',
				'zip_code' => 1128,
			),
			335 => 
			array (
				'id' => 1836,
				'id_city' => 976,
				'area' => 'Damar',
				'zip_code' => 1115,
			),
			336 => 
			array (
				'id' => 1837,
				'id_city' => 976,
				'area' => 'Damayan',
				'zip_code' => 1104,
			),
			337 => 
			array (
				'id' => 1838,
				'id_city' => 976,
				'area' => 'Damayan Lagi',
				'zip_code' => 1112,
			),
			338 => 
			array (
				'id' => 1839,
				'id_city' => 976,
				'area' => 'Damong Maliit',
				'zip_code' => 1123,
			),
			339 => 
			array (
				'id' => 1840,
				'id_city' => 976,
				'area' => 'Del Monte',
				'zip_code' => 1105,
			),
			340 => 
			array (
				'id' => 1841,
				'id_city' => 976,
				'area' => 'Diliman',
				'zip_code' => 1104,
			),
			341 => 
			array (
				'id' => 1842,
				'id_city' => 976,
				'area' => 'Dioquino Zobel',
				'zip_code' => 1109,
			),
			342 => 
			array (
				'id' => 1843,
				'id_city' => 976,
				'area' => 'Don Manuel',
				'zip_code' => 1113,
			),
			343 => 
			array (
				'id' => 1844,
				'id_city' => 976,
				'area' => 'Do?a Aurora',
				'zip_code' => 1113,
			),
			344 => 
			array (
				'id' => 1845,
				'id_city' => 976,
				'area' => 'Do?a Faustina Subdivision',
				'zip_code' => 1125,
			),
			345 => 
			array (
				'id' => 1846,
				'id_city' => 976,
				'area' => 'Do?a Imelda',
				'zip_code' => 1113,
			),
			346 => 
			array (
				'id' => 1847,
				'id_city' => 976,
				'area' => 'Do?a Josefa',
				'zip_code' => 1113,
			),
			347 => 
			array (
				'id' => 1848,
				'id_city' => 976,
				'area' => 'Duyan-Duyan',
				'zip_code' => 1102,
			),
			348 => 
			array (
				'id' => 1849,
				'id_city' => 976,
				'area' => 'E. Rodriguez',
				'zip_code' => 1102,
			),
			349 => 
			array (
				'id' => 1850,
				'id_city' => 976,
				'area' => 'Escopa',
				'zip_code' => 1109,
			),
			350 => 
			array (
				'id' => 1851,
				'id_city' => 976,
				'area' => 'Fairview',
				'zip_code' => 1118,
			),
			351 => 
			array (
				'id' => 1852,
				'id_city' => 976,
				'area' => 'Fairview [North]',
				'zip_code' => 1121,
			),
			352 => 
			array (
				'id' => 1853,
				'id_city' => 976,
				'area' => 'Fairview [South]',
				'zip_code' => 1122,
			),
			353 => 
			array (
				'id' => 1854,
				'id_city' => 976,
				'area' => 'Gintong Silahis',
				'zip_code' => 1114,
			),
			354 => 
			array (
				'id' => 1855,
				'id_city' => 976,
				'area' => 'Gulod',
				'zip_code' => 1117,
			),
			355 => 
			array (
				'id' => 1856,
				'id_city' => 976,
				'area' => 'Holy Spirit',
				'zip_code' => 1127,
			),
			356 => 
			array (
				'id' => 1857,
				'id_city' => 976,
				'area' => 'Horseshoe',
				'zip_code' => 1112,
			),
			357 => 
			array (
				'id' => 1858,
				'id_city' => 976,
				'area' => 'Immaculate Concepcion',
				'zip_code' => 1111,
			),
			358 => 
			array (
				'id' => 1859,
				'id_city' => 976,
				'area' => 'Kaligayahan',
				'zip_code' => 1124,
			),
			359 => 
			array (
				'id' => 1860,
				'id_city' => 976,
				'area' => 'Kalusugan',
				'zip_code' => 1112,
			),
			360 => 
			array (
				'id' => 1861,
				'id_city' => 976,
				'area' => 'Kamias',
				'zip_code' => 1102,
			),
			361 => 
			array (
				'id' => 1862,
				'id_city' => 976,
				'area' => 'Kamuning',
				'zip_code' => 1103,
			),
			362 => 
			array (
				'id' => 1863,
				'id_city' => 976,
				'area' => 'Katipunan',
				'zip_code' => 1105,
			),
			363 => 
			array (
				'id' => 1864,
				'id_city' => 976,
				'area' => 'Kaunlaran',
				'zip_code' => 1111,
			),
			364 => 
			array (
				'id' => 1865,
				'id_city' => 976,
				'area' => 'Kristong Hari',
				'zip_code' => 1112,
			),
			365 => 
			array (
				'id' => 1866,
				'id_city' => 976,
				'area' => 'Krus na Ligas',
				'zip_code' => 1101,
			),
			366 => 
			array (
				'id' => 1867,
				'id_city' => 976,
				'area' => 'La Loma',
				'zip_code' => 1114,
			),
			367 => 
			array (
				'id' => 1868,
				'id_city' => 976,
				'area' => 'Laging Handa',
				'zip_code' => 1103,
			),
			368 => 
			array (
				'id' => 1869,
				'id_city' => 976,
				'area' => 'Libis',
				'zip_code' => 1110,
			),
			369 => 
			array (
				'id' => 1870,
				'id_city' => 976,
				'area' => 'Lourdes',
				'zip_code' => 1114,
			),
			370 => 
			array (
				'id' => 1871,
				'id_city' => 976,
				'area' => 'Loyola Heights',
				'zip_code' => 1108,
			),
			371 => 
			array (
				'id' => 1872,
				'id_city' => 976,
				'area' => 'Maharlika',
				'zip_code' => 1114,
			),
			372 => 
			array (
				'id' => 1873,
				'id_city' => 976,
				'area' => 'Malaya',
				'zip_code' => 1101,
			),
			373 => 
			array (
				'id' => 1874,
				'id_city' => 976,
				'area' => 'Mangga',
				'zip_code' => 1109,
			),
			374 => 
			array (
				'id' => 1875,
				'id_city' => 976,
				'area' => 'Manresa',
				'zip_code' => 1115,
			),
			375 => 
			array (
				'id' => 1876,
				'id_city' => 976,
				'area' => 'Mariana',
				'zip_code' => 1112,
			),
			376 => 
			array (
				'id' => 1877,
				'id_city' => 976,
				'area' => 'Mariblo',
				'zip_code' => 1104,
			),
			377 => 
			array (
				'id' => 1878,
				'id_city' => 976,
				'area' => 'Marilag',
				'zip_code' => 1109,
			),
			378 => 
			array (
				'id' => 1879,
				'id_city' => 976,
				'area' => 'Masagana',
				'zip_code' => 1109,
			),
			379 => 
			array (
				'id' => 1880,
				'id_city' => 976,
				'area' => 'Masambong',
				'zip_code' => 1115,
			),
			380 => 
			array (
				'id' => 1881,
				'id_city' => 976,
				'area' => 'Matalahib',
				'zip_code' => 1114,
			),
			381 => 
			array (
				'id' => 1882,
				'id_city' => 976,
				'area' => 'Matandang Balara',
				'zip_code' => 1119,
			),
			382 => 
			array (
				'id' => 1883,
				'id_city' => 976,
				'area' => 'Milagrosa',
				'zip_code' => 1109,
			),
			383 => 
			array (
				'id' => 1884,
				'id_city' => 976,
				'area' => 'Murphy District P.O. Boxes',
				'zip_code' => 1138,
			),
			384 => 
			array (
				'id' => 1885,
				'id_city' => 976,
				'area' => 'Nagkaisang Nayon',
				'zip_code' => 1125,
			),
			385 => 
			array (
				'id' => 1886,
				'id_city' => 976,
				'area' => 'National Irrigation Administration',
				'zip_code' => 830,
			),
			386 => 
			array (
				'id' => 1887,
				'id_city' => 976,
				'area' => 'Nayon Kaunlaran',
				'zip_code' => 1104,
			),
			387 => 
			array (
				'id' => 1888,
				'id_city' => 976,
				'area' => 'New Era',
				'zip_code' => 1107,
			),
			388 => 
			array (
				'id' => 1889,
				'id_city' => 976,
				'area' => 'Novaliches P.O. Boxes',
				'zip_code' => 1147,
			),
			389 => 
			array (
				'id' => 1890,
				'id_city' => 976,
				'area' => 'Novaliches Proper',
				'zip_code' => 1123,
			),
			390 => 
			array (
				'id' => 1891,
				'id_city' => 976,
				'area' => 'Obrero',
				'zip_code' => 1103,
			),
			391 => 
			array (
				'id' => 1892,
				'id_city' => 976,
				'area' => 'Old Capitol Site',
				'zip_code' => 1101,
			),
			392 => 
			array (
				'id' => 1893,
				'id_city' => 976,
				'area' => 'Paang Bundok',
				'zip_code' => 1114,
			),
			393 => 
			array (
				'id' => 1894,
				'id_city' => 976,
				'area' => 'Pag-Ibig sa Nayon',
				'zip_code' => 1115,
			),
			394 => 
			array (
				'id' => 1895,
				'id_city' => 976,
				'area' => 'Paligsahan',
				'zip_code' => 1103,
			),
			395 => 
			array (
				'id' => 1896,
				'id_city' => 976,
				'area' => 'Paltok',
				'zip_code' => 1105,
			),
			396 => 
			array (
				'id' => 1897,
				'id_city' => 976,
				'area' => 'Pansol',
				'zip_code' => 1108,
			),
			397 => 
			array (
				'id' => 1898,
				'id_city' => 976,
				'area' => 'Paraiso',
				'zip_code' => 1104,
			),
			398 => 
			array (
				'id' => 1899,
				'id_city' => 976,
				'area' => 'Pasong Putik',
				'zip_code' => 1118,
			),
			399 => 
			array (
				'id' => 1900,
				'id_city' => 976,
				'area' => 'Pasong Tamo',
				'zip_code' => 1107,
			),
			400 => 
			array (
				'id' => 1901,
				'id_city' => 976,
				'area' => 'Payatas',
				'zip_code' => 1119,
			),
			401 => 
			array (
				'id' => 1902,
				'id_city' => 976,
				'area' => 'Phil-Am',
				'zip_code' => 1104,
			),
			402 => 
			array (
				'id' => 1903,
				'id_city' => 976,
				'area' => 'Philippine Heart Center',
				'zip_code' => 850,
			),
			403 => 
			array (
				'id' => 1904,
				'id_city' => 976,
				'area' => 'Pinagkaisahan',
				'zip_code' => 1111,
			),
			404 => 
			array (
				'id' => 1905,
				'id_city' => 976,
				'area' => 'Pi?ahan',
				'zip_code' => 1100,
			),
			405 => 
			array (
				'id' => 1906,
				'id_city' => 976,
				'area' => 'Project 4',
				'zip_code' => 1109,
			),
			406 => 
			array (
				'id' => 1907,
				'id_city' => 976,
				'area' => 'Project 6',
				'zip_code' => 1100,
			),
			407 => 
			array (
				'id' => 1908,
				'id_city' => 976,
				'area' => 'Project 7',
				'zip_code' => 1105,
			),
			408 => 
			array (
				'id' => 1909,
				'id_city' => 976,
				'area' => 'Project 8',
				'zip_code' => 1106,
			),
			409 => 
			array (
				'id' => 1910,
				'id_city' => 976,
				'area' => 'Quezon City CPO',
				'zip_code' => 1100,
			),
			410 => 
			array (
				'id' => 1911,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 1000 to 1099',
				'zip_code' => 1150,
			),
			411 => 
			array (
				'id' => 1912,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 1100 to 1199',
				'zip_code' => 1151,
			),
			412 => 
			array (
				'id' => 1913,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 1200 to 1299',
				'zip_code' => 1152,
			),
			413 => 
			array (
				'id' => 1914,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 1300 to 1399',
				'zip_code' => 1153,
			),
			414 => 
			array (
				'id' => 1915,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 1400 to 1499',
				'zip_code' => 1154,
			),
			415 => 
			array (
				'id' => 1916,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 1500 to 1599',
				'zip_code' => 1155,
			),
			416 => 
			array (
				'id' => 1917,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 1600 to 1699',
				'zip_code' => 1156,
			),
			417 => 
			array (
				'id' => 1918,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 1700 to 1799',
				'zip_code' => 1157,
			),
			418 => 
			array (
				'id' => 1919,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 1800 to 1899',
				'zip_code' => 1158,
			),
			419 => 
			array (
				'id' => 1920,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 1900 to 1999',
				'zip_code' => 1159,
			),
			420 => 
			array (
				'id' => 1921,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 2000 to 2099',
				'zip_code' => 1160,
			),
			421 => 
			array (
				'id' => 1922,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 2100 to 2199',
				'zip_code' => 1161,
			),
			422 => 
			array (
				'id' => 1923,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 2200 to 2299',
				'zip_code' => 1162,
			),
			423 => 
			array (
				'id' => 1924,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 2300 to 2399',
				'zip_code' => 1163,
			),
			424 => 
			array (
				'id' => 1925,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 2400 to 2499',
				'zip_code' => 1164,
			),
			425 => 
			array (
				'id' => 1926,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 2500 to 2599',
				'zip_code' => 1165,
			),
			426 => 
			array (
				'id' => 1927,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 2600 to 2699',
				'zip_code' => 1166,
			),
			427 => 
			array (
				'id' => 1928,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 2700 to 2799',
				'zip_code' => 1167,
			),
			428 => 
			array (
				'id' => 1929,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 2800 to 2899',
				'zip_code' => 1168,
			),
			429 => 
			array (
				'id' => 1930,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 2900 to 2999',
				'zip_code' => 1169,
			),
			430 => 
			array (
				'id' => 1931,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 3000 to 3099',
				'zip_code' => 1170,
			),
			431 => 
			array (
				'id' => 1932,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 3100 to 3199',
				'zip_code' => 1171,
			),
			432 => 
			array (
				'id' => 1933,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 3200 to 3299',
				'zip_code' => 1172,
			),
			433 => 
			array (
				'id' => 1934,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 3300 to 3399',
				'zip_code' => 1173,
			),
			434 => 
			array (
				'id' => 1935,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 3400 to 3499',
				'zip_code' => 1174,
			),
			435 => 
			array (
				'id' => 1936,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 3500 to 3599',
				'zip_code' => 1175,
			),
			436 => 
			array (
				'id' => 1937,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 3600 to 3699',
				'zip_code' => 1176,
			),
			437 => 
			array (
				'id' => 1938,
				'id_city' => 976,
				'area' => 'Quezon City CPO - P.O. Box Nos. 3700 to 3799',
				'zip_code' => 1177,
			),
			438 => 
			array (
				'id' => 1939,
				'id_city' => 976,
				'area' => 'Quezon City Hall',
				'zip_code' => 860,
			),
			439 => 
			array (
				'id' => 1940,
				'id_city' => 976,
			'area' => 'Quirino District (Project 2 & 3)',
				'zip_code' => 1102,
			),
			440 => 
			array (
				'id' => 1941,
				'id_city' => 976,
				'area' => 'R. Magsaysay',
				'zip_code' => 1105,
			),
			441 => 
			array (
				'id' => 1942,
				'id_city' => 976,
				'area' => 'Roxas District',
				'zip_code' => 1103,
			),
			442 => 
			array (
				'id' => 1943,
				'id_city' => 976,
				'area' => 'Sacred Heart',
				'zip_code' => 1103,
			),
			443 => 
			array (
				'id' => 1944,
				'id_city' => 976,
				'area' => 'Salvacion',
				'zip_code' => 1114,
			),
			444 => 
			array (
				'id' => 1945,
				'id_city' => 976,
				'area' => 'San Agustin',
				'zip_code' => 1117,
			),
			445 => 
			array (
				'id' => 1946,
				'id_city' => 976,
				'area' => 'San Antonio, Quezon City',
				'zip_code' => 1105,
			),
			446 => 
			array (
				'id' => 1947,
				'id_city' => 976,
				'area' => 'San Bartolome',
				'zip_code' => 1116,
			),
			447 => 
			array (
				'id' => 1948,
				'id_city' => 976,
				'area' => 'San Isidro',
				'zip_code' => 1113,
			),
			448 => 
			array (
				'id' => 1949,
				'id_city' => 976,
				'area' => 'San Isidro Labrador',
				'zip_code' => 1114,
			),
			449 => 
			array (
				'id' => 1950,
				'id_city' => 976,
				'area' => 'San Jose',
				'zip_code' => 1115,
			),
			450 => 
			array (
				'id' => 1951,
				'id_city' => 976,
				'area' => 'San Roque',
				'zip_code' => 1109,
			),
			451 => 
			array (
				'id' => 1952,
				'id_city' => 976,
				'area' => 'San Vicente',
				'zip_code' => 1101,
			),
			452 => 
			array (
				'id' => 1953,
				'id_city' => 976,
				'area' => 'Sangandaan',
				'zip_code' => 1116,
			),
			453 => 
			array (
				'id' => 1954,
				'id_city' => 976,
				'area' => 'Santa Cruz',
				'zip_code' => 1104,
			),
			454 => 
			array (
				'id' => 1955,
				'id_city' => 976,
				'area' => 'Santa Lucia',
				'zip_code' => 1117,
			),
			455 => 
			array (
				'id' => 1956,
				'id_city' => 976,
				'area' => 'Santa Monica',
				'zip_code' => 1117,
			),
			456 => 
			array (
				'id' => 1957,
				'id_city' => 976,
				'area' => 'Santa Teresita',
				'zip_code' => 1114,
			),
			457 => 
			array (
				'id' => 1958,
				'id_city' => 976,
				'area' => 'Santo Cristo',
				'zip_code' => 1105,
			),
			458 => 
			array (
				'id' => 1959,
				'id_city' => 976,
				'area' => 'Santo Ni?o',
				'zip_code' => 1113,
			),
			459 => 
			array (
				'id' => 1960,
				'id_city' => 976,
				'area' => 'Santol',
				'zip_code' => 1113,
			),
			460 => 
			array (
				'id' => 1961,
				'id_city' => 976,
				'area' => 'Sauyo',
				'zip_code' => 1116,
			),
			461 => 
			array (
				'id' => 1962,
				'id_city' => 976,
				'area' => 'Sienna',
				'zip_code' => 1114,
			),
			462 => 
			array (
				'id' => 1963,
				'id_city' => 976,
				'area' => 'Sikatuna Village',
				'zip_code' => 1101,
			),
			463 => 
			array (
				'id' => 1964,
				'id_city' => 976,
				'area' => 'Silangan',
				'zip_code' => 1102,
			),
			464 => 
			array (
				'id' => 1965,
				'id_city' => 976,
				'area' => 'Social Security System',
				'zip_code' => 800,
			),
			465 => 
			array (
				'id' => 1966,
				'id_city' => 976,
				'area' => 'Socorro',
				'zip_code' => 1109,
			),
			466 => 
			array (
				'id' => 1967,
				'id_city' => 976,
				'area' => 'South Triangle',
				'zip_code' => 1103,
			),
			467 => 
			array (
				'id' => 1968,
				'id_city' => 976,
				'area' => 'St. Ignatius',
				'zip_code' => 1110,
			),
			468 => 
			array (
				'id' => 1969,
				'id_city' => 976,
				'area' => 'St. Martin de Porres',
				'zip_code' => 1111,
			),
			469 => 
			array (
				'id' => 1970,
				'id_city' => 976,
				'area' => 'St. Peter',
				'zip_code' => 1114,
			),
			470 => 
			array (
				'id' => 1971,
				'id_city' => 976,
				'area' => 'Tagumpay',
				'zip_code' => 1109,
			),
			471 => 
			array (
				'id' => 1972,
				'id_city' => 976,
				'area' => 'Talampas',
				'zip_code' => 1110,
			),
			472 => 
			array (
				'id' => 1973,
				'id_city' => 976,
				'area' => 'Talayan',
				'zip_code' => 1104,
			),
			473 => 
			array (
				'id' => 1974,
				'id_city' => 976,
				'area' => 'Talipapa',
				'zip_code' => 1116,
			),
			474 => 
			array (
				'id' => 1975,
				'id_city' => 976,
				'area' => 'Tandang Sora',
				'zip_code' => 1116,
			),
			475 => 
			array (
				'id' => 1976,
				'id_city' => 976,
				'area' => 'Tatalon',
				'zip_code' => 1113,
			),
			476 => 
			array (
				'id' => 1977,
				'id_city' => 976,
				'area' => 'Teachers Village',
				'zip_code' => 1101,
			),
			477 => 
			array (
				'id' => 1978,
				'id_city' => 976,
				'area' => 'Ugong Norte',
				'zip_code' => 1110,
			),
			478 => 
			array (
				'id' => 1979,
				'id_city' => 976,
				'area' => 'Unang Sigaw',
				'zip_code' => 1106,
			),
			479 => 
			array (
				'id' => 1980,
				'id_city' => 976,
				'area' => 'University of the Philippines Post Office',
				'zip_code' => 1101,
			),
			480 => 
			array (
				'id' => 1981,
				'id_city' => 976,
				'area' => 'University of the Philippines P.O. Boxes',
				'zip_code' => 1144,
			),
			481 => 
			array (
				'id' => 1982,
				'id_city' => 976,
				'area' => 'University of the Philippines Village',
				'zip_code' => 1101,
			),
			482 => 
			array (
				'id' => 1983,
				'id_city' => 976,
				'area' => 'V. Luna Hospital',
				'zip_code' => 840,
			),
			483 => 
			array (
				'id' => 1984,
				'id_city' => 976,
				'area' => 'Valencia',
				'zip_code' => 1112,
			),
			484 => 
			array (
				'id' => 1985,
				'id_city' => 976,
				'area' => 'Vasra',
				'zip_code' => 1128,
			),
			485 => 
			array (
				'id' => 1986,
				'id_city' => 976,
				'area' => 'Veterans Hospital',
				'zip_code' => 870,
			),
			486 => 
			array (
				'id' => 1987,
				'id_city' => 976,
				'area' => 'Veterans Village',
				'zip_code' => 1105,
			),
			487 => 
			array (
				'id' => 1988,
				'id_city' => 976,
				'area' => 'Villa Maria Clara',
				'zip_code' => 1109,
			),
			488 => 
			array (
				'id' => 1989,
				'id_city' => 976,
				'area' => 'Violago Homes',
				'zip_code' => 1120,
			),
			489 => 
			array (
				'id' => 1990,
				'id_city' => 976,
				'area' => 'West Triangle',
				'zip_code' => 1104,
			),
			490 => 
			array (
				'id' => 1991,
				'id_city' => 976,
				'area' => 'White Plains',
				'zip_code' => 1110,
			),
			491 => 
			array (
				'id' => 1992,
				'id_city' => 977,
				'area' => 'Eisenhower - Crame',
				'zip_code' => 1504,
			),
			492 => 
			array (
				'id' => 1993,
				'id_city' => 977,
				'area' => 'Greenhills Post Office',
				'zip_code' => 1502,
			),
			493 => 
			array (
				'id' => 1994,
				'id_city' => 977,
				'area' => 'Greenhills [North]',
				'zip_code' => 1503,
			),
			494 => 
			array (
				'id' => 1995,
				'id_city' => 977,
				'area' => 'San Juan Central Post Office',
				'zip_code' => 1500,
			),
			495 => 
			array (
				'id' => 1996,
				'id_city' => 977,
				'area' => 'International Correspondence School',
				'zip_code' => 400,
			),
			496 => 
			array (
				'id' => 1997,
				'id_city' => 977,
				'area' => 'Asian Development Bank',
				'zip_code' => 401,
			),
			497 => 
			array (
				'id' => 1998,
				'id_city' => 977,
				'area' => 'Radio Bible Class',
				'zip_code' => 410,
			),
			498 => 
			array (
				'id' => 1999,
				'id_city' => 977,
				'area' => 'Bible School on the Air',
				'zip_code' => 420,
			),
			499 => 
			array (
				'id' => 2000,
				'id_city' => 977,
				'area' => 'Greenhills P.O. Box Nos. 1000 to 1099',
				'zip_code' => 1530,
			),
		));
		\DB::table('city_area')->insert(array (
			0 => 
			array (
				'id' => 2001,
				'id_city' => 977,
				'area' => 'Greenhills P.O. Box Nos. 1100 to 1199',
				'zip_code' => 1531,
			),
			1 => 
			array (
				'id' => 2002,
				'id_city' => 977,
				'area' => 'Greenhills P.O. Box Nos. 1200 to 1299',
				'zip_code' => 1532,
			),
			2 => 
			array (
				'id' => 2003,
				'id_city' => 977,
				'area' => 'Greenhills P.O. Box Nos. 1300 to 1399',
				'zip_code' => 1533,
			),
			3 => 
			array (
				'id' => 2004,
				'id_city' => 977,
				'area' => 'Greenhills P.O. Box Nos. 1400 to 1499',
				'zip_code' => 1534,
			),
			4 => 
			array (
				'id' => 2005,
				'id_city' => 977,
				'area' => 'Greenhills P.O. Box Nos. 1500 to 1599',
				'zip_code' => 1535,
			),
			5 => 
			array (
				'id' => 2006,
				'id_city' => 977,
				'area' => 'Greenhills P.O. Box Nos. 1600 to 1699',
				'zip_code' => 1536,
			),
			6 => 
			array (
				'id' => 2007,
				'id_city' => 978,
				'area' => 'Bay Breeze Executive Village',
				'zip_code' => 1636,
			),
			7 => 
			array (
				'id' => 2008,
				'id_city' => 978,
				'area' => 'Bicutan',
				'zip_code' => 1631,
			),
			8 => 
			array (
				'id' => 2009,
				'id_city' => 978,
				'area' => 'ususan',
				'zip_code' => 1632,
			),
			9 => 
			array (
				'id' => 2010,
				'id_city' => 978,
				'area' => 'Upper Bicutan',
				'zip_code' => 1633,
			),
			10 => 
			array (
				'id' => 2011,
				'id_city' => 978,
			'area' => 'Western Bicutan (including Food Terminal, Inc. complex)',
				'zip_code' => 1630,
			),
			11 => 
			array (
				'id' => 2012,
				'id_city' => 978,
				'area' => 'Ligid',
				'zip_code' => 1638,
			),
			12 => 
			array (
				'id' => 2013,
				'id_city' => 978,
				'area' => 'Nichols - McKinley',
				'zip_code' => 1634,
			),
			13 => 
			array (
				'id' => 2014,
				'id_city' => 978,
				'area' => 'Tuktukan',
				'zip_code' => 1637,
			),
			14 => 
			array (
				'id' => 2015,
				'id_city' => 979,
				'area' => 'Arkong Bato',
				'zip_code' => 1444,
			),
			15 => 
			array (
				'id' => 2016,
				'id_city' => 979,
				'area' => 'Balangkas - Caloong',
				'zip_code' => 1445,
			),
			16 => 
			array (
				'id' => 2017,
				'id_city' => 979,
				'area' => 'Dalandanan - West Canumay',
				'zip_code' => 1443,
			),
			17 => 
			array (
				'id' => 2018,
				'id_city' => 979,
				'area' => 'East Canumay - Lawang Bato Punturin',
				'zip_code' => 1447,
			),
			18 => 
			array (
				'id' => 2019,
				'id_city' => 979,
				'area' => 'Fortune Village',
				'zip_code' => 1442,
			),
			19 => 
			array (
				'id' => 2020,
				'id_city' => 979,
				'area' => 'General T. de Leon',
				'zip_code' => 1442,
			),
			20 => 
			array (
				'id' => 2021,
				'id_city' => 979,
				'area' => 'Karuhatan',
				'zip_code' => 1441,
			),
			21 => 
			array (
				'id' => 2022,
				'id_city' => 979,
				'area' => 'Lingunan',
				'zip_code' => 1446,
			),
			22 => 
			array (
				'id' => 2023,
				'id_city' => 979,
				'area' => 'Mabolo',
				'zip_code' => 1444,
			),
			23 => 
			array (
				'id' => 2024,
				'id_city' => 979,
				'area' => 'Malanday',
				'zip_code' => 1444,
			),
			24 => 
			array (
				'id' => 2025,
				'id_city' => 979,
				'area' => 'Mapulang Lupa',
				'zip_code' => 1448,
			),
			25 => 
			array (
				'id' => 2026,
				'id_city' => 979,
				'area' => 'Paso de Blas',
				'zip_code' => 1442,
			),
			26 => 
			array (
				'id' => 2027,
				'id_city' => 979,
				'area' => 'Pasolo',
				'zip_code' => 1444,
			),
			27 => 
			array (
				'id' => 2028,
				'id_city' => 979,
				'area' => 'Polo',
				'zip_code' => 1444,
			),
			28 => 
			array (
				'id' => 2029,
				'id_city' => 979,
				'area' => 'Rincon',
				'zip_code' => 1444,
			),
			29 => 
			array (
				'id' => 2030,
				'id_city' => 979,
				'area' => 'Valenzuela Central Post Office - Malinta',
				'zip_code' => 1440,
			),
			30 => 
			array (
				'id' => 2031,
				'id_city' => 979,
				'area' => 'Valenzuela P.O. Boxes',
				'zip_code' => 1469,
			),
			31 => 
			array (
				'id' => 2032,
				'id_city' => 979,
				'area' => 'Far East Broadcasting Corporation',
				'zip_code' => 560,
			),
			32 => 
			array (
				'id' => 2033,
				'id_city' => 979,
				'area' => 'Febias College of Bible',
				'zip_code' => 550,
			),
			33 => 
			array (
				'id' => 2034,
				'id_city' => 980,
				'area' => 'Aguho',
				'zip_code' => 1620,
			),
			34 => 
			array (
				'id' => 2035,
				'id_city' => 980,
				'area' => 'Santa Ana',
				'zip_code' => 1621,
			),
		));
	}

}
