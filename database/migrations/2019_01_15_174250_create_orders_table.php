<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');

            $table->string('billing_fname');
            $table->string('billing_lname');
            $table->string('billing_address');
            $table->string('billing_housenumber');
            $table->string('billing_locality');
            $table->string('billing_email');
            $table->string('billing_city');
            $table->string('billing_phone');
            $table->string('billing_country');
            $table->string('billing_postalcode');

            $table->boolean('different_shipping_address')->default(false);

            $table->string('second_billing_fname')->nullable();
            $table->string('second_billing_lname')->nullable();
            $table->string('second_billing_address')->nullable();
            $table->string('second_billing_housenumber')->nullable();
            $table->string('second_billing_locality')->nullable();
            $table->string('second_billing_email')->nullable();
            $table->string('second_billing_city')->nullable();
            $table->string('second_billing_phone')->nullable();
            $table->string('second_billing_country')->nullable();
            $table->string('second_billing_postalcode')->nullable();

            $table->integer('billing_discount')->default(0);
            $table->string('billing_discount_code')->nullable();

            $table->integer('billing_subtotal');
            $table->integer('billing_tax');
            $table->integer('billing_total');

            $table->string('delivery_gateway');
            $table->string('payment_gateway');
            $table->string('name_on_card')->nullable();
            $table->boolean('shipped')->default(false);
            $table->string('error')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
