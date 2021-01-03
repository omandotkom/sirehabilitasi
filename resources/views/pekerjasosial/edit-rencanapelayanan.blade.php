@extends('pekerjasosial.layout')

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
								<li class="breadcrumb-item"><a href="index-pekerjasosial.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Rencana Pelayanan</li>
							</ol>
						</nav>
					</div>

				</div>
			</div>


			<div id="printArea">
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Rencana Pelayanan</h4>
						</div>
					</div>
					<form action="{{route('saverencanapelayanan',$rencana->id)}}" method="post" enctype="multipart/form-data">
						@csrf
						<h9>A. Identitas Residen</h9>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Kode Pemerlu</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{$rencana->pemerlulayanan_id}}" name="pemerlulayanan_id" type="text" placeholder="1">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tanggal masuk panti</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control date-picker" value="{{$rencana->tanggalmasuk}}" name="tanggalmasuk" placeholder="Select Date" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tanggal masuk program</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control date-picker" value="{{$rencana->tanggalprogram}}" name="tanggalprogram" placeholder="Select Date" type="text">
							</div>
						</div>
						<h9>B. Latar Belakang Masalah</h9>

						<div class="form-group removable">
							<label>Genomap Residen</label>
							<input type="file" name="genomap" class="form-control-file form-control height-auto">
							@php
							$rencana->genomap = base64_encode($rencana->genomap);
							$rencana->fokus = base64_encode($rencana->fokus);
							@endphp
							<a target="_blank" class="badge badge-primary mt-2" href="{{route('downloadadministrasi',$rencana->genomap)}}">Unduh</a>
						</div>
						<div class="form-group">
							<label>1. Riwayat Keluarga</label>
							<textarea name="riwayatkeluarga" class="form-control">{{$rencana->riwayatkeluarga}}</textarea>
						</div>
						<div class="form-group">
							<label>2. Riwayat Sekolah dan Bekerja </label>
							<textarea name="riwayatsekolah" class="form-control">{{$rencana->riwayatsekolah}}</textarea>
						</div>
						<!--nanti ambil dari db peg asesmen yg riwayat/terlampir-->
						<div class="form-group">
							<label>3. Riwayat Penggunaan NAPZA</label>
							<textarea name="riwayatnapza" class="form-control">{{$rencana->riwayatnapza}}</textarea>
						</div>


						<h9>C. Kondisi Saat Ini</h9>
						<div class="form-group">
							<label>1. Aspek Fisik dan Kesehatan</label>
							<textarea name="aspekkesehatan" class="form-control">{{$rencana->aspekkesehatan}}</textarea>
						</div>
						<div class="form-group">
							<label>2. Aspek Sosial</label>
							<textarea name="aspeksosial" class="form-control">{{$rencana->aspeksosial}}</textarea>
						</div>
						<div class="form-group">
							<label>3. Aspek Psikologis</label>
							<textarea name="aspekpsikologis" class="form-control">{{$rencana->aspekpsikologis}}</textarea>
						</div>
						<div class="form-group">
							<label>4. Aspek Mental Spiritual</label>
							<textarea name="aspekmentalspiritual" class="form-control">{{$rencana->aspekmentalspiritual}}</textarea>
						</div>

						<h9>D. Potensi dan Sumber-Sumber Yang Tersedia</h9>
						<div class="form-group">
							<label>1. Internal</label>
							<textarea name="potensiinternal" class="form-control">{{$rencana->potensiinternal}}</textarea>
						</div>
						<div class="form-group">
							<label>2. Eksternal</label>
							<textarea name="potensieksternal" class="form-control">{{$rencana->potensieksternal}}</textarea>
						</div>

						<h9>E. Analisa Masalah</h9>
						<div class="form-group">
							<label>1. Faktor Genetik</label>
							<textarea name="faktorgenetik" class="form-control">{{$rencana->faktorgenetik}}</textarea>
						</div>
						<div class="form-group">
							<label>2. Faktor Personal</label>
							<textarea name="faktorpersonal" class="form-control">{{$rencana->faktorpersonal}}</textarea>
						</div>
						<div class="form-group">
							<label>3. Faktor Lingkungan</label>
							<textarea name="faktorlingkungan" class="form-control">{{$rencana->faktorlingkungan}}</textarea>
						</div>
						<div class="form-group">
							<label>4. Permasalahan Keluarga</label>
							<textarea name="permasalahankeluarga" class="form-control">{{$rencana->permasalahankeluarga}}</textarea>
						</div>


						<div class="form-group">
							<label>
								<h9>F. Rumusan Masalah</h9>
							</label>
							<textarea name="rumusanmasalah" class="form-control">{{$rencana->rumusanmasalah}}</textarea>
						</div>


						<h9>G. Rencana Intervensi</h9>
						<div class="form-group">
							<label>1. Waktu Layanan</label>
							<textarea name="waktulayanan" class="form-control">{{$rencana->waktulayanan}}</textarea>
						</div>
						<div class="form-group removable">
							<label>
								<h9>2. Fokus Penanganan</h9>
							</label>
							<input type="file" name="fokus" class="form-control-file form-control height-auto" name="suratperjanjian">
							<a target="_blank" class="badge badge-primary mt-2" href="{{route('downloadadministrasi',$rencana->fokus)}}">Unduh</a>
						</div>
						<div id="submitButton" class="btn-list">
							<input class="btn btn-primary" type="submit" value="Simpan">
						</div>
						<div id="printButton" class="btn-list">
							<input onclick="printDiv('printArea')" class="btn btn-primary" type="button" value="Cetak">
						</div>

				</div>
			</div>
		</div>
	</div>

	</form>











	@endsection