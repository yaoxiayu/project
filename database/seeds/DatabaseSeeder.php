<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(ShoppingTableSeeder::class);
        $this->call(ShopUserTableSeeder::class);
    }
}
