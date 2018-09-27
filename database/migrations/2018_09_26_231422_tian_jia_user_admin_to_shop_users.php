<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TianJiaUserAdminToShopUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shop_users', function (Blueprint $table) {
          $table->string('shopAdmin')->default('shopAdmin');
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
          $table->dropColumn('shopAdmin');
        });
    }
}
