<?php

namespace App\Http\Controllers;

use App\Models\RencanaPelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RencanaPelayananController extends Controller
{
    public function store(Request $request, $id = null)
    {
        if (is_null($id))
            $ren = new RencanaPelayanan();
        else
            $ren = RencanaPelayanan::findOrFail($id);


        $ren->pemerlulayanan_id = $request->pemerlulayanan_id;
        $ren->tanggalmasuk = date('Y-m-d', strtotime($request->tanggalmasuk));
        $ren->tanggalprogram = date('Y-m-d', strtotime($request->tanggalprogram));
        $ren->riwayatkeluarga = $request->riwayatkeluarga;
        $ren->riwayatsekolah = $request->riwayatsekolah;
        $ren->riwayatnapza = $request->riwayatnapza;
        $ren->aspekkesehatan = $request->aspekkesehatan;
        $ren->aspeksosial = $request->aspeksosial;
        $ren->aspekpsikologis = $request->aspekpsikologis;
        $ren->aspekmentalspiritual = $request->aspekmentalspiritual;
        $ren->potensiinternal = $request->potensiinternal;
        $ren->potensieksternal = $request->potensieksternal;
        $ren->faktorgenetik = $request->faktorgenetik;
        $ren->faktorpersonal = $request->faktorpersonal;
        $ren->faktorlingkungan = $request->faktorlingkungan;
        $ren->permasalahankeluarga = $request->permasalahankeluarga;
        $ren->rumusanmasalah = $request->rumusanmasalah;
        $ren->waktulayanan = $request->waktulayanan;

        if ($request->hasFile('genomap')) {
            $genomap = $request->file('genomap')->store('genomap');
            $ren->genomap = $genomap;
        }
        if ($request->hasFile('fokus')) {
            $fokus = $request->file('fokus')->store('fokus');
            $ren->fokus = $fokus;
        }

        $ren->save();
        return redirect()->route('indexrencanapelayanan');
    }
    public function index()
    {

        $pemerlu = DB::table('tabelpemerlupelayanan')->join('tabelrencanapelayanan', 'tabelpemerlupelayanan.id', '=', 'tabelrencanapelayanan.pemerlulayanan_id')
            ->select('tabelpemerlupelayanan.id', 'tabelpemerlupelayanan.nama', 'tabelrencanapelayanan.id as idrencanapelayanan', 'tabelrencanapelayanan.tanggalprogram')->get();
        return view('pekerjasosial.tablerencanapelayanan', [
            'pemerlu' => $pemerlu
        ]);
    }
    public function delete($id)
    {
        $pem =  RencanaPelayanan::findOrFail($id);
        $pem->delete();
        return back();
    }
    public function show($id)
    {
        $rencana = RencanaPelayanan::findOrFail($id);

        return view('pekerjasosial.edit-rencanapelayanan', [
            'rencana' => $rencana
        ]);
    }
}
