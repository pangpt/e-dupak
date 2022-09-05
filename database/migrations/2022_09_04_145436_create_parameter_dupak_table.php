<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParameterDupakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameter_dupak', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nama_atasan')->nullable();
            $table->string('nip_atasan')->nullable();
            $table->string('golongan_atasan')->nullable();
            $table->date('tmt_atasan')->nullable();
            $table->string('unit_kerja_atasan')->nullable();
            $table->string('nama_pejabat')->nullable();
            $table->string('nip_pejabat')->nullable();
            $table->string('golongan_pejabat')->nullable();
            $table->string('lokasi_pejabat')->nullable();
            $table->string('jabatan_pejabat')->nullable();
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
        Schema::dropIfExists('parameter_dupak');
    }
}
