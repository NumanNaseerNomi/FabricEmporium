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
        Schema::create('Products',
            function (Blueprint $table)
            {
                $table->id();
                $table->string('title');
                $table->string('brand');
                $table->string('description')->nullable();
                $table->float('price', 8, 2);
                $table->integer('discount')->nullable();
                $table->integer('quantity');
                $table->string('category');
                $table->string('image');
                $table->string('status');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Products');
    }
};
