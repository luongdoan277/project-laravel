<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {


            $table->bigIncrements('id');
            $table->String('name');
            $table->String('email');
            $table->String('password');
            $table->boolean('is_active')->default(1);
            $table->text('comment');
            $table->Integer('post_id')->unsigned();
            $table->timestamps();
            $table->foreign('post_id')->references('id')->on('post')->onDelete('cascare');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}
