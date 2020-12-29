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
								<li class="breadcrumb-item active" aria-current="page">Form Hasil Pengkajian Awal</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>



			<div class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h4">Hasil Pengkajian Awal</h4>
					</div>
				</div>

				<form action="{{route('savepengkajianawal',$pengkajian->id)}}" method="post">
					@csrf






					<div id="printArea" class="pd-20 card-box mb-30">
						<div class="clearfix">

							<div class="pull-right">
								<!--<a href="#basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a> -->
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Kode Pemerlu</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="{{$pengkajian->pemerlulayanan_id}}" name="pemerlulayanan_id" type="text" placeholder="Johnny Brown">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tanggal Kedatangan</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control date-picker" value="{{$pengkajian->tanggalmasuk}}" name="tanggalmasuk" placeholder="Select Date" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tanggal Tes Urine</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control date-picker" value="{{$pengkajian->tanggaltes}}" name="tanggaltes" placeholder="Select Date" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Hasil Tes Urine</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" value="{{$pengkajian->hasiltes}}" name="hasiltes" placeholder="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Riwayat Penggunaan NAPZA</label>
							<div class="col-sm-12 col-md-10">
								<select name="riwayatnapza" class="custom-select col-12">

									<option @if($pengkajian->riwayatnapza == "rekreasional")selected @endif value="rekreasional">Rekreasional</option>
									<option @if($pengkajian->riwayatnapza == "situasional")selected @endif value="situasional">Situasional</option>
									<option @if($pengkajian->riwayatnapza == "intensif/reguler")selected @endif value="intensif/reguler">Intensif/Reguler</option>
									<option @if($pengkajian->riwayatnapza == "kompulsif")selected @endif value="kompulsif">Komplusif</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Gejala putus zat yang muncul</label>
							<div class="col-sm-12 col-md-10">
								<input name="gejalaputuszat" value="{{$pengkajian->gejalaputuszat}}" class="form-control" type="text" placeholder="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Pemeriksaan Fisik</label>

						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tinggi Badan</label>
							<div class="col-sm-12 col-md-10">
								<input name="tinggibadan" value="{{$pengkajian->tinggibadan}}" class="form-control" type="text" placeholder="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Luka/Cacat Tubuh</label>
							<div class="col-sm-12 col-md-10">
								<input name="luka" class="form-control" value="{{$pengkajian->luka}}" type="text" placeholder="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tatto tubuh</label>
							<div class="col-sm-12 col-md-10">
								<select name="tattotubuh" class="custom-select col-12">
									<option @if($pengkajian->tattotubuh == "ya")selected @endif value="ya">Ya</option>
									<option @if($pengkajian->tattotubuh == "tidak")selected @endif value="tidak">Tidak</option>

								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Riwayat Penyakit</label>
							<div class="col-sm-12 col-md-10">
								<input value="{{$pengkajian->riwayatpenyakit}}" name="riwayatpenyakit" class="form-control" type="text" placeholder="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Pemeriksaan Laboratorium</label>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tanggal Pemeriksaan</label>
							<div class="col-sm-12 col-md-10">
								<input name="tanggalteslab" value="{{$pengkajian->tanggalteslab}}" class="form-control date-picker" placeholder="Select Date" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">HIV</label>
							<div class="col-sm-12 col-md-10">
								<input name="hiv" value="{{$pengkajian->hiv}}" class="form-control" type="text" placeholder="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Darah Rutin</label>
							<div class="col-sm-12 col-md-10">
								<input name="darahrutin" value="{{$pengkajian->darahrutin}}" class="form-control" type="text" placeholder="">
							</div>

						</div>
						<div id="submitButton" class="btn-list">
							<input class="btn btn-primary" type="submit" value="Simpan">
						</div>
						<div id="printButton" class="btn-list">
							<input class="btn btn-primary" type="button" onclick="printDiv('printArea')" value="Cetak">
						</div>
					</div>
			</div>

			</form>





			@endsection