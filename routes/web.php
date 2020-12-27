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
});

/*pegawai asesmen */
Route::get('/dashboardasesmen', function () {
    return view('pegawaiasesmen.dashboard');
})->name('dashboardasesmen');
Route::get('/datapemerlupelayanan', function () {
    return view('pegawaiasesmen.datapemerlupelayanan');
});
Route::get(
    '/administrasi/{id?}',
    // function () {
    //     return view('pegawaiasesmen.administrasi');
    // }
    'App\Http\Controllers\AdministrasiController@byPemerlu'
)->name('administrasibypemerlu');
Route::post(
    '/administrasi/save/{id?}',
    'App\Http\Controllers\AdministrasiController@store'
)->name('saveadministrasi');
Route::get("/administrasi/download/{path}", 'App\Http\Controllers\AdministrasiController@download')->name('downloadadministrasi');
Route::get("/administrasi/delete/{id}", 'App\Http\Controllers\AdministrasiController@delete')->name('deleteadministrasi');
Route::get(
    '/riwayatpemerlupelayanan/{id}',

    // function () {
    //     return view('pegawaiasesmen.riwayatpemerlupelayanan');
    // }
    'App\Http\Controllers\RiwayatPemerluLayananController@byPemerlu'
)->name('riwayatbypemerluid');
Route::post('/riwayatpemerlulayanan/save/{id?}', 'App\Http\Controllers\RiwayatPemerluLayananController@store')->name('saveriwayatpemerlulayanan');

Route::get(
    '/tablepemerlupelayanan',
    // function () {
    //     return view('pegawaiasesmen.tablepemerlupelayanan');
    // }
    'App\Http\Controllers\PemerluPelayananController@index'
)->name('indexpemerlulayanan');

Route::post(
    '/tablepemerlupelayanan/save/{id?}',
    'App\Http\Controllers\PemerluPelayananController@store'
)->name('savepemerlupelayanan');
Route::post(
    '/tablepemerlupelayanan/delete/{id}',
    'App\Http\Controllers\PemerluPelayananController@delete'
)->name('deletepemerlupelayanan');

Route::get(
    '/tableriwayat',
    // function () {
    //     return view('pegawaiasesmen.tableriwayat');
    // }
    'App\Http\Controllers\RiwayatPemerluLayananController@index'
)->name('indexriwayatpemerlulayanan');
Route::get(
    '/tableadministrasi',
    // function () {
    //     return view('pegawaiasesmen.tableadministrasi');
    // }
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
// function () {
//     return view('perawat.tablehasilpengkajianawal');
// }
'App\Http\Controllers\PengkajianAwalController@index'
);
Route::get('/tablecatatanperkembangan',
// function () {
//     return view('perawat.tablecatatanperkembangan');
// }
'App\Http\Controllers\CatatanPerkembanganController@index'
)->name('indexcatatanperkembangan');
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
    // function () {
    //     return view('pekerjasosial.tableasi');
    // }
    'App\Http\Controllers\AsiController@index'
);
Route::get(
    '/tableassist',
    //  function () {
    //     return view('pekerjasosial.tableassist');
    // }
    'App\Http\Controllers\AssistController@index'
)->name('indexassist');
Route::get(
    '/tablewhoqol',
    // function () {
    //     return view('pekerjasosial.tablewhoqol');
    // }
    'App\Http\Controllers\WhoqolController@index'
);
Route::get(
    '/tablerencanapelayanan',
    // function () {
    //     return view('pekerjasosial.tablerencanapelayanan');
    // }
    'App\Http\Controllers\RencanaPelayananController@index'
);
Route::get('/tablelaporanperkembangan',
//  function () {
//     return view('pekerjasosial.tablelaporanperkembangan');
// }
'App\Http\Controllers\LaporanPerkembanganController@index'
);
Route::get(
    '/edit-asi/{id}',
    // function () {
    //     return view('pekerjasosial.edit-asi');
    // }
    'App\Http\Controllers\AsiController@show'
)->name('editasi');
Route::get(
    '/edit-assist/{id}',
    // function () {
    //     return view('pekerjasosial.edit-assist');
    // }
    'App\Http\Controllers\AssistController@show'
)->name('editassist');
Route::get('/assist/delete/{id}', 'App\Http\Controllers\AssistController@delete')->name('deleteassists');
Route::get(
    '/edit-whoqol/{id}',
    // function () {
    //     return view('pekerjasosial.edit-whoqol');
    // }
    'App\Http\Controllers\WhoqolController@show'
)->name('editwhoqol');
Route::get(
    '/edit-rencanapelayanan/{id}',
    // function () {
    //     return view('pekerjasosial.edit-rencanapelayanan');
    // }
    'App\Http\Controllers\RencanaPelayananController@show'
)->name('editrencanapelayanan');
Route::get('/rencanapelayanan/delete/{id}','App\Http\Controllers\RencanaPelayananController@delete')->name('deleterencanapelayanan');
Route::post('/laporanperkembangan/save/{id?}','App\Http\Controllers\LaporanPerkembanganController@store')->name('savelaporanperkembangan');
Route::get('/edit-laporanperkembangan/{pemerlu?}/{bulan?}',
// function () {
//     return view('pekerjasosial.edit-laporanperkembangan');
// }
'App\Http\Controllers\LaporanPerkembanganController@show'
)->name('editlaporanperkembangan');
Route::get('/laporanperkembangan/delete/{id}','App\Http\Controllers\LaporanPerkembanganController@delete')->name('deletelaporanperkembangan');
// Route::get('/edit-laporanperkembangan2', function () {
//     return view('pekerjasosial.edit-laporanperkembangan2');
// });
// Route::get('/edit-laporanperkembangan3', function () {
//     return view('pekerjasosial.edit-laporanperkembangan3');
// });
// Route::get('/edit-laporanperkembangan4', function () {
//     return view('pekerjasosial.edit-laporanperkembangan4');
// });

// Route::get('/tableadministrasi', function () {
//     return view('pekerjasosial.tableadministrasi');
// });
// Route::get('/tablepemerlupelayanan', function () {
//     return view('pekerjasosial.tablepemerlupelayanan');
// });
// Route::get('/tableriwayat', function () {
//     return view('pekerjasosial.tableriwayat');
// });


/*admin */
Route::get('/dashboardadmin', function () {
    return view('admin.dashboardadmin');
})->name('dashboardadmin');
// Route::get('/tableadministrasi', function () {
//     return view('admin.tableadministrasi');
// });
// Route::get('/tablepemerlupelayanan', function () {
//     return view('admin.tablepemerlupelayanan');
// });
// Route::get('/tableriwayat', function () {
//     return view('admin.tableriwayat');
// });
// Route::get('/tableasi', function () {
//     return view('admin.tableasi');
// });
// Route::get('/tableassist', function () {
//     return view('admin.tableassist');
// });
// Route::get('/tablewhoqol', function () {
//     return view('admin.tablewhoqol');
// });
// Route::get('/tablerencanapelayanan', function () {
//     return view('admin.tablerencanapelayanan');
// });
// Route::get('/tablelaporanperkembangan', function () {
//     return view('admin.tablelaporanperkembangan');
// });
// Route::get('/tablehasilpengkajianawal', function () {
//     return view('admin.tablehasilpengkajianawal');
// });
// Route::get('/tablecatatanperkembangan', function () {
//     return view('admin.tablecatatanperkembangan');
// });

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


Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/dashboardpsikolog', function () {
    return view('psikolog.dashboardpsikolog');
})->name('dashboardpsikolog');
Route::get('/asesmenpsikolog', function () {
    return view('psikolog.asesmenpsikolog');
});
Route::get('/tablehasilasesmen', 
// function () {
//     return view('psikolog.tablehasilasesmen');
// }
'App\Http\Controllers\AsesmenPsikologController@index'
);
Route::get('/editasesmenpsikolog/{id}', 
// function () {
//     return view('psikolog.editasesmenpsikolog');
// }
'App\Http\Controllers\AsesmenPsikologController@show'
)->name('editasesmenpsikologi');
Route::post('/asesmenpsikolog/save/{id?}','App\Http\Controllers\AsesmenPsikologController@store')->name('saveasesmenpsikolog');
Route::get('/asesmenpsikolog/delete/{id}','App\Http\Controllers\AsesmenPsikologController@delete')->name('deleteasesmenpsikolog');