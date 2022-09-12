<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModulKegiatan;
use App\Models\Dupak;
use Auth;
use Yajra\DataTables\DataTables;

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

    public function inputkegiatan(Request $request)
    {

        $ak = ModulKegiatan::where('id', $request->butir_kegiatan)->first();
        // dd($ak);

        $data = new Dupak;
        $data->user_id = Auth::user()->id;
        $data->modul_kegiatan_id = $request->butir_kegiatan;
        $data->volume = $request->volume;
        $data->angka_kredit_usulan = $request->volume * $ak->angka_kredit;
        $data->tanggal_pelaksanaan = $request->tanggal_pelaksanaan;
        $data->save();

        // dd($data);

        return redirect()->route('dokumentasi.detil')->with('bukti', $data);
    }

    public function detil(Request $request)
    {
        // $data = Dupak::where('id', $id)->first();
        // dd($data);
        $bukti = $request->session()->get('bukti');

        return view('dokumentasi.index',[
            'bukti' => $bukti,
        ]);
    }

    public function daftarkegiatan()
    {
        $data = Dupak::limit(100)->where('user_id', Auth::user()->id)->get();
        return view('dokumentasi.daftarkegiatan',[
            'data' => $data
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
