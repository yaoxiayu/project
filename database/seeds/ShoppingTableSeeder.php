<?php

use Illuminate\Database\Seeder;
use App\Shopping;
use Faker\Generator as Faker;
class ShoppingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
        	$shopping = new Shopping;

        	$shopping -> name = $faker -> name;
	        $shopping -> img = $faker -> imageUrl(640,480);
	        $shopping -> price = rand(1,500);
	        $shopping -> shopUser_id = rand(1,20);
	        $shopping -> content = $faker->realText();
	        $shopping -> counts = rand(1,5);
	        $shopping -> save();
        }
    }
}
