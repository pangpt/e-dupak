<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubbabKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subbab_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bab_kegiatan_id');
            $table->string('kode_subbab');
            $table->string('nama_subbab');
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
        Schema::dropIfExists('subbab_kegiatan');
    }
}
