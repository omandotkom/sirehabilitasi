<?php

namespace App\Http\Controllers;

use App\Models\CatatanPerkembangan as AppCatatanPerkembangan;
use Catatanperkembangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\modelpemerlupelayanan;
class CatatanPerkembanganController extends Controller
{
    public function store(Request $request, $id = null){
        $edit = false;
        if (is_null($id))
            $c = new AppCatatanPerkembangan();
        else {
            $c = AppCatatanPerkembangan::findOrFail($id);
            $edit = true;
        }
        $c->pemerlulayanan_id = $request->pemerlulayanan_id;
        $c->bulan = $request->bulan;
        $c->tanggalpemeriksaan = date('Y-m-d', strtotime($request->tanggalpemeriksaan));
        $c->beratbadan = $request->beratbadan;
        $c->tandavital = $request->tandavital;
        $c->masalahkesehatan = $request->masalahkesehatan;
        $c->rekomendasi = $request->rekomendasi;
        $c->rujukan = $request->rujukan;

        $c->save();
        if ($edit){
            return redirect()->route('indexcatatanperkembangan');
        }
        return back();
    }
    public function index(){
        // $pemerlu = DB::table('tabelpemerlupelayanan')->join('tabelcatatanperkembangan','tabelpemerlupelayanan.id','=','tabelcatatanperkembangan.pemerlulayanan_id')
        // ->select('tabelpemerlupelayanan.id','tabelpemerlupelayanan.nama','tabelcatatanperkembangan.id as idcatatanperkembangan')->get();
        $pemerlu = modelpemerlupelayanan::all();
        
        return view('perawat.tablecatatanperkembangan',[
            'pemerlu' => $pemerlu
        ]);
    }
    public function show($pemerlu, $bulan){
        $p = AppCatatanPerkembangan::where('pemerlulayanan_id',$pemerlu)->where('bulan',$bulan)->first();
        if ($p === null){
            abort('403','Data tidak ada');
        }
        return view('perawat.edit-catatanperkembangan1',[
            'catatan' =>$p
        ]);
    }
}
