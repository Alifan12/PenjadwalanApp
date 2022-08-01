<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.Register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request){
        $user = new User;
        $user->nama_user=$request->nama_user;
        $user->nip=$request->nip;
        $user->alamat=$request->alamat;
        $user->unit_kerja=$request->unit_kerja;
        $user->email=$request->email;
        $user->nomor_telepon=$request->nomor_telepon;
        $user->password_user=$request->password_user;

        $user->save();

    }
    // public function store(Request $request){
    //     $validatedData = $request->validate([
    //         'nama_user' =>'required',
    //         'nip'=>'required',
    //         'alamat'=>'required',
    //         'unit_kerja'=>'required',
    //         'email'=>'required|email',
    //         'nomor_telepon'=>'required',
    //         'password_user'=>'required_with:konfirmasipassword|same:konfirmasipassword|min:6',
    //         'konfirmasipassword'=>'min:6'
    //     ]);

    //     //$validatedData['password'] = bcrypt($validatedData['password']);

    //     $validatedData['password'] = Hash::make($validatedData['password']);

    //     User::create($validatedData);

    //     return redirect('/');
    // }
}
