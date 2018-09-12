<?php

use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
        	$user = new User;

        	$user -> username = $faker -> name;
        	$user -> password = Hash::make('admin');
	        $user -> pic = $faker -> imageUrl(640,480);
	        $user -> phone = str_random(11);
	        $user -> address = '山西省-吕梁市-孝义市';
	        $user -> save();
        }
    }
}
