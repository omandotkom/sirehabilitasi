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
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Form Laporan Perkembangan</li>
							</ol>
						</nav>
					</div>

				</div>
			</div>



			<div class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h4">Laporan Perkembangan</h4>
					</div>
				</div>
				<form action="{{route('savelaporanperkembangan')}}" method="post">
					@csrf
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Bulan Ke</label>
						<div class="col-sm-12 col-md-10">
							<select name="bulanlaporan" class="custom-select col-12">
								<option selected="">Pilih</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</div>
					</div>

					<h9>A. IDENTITAS RESIDEN</h9>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Kode Pemerlu</label>
						<div class="col-sm-12 col-md-10">
							<input name="pemerlulayanan_id" class="form-control" type="text" placeholder="1">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nama</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control" name="nama" type="text" >
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tanggal masuk panti</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control date-picker" name="tanggalmasuk" placeholder="Select Date" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Tanggal masuk program</label>
						<div class="col-sm-12 col-md-10">
							<input class="form-control date-picker" name="tanggalprogram" placeholder="Select Date" type="text">
						</div>
					</div>
					<h9>B. PERKEMBANGAN RESIDEN</h9>

					<div class="form-group">
						<label>
							<h9>1. Aspek Fisik dan Kesehatan</h9>
						</label>

					</div>


					<div class="form-group">
						<label>a. Masalah</label>
						<textarea name="f_masalah" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>b. Intervensi</label>
						<textarea name="f_intervensi" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label>c. Hasil yang sudah dicapai</label>
						<textarea name="f_intervensidicapai" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>d. Hasil yang belum dicapai</label>
						<textarea name="f_intervensibelumdicapai" class="form-control"></textarea>
					</div>


					<div class="form-group">
						<label>
							<h9>2. Aspek Psikologis</h9>
						</label>

					</div>

					<div class="form-group">
						<label>a. Masalah</label>
						<textarea name="p_masalah" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>b. Intervensi</label>
						<textarea name="p_intervensi" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label>c. Hasil yang sudah dicapai</label>
						<textarea name="p_intervensidicapai" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>d. Hasil yang belum dicapai</label>
						<textarea name="p_intervensibelumdicapai" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label>
							<h9>3. Aspek Sosial</h9>
						</label>

					</div>

					<div class="form-group">
						<label>a. Masalah</label>
						<textarea name="sos_masalah" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>b. Intervensi</label>
						<textarea name="sos_intervensi" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label>c. Hasil yang sudah dicapai</label>
						<textarea name="sos_intervensidicapai" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>d. Hasil yang belum dicapai</label>
						<textarea name="sos_intervensibelumdicapai" class="form-control"></textarea>
					</div>



					<div class="form-group">
						<label>
							<h9>4. Aspek Spiritual</h9>
						</label>

					</div>
					<div class="form-group">
						<label>a. Masalah</label>
						<textarea name="s_masalah" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>b. Intervensi</label>
						<textarea name="s_intervensi" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label>c. Hasil yang sudah dicapai</label>
						<textarea name="s_intervensidicapai" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>d. Hasil yang belum dicapai</label>
						<textarea name="s_intervensibelumdicapai" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label>
							<h9>C. KENDALA YANG DIHADAPI RESIDEN</h9>
						</label>
						<textarea name="kendala" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label>
							<h9>D. RENCANA TINDAK LANJUT</h9>
						</label>
						<textarea name="rencana" class="form-control"></textarea>
					</div>



					<div class="btn-list">
						<input class="btn btn-primary" type="submit" value="Simpan">
					</div>
				</form>


				@endsection