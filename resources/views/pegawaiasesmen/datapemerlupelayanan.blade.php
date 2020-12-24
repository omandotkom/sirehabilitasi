@extends('pegawaiasesmen.layout')

@section('body')
<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-100px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Form</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Data Pemerlu Pelayanan</li>
							</ol>
						</nav>


					</div>
				</div>
			</div>
			<div class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h4">Data Pemerlu Pelayanan Kesejahteraan Sosial</h4>
					</div>
				</div>

				<form action="{{route('savepemerlupelayanan')}}" method="POST">
					@csrf
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tanggal Masuk</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control date-picker" name="tanggalmasuk" placeholder="Select Date" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nama</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" type="text" name="nama" placeholder="Johnny Brown">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">NIK</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" placeholder="NIK" name="nik" type="NIK">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" placeholder="Nomor KK" name="nomorkk" type="NomorKK">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Status Pernikahan</label>
						<div class="col-sm-12 col-md-10">
							<select class="custom-select col-12" name="statuspernikahan">
								<option selected="">Pilih</option>
								<option value="menikah">Menikah</option>
								<option value="belummenikah">Belum Menikah</option>

							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tempat Lahir</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" placeholder="Tempat Lahir" name="tempatlahir" type="TempatLahir">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control date-picker" placeholder="Select Date" name="tanggallahir" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tempat Tinggal Tetap</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" placeholder="Tempat Tinggal" name="tempattinggaltetap" type="TempatTinggal">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nomor Telepon</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" placeholder="Nomor Telepon" name="nomortelepon" type="NomorTelepon">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Pendidikan Terakhir</label>
						<div class="col-sm-12 col-md-10">
							<select class="custom-select col-12" name="pendidikanterakhir">
								<option selected="">Pilih</option>
								<option value="1">SD</option>
								<option value="2">SMP</option>
								<option value="3">SMA</option>
								<option value="4">S1</option>

							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nama Ayah</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" name="namaayah" type="text" placeholder="Johnny Brown">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">NIK</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" name="nikayah" placeholder="NIK" type="NIK">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" name="nomorkkayah" placeholder="Nomor KK" type="NomorKK">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tempat Lahir</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" name="tempatlahirayah" placeholder="Tempat Lahir" type="TempatLahir">
						</div>

					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control date-picker" name="tanggallahirayah" placeholder="Select Date" type="text">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Pekerjaan</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" name="pekerjaanayah" placeholder="Pekerjaan" type="pekerjaan">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nama Ibu</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" name="namaibu" placeholder="" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">NIK</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" name="nikibu" placeholder="NIK" type="NIK">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" name="nomorkkibu" placeholder="Nomor KK" type="NomorKK">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tempat Lahir</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" name="tempatlahiribu" placeholder="Tempat Lahir" type="TempatLahir">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control date-picker" name="tanggallahiribu" placeholder="Select Date" type="text">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Pekerjaan</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" name="pekerjaanibu" placeholder="Pekerjaan" type="pekerjaan">
						</div>
					</div>



					<div class="btn-list">
						<input class="btn btn-primary" type="submit" value="Simpan">
					</div>

			</div>
		</div>
	</div>

	</form>








	@endsection