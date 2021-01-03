<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/

Route::get('/', function () {
    return view('index');
})->name('index')->middleware('guest');

/*pegawai asesmen */
Route::get('/dashboardasesmen', function () {
    return view('pegawaiasesmen.dashboard');
})->name('dashboardasesmen');
Route::get('/datapemerlupelayanan', function () {
    return view('pegawaiasesmen.datapemerlupelayanan');
});
Route::get(
    '/administrasi/',
    // 'App\Http\Controllers\AdministrasiController@byPemerlu'
    function(){
        return  view('pegawaiasesmen.administrasi');
    }
)->name('administrasibypemerlu');
Route::post(
    '/administrasi/save/{id?}',
    'App\Http\Controllers\AdministrasiController@store'
)->name('saveadministrasi');
Route::get("/administrasi/download/{path}", 'App\Http\Controllers\AdministrasiController@download')->name('downloadadministrasi');
Route::get("/administrasi/delete/{id}", 'App\Http\Controllers\AdministrasiController@delete')->name('deleteadministrasi');
Route::get(
    '/riwayatpemerlupelayanan/',
    // 'App\Http\Controllers\RiwayatPemerluLayananController@byPemerlu'
    function(){
      return  view('pegawaiasesmen.riwayatpemerlupelayanan');
    }
)->name('riwayatbypemerluid');
Route::post('/riwayatpemerlulayanan/save/{id?}', 'App\Http\Controllers\RiwayatPemerluLayananController@store')->name('saveriwayatpemerlulayanan');

Route::get('/tablepemerlupelayanan','App\Http\Controllers\PemerluPelayananController@index')->name('indexpemerlulayanan');
Route::get('/tablepemerlupelayanan/delete/{id}','App\Http\Controllers\RiwayatPemerluLayananController@delete')->name('deleteriwayatpemerlulayanan');
Route::post(
    '/tablepemerlupelayanan/save/{id?}',
    'App\Http\Controllers\PemerluPelayananController@store'
)->name('savepemerlupelayanan');
Route::post(
    '/tablepemerlupelayanan/delete/{id}',
    'App\Http\Controllers\PemerluPelayananController@delete'
)->name('deletepemerlupelayanan');

Route::get('/tableriwayat','App\Http\Controllers\RiwayatPemerluLayananController@index')->name('indexriwayatpemerlulayanan');
Route::get(
    '/tableadministrasi',
    
    'App\Http\Controllers\AdministrasiController@index'
)->name('administrasi');


/*tab menu edit untuk melihat dan merubah data admn */
Route::get(
    '/edit-administrasi/{id}',
    // function () {
    //     return view('pegawaiasesmen.edit-administrasi');
    // }
    'App\Http\Controllers\AdministrasiController@show'
)->name('editadministrasi');
Route::get(
    '/edit-riwayatpemerlupelayanan/{id}',
    // function () { 
    //     return view('pegawaiasesmen.edit-riwayatpemerlupelayanan');
    // }
    'App\Http\Controllers\RiwayatPemerluLayananController@show'
)->name('editiwayatpemerlupelayanan');
Route::get(
    '/edit-pemerlupelayanan/{id?}',
    // function () {
    //     return view('pegawaiasesmen.edit-pemerlupelayanan');
    // }
    'App\Http\Controllers\PemerluPelayananController@show'
)->name('showpemerlupelayanan');

/*perawat */
Route::get('/dashboardperawat', function () {
    return view('perawat.dashboardperawat');
})->name('dashboardperawat');

Route::get('/hasilpengkajianawal', function () {
    return view('perawat.hasilpengkajianawal');
});
Route::post('/hasilpengkajianawal/save/{id?}','App\Http\Controllers\PengkajianAwalController@store')->name('savepengkajianawal');
Route::get('/catatanperkembangan', function () {
    return view('perawat.catatanperkembangan');
});
Route::post('/catatanperkembangan/save/{id?}','App\Http\Controllers\CatatanPerkembanganController@store')->name('savecatatanperkembangan');
Route::get('/tablehasilpengkajianawal', 
'App\Http\Controllers\PengkajianAwalController@index'
)->name('indexhasilpengkajianawal');
Route::get('/tablecatatanperkembangan','App\Http\Controllers\CatatanPerkembanganController@index')->name('indexcatatanperkembangan');
Route::get('/edit-catatanperkembangan1/{pemerlu}/{bulan}', 
// function () {
//     return view('perawat.edit-catatanperkembangan1');
// }
'App\Http\Controllers\CatatanPerkembanganController@show'
)->name('editcatatanperkembangan');
Route::get('/edit-catatanperkembangan2', function () {
    return view('perawat.edit-catatanperkembangan2');
});
Route::get('/edit-catatanperkembangan3', function () {
    return view('perawat.edit-catatanperkembangan3');
});
Route::get('/edit-catatanperkembangan4', function () {
    return view('perawat.edit-catatanperkembangan4');
});
Route::get('/edit-hasilpengkajianawal/{id?}', 
// function () {
//     return view('perawat.edit-hasilpengkajianawal');
// }
'App\Http\Controllers\PengkajianAwalController@show'
)->name('editpengkajianawal');
Route::get('/pengkajianawal/delete/{id}','App\Http\Controllers\PengkajianAwalController@delete')->name('deletepengkajianawal');
/*pekerja sosial */
Route::get('/dashboardpekerjasosial', function () {
    return view('pekerjasosial.dashboardpekerjasosial');
})->name('dashboardsosial');
Route::get('/asi', function () {
    return view('pekerjasosial.asi');
});

Route::post('/asi/save/{id?}', 'App\Http\Controllers\AsiController@store')->name('saveasi');
Route::get('/asi/delete/{id}', 'App\Http\Controllers\AsiController@delete')->name('deleteasi');

Route::get('/assist', function () {
    return view('pekerjasosial.assist');
});
Route::post('/assist/save/{id?}', 'App\Http\Controllers\AssistController@store')->name('saveassist');
Route::get('/whoqol', function () {
    return view('pekerjasosial.whoqol');
});
Route::post('/whoqol/save/{id?}', 'App\Http\Controllers\WhoqolController@store')->name('savewhoqol');
Route::get('/whoqol/delete/{id?}', 'App\Http\Controllers\WhoqolController@delete')->name('deletewhoqol');
Route::get('/rencanapelayanan', function () {
    return view('pekerjasosial.rencanapelayanan');
});
Route::post('/rencanapelayanan/save/{id?}', 'App\Http\Controllers\RencanaPelayananController@store')->name('saverencanapelayanan');


Route::get('/laporanperkembangan', function () {
    return view('pekerjasosial.laporanperkembangan');
});
Route::get(
    '/tableasi',
    'App\Http\Controllers\AsiController@index'
)->name('indexasi');
Route::get(
    '/tableassist',
    'App\Http\Controllers\AssistController@index'
)->name('indexassist');
Route::get('/tablewhoqol','App\Http\Controllers\WhoqolController@index')->name('indexwhoqol');
Route::get('/tablerencanapelayanan','App\Http\Controllers\RencanaPelayananController@index')->name('indexrencanapelayanan');
Route::get('/tablelaporanperkembangan','App\Http\Controllers\LaporanPerkembanganController@index')->name('indexlaporanperkembangan');
Route::get('/edit-asi/{id}','App\Http\Controllers\AsiController@show')->name('editasi');
Route::get('/edit-assist/{id}','App\Http\Controllers\AssistController@show')->name('editassist');
Route::get('/assist/delete/{id}', 'App\Http\Controllers\AssistController@delete')->name('deleteassists');
Route::get('/edit-whoqol/{id}','App\Http\Controllers\WhoqolController@show')->name('editwhoqol');
Route::get('/edit-rencanapelayanan/{id}', 'App\Http\Controllers\RencanaPelayananController@show')->name('editrencanapelayanan');
Route::get('/rencanapelayanan/delete/{id}','App\Http\Controllers\RencanaPelayananController@delete')->name('deleterencanapelayanan');
Route::post('/laporanperkembangan/save/{id?}','App\Http\Controllers\LaporanPerkembanganController@store')->name('savelaporanperkembangan');
Route::get('/edit-laporanperkembangan/{pemerlu?}/{bulan?}', 'App\Http\Controllers\LaporanPerkembanganController@show')->name('editlaporanperkembangan');
Route::get('/laporanperkembangan/delete/{id}','App\Http\Controllers\LaporanPerkembanganController@delete')->name('deletelaporanperkembangan');

/*admin */
Route::get('/dashboardadmin', function () {
    return view('admin.dashboardadmin');
})->name('dashboardadmin');

Route::get('/buatakunpegawai', function () {
    return view('admin.buatakunpegawai');
});
Route::post('/buatakunpegawai/{id?}','App\Http\Controllers\UserController@store')->name('savebuatakunpegawai');
Route::get('/daftarakunpegawai','App\Http\Controllers\UserController@index')->name('indexdaftarakunpegawai');
Route::get('/editakunpegawai/{id}', 'App\Http\Controllers\UserController@show')->name('editakunpegawai');
Route::get('/daftarakunpegawai/delete/{id}','App\Http\Controllers\UserController@delete')->name('deleteakunpegawai');

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/dashboardpsikolog', function () {
    return view('psikolog.dashboardpsikolog');
})->name('dashboardpsikolog');
Route::get('/asesmenpsikolog', function () {
    return view('psikolog.asesmenpsikolog');
});
Route::get('/tablehasilasesmen', 'App\Http\Controllers\AsesmenPsikologController@index')->name('indexhasilasesmen');
Route::get('/editasesmenpsikolog/{id}', 'App\Http\Controllers\AsesmenPsikologController@show'
)->name('editasesmenpsikologi');
Route::post('/asesmenpsikolog/save/{id?}','App\Http\Controllers\AsesmenPsikologController@store')->name('saveasesmenpsikolog');
Route::get('/asesmenpsikolog/delete/{id}','App\Http\Controllers\AsesmenPsikologController@delete')->name('deleteasesmenpsikolog');