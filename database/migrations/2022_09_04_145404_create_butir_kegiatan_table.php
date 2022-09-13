<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateButirKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modul_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subbab_kegiatan_id');
            $table->string('kode_kegiatan');
            $table->string('isi_kegiatan');
            $table->decimal('angka_kredit',6,4)->nullable();
            $table->string('batas_kegiatan')->nullable();
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
        Schema::dropIfExists('butir_kegiatan');
    }
}
