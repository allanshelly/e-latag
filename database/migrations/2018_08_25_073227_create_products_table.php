<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produce_id')->index()->unsigned() ;
            $table->integer('seller_id')->index()->unsigned() ;
            $table->string('status');
            $table->double('price');
            $table->integer('quantity');
            $table->timestamps();


            $table->foreign('produce_id')->references('id')->on('produces');
            $table->foreign('seller_id')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
