<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Ad;
class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
        	$ad = new Ad;

        	$ad -> name = $faker -> name;
	        $ad -> img = $faker -> imageUrl(200,340);
	        $ad -> save();
        }
    }
}
