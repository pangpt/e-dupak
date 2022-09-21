<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\Dupak;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $data = User::where('id', Auth::user()->id)->first();
        $detail = UserDetail::where('user_id', Auth::user()->id)->first();
        $kredit = Dupak::where('user_id', Auth::user()->id)->sum('angka_kredit_usulan');
        // dd($kredit);
        return view('profile.index', [
            'data' => $data,
            'detail' => $detail,
            'kredit' => $kredit
        ]);

    }

    public function akun()
    {
        $data = User::where('id', Auth::user()->id)->first();
        $detail = UserDetail::where('user_id', Auth::user()->id)->first();
        return view('profile.create', [
            'data' => $data,
            'detail' => $detail
        ]);
    }

    public function update(Request $request)
    {
        $detail = UserDetail::where('user_id', Auth::user()->id)->first();

        if(!empty($detail)) {
            $userdetail = UserDetail::where('user_id', Auth::user()->id)->first();
            $userdetail->tmt = $request->tmt;
            $userdetail->golongan = $request->golongan;
            $userdetail->jabatan = $request->jabatan;
            $userdetail->instansi = $request->instansi;
            $userdetail->satker = $request->satker;
            $userdetail->update();
        } else {
            $userdetail = new UserDetail();
            $userdetail->user_id = Auth::user()->id;
            $userdetail->tmt = $request->tmt;
            $userdetail->golongan = $request->golongan;
            $userdetail->jabatan = $request->jabatan;
            $userdetail->instansi = $request->instansi;
            $userdetail->satker = $request->satker;
            $userdetail->save();
        }

        $data = User::where('id', Auth::user()->id)->first();
        $data->name = $request->name;
        $data->nip = $request->nip;
        $data->update();

        return redirect()->route('profile.akun')->withSuccess([
            'success' => 'Berhasil mengubah profil'
        ]);
    }
}
