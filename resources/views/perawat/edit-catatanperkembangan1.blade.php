@extends('perawat.layout')

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
								<li class="breadcrumb-item"><a href="index-perawat.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Catatan Perkembangan</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>

			<div id="printArea" class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h4">Catatan Perkembangan</h4>
					</div>
				</div>





				<div class="pd-20 card-box mb-30">
					<div class="clearfix">


					</div>
					<form action="{{route('savecatatanperkembangan', $catatan->id)}}" method="post">
						@csrf
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Kode Pemerlu</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{$catatan->pemerlulayanan_id}}" name="pemerlulayanan_id" type="text" placeholder="Johnny Brown">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Bulan Ke</label>
							<div class="col-sm-12 col-md-10">
								<select name="bulan" class="custom-select col-12">
									<option selected="">Pilih</option>
									<option @if($catatan->bulan == "1")selected @endif value="1">1</option>
									<option @if($catatan->bulan == "2")selected @endif value="2">2</option>
									<option @if($catatan->bulan == "3")selected @endif value="3">3</option>
									<option @if($catatan->bulan == "4")selected @endif value="4">4</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tanggal Pemeriksaan</label>
							<div class="col-sm-12 col-md-10">
								<input name="tanggalpemeriksaan" value="{{$catatan->tanggalpemeriksaan}}" class="form-control date-picker" placeholder="Select Date" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Berat Badan</label>
							<div class="col-sm-12 col-md-10">
								<input value="{{$catatan->beratbadan}}" name="beratbadan" class="form-control" type="text" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tanda-tanda vital</label>
							<div class="col-sm-12 col-md-10">
								<select name="tandavital" class="custom-select col-12">

									<option @if($catatan->tandavital == "stabil")selected @endif value="stabil">Stabil</option>
									<option @if($catatan->tandavital == "tidakstabil")selected @endif value="tidakstabil">Tidak Stabil</option>

								</select>
							</div>
						</div>



						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Masalah Kesehatan dan Diagnosa Medis</label>
							<div class="col-sm-12 col-md-10">
								<input name="masalahkesehatan" value="{{$catatan->masalahkesehatan}}" class="form-control" type="text" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Rekomendasi</label>
							<div class="col-sm-12 col-md-10">
								<input name="rekomendasi" value="{{$catatan->rekomendasi}}" class="form-control" type="text" placeholder="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Rujukan</label>
							<div class="col-sm-12 col-md-10">
								<input name="rujukan" value="{{$catatan->rujukan}}" class="form-control" type="text" placeholder="">
							</div>
						</div>
						<div id="submitButton" class="btn-list">
							<input class="btn btn-primary" type="submit" value="Simpan">
						</div>
						<div id="printButton" class="btn-list">
							<input class="btn btn-primary" onclick="printDiv('printArea')" type="button" value="Cetak">
						</div>
				</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection