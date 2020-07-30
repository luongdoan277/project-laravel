<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id')->index();
            $table->string('name',  50)->nullable();
            $table->string('type',  20)->nullable();
            $table->string('slug', 50)->nullable();
            $table->string('url_image',200)->nullable();
            $table->string('description')->nullable();
            $table->integer('weight');
            $table->string('sku',  50)->unique();
            $table->integer('price')->default(0);
            $table->integer('quantity')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->integer('category_id')->default(0);
            $table->tinyInteger('is_enabled')->default(0);
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
        Schema::dropIfExists('product');
    }
}
