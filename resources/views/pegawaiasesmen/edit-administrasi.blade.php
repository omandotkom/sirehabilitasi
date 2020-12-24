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
					
						
							
							
						
						<form method="post" enctype="multipart/form-data" action="{{route('saveadministrasi',$administrasi->id)}}">
						@csrf
						@php
							$administrasi->ktp = base64_encode($administrasi->ktp);
							$administrasi->kk = base64_encode($administrasi->kk);
							$administrasi->ktportu = base64_encode($administrasi->ktportu);
							$administrasi->suratpemohonanortu = base64_encode($administrasi->suratpemohonanortu);
							$administrasi->suratpernyataanortu = base64_encode($administrasi->suratpernyataanortu);
							$administrasi->suratpemerlupelayanan = base64_encode($administrasi->suratpemerlupelayanan);
							$administrasi->suratperjanjian = base64_encode($administrasi->suratperjanjian);
						@endphp
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nama</label>
							<div class="col-sm-12 col-md-10">
							<input class="form-control" type="text" placeholder="" name="nama">
							</div>
						</div>
						<div class="form-group">
							<label>Kartu Keluarga</label>
							<input type="file" class="form-control-file form-control height-auto" name="kk">
							<a target="_blank" class="badge badge-primary mt-2" href="{{route('downloadadministrasi',$administrasi->kk)}}">Unduh</a>
						</div>
						<div class="form-group">
							<label>KTP</label>
							<input type="file" class="form-control-file form-control height-auto" name="ktp">
							<a target="_blank" class="badge badge-primary mt-2" href="{{route('downloadadministrasi',$administrasi->ktp)}}">Unduh</a>
						</div>
						<div class="form-group">
							<label>KTP Orang Tua/Istri(bila sudah menikah)</label>
							<input type="file" class="form-control-file form-control height-auto" name="ktportu">
							<a target="_blank" class="badge badge-primary mt-2" href="{{route('downloadadministrasi',$administrasi->ktportu)}}">Unduh</a>
						</div>
						<div class="form-group">
							<label>Surat Permohonan Orang Tua</label>
							<input type="file" class="form-control-file form-control height-auto" name="suratpemohonanortu">
							<a target="_blank" class="badge badge-primary mt-2" href="{{route('downloadadministrasi',$administrasi->suratpemohonanortu)}}">Unduh</a>
						</div>
						<div class="form-group">
							<label>Surat Pernyataan Orang Tua/Wali</label>
							<input type="file" class="form-control-file form-control height-auto" name="suratpernyataanortu">
							<a target="_blank" class="badge badge-primary mt-2" href="{{route('downloadadministrasi',$administrasi->suratpernyataanortu)}}">Unduh</a>
						</div>
						<div class="form-group">
							<label>Surat Pernyataan Pemerlu Pelayanan Kesejahteraan Sosial</label>
							<input type="file" class="form-control-file form-control height-auto" name="suratpemerlupelayanan">
							<a target="_blank" class="badge badge-primary mt-2" href="{{route('downloadadministrasi',$administrasi->suratpemerlupelayanan)}}">Unduh</a>
						</div>
						<div class="form-group">
							<label>Surat Perjanjian</label>
							<input type="file" class="form-control-file form-control height-auto" name="suratperjanjian">
							<a target="_blank" class="badge badge-primary mt-2" href="{{route('downloadadministrasi',$administrasi->suratperjanjian)}}">Unduh</a>
						</div>
						<div class="btn-list">
							<input class="btn btn-primary" type="submit" value="Simpan">
						</div>
						<div class="btn-list">
							<input class="btn btn-primary" type="submit" value="Cetak">
						</div>
						

						
					</div>
				</div>
					
					
			</form>	

@endsection