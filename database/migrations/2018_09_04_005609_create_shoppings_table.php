<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoppings', function (Blueprint $table) {
            $table->increments('id')->comment('商品ID');
            $table->string('name')->comment('商品名');
            $table->string('img')->comment('商品主图');
            $table->string('price')->comment('商品价格');
            $table->integer('shopUser_id')->comment('商家ID');
            $table->text('content')->comment('商品详情');
            $table->integer('counts')->comment('商品总数');
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
        Schema::dropIfExists('shoppings');
    }
}
