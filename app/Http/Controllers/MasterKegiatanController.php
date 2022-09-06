<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterKegiatanController extends Controller
{
    //
    public function bab() {
        return view('master.bab_kegiatan.index');
    }

    public function subbab() {
        return view('master.subbab_kegiatan.index');
    }

    public function modul_kegiatan() {
        return view('master.modul_kegiatan.index');
    }
}
