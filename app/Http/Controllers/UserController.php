<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request, $id = null){
        if (is_null($id))
            $u = new User();
        else
            $u = User::findOrFail($id);


        $u->name = $request->nama;
        $u->nip = $request->nip;
        $u->role = $request->role;
        $u->email = $request->username;
        $u->password = Hash::make($request->password);
        $u->save();
        return redirect()->route('indexdaftarakunpegawai');
    }
    public function index(){
        $usr = User::all();
        return view('admin.daftarakunpegawai',[
            'users' => $usr
        ]);
    }
    public function show($id){
        $u = User::findOrFail($id);
        return view('admin.editakunpegawai',[
            'user' => $u
        ]);
    }
    public function delete($id){
        $u = User::findOrFail($id);
        $u->delete();
        return back();
    }
}
