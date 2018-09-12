<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Order;
class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
        	$comment = new Order;

        	$comment -> user_id = rand(1,22);
        	$comment -> shopping_id = rand(1,10);
	        $comment -> price = rand(1,500);
	        $comment -> counts = rand(1,5);
	        $comment -> state = rand(1,2);
	        $comment -> save();
        }
    }
}
