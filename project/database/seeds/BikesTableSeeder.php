<?php

use App\Bike;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BikesTableSeeder extends Seeder
{

	const BIKES_JSON_PATH = 'database/database-sample/bikes.json';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   		DB::table('bikes')->delete();
   		$json = File::get(self::BIKES_JSON_PATH);

   		$bikesJsonData = json_decode($json);

   		foreach ($bikesJsonData as $bike) {
   			Bike::create([
				'id' => $bike->id,
            	'make' => $bike->make,
            	'model' => $bike->model,
            	'year' => $bike->year,
            	'mods' => $bike->mods,
            	'picture'=> $bike->picture
        	]);
		}
    }
}
