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
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('sku')->unique();
            $table->integer('price');
            $table->longText('description')->nullable();
            $table->boolean('bestof')->default(false);
            $table->boolean('offer')->default(false);
            $table->boolean('hotdeals')->default(false);
            $table->integer('secondprice')->nullable();
            $table->enum('status', ['PUBLISHED', 'UNPUBLISHED']);
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
        Schema::dropIfExists('products');
    }
}
