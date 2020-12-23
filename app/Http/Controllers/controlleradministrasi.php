<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeladministrasi;

class controlleradministrasi extends Controller
{
    //
    public function insertadministrasi(Request $request){
        $request->validate([
            'tabeladministrasi' => 'required'

        ]);
        modeladministrasi::create([
            'tabeladministrasi' => $request->
        ])
    }
}
