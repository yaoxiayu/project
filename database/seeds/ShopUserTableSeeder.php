<?php

use App\ShopUser;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class ShopUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) {
        	$shopuser = new ShopUser;

        	$shopuser -> username = $faker -> name;
        	$shopuser -> password = Hash::make('admin');
	        $shopuser -> pic = $faker -> imageUrl(640,480);
	        $shopuser -> phone = str_random(11);
	        $shopuser -> address = '山西省-太原市-小店区-富康街';
	        $shopuser -> intro = '欢迎光临我的小店';
	        $shopuser -> industry_id = rand(1,4);
	        $shopuser -> name = $faker -> name;
            $shopuser -> renprice = rand(10,1000);
	        $shopuser -> save();
        }
    }
}
