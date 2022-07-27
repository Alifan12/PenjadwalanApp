<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.Register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'nama'=>'required|max:255',
            'nip'=>'required|max:255',
            'alamat'=>'reqired|max:255',
            'namaunitkerja'=>'required|max:255',
            'email'=>'required|email|max:255|unique:user',
            'telepon'=>'required|max:255',
            'password'=>'required|min:8|max255|unique:user'
        ]);
    }
}
