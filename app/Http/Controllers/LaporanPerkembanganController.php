<?php

namespace App\Http\Controllers;

use App\Models\LaporanPerkembangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LaporanPerkembanganController extends Controller
{
    public function store (Request $request,$id=null){
        if (is_null($id))
            $lap = new LaporanPerkembangan();
        else
            $lap = LaporanPerkembangan::findOrFail($id);
            
            $lap->nama = $request->nama;
            $lap->bulanlaporan = $request->bulanlaporan;
            $lap->pemerlulayanan_id = $request->pemerlulayanan_id;
            $lap->tanggalmasuk = date('Y-m-d', strtotime($request->tanggalmasuk));
            $lap->tanggalprogram = date('Y-m-d', strtotime($request->tanggalprogram));
            $lap->f_masalah = $request->f_masalah;
            $lap->f_intervensi = $request->f_intervensi;
            $lap->f_intervensidicapai = $request->f_intervensidicapai;
            $lap->f_intervensibelumdicapai = $request->f_intervensibelumdicapai;
            $lap->p_masalah = $request->p_masalah;
            $lap->p_intervensi = $request->p_intervensi;
            $lap->p_intervensidicapai = $request->p_intervensidicapai;
            $lap->p_intervensibelumdicapai = $request->p_intervensibelumdicapai;
            $lap->sos_masalah = $request->sos_masalah;
            $lap->sos_intervensi = $request->sos_intervensi;
            $lap->sos_intervensidicapai = $request->sos_intervensidicapai;
            $lap->sos_intervensibelumdicapai = $request->sos_intervensibelumdicapai;
            $lap->s_masalah = $request->s_masalah;
            $lap->s_intervensi = $request->s_intervensi;
            $lap->s_intervensidicapai = $request->s_intervensidicapai;
            $lap->s_intervensibelumdicapai = $request->s_intervensibelumdicapai;
            $lap->kendala = $request->kendala;
            $lap->rencana = $request->rencana;
            $lap->save();
            return redirect()->route('indexlaporanperkembangan');
    }
    public function show($pemerlu,$bulan){
        $lap = LaporanPerkembangan::where('pemerlulayanan_id',$pemerlu)->where('bulanlaporan',$bulan)->first();
        if ($lap === null){
            return abort(403,'Data untuk pemerlu layanan ini tidak ada.');
        }
        return view('pekerjasosial.edit-laporanperkembangan1',[
            'laporan' => $lap
        ]);
    }
    public function index(){
        $pemerlu = DB::table('tabelpemerlupelayanan')
        ->select('tabelpemerlupelayanan.id','tabelpemerlupelayanan.nama')
        ->join('tabellaporanperkembangan','tabelpemerlupelayanan.id','=','tabellaporanperkembangan.pemerlulayanan_id')->get();
       
        return view('pekerjasosial.tablelaporanperkembangan',[
            'pemerlu' => $pemerlu
        ]);
    }
    public function delete($id){
        $p = LaporanPerkembangan::where('pemerlulayanan_id',$id);
        $p->delete();
        
        return back();
    }
}
