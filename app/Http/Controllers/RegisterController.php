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
        $validatedData = $request->validate([
            'nama' =>'required|max:255',
            'nip'=>'required|max:255',
            'alamat'=>'required|max:255',
            'namaunitkerja'=>'required|max:255',
            'email'=>'required|email',
            'telepon'=>'required',
            'password'=>'required_with:konfirmasipassword|same:konfirmasipassword|min:6|max:255',
            'konfirmasipassword'=>'min:6'
        ]);

        //$validatedData['password'] = bcrypt($validatedData['password']);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);


        return redirect('/login');
    }
}
