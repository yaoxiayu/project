<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comment;
class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
        	$comment = new Comment;

        	$comment -> user_id = rand(1,22);
        	$comment -> shopping_id = rand(1,30);
	        $comment -> content = $faker->realText();
	        $comment -> values =  rand(1,3);
	        $comment -> save();
        }
    }
}
