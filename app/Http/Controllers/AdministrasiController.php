<?php

namespace App\Http\Controllers;

use App\Models\Administrasi;
use Illuminate\Http\Request;
use App\Models\modelpemerlupelayanan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdministrasiController extends Controller
{
    public function byPemerlu($id)
    {
        $pemerlu = modelpemerlupelayanan::findOrFail($id);
        return view('pegawaiasesmen.administrasi', [
            'pemerlu' => $pemerlu
        ]);
    }
    public function delete($id){
        $a = Administrasi::findOrFail($id);
        $a->delete();
        return back();
    }
    public function download($path)
    {
        $path = base64_decode($path);
        return Storage::download($path);
    }
    public function store(Request $request,$id=null)
    {
        if (is_null($id)){
            $adm = new Administrasi();
        }else{
            $adm = Administrasi::findOrFail($id);
        }

        
        if ($request->hasFile('kk')) {
            $kk = $request->file('kk')->store('kk');
            $adm->kk = $kk;
        }
        if ($request->hasFile('ktp')) {
            $ktp = $request->file('ktp')->store('ktp');
            $adm->ktp = $ktp;
        }
        if ($request->hasFile('ktportu')) {
            $ktportu = $request->file('ktportu')->store('ktportu');
            $adm->ktportu = $ktportu;
        }
        if ($request->hasFile('suratpemohonanortu')) {
            $suratpemohonanortu = $request->file('suratpemohonanortu')->store('suratpemohonanortu');
            $adm->suratpemohonanortu = $suratpemohonanortu;
        }
        if ($request->hasFile('suratpernyataanortu')) {
            $suratpernyataanortu = $request->file('suratpernyataanortu')->store('suratpernyataanortu');
            $adm->suratpernyataanortu = $suratpernyataanortu;
        }
        if ($request->hasFile('suratpemerlupelayanan')) {
            $suratpemerlupelayanan = $request->file('suratpemerlupelayanan')->store('suratpemerlupelayanan');
            $adm->suratpernyataanpemerlu = $suratpemerlupelayanan;
        }
        if ($request->hasFile('suratpernyataanortu')) {
            $suratperjanjian = $request->file('suratperjanjian')->store('suratperjanjian');
            $adm->suratperjanjian = $suratperjanjian;
        }
        if(isset($request->nama))
            $adm->nama = $request->nama;
        if (isset($request->pemerlulayanan_id))
            $adm->pemerlulayanan_id = $request->pemerlulayanan_id;

        $adm->save();

        return back();
    }
    public function index()
    {
        // $pemerlu = modelpemerlupelayanan::with('riwayat')->get();
        $pemerlu = DB::table('tabelpemerlupelayanan')->join('tabeladministrasi', 'tabelpemerlupelayanan.id', '=', 'tabeladministrasi.pemerlulayanan_id')
            ->select('tabelpemerlupelayanan.id', 'tabelpemerlupelayanan.nama', 'tabeladministrasi.id as idadministrasi')->get();

        return view('pegawaiasesmen.tableadministrasi', [
            'pemerlu' => $pemerlu
        ]);
    }
    public function show($id)
    {
        $administrasi = Administrasi::findOrFail($id);
        return view('pegawaiasesmen.edit-administrasi', [
            'administrasi' => $administrasi
        ]);
    }
}
