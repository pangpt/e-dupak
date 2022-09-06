<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $now = \Carbon\Carbon::now();

        DB::table('bab_kegiatan')->insert([
            [
                'kode_bab' => '1.I',
                'nama_bab' => 'TATA KELOLA DAN TATA LAKSANA TEKNOLOGI INFORMASI',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'kode_bab' => '1.II',
                'nama_bab' => 'INFRASTRUKTUR TEKNOLOGI INFORMASI',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'kode_bab' => '1.III',
                'nama_bab' => 'SISTEM INFORMASI DAN MULTIMEDIA',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'kode_bab' => '2.I',
                'nama_bab' => 'PENGEMBANGAN PROFESI',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'kode_bab' => '2.II',
                'nama_bab' => 'Penunjang Kegiatan teknologi informasi berbasis komputer',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);

    }
}
