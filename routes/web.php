<?php

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
});

/*pegawai asesmen */
Route::get('/dashboardasesmen', function () {
    return view('pegawaiasesmen.dashboard');
});
Route::get('/datapemerlupelayanan', function () {
    return view('pegawaiasesmen.datapemerlupelayanan');
});
Route::get('/administrasi', function () {
    return view('pegawaiasesmen.administrasi');
});
Route::get('/riwayatpemerlupelayanan', function () {
    return view('pegawaiasesmen.riwayatpemerlupelayanan');
});
Route::get('/tablepemerlupelayanan', function () {
    return view('pegawaiasesmen.tablepemerlupelayanan');
});
Route::get('/tableriwayat', function () {
    return view('pegawaiasesmen.tableriwayat');
});
Route::get('/tableadministrasi', function () {
    return view('pegawaiasesmen.tableadministrasi');
});


/*tab menu edit untuk melihat dan merubah data admn */
Route::get('/edit-administrasi', function () {
    return view('pegawaiasesmen.edit-administrasi');
});
Route::get('/edit-riwayatpemerlupelayanan', function () {
    return view('pegawaiasesmen.edit-riwayatpemerlupelayanan');
});
Route::get('/edit-pemerlupelayanan', function () {
    return view('pegawaiasesmen.edit-pemerlupelayanan');
}); 

/*perawat */
Route::get('/dashboardperawat', function () {
    return view('perawat.dashboardperawat');
});
Route::get('/hasilpengkajianawal', function () {
    return view('perawat.hasilpengkajianawal');
});
Route::get('/catatanperkembangan', function () {
    return view('perawat.catatanperkembangan');
});
Route::get('/tablehasilpengkajianawal', function () {
    return view('perawat.tablehasilpengkajianawal');
});
Route::get('/tablecatatanperkembangan', function () {
    return view('perawat.tablecatatanperkembangan');
});
Route::get('/edit-catatanperkembangan1', function () {
    return view('perawat.edit-catatanperkembangan1');
});
Route::get('/edit-catatanperkembangan2', function () {
    return view('perawat.edit-catatanperkembangan2');
});
Route::get('/edit-catatanperkembangan3', function () {
    return view('perawat.edit-catatanperkembangan3');
});
Route::get('/edit-catatanperkembangan4', function () {
    return view('perawat.edit-catatanperkembangan4');
});
Route::get('/edit-hasilpengkajianawal', function () {
    return view('perawat.edit-hasilpengkajianawal');
});

/*pekerja sosial */
Route::get('/dashboardpekerjasosial', function () {
    return view('pekerjasosial.dashboardpekerjasosial');
});
Route::get('/asi', function () {
    return view('pekerjasosial.asi');
});
Route::get('/assist', function () {
    return view('pekerjasosial.assist');
});
Route::get('/whoqol', function () {
    return view('pekerjasosial.whoqol');
});
Route::get('/rencanapelayanan', function () {
    return view('pekerjasosial.rencanapelayanan');
});
Route::get('/laporanperkembangan', function () {
    return view('pekerjasosial.laporanperkembangan');
});
Route::get('/tableasi', function () {
    return view('pekerjasosial.tableasi');
});
Route::get('/tableassist', function () {
    return view('pekerjasosial.tableassist');
});
Route::get('/tablewhoqol', function () {
    return view('pekerjasosial.tablewhoqol');
});
Route::get('/tablerencanapelayanan', function () {
    return view('pekerjasosial.tablerencanapelayanan');
});
Route::get('/tablelaporanperkembangan', function () {
    return view('pekerjasosial.tablelaporanperkembangan');
});
Route::get('/edit-asi', function () {
    return view('pekerjasosial.edit-asi');
});
Route::get('/edit-assist', function () {
    return view('pekerjasosial.edit-assist');
});
Route::get('/edit-whoqol', function () {
    return view('pekerjasosial.edit-whoqol');
});
Route::get('/edit-rencanapelayanan', function () {
    return view('pekerjasosial.edit-rencanapelayanan');
});
Route::get('/edit-laporanperkembangan1', function () {
    return view('pekerjasosial.edit-laporanperkembangan1');
});
Route::get('/edit-laporanperkembangan2', function () {
    return view('pekerjasosial.edit-laporanperkembangan2');
});
Route::get('/edit-laporanperkembangan3', function () {
    return view('pekerjasosial.edit-laporanperkembangan3');
});
Route::get('/edit-laporanperkembangan4', function () {
    return view('pekerjasosial.edit-laporanperkembangan4');
});

Route::get('/tableadministrasi', function () {
    return view('pekerjasosial.tableadministrasi');
});
Route::get('/tablepemerlupelayanan', function () {
    return view('pekerjasosial.tablepemerlupelayanan');
});
Route::get('/tableriwayat', function () {
    return view('pekerjasosial.tableriwayat');
});


/*admin */
Route::get('/dashboardadmin', function () {
    return view('admin.dashboardadmin');
});
Route::get('/tableadministrasi', function () {
    return view('admin.tableadministrasi');
});
Route::get('/tablepemerlupelayanan', function () {
    return view('admin.tablepemerlupelayanan');
});
Route::get('/tableriwayat', function () {
    return view('admin.tableriwayat');
});
Route::get('/tableasi', function () {
    return view('admin.tableasi');
});
Route::get('/tableassist', function () {
    return view('admin.tableassist');
});
Route::get('/tablewhoqol', function () {
    return view('admin.tablewhoqol');
});
Route::get('/tablerencanapelayanan', function () {
    return view('admin.tablerencanapelayanan');
});
Route::get('/tablelaporanperkembangan', function () {
    return view('admin.tablelaporanperkembangan');
});
Route::get('/tablehasilpengkajianawal', function () {
    return view('admin.tablehasilpengkajianawal');
});
Route::get('/tablecatatanperkembangan', function () {
    return view('admin.tablecatatanperkembangan');
});

/* admin buat akun pegawai */
Route::get('/buatakunpegawai', function () {
    return view('admin.buatakunpegawai');
});
Route::get('/daftarakunpegawai', function () {
    return view('admin.daftarakunpegawai');
});
Route::get('/editakunpegawai', function () {
    return view('admin.editakunpegawai');
});
