@extends('perawat.layout') 


@section('body')
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-100px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Tables</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-perawat.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Catatan Perkembangan </li>
								</ol>
							</nav>
						</div>
                    </div>
				</div>
				
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h6 class="text-blue">Catatan Perkembangan Bulan ke 3</h6>
						</div>
                    </div>
							
							
												
										
								
									<div class="pd-20 card-box mb-30">
										<div class="clearfix">
											
											
										</div>
										<form>
										
										<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Nama</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" type="text" placeholder="1">
												</div>
											</div>
										
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Tanggal Pemeriksaan</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control date-picker" placeholder="Select Date" type="text">
												</div>
											</div>
                                            <div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Berat Badan</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" type="text" placeholder="">
												</div>
											</div>
                                            
                                                <div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Tanda-tanda vital</label>
												<div class="col-sm-12 col-md-10">
													<select class="custom-select col-12">
														<option selected="">Pilih</option>
														<option value="1">Stabil</option>
														<option value="2">Tidak Stabil</option>
													
													</select>
												</div>
											</div>
											
											
											
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Masalah Kesehatan dan Diagnosa Medis</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" type="text" placeholder="">
												</div>
											</div>
											
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Rekomendasi</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" type="text" placeholder="">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Rujukan</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" type="text" placeholder="">
												</div>
											</div>
											<div class="btn-list">												
																<input class="btn btn-primary" type="submit" value="Simpan">								
															</div>
											
                                            <div class="btn-list">
												<input class="btn btn-primary" type="submit" value="Cetak">
											</div>
											
											</form>
					</div>
					</div>


@endsection
