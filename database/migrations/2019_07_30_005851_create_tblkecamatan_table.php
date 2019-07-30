<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblkecamatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblkecamatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kdkecamatan', 7)->unique();
            $table->string('nmkecamatan');
            $table->string('kdkabupaten', 4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblkecamatan');
    }
}
