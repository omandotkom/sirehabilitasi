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

                        <form>
                        
                      
							
							
												
										
								
									<div class="pd-20 card-box mb-30">
										<div class="clearfix">
											
											<div class="pull-right">
												<!--<a href="#basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a> -->
											</div>
										</div>
										<form>
										<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Nama</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" type="text" placeholder="Johnny Brown">
												</div>
											</div>
										
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Tanggal Kedatangan</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control date-picker" placeholder="Select Date" type="text">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Tanggal Tes Urine</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control date-picker" placeholder="Select Date" type="text">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Hasil Tes Urine</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" type="text" placeholder="">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Riwayat Penggunaan NAPZA</label>
												<div class="col-sm-12 col-md-10">
													<select class="custom-select col-12">
														<option selected="">Pilih</option>
														<option value="1">Rekreasional</option>
														<option value="2">Situasional</option>
														<option value="3">Intensif/Reguler</option>
														<option value="4">Komplusif</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Gejala putus zat yang muncul</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" type="text" placeholder="">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Pemeriksaan Fisik</label>
												
												</div>
											
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Tinggi Badan</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" type="text" placeholder="">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Luka/Cacat Tubuh</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" type="text" placeholder="">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Tatto tubuh</label>
												<div class="col-sm-12 col-md-10">
													<select class="custom-select col-12">
														<option selected="">Pilih</option>
														<option value="1">Ya</option>
														<option value="2">Tidak</option>
														
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Riwayat Penyakit</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" type="text" placeholder="">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Pemeriksaan Laboratorium</label>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Tanggal Pemeriksaan</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control date-picker" placeholder="Select Date" type="text">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">HIV</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" type="text" placeholder="">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Darah Rutin</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" type="text" placeholder="">
												</div>
											
											</div>
											<div class="btn-list">												
																<input class="btn btn-primary" type="submit" value="Simpan">								
															</div>
											</div>
											</div>
											
											</form>

						
						
					

@endsection
