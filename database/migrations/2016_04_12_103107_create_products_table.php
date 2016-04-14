<?php

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

            $table->string('title');
            $table->string('slug', 200);
            $table->text('content_tab1');
            $table->text('content_tab2');
            $table->text('content_tab3');

            $table->string('seo_title');
            $table->text('desc');
            $table->text('keywords');
            $table->string('image');

            $table->timestamps();
        });


        Schema::create('product_tag', function(Blueprint $tale)
        {
            $tale->integer('product_id')->unsigned()->index();
            $tale->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $tale->integer('tag_id')->unsigned()->index();
            $tale->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {       
        Schema::drop('product_tag');
        Schema::drop('products');
    }
}
