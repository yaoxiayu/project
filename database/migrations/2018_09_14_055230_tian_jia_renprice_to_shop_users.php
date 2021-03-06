<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TianJiaRenpriceToShopUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shop_users', function (Blueprint $table) {
            $table->string('renprice')->comment('店铺人均价格');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop_users', function (Blueprint $table) {
             $table->dropColumn('renprice');
        });
    }
}
