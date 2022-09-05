<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterKegiatanController extends Controller
{
    //
    public function bab() {
        return view('master.bab_kegiatan.index');
    }
}
