<?php

namespace App\Http\Controllers;

use App\Models\Assist;
use Illuminate\Http\Request;
use stdClass;
use Illuminate\Support\Facades\DB;

class AssistController extends Controller
{
    public function store(Request $request, $id = null)
    {
        if (is_null($id)) {
            $as = new Assist();
        } else {
            $as = Assist::findOrFail($id);
        }

        $as->pemerlulayanan_id = $request->pemerlulayanan_id;
        $as->tanggalpemeriksaan = date('Y-m-d', strtotime($request->tanggalpemeriksaan));
        $as->a = $request->a;
        $as->b = $request->b;
        $as->c = $request->c;
        $as->d = $request->d;
        $as->e = $request->e;
        $as->f = $request->f;
        $as->g = $request->g;
        $as->h = $request->h;
        $as->i = $request->i;
        $j = new stdClass();
        $j->jname = $request->jname;
        $j->jvalue = $request->jvalue;
        $as->j = json_encode($j);
        $as->save();
        return back();
    }
    public function index()
    {
        $pemerlu = DB::table('tabelpemerlupelayanan')->join('tabelassist', 'tabelpemerlupelayanan.id', '=', 'tabelassist.pemerlulayanan_id')
            ->select('tabelpemerlupelayanan.id', 'tabelpemerlupelayanan.nama', 'tabelassist.id as idassist', 'tabelassist.tanggalpemeriksaan')->get();

        return view('pekerjasosial.tableassist', [
            'pemerlu' => $pemerlu
        ]);
    }
    public function show($id){
        $as = Assist::findOrFail($id);
        return view('pekerjasosial.edit-assist',[
            'assist' => $as
        ]);
    }
    public function delete($id){
        $as = Assist::findOrFail($id);
        $as->delete();
        return back();  
    }
}
