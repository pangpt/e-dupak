<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'bab_kegiatan_id' => '1',
                'kode_subbab' => '1.I.B',
                'nama_subbab' => 'Manajemen Layanan TI',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'bab_kegiatan_id' => '1',
                'kode_subbab' => '1.I.C',
                'nama_subbab' => 'Pengelolaan Data (Data Management)',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'bab_kegiatan_id' => '1',
                'kode_subbab' => '1.I.D',
                'nama_subbab' => 'Audit TI',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'bab_kegiatan_id' => '2',
                'kode_subbab' => '1.II.A',
                'nama_subbab' => 'Sistem Jaringan Komputer',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'bab_kegiatan_id' => '2',
                'kode_subbab' => '1.II.B',
                'nama_subbab' => 'Manajemen Infrastruktur TI',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'bab_kegiatan_id' => '3',
                'kode_subbab' => '1.III.A',
                'nama_subbab' => 'Sistem Informasi',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'bab_kegiatan_id' => '3',
                'kode_subbab' => '1.III.B',
                'nama_subbab' => 'Pengolahan Data',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'bab_kegiatan_id' => '3',
                'kode_subbab' => '1.III.C',
                'nama_subbab' => 'Area TI Spesial/Khusus',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'bab_kegiatan_id' => '4',
                'kode_subbab' => '2.I.A',
                'nama_subbab' => 'Perolehan ijazah/gelar pendidikan formal sesuai dengan bidang tugas Jabatan Fungsional Pranata Komputer',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'bab_kegiatan_id' => '4',
                'kode_subbab' => '2.I.B',
                'nama_subbab' => 'Pembuatan Karya Tulis/Karya Ilmiah di bidang teknologi informasi berbasis komputer',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'bab_kegiatan_id' => '4',
                'kode_subbab' => '2.I.C',
                'nama_subbab' => 'Penerjemahan/Penyaduran Buku dan Bahan-Bahan Lain di bidang teknologi informasi berbasis komputer',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'bab_kegiatan_id' => '4',
                'kode_subbab' => '2.I.D',
                'nama_subbab' => 'Penyusunan Standar/Pedoman/Petunjuk Pelaksanaan/ Petunjuk Teknis di bidang teknologi informasi berbasis komputer',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'bab_kegiatan_id' => '4',
                'kode_subbab' => '2.I.E',
                'nama_subbab' => 'Pengembangan Kompetensi di bidang teknologi informasi berbasis komputer',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'bab_kegiatan_id' => '5',
                'kode_subbab' => '2.II.A',
                'nama_subbab' => 'Pengajar/Pelatih di bidang teknologi informasi berbasis komputer',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'bab_kegiatan_id' => '5',
                'kode_subbab' => '2.II.B',
                'nama_subbab' => 'Keanggotaan dalam Tim Penilai/ Tim Uji Kompetensi',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'bab_kegiatan_id' => '5',
                'kode_subbab' => '2.II.C',
                'nama_subbab' => 'Perolehan Penghargaan/tanda jasa',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'bab_kegiatan_id' => '5',
                'kode_subbab' => '2.II.D',
                'nama_subbab' => 'Perolehan Gelar Kesarjanaan Lainnya',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'bab_kegiatan_id' => '5',
                'kode_subbab' => '2.II.E',
                'nama_subbab' => 'Pelaksanaan tugas lain yang mendukung pelaksanaan tugas Pranata Komputer',
                'created_at' => $now,
                'updated_at' => $now
            ]
            ]);
    }
}
