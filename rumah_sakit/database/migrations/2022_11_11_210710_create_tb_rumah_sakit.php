<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbRumahSakit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_rumah_sakit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_rumah_sakit',255);
            $table->string('alamat',255);
            $table->string('email',255);
            $table->string('telepon',255);
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
        Schema::dropIfExists('tb_rumah_sakit');
    }
}
