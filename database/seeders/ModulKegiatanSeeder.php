<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulKegiatanSeeder extends Seeder
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

        DB::table('modul_kegiatan')->insert([
            [
                'subbab_kegiatan_id' => '1',
                'kode_kegiatan' => '1.I.B.7',
                'isi_kegiatan' => 'Mengelola katalog layanan teknologi informasi [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '1',
                'kode_kegiatan' => '1.I.B.21',
                'isi_kegiatan' => 'Mengelola permintaan dan layanan teknologi informasi [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.8',
                'isi_kegiatan' => 'Mengelola permintaan dan layanan teknologi informasi [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.17',
                'isi_kegiatan' => 'Melakukan implementasi data model [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.19',
                'isi_kegiatan' => 'Melakukan implementasi business intelligence [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.20',
                'isi_kegiatan' => 'Menyusun taksonomi data [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.21',
                'isi_kegiatan' => 'Menyusun arsitektur data [PERTAMA]',
                'angka_kredit' => '0.330',
                'batas_kegiatan' => '5 (lima) kali per tahun',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.23',
                'isi_kegiatan' => 'Melakukan pengumpulan kebutuhan informasi [PERTAMA]',
                'angka_kredit' => '0.120',
                'batas_kegiatan' => '2 (dua) kali per bulan',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.25',
                'isi_kegiatan' => 'Melakukan perancangan layanan akses data [PERTAMA]',
                'angka_kredit' => '0.110',
                'batas_kegiatan' => '12 (dua belas) kali per tahun',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.26',
                'isi_kegiatan' => 'Melakukan implementasi rancangan layanan akses data [PERTAMA]',
                'angka_kredit' => '0.110',
                'batas_kegiatan' => '12 (dua belas) kali per tahun',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.29',
                'isi_kegiatan' => 'Melakukan ingestion data [PERTAMA]',
                'angka_kredit' => '0.110',
                'batas_kegiatan' => '1 (satu) kali ingestion data untuk 10 (sepuluh) kegiatan atau sumber data per bulan',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.30',
                'isi_kegiatan' => 'Melakukan implementasi rancangan integrasi data [PERTAMA]',
                'angka_kredit' => '0.055',
                'batas_kegiatan' => '2 (dua) kali per bulan',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.31',
                'isi_kegiatan' => 'Menyusun prosedur pengujian rancangan integrasi data [PERTAMA]',
                'angka_kredit' => '0.055',
                'batas_kegiatan' => '2 (dua) kali per bulan',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.34',
                'isi_kegiatan' => 'Melakukan evaluasi hasil pengujian prosedur validasi kebutuhan informasi [PERTAMA]',
                'angka_kredit' => '0.180',
                'batas_kegiatan' => '12 (dua belas) kali per tahun',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.35',
                'isi_kegiatan' => 'Melakukan validasi kebutuhan informasi',
                'angka_kredit' => '0.110',
                'batas_kegiatan' => '12 (dua belas) kali per tahun',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.36',
                'isi_kegiatan' => 'Menyusun dokumentasi rancangan database [PERTAMA]',
                'angka_kredit' => '0.080',
                'batas_kegiatan' => '24 (dua puluh empat) kali per tahun',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.37',
                'isi_kegiatan' => 'Melakukan instalasi dan konfigurasi database management system [PERTAMA]',
                'angka_kredit' => '0.120',
                'batas_kegiatan' => '12 (dua belas) kali per tahun',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.39',
                'isi_kegiatan' => 'Melakukan backup atau pemulihan data [PERTAMA]',
                'angka_kredit' => '0.020',
                'batas_kegiatan' => '1 (satu) kali per minggu',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.40',
                'isi_kegiatan' => 'Menyusun tingkat kinerja layanan database [PERTAMA]',
                'angka_kredit' => '0.055',
                'batas_kegiatan' => '1 (satu) kali per minggu',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.42',
                'isi_kegiatan' => 'Melakukan peningkatan kinerja database [PERTAMA]',
                'angka_kredit' => '0.110',
                'batas_kegiatan' => '12 (dua belas) kali per tahun',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.43',
                'isi_kegiatan' => 'Menyusun rencana retensi data [PERTAMA]',
                'angka_kredit' => '0.440',
                'batas_kegiatan' => '1 (satu) kali untuk setiap jenis manajemen data organisasi. Dalam satu tahun, kebutuhan teknologi data yang disusun adalah 5 jenis manajemen data',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.44',
                'isi_kegiatan' => 'Melakukan evaluasi teknologi data [PERTAMA]',
                'angka_kredit' => '0.110',
                'batas_kegiatan' => '2 (dua) kali per tahun',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.45',
                'isi_kegiatan' => 'Melakukan pengadministrasian teknologi data [PERTAMA]',
                'angka_kredit' => '0.110',
                'batas_kegiatan' => '1 (satu) kali per bulan',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.46',
                'isi_kegiatan' => 'Melakukan deteksi dan perbaikan terhadap permasalahan teknologi data [PERTAMA]',
                'angka_kredit' => '0.030',
                'batas_kegiatan' => '8 (delapan) kali per bulan',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.51',
                'isi_kegiatan' => 'Mengelola pengguna dan hak akses data [PERTAMA]',
                'angka_kredit' => '0.010',
                'batas_kegiatan' => '1 (satu) kali per minggu',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '2',
                'kode_kegiatan' => '1.I.C.53',
                'isi_kegiatan' => 'Menyusun pemetaan data berdasarkan tingkat kerahasiaan informasi [PERTAMA]',
                'angka_kredit' => '0.110',
                'batas_kegiatan' => '12 (dua belas) kali per tahun. Hanya pada pusat jaringan.',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '3',
                'kode_kegiatan' => '1.I.D.7',
                'isi_kegiatan' => 'Melakukan pengumpulan data audit TI menggunakan metode tertentu [PERTAMA]',
                'angka_kredit' => '0.055',
                'batas_kegiatan' => 'Kegiatan ini dapat dilakukan untuk setiap area TI yang dilakukan audit. 10 obyek untuk 1 area TI',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '4',
                'kode_kegiatan' => '1.II.A.5',
                'isi_kegiatan' => 'Menerapkan rancangan fisik sistem jaringan komputer kompleks [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '4',
                'kode_kegiatan' => '1.II.A.6',
                'isi_kegiatan' => 'Menerapkan rancangan logis sistem pengamanan jaringan komputer kompleks',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '4',
                'kode_kegiatan' => '1.II.A.7',
                'isi_kegiatan' => 'Menyusun prosedur pemanfaatan sistem jaringan [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '4',
                'kode_kegiatan' => '1.II.A.9',
                'isi_kegiatan' => 'Melakukan uji coba sistem jaringan komputer kompleks [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '4',
                'kode_kegiatan' => '1.II.A.10',
                'isi_kegiatan' => 'Melakukan evaluasi uji coba sistem jaringan komputer sederhana [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '4',
                'kode_kegiatan' => '1.II.A.12',
                'isi_kegiatan' => 'Menyusun dokumentasi penggunaan sistem jaringan komputer [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '4',
                'kode_kegiatan' => '1.II.A.14',
                'isi_kegiatan' => 'Melakukan optimalisasi sistem jaringan',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '4',
                'kode_kegiatan' => '1.II.A.15',
                'isi_kegiatan' => 'Melakukan deteksi dan atau perbaikan terhadap permasalahan yang terjadi pada sistem jaringan kompleks [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '5',
                'kode_kegiatan' => '1.II.B.5',
                'isi_kegiatan' => 'Melakukan pemeriksaan kesesuaian antara Infrastruktur TI dengan spesifikasi teknis [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '5',
                'kode_kegiatan' => '1.II.B.6',
                'isi_kegiatan' => 'Melakukan pengujian infrastruktur TI [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '5',
                'kode_kegiatan' => '1.II.B.8',
                'isi_kegiatan' => 'Melakukan pemeliharaan infrastruktur TI [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '5',
                'kode_kegiatan' => '1.II.B.9',
                'isi_kegiatan' => 'Melakukan pemasangan infrastruktur TI [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '5',
                'kode_kegiatan' => '1.II.B.10',
                'isi_kegiatan' => 'Melakukan pengaturan akses keamanan fisik TI [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '5',
                'kode_kegiatan' => '1.II.B.12',
                'isi_kegiatan' => 'Melakukan deteksi dan atau perbaikan terhadap permasalahan infrastruktur TI [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '5',
                'kode_kegiatan' => '1.II.B.13',
                'isi_kegiatan' => 'Menyusun prosedur pemanfaatan inrastrutur TI [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '5',
                'kode_kegiatan' => '1.II.B.14',
                'isi_kegiatan' => 'Menyiapkan peralatan video conference (streaming), monitoring peralatan berupa audio, video, dan perangkat jaringan, serta mengatur layout [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '5',
                'kode_kegiatan' => '1.II.B.15',
                'isi_kegiatan' => 'Melakukan optimalisasi kinerja infrastruktur TI [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '6',
                'kode_kegiatan' => '1.III.A.7',
                'isi_kegiatan' => 'Melakukan perancangan sistem informasi [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '6',
                'kode_kegiatan' => '1.III.A.9',
                'isi_kegiatan' => 'Membuat program aplikasi sistem informasi [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '6',
                'kode_kegiatan' => '1.III.A.10',
                'isi_kegiatan' => 'Membuat program aplikasi sistem informasi [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '6',
                'kode_kegiatan' => '1.III.A.12',
                'isi_kegiatan' => 'Melakukan penyiapan data untuk uji coba sistem informasi informasi [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '6',
                'kode_kegiatan' => '1.III.A.14',
                'isi_kegiatan' => 'Melakukan uji coba sistem informasi [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '6',
                'kode_kegiatan' => '1.III.A.16',
                'isi_kegiatan' => 'Melakukan deteksi dan atau perbaikan kerusakan sistem informasi [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '6',
                'kode_kegiatan' => '1.III.A.17',
                'isi_kegiatan' => 'Menyusun petunjuk operasional program aplikasi sistem informasi [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '6',
                'kode_kegiatan' => '1.III.A.18',
                'isi_kegiatan' => 'Menyusun dokumentasi pengembangan sistem [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '6',
                'kode_kegiatan' => '1.III.A.19',
                'isi_kegiatan' => 'Melakukan instalasi/upgrade dan konfigurasi sistem operasi dan/atau aplikasi operasi/aplikasi',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '7',
                'kode_kegiatan' => '1.III.B.5',
                'isi_kegiatan' => 'Melakukan data crawling , data feeding , dan data loading [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '7',
                'kode_kegiatan' => '1.III.B.6',
                'isi_kegiatan' => 'Melakukan manipulasi data [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '8',
                'kode_kegiatan' => '1.III.C.1',
                'isi_kegiatan' => 'Menyusun definisi sistem proyeksi pada suatu data spasial [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '8',
                'kode_kegiatan' => '1.III.C.2',
                'isi_kegiatan' => 'Membuat peta tematik rinci',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '8',
                'kode_kegiatan' => '1.III.C.3',
                'isi_kegiatan' => 'Melakukan pengolahan data atribut dan spasial rinci [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '8',
                'kode_kegiatan' => '1.III.C.5',
                'isi_kegiatan' => 'Mengoperasikan tools untuk membuat storyboard [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '8',
                'kode_kegiatan' => '1.III.C.6',
                'isi_kegiatan' => 'Membuat flowchart untuk pemrograman multimedia [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '8',
                'kode_kegiatan' => '1.III.C.7',
                'isi_kegiatan' => 'Melakukan editing objek multimedia kompleks dengan piranti lunak',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '8',
                'kode_kegiatan' => '1.III.C.8',
                'isi_kegiatan' => 'Membuat objek multimedia kompleks dengan piranti lunak [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '8',
                'kode_kegiatan' => '1.III.C.9',
                'isi_kegiatan' => 'Membuat prototype kompleks pada program multimedia [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '8',
                'kode_kegiatan' => '1.III.C.10',
                'isi_kegiatan' => 'Membuat program multimedia kompleks [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '9',
                'kode_kegiatan' => '2.I.A.1',
                'isi_kegiatan' => 'Memperoleh ijazah sesuai dengan bidang tugas Jabatan Fungsional Pranata Komputer [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '10',
                'kode_kegiatan' => '2.I.B.1a',
                'isi_kegiatan' => 'Membuat karya tulis/karya ilmiah hasil penelitian/pengkajian/survei/evaluasi di bidang teknologi informasi berbasis komputer yang dipublikasikan dalam bentuk buku/majalah ilmiah internasional yang diterbitkan internasional yang terindek [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '10',
                'kode_kegiatan' => '2.I.B.1b',
                'isi_kegiatan' => 'dalam bentuk buku/majalah ilmiah internasional yang diterbitkan nasional [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '10',
                'kode_kegiatan' => '2.I.B.1c',
                'isi_kegiatan' => 'dalam bentuk buku/majalah ilmiah internasional yang diterbitkan dan diakui [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '10',
                'kode_kegiatan' => '2.I.B.2a',
                'isi_kegiatan' => 'Membuat karya tulis/karya ilmiah hasil penelitian/pengkajian/survei/evaluasi di bidang teknologi informasi berbasis komputer yang tidak dipublikasikan dalam bentuk buku [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '10',
                'kode_kegiatan' => '2.I.B.2b',
                'isi_kegiatan' => 'Membuat karya tulis/karya ilmiah hasil penelitian/pengkajian/survei/evaluasi di bidang teknologi informasi berbasis komputer yang tidak dipublikasikan dalam bentuk makalah [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '10',
                'kode_kegiatan' => '2.I.B.3a',
                'isi_kegiatan' => 'Membuat karya tulis/karya ilmiah berupa tinjauan atau ulasan ilmiah hasil gagasan sendiri di bidang teknologi informasi berbasis komputer yang dipublikasikan dalam bentuk buku yang diterbitkan dan diedarkan secara nasional [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '10',
                'kode_kegiatan' => '2.I.B.3b',
                'isi_kegiatan' => 'Membuat karya tulis/karya ilmiah berupa tinjauan atau ulasan ilmiah hasil gagasan sendiri di bidang teknologi informasi berbasis komputer yang dipublikasikan  dalam majalah ilmiah yang diakui oleh organisasi profesi dan Instansi Pembina [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '10',
                'kode_kegiatan' => '2.I.B.4a',
                'isi_kegiatan' => 'Membuat karya tulis/karya ilmiah berupa tinjauan atau ulasan ilmiah hasil gagasan sendiri di bidang teknologi informasi berbasis komputer yang tidak dipublikasikan dalam bentuk buku yang diterbitkan dan diedarkan secara nasional [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '10',
                'kode_kegiatan' => '2.I.B.4b',
                'isi_kegiatan' => 'Membuat karya tulis/karya ilmiah berupa tinjauan atau ulasan ilmiah hasil gagasan sendiri di bidang teknologi informasi berbasis komputer yang tidak dipublikasikan dalam majalah ilmiah yang diakui oleh organisasi profesi dan Instansi Pembina [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '10',
                'kode_kegiatan' => '2.I.B.5',
                'isi_kegiatan' => 'Menyampaikan prasaran berupa tinjauan, gagasan dan atau ulasan ilmiah dalam pertemuan ilmiah [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '10',
                'kode_kegiatan' => '2.I.B.6',
                'isi_kegiatan' => 'Membuat artikel di bidang teknologi informasi berbasis komputer yang dipublikasikan [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '11',
                'kode_kegiatan' => '2.I.C.1a',
                'isi_kegiatan' => 'Menerjemahkan/menyadur buku atau karya ilmiah di bidang teknologi informasi berbasis komputer yang dipublikasikan dalam bentuk buku yang diterbitkan dan diedarkan secara nasional [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '11',
                'kode_kegiatan' => '2.I.C.1b',
                'isi_kegiatan' => 'Menerjemahkan/menyadur buku atau karya ilmiah di bidang teknologi informasi berbasis komputer yang dipublikasikan dalam majalah ilmiah yang diakui oleh organisasi profesi dan Instansi Pembina [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '11',
                'kode_kegiatan' => '2.I.C.2a',
                'isi_kegiatan' => 'Menerjemahkan/menyadur buku atau karya ilmiah di bidang teknologi informasi berbasis komputer yang tidak dipublikasikan dalam bentuk buku [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '11',
                'kode_kegiatan' => '2.I.C.2b',
                'isi_kegiatan' => 'Menerjemahkan/menyadur buku atau karya ilmiah di bidang teknologi informasi berbasis komputer yang tidak dipublikasikan dalam bentuk makalah [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],[
                'subbab_kegiatan_id' => '12',
                'kode_kegiatan' => '2.I.D.1',
                'isi_kegiatan' => 'Membuat buku standar/pedoman/ petunjuk pelaksanaan/ petunjuk teknis di bidang teknologi informasi berbasis komputer [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '13',
                'kode_kegiatan' => '2.I.E.1',
                'isi_kegiatan' => 'Pelatihan fungsional [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '13',
                'kode_kegiatan' => '2.I.E.2',
                'isi_kegiatan' => 'Seminar/lokakarya/konferensi/simposium/studi banding-lapangan [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '13',
                'kode_kegiatan' => '2.I.E.3a',
                'isi_kegiatan' => 'Pelatihan teknis/magang di bidang tugas Jabatan Fungsional Pranata Komputer dan memperoleh Sertifikat Lamanya lebih dari 960 jam [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '13',
                'kode_kegiatan' => '2.I.E.3b',
                'isi_kegiatan' => 'Pelatihan teknis/magang di bidang tugas Jabatan Fungsional Pranata Komputer dan memperoleh Sertifikat Lamanya antara 641 - 960 jam [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '13',
                'kode_kegiatan' => '2.I.E.3c',
                'isi_kegiatan' => 'Pelatihan teknis/magang di bidang tugas Jabatan Fungsional Pranata Komputer dan memperoleh Sertifikat Lamanya antara 481 - 640 jam [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '13',
                'kode_kegiatan' => '2.I.E.3d',
                'isi_kegiatan' => 'Pelatihan teknis/magang di bidang tugas Jabatan Fungsional Pranata Komputer dan memperoleh Sertifikat Lamanya antara 161 - 480 jam [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '13',
                'kode_kegiatan' => '2.I.E.3e',
                'isi_kegiatan' => 'Pelatihan teknis/magang di bidang tugas Jabatan Fungsional Pranata Komputer dan memperoleh Sertifikat Lamanya antara 81 - 160 jam [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '13',
                'kode_kegiatan' => '2.I.E.3f',
                'isi_kegiatan' => 'Pelatihan teknis/magang di bidang tugas Jabatan Fungsional Pranata Komputer dan memperoleh Sertifikat Lamanya antara 30 - 80 jam [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '13',
                'kode_kegiatan' => '2.I.E.3g',
                'isi_kegiatan' => 'Pelatihan teknis/magang di bidang tugas Jabatan Fungsional Pranata Komputer dan memperoleh Sertifikat Lamanya kurang dari 30 jam [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '13',
                'kode_kegiatan' => '2.I.E.4a',
                'isi_kegiatan' => 'Pelatihan manajerial/sosial kultural di bidang tugas Jabatan Fungsional Pranata Komputer dan memperoleh Sertifikat Lamanya lebih dari 960 jam [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '13',
                'kode_kegiatan' => '2.I.E.4b',
                'isi_kegiatan' => 'Pelatihan manajerial/sosial kultural di bidang tugas Jabatan Fungsional Pranata Komputer dan memperoleh Sertifikat Lamanya antara 641 - 960 jam [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '13',
                'kode_kegiatan' => '2.I.E.4c',
                'isi_kegiatan' => 'Pelatihan manajerial/sosial kultural di bidang tugas Jabatan Fungsional Pranata Komputer dan memperoleh Sertifikat Lamanya antara 481 - 640 jam [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '13',
                'kode_kegiatan' => '2.I.E.4d',
                'isi_kegiatan' => 'Pelatihan manajerial/sosial kultural di bidang tugas Jabatan Fungsional Pranata Komputer dan memperoleh Sertifikat Lamanya antara 161 - 480 jam [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '13',
                'kode_kegiatan' => '2.I.E.4e',
                'isi_kegiatan' => 'Pelatihan manajerial/sosial kultural di bidang tugas Jabatan Fungsional Pranata Komputer dan memperoleh Sertifikat Lamanya antara 81 - 160 jam [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '13',
                'kode_kegiatan' => '2.I.E.4f',
                'isi_kegiatan' => 'Pelatihan manajerial/sosial kultural di bidang tugas Jabatan Fungsional Pranata Komputer dan memperoleh Sertifikat Lamanya antara 30 - 80 jam [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '13',
                'kode_kegiatan' => '2.I.E.4g',
                'isi_kegiatan' => 'Pelatihan manajerial/sosial kultural di bidang tugas Jabatan Fungsional Pranata Komputer dan memperoleh Sertifikat Lamanya kurang dari 30 jam [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '14',
                'kode_kegiatan' => '2.II.A.1',
                'isi_kegiatan' => 'Mengajar/melatih/membimbing yang berkaitan dengan bidang teknologi informasi berbasis komputer [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '15',
                'kode_kegiatan' => '2.II.B.1',
                'isi_kegiatan' => 'Menjadi anggota Tim Penilai/Tim Uji Kompetensi [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '16',
                'kode_kegiatan' => '2.II.C.1a',
                'isi_kegiatan' => 'Memperoleh penghargaan/tanda jasa Satya Lancana Karya Satya 30 (tiga puluh) tahun [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '14',
                'kode_kegiatan' => '2.II.A.1',
                'isi_kegiatan' => 'Mengajar/melatih/membimbing yang berkaitan dengan bidang teknologi informasi berbasis komputer [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '16',
                'kode_kegiatan' => '2.II.C.1b',
                'isi_kegiatan' => 'Memperoleh penghargaan/tanda jasa Satya Lancana Karya Satya 20 (dua puluh) tahun [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '16',
                'kode_kegiatan' => '2.II.C.1c',
                'isi_kegiatan' => 'Memperoleh penghargaan/tanda jasa Satya Lancana Karya Satya 10 (sepuluh) tahun [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '16',
                'kode_kegiatan' => '2.II.C.2a',
                'isi_kegiatan' => 'Penghargaan/tanda jasa atas prestasi kerjanya Tingkat Internasional [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '16',
                'kode_kegiatan' => '2.II.C.2b',
                'isi_kegiatan' => 'Penghargaan/tanda jasa atas prestasi kerjanya Tingkat Nasional [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '16',
                'kode_kegiatan' => '2.II.C.2c',
                'isi_kegiatan' => 'Penghargaan/tanda jasa atas prestasi kerjanya Tingkat Provinsi [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '17',
                'kode_kegiatan' => '2.II.D.1a',
                'isi_kegiatan' => 'Memperoleh gelar kesarjanaan lainnya yang tidak sesuai dengan bidang tugas Pranata Komputer Diploma Tiga [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '17',
                'kode_kegiatan' => '2.II.D.1b',
                'isi_kegiatan' => 'Memperoleh gelar kesarjanaan lainnya yang tidak sesuai dengan bidang tugas Pranata Komputer Sarjana atau Diploma empat [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '17',
                'kode_kegiatan' => '2.II.D.1c',
                'isi_kegiatan' => 'Memperoleh gelar kesarjanaan lainnya yang tidak sesuai dengan bidang tugas Pranata Komputer Magister [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '17',
                'kode_kegiatan' => '2.II.D.1d',
                'isi_kegiatan' => 'Memperoleh gelar kesarjanaan lainnya yang tidak sesuai dengan bidang tugas Pranata Komputer Doktor [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subbab_kegiatan_id' => '18',
                'kode_kegiatan' => '2.II.D.1',
                'isi_kegiatan' => 'Melakukan kegiatan yang mendukung pelaksanaan tugas Pranata Komputer [PERTAMA]',
                'angka_kredit' => '0',
                'batas_kegiatan' => '',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
