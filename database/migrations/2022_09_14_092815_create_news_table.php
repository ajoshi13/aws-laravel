<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('news_id');
            $table->string('category', 50);
            $table->string('headline');
            $table->longText('sub_headline');
            $table->longText('description');
            $table->string('slide_h1')->nullable();
            $table->string('slide_d1')->nullable();
            $table->string('slide_h2')->nullable();
            $table->string('slide_d2')->nullable();
            $table->string('slide_h3')->nullable();
            $table->string('slide_d3')->nullable();
            $table->string('image')->nullable();
            $table->string('tags')->nullable();
            // $table->dateTime('created_at')->nullable();
            $table->dateTime('modified_at')->nullable();
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
        Schema::dropIfExists('news');
    }
}
