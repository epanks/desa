<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbldesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbldesa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kddesa', 10)->unique();
            $table->string('nmdesa');
            $table->string('kdkecamatan', 7);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbldesa');
    }
}
