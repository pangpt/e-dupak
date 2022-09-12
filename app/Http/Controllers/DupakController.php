<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParameterDupak;
use Auth;

class DupakController extends Controller
{
    //
    public function parameter()
    {
        $param = ParameterDupak::where('user_id', Auth()->user()->id)->first();

        return view('dupak.parameter',[
            'param' => $param
        ]);
    }

    public function inputParameter(Request $request)
    {
        $param = ParameterDupak::where('user_id', Auth()->user()->id)->first();

        if(!empty($param)) {
            $param = ParameterDupak::where('user_id', Auth()->user()->id)->first();
            $param->nama_atasan = $request->nama_atasan;
            $param->nip_atasan = $request->nip_atasan;
            $param->golongan_atasan = $request->golongan_atasan;
            $param->tmt_atasan = $request->tmt_atasan;
            $param->unit_kerja_atasan = $request->unit_kerja_atasan;
            $param->nama_pejabat = $request->nama_pejabat;
            $param->nip_pejabat = $request->nip_pejabat;
            $param->golongan_pejabat = $request->golongan_pejabat;
            $param->lokasi_pejabat = $request->lokasi_pejabat;
            $param->jabatan_pejabat = $request->jabatan_pejabat;
            $param->update();
        } else {
            $inputparam = new ParameterDupak();
            $inputparam->user_id = Auth()->user()->id;
            $inputparam->nama_atasan = $request->nama_atasan;
            $inputparam->nip_atasan = $request->nip_atasan;
            $inputparam->golongan_atasan = $request->golongan_atasan;
            $inputparam->tmt_atasan = $request->tmt_atasan;
            $inputparam->unit_kerja_atasan = $request->unit_kerja_atasan;
            $inputparam->nama_pejabat = $request->nama_pejabat;
            $inputparam->nip_pejabat = $request->nip_pejabat;
            $inputparam->golongan_pejabat = $request->golongan_pejabat;
            $inputparam->lokasi_pejabat = $request->lokasi_pejabat;
            $inputparam->jabatan_pejabat = $request->jabatan_pejabat;
            $inputparam->save();
        }

        return redirect()->route('dupak.parameter');
    }
}
