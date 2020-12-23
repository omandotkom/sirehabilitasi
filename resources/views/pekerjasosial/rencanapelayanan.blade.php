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
				
							

					<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Rencana Pelayanan</h4>
						</div>
					</div>
					<form>
						<h9>A. Identitas Residen</h9>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nama</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Johnny Brown">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tanggal masuk panti</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control date-picker" placeholder="Select Date" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Tanggal masuk program</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control date-picker" placeholder="Select Date" type="text">
							</div>
						</div>
						<h9>B. Latar Belakang Masalah</h9>

						<div class="form-group">
							<label>Genomap Residen</label>
							<input type="file" class="form-control-file form-control height-auto">
						</div>
						<div class="form-group">
							<label>1. Riwayat Keluarga</label>
							<textarea class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>2. Riwayat Sekolah dan Bekerja </label>
							<textarea class="form-control"></textarea>
						</div>
						<!--nanti ambil dari db peg asesmen yg riwayat/terlampir-->
						<div class="form-group">
							<label>3. Riwayat Penggunaan NAPZA</label>
							<textarea class="form-control"></textarea>
						</div>


						<h9>C. Kondisi Saat Ini</h9>
						<div class="form-group">
							<label>1. Aspek Fisik dan Kesehatan</label>
							<textarea class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>2. Aspek Sosial</label>
							<textarea class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>3. Aspek Psikologis</label>
							<textarea class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>4. Aspek Mental Spiritual</label>
							<textarea class="form-control"></textarea>
						</div>

						<h9>D. Potensi dan Sumber-Sumber Yang Tersedia</h9>
						<div class="form-group">
							<label>1. Internal</label>
							<textarea class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>2. Eksternal</label>
							<textarea class="form-control"></textarea>
						</div>
						
						<h9>E. Analisa Masalah</h9>
						<div class="form-group">
							<label>1. Faktor Genetik</label>
							<textarea class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>2. Faktor Personal</label>
							<textarea class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>3. Faktor Lingkungan</label>
							<textarea class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>4. Permasalahan Keluarga</label>
							<textarea class="form-control"></textarea>
						</div>

						
						<div class="form-group">
						    <label><h9>F. Rumusan Masalah</h9></label>
							<textarea class="form-control"></textarea>
						</div>


						<h9>G. Rencana Intervensi</h9>
						<div class="form-group">
							<label>1. Waktu Layanan</label>
							<textarea class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label><h9>2. Fokus Penanganan</h9></label>
							
							<input type="file" class="form-control-file form-control height-auto" name="suratperjanjian">
						</div>
						<div class="btn-list">												
							<input class="btn btn-primary" type="submit" value="Simpan">								
						</div>
	

						</div>
						</div>
			</div>
						
						</form>

			

			
						
						
						




@endsection
