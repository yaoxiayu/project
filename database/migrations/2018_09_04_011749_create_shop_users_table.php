<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_users', function (Blueprint $table) {
            $table->increments('id')->comment('商家ID');
            $table->string('username')->comment('商家名');
            $table->string('password')->comment('商家密码');
            $table->string('pic')->nullable();
            $table->string('phone');
            $table->string('address')->comment('用户地址');
            $table->text('intro')->comment('商家简介');
            $table->integer('industry_id')->comment('行业ID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_users');
    }
}
