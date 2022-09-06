<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubbabSeeder extends Seeder
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

        DB::table('subbab_kegiatan')->insert([
            [
                'kode_subbab' => '1.I.B',
                'nama_subbab' => 'Manajemen Layanan IT',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'kode_subbab' => '1.I.C',
                'nama_subbab' => 'Pengelolaan Data (Data Management)',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'kode_subbab' => '1.I.D',
                'nama_subbab' => 'Audit TI',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'kode_subbab' => '1.II.A',
                'nama_subbab' => 'Sistem Jaringan Komputer',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'kode_subbab' => '1.II.B',
                'nama_subbab' => 'Manajemen Infrastruktur TI',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'kode_subbab' => '1.III.A',
                'nama_subbab' => 'Sistem Informasi',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'kode_subbab' => '1.III.B',
                'nama_subbab' => 'Pengolahan Data',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'kode_subbab' => '1.III.C',
                'nama_subbab' => 'Area TI Spesial/Khusus',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'kode_subbab' => '2.I.A',
                'nama_subbab' => 'Perolehan ijazah/gelar pendidikan formal sesuai dengan bidang tugas Jabatan Fungsional Pranata Komputer',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'kode_subbab' => '2.I.B',
                'nama_subbab' => 'Pembuatan Karya Tulis/Karya Ilmiah di bidang teknologi informasi berbasis komputer',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'kode_subbab' => '2.I.C',
                'nama_subbab' => 'Penerjemahan/Penyaduran Buku dan Bahan-Bahan Lain di bidang teknologi informasi berbasisnkomputer',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ])
    }
}
