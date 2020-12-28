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
			<div id="printable" class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h4">Data Pemerlu Pelayanan Kesejahteraan Sosial</h4>
					</div>
				</div>

				<form action="{{route('savepemerlupelayanan',$pemerlu->id)}}" method="POST">
					@csrf
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tanggal Masuk</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control date-picker" name="tanggalmasuk" value="{{$pemerlu->tanggalmasuk}}" placeholder="Select Date" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nama</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" name="nama" value="{{$pemerlu->nama}}" type="text" placeholder="Johnny Brown">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">NIK</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" name="nik" placeholder="NIK" value="{{$pemerlu->nik}}" type="NIK">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" name="nomorkk" placeholder="Nomor KK" value="{{$pemerlu->nomorkk}}" type="NomorKK">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Status Pernikahan</label>
						<div class="col-sm-12 col-md-10">
							<select name="statuspernikahan" class="custom-select col-12">

								<option @if($pemerlu->statuspernikahan == "menikah") selected @endif value="menikah">Menikah</option>

								<option @if($pemerlu->statuspernikahan == "belummenikah") selected @endif value="belummenikah">Belum Menikah</option>

							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tempat Lahir</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" name="tempatlahir" value="{{$pemerlu->tempatlahir}}" placeholder="Tempat Lahir" type="TempatLahir">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control date-picker" name="tanggallahir" value="{{$pemerlu->tanggallahir}}" placeholder="Select Date" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tempat Tinggal Tetap</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" name="tempattinggaltetap" placeholder="Tempat Tinggal" value="{{$pemerlu->tempattinggaltetap}}" type="TempatTinggal">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nomor Telepon</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" name="nomortelepon" placeholder="Nomor Telepon" value="{{$pemerlu->nomortelepon}}" type="NomorTelepon">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Pendidikan Terakhir</label>
						<div class="col-sm-12 col-md-10">
							<select name="pendidikanterakhir" class="custom-select col-12">
								<option @if($pemerlu->pendidikanterakhir == "sd") selected @endif value="sd">SD</option>
								<option @if($pemerlu->pendidikanterakhir == "smp") selected @endif value="smp">SMP</option>
								<option @if($pemerlu->pendidikanterakhir == "sma") selected @endif value="sma">SMA</option>
								<option @if($pemerlu->pendidikanterakhir == "s1") selected @endif value="s1">S1</option>

							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nama Ayah</label>
						<div class="col-sm-12 col-md-10">
							<input name="namaayah" class="form-control" type="text" value="{{$pemerlu->namaayah}}" placeholder="Johnny Brown">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">NIK</label>
						<div class="col-sm-12 col-md-10">
							<input name="nikayah" class="form-control" placeholder="NIK" value="{{$pemerlu->nikayah}}" type="NIK">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
						<div class="col-sm-12 col-md-10">
							<input name="nomorkkayah" class="form-control" placeholder="Nomor KK" value="{{$pemerlu->nomorkkayah}}" type="NomorKK">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tempat Lahir</label>
						<div class="col-sm-12 col-md-10">
							<input name="tempatlahirayah" class="form-control" placeholder="Tempat Lahir" value="{{$pemerlu->tempatlahirayah}}" type="TempatLahir">
						</div>

					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
						<div class="col-sm-12 col-md-10">
							<input name="tanggallahirayah" class="form-control date-picker" placeholder="Select Date" value="{{$pemerlu->tanggallahirayah}}" type="text">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Pekerjaan</label>
						<div class="col-sm-12 col-md-10">
							<input name="pekerjaanayah" class="form-control" placeholder="Pekerjaan" value="{{$pemerlu->pekerjaanayah}}" type="pekerjaan">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nama Ibu</label>
						<div class="col-sm-12 col-md-10">
							<input name="namaibu" class="form-control" placeholder="" value="{{$pemerlu->namaibu}}" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">NIK</label>
						<div class="col-sm-12 col-md-10">
							<input name="nikibu" class="form-control" placeholder="NIK" value="{{$pemerlu->nikibu}}" type="NIK">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
						<div class="col-sm-12 col-md-10">
							<input name="nomorkkibu" class="form-control" placeholder="Nomor KK" value="{{$pemerlu->nomorkkibu}}" type="NomorKK">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tempat Lahir</label>
						<div class="col-sm-12 col-md-10">
							<input name="tempatlahiribu" class="form-control" placeholder="Tempat Lahir" value="{{$pemerlu->tempatlahiribu}}" type="TempatLahir">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
						<div class="col-sm-12 col-md-10">
							<input name="tanggallahiribu" class="form-control date-picker" placeholder="Select Date" value="{{$pemerlu->tanggallahiribu}}" type="text">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Pekerjaan</label>
						<div class="col-sm-12 col-md-10">
							<input name="pekerjaanibu" class="form-control" placeholder="Pekerjaan" value="{{$pemerlu->pekerjaanibu}}" type="pekerjaan">
						</div>
					</div>



					<div id="submitButton" class="btn-list">
						<input class="btn btn-primary" type="submit" value="Simpan">
					</div>
					<div id="printButton" class="btn-list">
						<input class="btn btn-primary" onclick="printDiv('printable');" type="submit" value="Cetak">
					</div>
					<script>
						function printDiv(divName) {
							removeElement('submitButton');
							removeElement('printButton');
							var printContents = document.getElementById(divName).innerHTML;
							var originalContents = document.body.innerHTML;

							document.body.innerHTML = printContents;

							window.print();

							document.body.innerHTML = originalContents;
						}

						function removeElement(elementId) {
							// Removes an element from the document
							var element = document.getElementById(elementId);
							element.parentNode.removeChild(element);
						}
					</script>
			</div>
		</div>
	</div>

	</form>








	@endsection