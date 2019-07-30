<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblkabupatenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblkabupaten', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kdkabupaten', 4)->unique();
            $table->string('nmkabupaten', 50);
            $table->string('kdprovinsi', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblkabupaten');
    }
}
