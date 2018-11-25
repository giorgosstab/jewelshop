<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryJewelProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_jewel_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('category_jewel_id')->unsigned()->nullable();
            $table->foreign('category_jewel_id')->references('id')->on('category_jewels')->onDelete('cascade');
//            $table->integer('category_parent_id')->unsigned()->nullable();
//            $table->foreign('category_parent_id')->references('id')->on('category_jewels')->onDelete('cascade');
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
        Schema::dropIfExists('category_jewel_product');
    }
}
