<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModulKegiatan;

class DokumentasiController extends Controller
{
    //
    public function tambah(Request $request)
    {
        $kegiatan = ModulKegiatan::get();

        return view('dokumentasi.tambah', [
            'kegiatan' => $kegiatan,
        ]);
    }

    public function autocomplete(Request $request)
    {
        $data = $request->all();
        $query = $data['query'];

        $filter_data = ModulKegiatan::select('isi_kegiatan', 'kode_kegiatan', 'id')
                        ->where('isi_kegiatan', 'LIKE', '%' .$query. '%')
                        ->get();
        foreach($filter_data as $hsl)
        {
            $cek[] = $hsl->kode_kegiatan.'-'.$hsl->isi_kegiatan;
        }
        // $query = $request->get('query');
        // $filter = ModulKegiatan::where('isi_kegiatan', 'LIKE', '%'. $query .'%')->get();
        // $filter = ModulKegiatan::select("isi_kegiatan")
        //         ->where("isi_kegiatan","LIKE", '%{$request->query}%')
        //         ->get();
        return response()->json($cek);
    }
}
