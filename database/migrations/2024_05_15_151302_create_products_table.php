<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique()->nullable(false);
            $table->string('details')->nullable(false);
            $table->text('decsription')->nullable(false);
            $table->text('brand')->nullable(false);
            $table->double('price')->nullable(false);
            $table->double('shopping_cost')->nullable(false);
            $table->string('image_path')->nullable(false);
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
};
