<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t3', function (Blueprint $table) {
            $table->id();
            $table->integer('integer')->comment('数値');
            $table->bigInteger('big_integer')->default(0);
            $table->integer('unsigned_integer_1')->unsigned();
            $table->unsignedInteger('unsigned_integer_2');
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
        Schema::dropIfExists('t3');
    }
}
