<?php

namespace App\Http\Controllers;

use App\Models\Asi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsiController extends Controller
{
    public function delete($id){
        $asi = Asi::findOrFail($id);
        $asi->delete();
        return back();
    }
    public function store(Request $request, $id = null)
    {
        if (is_null($id))
            $asi = new Asi();
        else 
            $asi = Asi::findOrFail($id);
        
        $asi->nama = $request->nama;
        $asi->pemerlulayanan_id = $request->pemerlulayanan_id;
        $asi->tanggalmasuk = date('Y-m-d', strtotime($request->tanggalmasuk));
        $asi->medis = json_encode($request->medis);
        $asi->pekerjaandukungan = json_encode($request->pekerjaandukungan);
        $asi->napza = json_encode($request->napza);
        $asi->keluargasosial = json_encode($request->keluargasosial);
        $asi->psikiatris = json_encode($request->psikiatris);
        $asi->keterangandiagnosis = $request->keterangandiagnosis;
        $asi->diagnosislainnya = $request->diagnosislainnya;
        $asi->save();
        return redirect()->route('indexasi');
    }
    public function show($id)
    {
        $asi = Asi::findOrFail($id);
       
        return view(
            'pekerjasosial.edit-asi',
            [
                'asi' => $asi
            ]
        );
    }
    public function index()
    {
        $pemerlu = DB::table('tabelpemerlupelayanan')->join('tabelasi', 'tabelpemerlupelayanan.id', '=', 'tabelasi.pemerlulayanan_id')
            ->select('tabelpemerlupelayanan.id', 'tabelpemerlupelayanan.nama', 'tabelasi.id as idasi', 'tabelasi.tanggalmasuk')->get();

        return view('pekerjasosial.tableasi', [
            'pemerlu' => $pemerlu
        ]);
    }
}
