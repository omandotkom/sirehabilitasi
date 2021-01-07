@if(Auth::user()->role == "admin")
<li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle">
        <span class="micon dw dw-library"></span><span class="mtext">Tables Asesmen</span>
    </a>
    <ul class="submenu">
        <li><a href="/tablepemerlupelayanan">Data Pemerlu Pelayanan</a></li>
        <li><a href="/tableriwayat">Data Riwayat Pemerlu Pelayanan</a></li>
        <li><a href="/tableadministrasi">Data Administrasi</a></li>

    </ul>
</li>
<li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle">
        <span class="micon dw dw-library"></span><span class="mtext">Tables Perawat</span>
    </a>
    <ul class="submenu">
        <li><a href="/tablehasilpengkajianawal">Data Hasil Pengkajian Awal</a></li>
        <li><a href="/tablecatatanperkembangan">Data Catatan Perkembangan</a></li>

    </ul>
</li>


<li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle">
        <span class="micon dw dw-library"></span><span class="mtext">Tables Peksos</span>
    </a>
    <ul class="submenu">
        <li><a href="/tableasi">Data ASI</a></li>
        <li><a href="/tableassist">Data ASSIST</a></li>
        <li><a href="/tablewhoqol">Data WHOQOL</a></li>
        <li><a href="/tablerencanapelayanan">Data Rencana Pelayanan</a></li>
        <li><a href="/tablelaporanperkembangan">Data Laporan Perkembangan</a></li>
    </ul>
</li>
<li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle">
        <span class="micon dw dw-library"></span><span class="mtext">Table Psikolog</span>
    </a>
    <ul class="submenu">
        <li><a href="{{ url('/tablehasilasesmen') }}">Hasil Asesmen</a></li>
    </ul>
</li>
<li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle">
        <span class="micon dw dw-library"></span><span class="mtext">Akun Pegawai</span>
    </a>
    <ul class="submenu">
        <li><a href="/daftarakunpegawai">Daftar Akun Pegawai</a></li>
        <li><a href="/buatakunpegawai">Buat Akun Pegawai</a></li>
        
    </ul>
</li>
@elseif(Auth::user()->role == "asesmen")
<li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle">
        <span class="micon dw dw-edit2"></span><span class="mtext">Forms</span>
    </a>
    <ul class="submenu">
        <li><a href="{{ url('/datapemerlupelayanan') }}">Data Pemerlu Pelayanan</a></li>
        <li><a href="{{ url('/riwayatpemerlupelayanan') }}">Riwayat Pemerlu Pelayanan</a></li>
        <li><a href="{{ url('/administrasi') }}">Administrasi</a></li>

    </ul>
</li>
<li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle">
        <span class="micon dw dw-library"></span><span class="mtext">Tables</span>
    </a>
    <ul class="submenu">
        <li><a href="{{ url('/tablepemerlupelayanan') }}">Data Pemerlu Pelayanan</a></li>
        <li><a href="{{ url('/tableriwayat') }}">Riwayat Pemerlu Pelayanan</a></li>
        <li><a href="{{ url('/tableadministrasi') }}">Administrasi</a></li>
      
    </ul>
</li>
@elseif(Auth::user()->role == "perawat")
<li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle">
        <span class="micon dw dw-edit2"></span><span class="mtext">Forms</span>
    </a>
    <ul class="submenu">
        <li><a href="{{ url('/hasilpengkajianawal') }}">Form Hasil Pengkajian Awal</a></li>
        <li><a href="{{ url('/catatanperkembangan') }}">Form Catatan Perkembangan</a></li>

    </ul>
</li>
<li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle">
        <span class="micon dw dw-library"></span><span class="mtext">Tables</span>
    </a>
    <ul class="submenu">
        <li><a href="{{ url('/tablehasilpengkajianawal') }}">Data Hasil Pengkajian Awal</a></li>
        <li><a href="{{ url('/tablecatatanperkembangan') }}">Data Catatan Perkembangan</a></li>
        <li><a href="/tablepemerlupelayanan">Data Pemerlu Pelayanan</a></li>
    </ul>
</li>
@elseif(Auth::user()->role == "psikolog")
<li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle">
        <span class="micon dw dw-edit2"></span><span class="mtext">Forms</span>
    </a>
    <ul class="submenu">
        <li><a href="{{ url('/asesmenpsikolog') }}">Asesmen</a></li>


    </ul>
</li>
<li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle">
        <span class="micon dw dw-library"></span><span class="mtext">Tables</span>
    </a>
    <ul class="submenu">
        <li><a href="{{ url('/tablehasilasesmen') }}">Hasil Asesmen</a></li>
        <li><a href="/tablepemerlupelayanan">Data Pemerlu Pelayanan</a></li>

    </ul>
</li>
@elseif(Auth::user()->role == "sosial")
<li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle">
        <span class="micon dw dw-edit2"></span><span class="mtext">Forms</span>
    </a>
    <ul class="submenu">
        <li><a href="/asi">Form ASI</a></li>
        <li><a href="/assist">Form ASSIST</a></li>
        <li><a href="/whoqol">WHOQOL</a></li>
        <li><a href="/rencanapelayanan">Rencana Pelayanan</a></li>
        <li><a href="/laporanperkembangan">Laporan Perkembangan</a></li>
    </ul>
</li>
<li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle">
        <span class="micon dw dw-library"></span><span class="mtext">Tables Peksos</span>
    </a>
    <ul class="submenu">
        <li><a href="/tableasi">Data ASI</a></li>
        <li><a href="/tableassist">Data ASSIST</a></li>
        <li><a href="/tablewhoqol">Data WHOQOL</a></li>
        <li><a href="/tablerencanapelayanan">Data Rencana Pelayanan</a></li>
        <li><a href="/tablelaporanperkembangan">Data Laporan Perkembangan</a></li>
    </ul>
</li>
<li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle">
        <span class="micon dw dw-library"></span><span class="mtext">Tables Asesmen</span>
    </a>
    <ul class="submenu">
        <li><a href="/tablepemerlupelayanan">Data Pemerlu Pelayanan</a></li>
        <li><a href="/tableriwayat">Data Riwayat Pemerlu Pelayanan</a></li>
        <li><a href="/tableadministrasi">Data Administrasi</a></li>

    </ul>
</li>
@endif