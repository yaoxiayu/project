<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Tag;
class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
        	$tag = new Tag;

	        $tag -> industry_id = rand(1,4);
	        $tag -> name = $faker -> name;
	        $tag -> save();
        }
    }
}
