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
								<li class="breadcrumb-item"><a href="index-pegawai-asesmen.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Riwayat Pemerlu Pelayanan</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>

			<div class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h4">Riwayat Pemerlu Pelayanan</h4>
					</div>
				</div>
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">


					</div>
					<form action="{{route('saveriwayatpemerlulayanan',$riwayat->id)}}" method="post">
						@csrf
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nama</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="" value="{{$riwayat->pemerlu->nama}}" name="nama" type="text">
							</div>
						</div>
						<input type="hidden" value="{{$riwayat->pemerlulayanan_id}}" name="pemerlulayanan_id"/>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">SD</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{$riwayat->sd}}" placeholder="SD" name="sd" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">SMP</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{$riwayat->smp}}" placeholder="SMP" name="smp" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">SMA</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{$riwayat->sma}}" placeholder="SMA" name="sma" type="sma">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Kuliah</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="Kuliah" value="{{$riwayat->kuliah}}" name="kuliah" type="kuliah">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Pendidikan Non Formal</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{$riwayat->pendidikannonformal}}" placeholder="Kursus/Organisasi/Prestasi" name="pendidikannonformal" type="text">
							</div>
						</div>

						<div class="btn-list">
							<input class="btn btn-primary" type="submit" value="Simpan">
						</div>
						<div class="btn-list">
							<input class="btn btn-primary" type="submit" value="Cetak">
						</div>


				</div>
			</div>
		</div>






		</form>




		@endsection