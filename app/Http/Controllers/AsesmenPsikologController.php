<?php

namespace App\Http\Controllers;

use App\Models\AsesmenPsikolog;
use Illuminate\Http\Request;
use stdClass;
use Illuminate\Support\Facades\DB;
class AsesmenPsikologController extends Controller
{
    public function store(Request $request, $id = null)
    {
        if (is_null($id))
            $ps = new AsesmenPsikolog();
        else
            $ps = AsesmenPsikolog::findOrFail($id);

        $penc = new stdClass();
        $penc->c_pencurian = json_encode($request->c_pencurian);
        $penc->n_pencurian = $request->n_pencurian;
        $pencurianJson = json_encode($penc);

        $per = new stdClass();
        $per->c_perampokan = json_encode($request->c_perampokan);
        $per->n_perampokan = $request->n_perampokan;
        $perampokanJson = json_encode($per);

        $taw = new stdClass();
        $taw->c_tawuran = json_encode($request->c_tawuran);
        $taw->n_tawuran = $request->n_tawuran;
        $tawuranJson = json_encode($taw);

        $seks = new stdClass();
        $seks->c_seksbebas = json_encode($request->c_seksbebas);
        $seks->n_seksbebas = $request->n_seksbebas;
        $seksJson = json_encode($seks);

        $nap = new stdClass();
        $nap->c_napza = json_encode($request->c_napza);
        $nap->n_napza = $request->n_napza;
        $napJson = json_encode($nap);

        $mir = new stdClass();
        $mir->c_miras = json_encode($request->c_alkohol);
        $mir->n_miras = $request->n_alkohol;
        $mirasJson = json_encode($mir);

        $men = new stdClass();
        $men->c_menjualnapza = json_encode($request->c_menjualnapza);
        $men->n_menjualnapza = $request->n_menjualnapza;
        $menJson = json_encode($men);

        $penj = new stdClass();
        $penj->c_penjara = json_encode($request->c_penjara);
        $penj->n_penjara = $request->n_penjara;
        $penjaraJson = json_encode($penj);


        $ps->pemerlulayanan_id = $request->pemerlulayanan_id;
        $ps->tanggalasesmen = date('Y-m-d', strtotime($request->tanggalasesmen));
        $ps->pengalaman = $request->pengalaman;
        $ps->riwayatnapza = $request->riwayatnapza;
        $ps->penyebabnapza = $request->penyebabnapza;
        $ps->pencurian = $pencurianJson;
        $ps->perampokan = $perampokanJson;
        $ps->tawuran = $tawuranJson;
        $ps->seksbebas = $seksJson;
        $ps->napza = $napJson;
        $ps->miras = $mirasJson;
        $ps->menjualnapza = $menJson;
        $ps->penjara = $penjaraJson;
        $ps->percobaanbunuhdiri = $request->percobaanbunuhdiri;
        $ps->riwayatpemeriksaanpsikiater = $request->riwayatpemeriksaanpsikiater;
        $ps->hubunganppks = $request->hubunganppks;
        $ps->potensiyangdimiliki = $request->potensiyangdimiliki;
        $ps->kesiapanrehabilitasi = $request->kesiapanrehabilitasi;
        $ps->bai = $request->bai;
        $ps->bdi = $request->bdi;
        $ps->staxi = $request->staxi;
        $ps->tesgrafis = $request->tesgrafis;
        $ps->srq = $request->srq;
        $ps->skalawellbeing = $request->skalawellbeing;
        $ps->intelegensi = $request->intelegensi;
        $ps->rumusanmasalah = $request->rumusanmasalah;
        $ps->kesimpulan = $request->kesimpulan;
        $ps->rencanaintervensi = $request->rencanaintervensi;
        $ps->nama = $request->nama;
        $ps->save();
        return redirect()->route('indexhasilasesmen');
    }
    public function delete($id){
        AsesmenPsikolog::where('id',$id)->delete();
        return back();
    }
    public function index(){
        $pemerlu = DB::table('tabelpemerlupelayanan')->join('tabelasesmenpsikologi','tabelpemerlupelayanan.id','=','tabelasesmenpsikologi.pemerlulayanan_id')
        ->select('tabelpemerlupelayanan.id','tabelpemerlupelayanan.nama','tabelasesmenpsikologi.id as idasesmenpsikologi','tabelasesmenpsikologi.tanggalasesmen')->get();
       
        return view('psikolog.tablehasilasesmen',[
            'pemerlu' => $pemerlu
        ]);
    }
    public function show($id){
        $ps = AsesmenPsikolog::findOrFail($id);
        return view('psikolog.editasesmenpsikolog',[
            'ps' => $ps
        ]);
    }
}
