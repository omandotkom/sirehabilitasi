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
									<li class="breadcrumb-item active" aria-current="page">Administrasi</li>
								</ol>
							</nav>
							
						
						</div>
					</div>
				</div>
               
               
                <div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Administrasi</h4>
						</div>
                    </div>
					
						
							
							
						
						<form action="{{route('saveadministrasi')}}" method="post" enctype="multipart/form-data">
						
						@csrf
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Kode Pemerlu Layanan</label>
							<div class="col-sm-12 col-md-10">
							<input class="form-control" type="text" placeholder="" name="pemerlulayanan_id">
							</div>
						</div>
						<div class="form-group">
							<label>Kartu Keluarga</label>
							<input type="file" class="form-control-file form-control height-auto" name="kk">
						</div>
						<div class="form-group">
							<label>KTP</label>
							<input type="file" class="form-control-file form-control height-auto" name="ktp">
						</div>
						<div class="form-group">
							<label>KTP Orang Tua/Istri(bila sudah menikah)</label>
							<input type="file" class="form-control-file form-control height-auto" name="ktportu">
						</div>
						<div class="form-group">
							<label>Surat Permohonan Orang Tua</label>
							<input type="file" class="form-control-file form-control height-auto" name="suratpemohonanortu">
						</div>
						<div class="form-group">
							<label>Surat Pernyataan Orang Tua/Wali</label>
							<input type="file" class="form-control-file form-control height-auto" name="suratpernyataanortu">
						</div>
						<div class="form-group">
							<label>Surat Pernyataan Pemerlu Pelayanan Kesejahteraan Sosial</label>
							<input type="file" class="form-control-file form-control height-auto" name="suratpemerlupelayanan">
						</div>
						<div class="form-group">
							<label>Surat Perjanjian</label>
							<input type="file" class="form-control-file form-control height-auto" name="suratperjanjian">
						</div>
						<div class="btn-list">
							<input class="btn btn-primary" type="submit" value="Simpan">
						</div>	
					</div>
				</div>
					
					
			</form>	

@endsection