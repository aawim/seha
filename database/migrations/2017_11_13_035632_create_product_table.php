<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{ 
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('cat_id');
            $table->integer('scat_id');
            $table->string('brand_id');
            $table->string('size');
            $table->string('color');
            $table->double('price');
            $table->double('dprice');
            $table->string('image');
            $table->integer('qty');
            $table->text('description');
            $table->integer('is_active');
            $table->string('contact');
            $table->integer('user_id');
            $table->string('availability');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
