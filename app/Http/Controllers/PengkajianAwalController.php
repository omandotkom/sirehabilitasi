<?php

namespace App\Http\Controllers;

use App\Models\PengkajianAwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PengkajianAwalController extends Controller
{
    public function store (Request $request, $id = null){
        
        if (is_null($id))
            $p = new PengkajianAwal();
        else    
            $p = PengkajianAwal::findOrFail($id);

        $p->pemerlulayanan_id = $request->pemerlulayanan_id;
        $p->tanggalmasuk = date('Y-m-d', strtotime($request->tanggalmasuk));
        $p->tanggaltes = date('Y-m-d', strtotime($request->tanggaltes));
        $p->hasiltes = $request->hasiltes;
        $p->riwayatnapza=  $request->riwayatnapza;
        $p->gejalaputuszat = $request->gejalaputuszat;
        $p->tinggibadan = $request->tinggibadan;
        $p->luka = $request->luka;
        $p->tattotubuh = $request->tattotubuh;
        $p->riwayatpenyakit = $request->riwayatpenyakit;
        $p->tanggalteslab = date('Y-m-d', strtotime($request->tanggalteslab));
        $p->hiv = $request->hiv;
        $p->nama = $request->nama;
        $p->darahrutin = $request->darahrutin;

        $p->save();
        return redirect()->route('indexhasilpengkajianawal');
    }
    public function index(){
        $pemerlu = DB::table('tabelpemerlupelayanan')->join('tabelpengkajianawal','tabelpemerlupelayanan.id','=','tabelpengkajianawal.pemerlulayanan_id')
        ->select('tabelpemerlupelayanan.id','tabelpemerlupelayanan.nama','tabelpengkajianawal.id as idpengkajianawal','tabelpengkajianawal.riwayatnapza')->get();
       
        return view('perawat.tablehasilpengkajianawal',[
            'pemerlu' => $pemerlu
        ]);
    }
    public function show($id){
        $p = PengkajianAwal::findOrFail($id);
        return view('perawat.edit-hasilpengkajianawal',[
            'pengkajian' => $p
        ]);
    }
    public function delete($id){
        $p = PengkajianAwal::findOrFail($id);
        $p->delete();
        return back();
    }
}
