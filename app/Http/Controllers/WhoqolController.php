<?php

namespace App\Http\Controllers;

use App\Models\Whoqol;
use Illuminate\Http\Request;
use stdClass;
use Illuminate\Support\Facades\DB;
class WhoqolController extends Controller
{
    public function index(){
        $pemerlu = DB::table('tabelpemerlupelayanan')->join('tabelwhoqol', 'tabelpemerlupelayanan.id', '=', 'tabelwhoqol.pemerlulayanan_id')
            ->select('tabelpemerlupelayanan.id', 'tabelpemerlupelayanan.nama', 'tabelwhoqol.id as idwhoqol', 'tabelwhoqol.tanggalwawancara')->get();

            return view('pekerjasosial.tablewhoqol',[
                'pemerlu' => $pemerlu
            ]);
    }
    public function store(Request $request, $id=null){
        if(is_null($id))
            $w = new Whoqol();
        else
            $w = Whoqol::findOrFail($id);

            $w->nama = $request->nama;
            $w->pemerlulayanan_id = $request->pemerlulayanan_id;
            $w->tanggalwawancara = date('Y-m-d', strtotime($request->tanggalwawancara));
            $domain1 = new stdClass();
            $domain1->a = $request->domain1a;
            $domain1->b = $request->domain1b;
            $domain1->c = $request->domain1c;
            $w->domain1 = json_encode($domain1);
            $domain2 = new stdClass();
            $domain2->a = $request->domain2a;
            $domain2->b = $request->domain2b;
            $domain2->c = $request->domain2c;
            $w->domain2 = json_encode($domain2);
            $domain3 = new stdClass();
            $domain3->a = $request->domain3a;
            $domain3->b = $request->domain3b;
            $domain3->c = $request->domain3c;
            $w->domain3 = json_encode($domain3);
            $domain4 = new stdClass();
            $domain4->a = $request->domain4a;
            $domain4->b = $request->domain4b;
            $domain4->c = $request->domain4c;
            $w->domain4 = json_encode($domain4);
            $w->save();
            return redirect()->route('indexwhoqol');
    }
    public function show($id){
        $w = Whoqol::findOrFail($id);
        return view('pekerjasosial.edit-whoqol',[
            'whoqol' => $w
        ]);
    }

    public function delete($id){
        $w = Whoqol::findOrFail($id);
        $w->delete();
        return back();
    }
}
