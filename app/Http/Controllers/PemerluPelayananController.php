<?php

namespace App\Http\Controllers;

use App\Models\modelpemerlupelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PemerluPelayananController extends Controller
{
    public function store(Request $request,$id=null)
    {
        if (is_null($id))
        $m = new modelpemerlupelayanan();
        else
        $m = modelpemerlupelayanan::findOrFail($id);

        $m->tanggalmasuk = date('Y-m-d', strtotime($request->tanggalmasuk));
        $m->nama = $request->nama;
        $m->nik = $request->nik;
        $m->nomorkk = $request->nomorkk;
        $m->statuspernikahan = $request->statuspernikahan;
        $m->tanggallahir = date('Y-m-d', strtotime($request->tanggallahir));
        $m->tempatlahir = $request->tempatlahir;
        $m->tempattinggaltetap = $request->tempattinggaltetap;
        $m->nomortelepon = $request->nomortelepon;
        $m->pendidikanterakhir = $request->pendidikanterakhir;
        $m->namaayah = $request->namaayah;
        $m->nikayah = $request->nikayah;
        $m->nomorkkayah = $request->nomorkkayah;
        $m->tempatlahirayah = $request->tempatlahirayah;
        $m->tanggallahirayah = date('Y-m-d', strtotime($request->tanggallahirayah));
        $m->pekerjaanayah = $request->pekerjaanayah;
        $m->namaibu = $request->namaibu;
        $m->nomorkkibu = $request->nomorkkibu;
        $m->nikibu = $request->nikibu;
        $m->tempatlahiribu = $request->tempatlahiribu;
        $m->tanggallahiribu = date('Y-m-d', strtotime($request->tanggallahiribu));
        $m->pekerjaanibu = $request->pekerjaanibu;
        $m->save();
        return redirect()->route('indexpemerlulayanan');
    }
    public function index(){
        $pemerlu = modelpemerlupelayanan::all();
        
        return view('pegawaiasesmen.tablepemerlupelayanan',[
            'pemerlu' => $pemerlu
        ]);
    }
    public function show($id){
        $pemerlu = modelpemerlupelayanan::findOrFail($id);
        return view('pegawaiasesmen.edit-pemerlupelayanan',[
            'pemerlu' => $pemerlu
        ]);
    }
    public function delete($id){
        Log::debug("fuck");
        $pemerlu = modelpemerlupelayanan::findOrFail($id);
        $pemerlu->delete();
        return back();
    }
}
