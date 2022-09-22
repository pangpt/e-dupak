<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModulKegiatan;
use App\Models\Dupak;
use Auth;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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

        $rules = [
            'modul_kegiatan_id' => 'unique:dupak',
            'evidence' => 'file|max:1024|mimes:pdf,txt'
        ];

        $messages = [
            'unique' => 'Butir kegiatan sudah ada',
            'mimes' => 'Format file harus .pdf atau .txt',
            'max' => 'Maksimal ukuran file adalah 1mb'
        ];

        $this->validate($request,$rules,$messages);

        $ak = ModulKegiatan::where('id', $request->modul_kegiatan_id)->first();
        // dd($ak);

        $file = $request->file('evidence');
        // $upload = $file ? Storage::disk('localpublic')->put('evidence', $file) : null;
        // $filename = $file->getClientOriginalName();

        // dd($filename);

        $data = new Dupak;
        $data->user_id = Auth::user()->id;
        $data->modul_kegiatan_id = $request->modul_kegiatan_id;
        $data->volume = $request->volume;
        $data->angka_kredit_usulan = $request->volume * $ak->angka_kredit;
        $data->tanggal_pelaksanaan = $request->tanggal_pelaksanaan;
        $data->evidence = $file ? $file->store('evidence') : null;   
        
        $data->save();
        // dd($data);

        // dd($data);

        return redirect()->back()->with('success', 'Butir kegiatan berhasil ditambahkan');
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
        $data = Dupak::limit(100)->where('user_id', Auth::user()->id)->orderBy('id', 'ASC')->get();
        return view('dokumentasi.daftarkegiatan',[
            'data' => $data
        ]);
    }

    public function edit(Request $request, $id)
    {
        $ak = ModulKegiatan::where('id', $request->butir_kegiatan)->first();

        // dd($request->butir_kegiatan);
        // $file = Storage::disk('localpublic')->put('evidence', $request->file('evidence'));

        $data = Dupak::where('id', $id)->first();
        $data->modul_kegiatan_id = $request->butir_kegiatan;
        $data->volume = $request->volume;
        $data->tanggal_pelaksanaan = $request->tanggal_pelaksanaan;
        $data->angka_kredit_usulan = $request->volume * $ak->angka_kredit;
        if($request->file('evidence')){
            $data->evidence = $request->file('evidence')->store('evidence');
        }
        $data->update();
        // dd($data);

        return redirect()->back();
    }

    public function hapus($id)
    {
        $data = Dupak::findOrFail($id);
        $data->delete();

        return redirect()->back();
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
