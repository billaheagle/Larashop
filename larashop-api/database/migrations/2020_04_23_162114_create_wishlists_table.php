<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlists', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('merchandise_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
			
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('merchandise_id')->references('id')->on('merchandises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('wishlists', function(Blueprint $table){
            $table->dropForeign('cart_user_id_foreign');
			$table->dropForeign('cart_merchandise_id_foreign');
        });	
		
        Schema::dropIfExists('wishlists');
    }
}
