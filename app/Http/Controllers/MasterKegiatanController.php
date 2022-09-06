<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BabKegiatan;
use App\Models\SubbabKegiatan;
use App\Models\ModulKegiatan;

class MasterKegiatanController extends Controller
{
    //
    public function bab() {

        $data = BabKegiatan::get();

        return view('master.bab_kegiatan.index',[
            'data' => $data,
        ]);
    }

    public function subbab() {

        $data = SubbabKegiatan::get();

        return view('master.subbab_kegiatan.index',[
            'data' => $data,
        ]);
    }

    public function modul_kegiatan() {

        $data = ModulKegiatan::get();

        return view('master.modul_kegiatan.index',[
            'data' => $data,
        ]);
    }
}
