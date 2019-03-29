<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoyagerThemeOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyager_theme_options', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('voyager_theme_id')->unsigned()->nullable();
            $table->foreign('voyager_theme_id')->references('id')->on('voyager_themes')->onUpdate('cascade')->onDelete('set null');
            $table->string('key');
            $table->text('value')->nullable();
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
        Schema::dropIfExists('voyager_theme_options');
    }
}
