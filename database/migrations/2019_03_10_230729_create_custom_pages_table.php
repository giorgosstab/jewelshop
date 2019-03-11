<?php

use App\CustomPage;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image_parallax')->nullable();
            $table->text('body')->nullable();;
            $table->text('extra_css_top')->nullable();
            $table->text('extra_js_bottom')->nullable();
            $table->enum('status', CustomPage::$statuses)->default(CustomPage::STATUS_INACTIVE);
            $table->enum('layout', CustomPage::$layouts)->default(CustomPage::LAYOUT_CONTAINER_DEFAULT);
            $table->boolean('breadcrumbs')->default(true);
            $table->enum('column_right_left', CustomPage::$columns)->default(CustomPage::COLUMN_DEFAULT);
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
        Schema::dropIfExists('custom_pages');
    }
}
