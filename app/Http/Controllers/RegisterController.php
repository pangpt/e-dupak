<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $userEmail = User::where('email', $request->email)->first();
        if($userEmail) {
            return redirect()->back()->withInput()->withErrors([
                'error' => 'Email sudah digunakan'
            ]);
        }
        else{
            $user = new User();
            $user->name = $request->name;
            $user->nip = $request->nip;
            $user->level = 3;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

        }
        $request->session()->flash('success', ' Pendaftaran berhasil. Silahkan Login');

        return redirect()->route('loginpage');
    }
}


