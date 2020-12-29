<?php

namespace App\Http\Controllers;

use App\Models\modelpemerlupelayanan;
use App\Models\modelriwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RiwayatPemerluLayananController extends Controller
{
    public function index()
    { 
        // $pemerlu = modelpemerlupelayanan::with('riwayat')->get();
        $pemerlu = DB::table('tabelpemerlupelayanan')->join('tabelriwayat','tabelpemerlupelayanan.id','=','tabelriwayat.pemerlulayanan_id')
        ->select('tabelpemerlupelayanan.id','tabelpemerlupelayanan.nama','tabelriwayat.id as idriwayat')->get();
       
        return view('pegawaiasesmen.tableriwayat',[
            'pemerlu' => $pemerlu
        ]);
    }

    public function show($id){
        $riwayat = modelriwayat::findOrFail($id);
        return view('pegawaiasesmen.edit-riwayatpemerlupelayanan',[
            'riwayat' => $riwayat
        ]);
    }
    public function delete($id){
        $riwayat = modelriwayat::findOrFail($id);
        $riwayat->delete();
        return back();
    }
    public function store(Request $request,$id=null)
    {
        if (is_null($id))
        $data = new modelriwayat();
        else
        $data = modelriwayat::findOrFail($id);

        $data->nama = $request->nama;
        $data->pemerlulayanan_id = $request->pemerlulayanan_id;
        $data->sd = $request->sd;
        $data->smp = $request->smp;
        $data->sma = $request->sma;
        $data->kuliah = $request->kuliah;
        $data->pendidikannonformal = $request->pendidikannonformal;
        if (is_null($id)){
            $data->namalembaga = $request->namalembaga;
            $data->jenispelayanan = $request->jenispelayanan;
            $data->hasil = $request->hasil;
        }
        
        $data->save();
        return redirect()->route('indexriwayatpemerlulayanan');
    }
    public function byPemerlu($id){
        $pemerlu = modelpemerlupelayanan::findOrFail($id);
        return view('pegawaiasesmen.riwayatpemerlupelayanan',[
            'pemerlu' => $pemerlu
        ]);
    }
}
