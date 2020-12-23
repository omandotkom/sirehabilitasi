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
									<li class="breadcrumb-item active" aria-current="page">Data Pemerlu Pelayanan</li>
								</ol>
							</nav>
							
						
						</div>
					</div>
				</div>
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Data Pemerlu Pelayanan Kesejahteraan Sosial</h4>
						</div>
					</div>
					
                            <form>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Tanggal Masuk</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control date-picker" placeholder="Select Date" type="text">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Nama</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" type="text" placeholder="Johnny Brown">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">NIK</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" placeholder="NIK" type="NIK">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" placeholder="Nomor KK" type="NomorKK">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Status Pernikahan</label>
												<div class="col-sm-12 col-md-10">
													<select class="custom-select col-12">
														<option selected="">Pilih</option>
														<option value="1">Menikah</option>
														<option value="2">Belum Menikah</option>
														
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Tempat Lahir</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" placeholder="Tempat Lahir" type="TempatLahir">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control date-picker" placeholder="Select Date" type="text">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Tempat Tinggal Tetap</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" placeholder="Tempat Tinggal" type="TempatTinggal">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Nomor Telepon</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" placeholder="Nomor Telepon" type="NomorTelepon">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Pendidikan Terakhir</label>
												<div class="col-sm-12 col-md-10">
													<select class="custom-select col-12">
														<option selected="">Pilih</option>
														<option value="1">SD</option>
														<option value="2">SMP</option>
														<option value="3">SMA</option>
														<option value="4">S1</option>
														
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Nama Ayah</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" type="text" placeholder="Johnny Brown">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">NIK</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" placeholder="NIK" type="NIK">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" placeholder="Nomor KK" type="NomorKK">
												</div>
											</div>
										
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Tempat Lahir</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" placeholder="Tempat Lahir" type="TempatLahir">
												</div>

											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control date-picker" placeholder="Select Date" type="text">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Pekerjaan</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" placeholder="Pekerjaan" type="pekerjaan">
												</div>
                                            </div>
                                            
                                            <div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Nama Ibu</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" placeholder="" type="text">
												</div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
                                                <div class="col-sm-12 col-md-10">
												    <input class="form-control" placeholder="NIK" type="NIK">
											    </div>
										    </div>

										    <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Nomor KK</label>
                                                <div class="col-sm-12 col-md-10">
												    <input class="form-control" placeholder="Nomor KK" type="NomorKK">
											    </div>
										    </div>
									
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Tempat Lahir</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input class="form-control" placeholder="Tempat Lahir" type="TempatLahir">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input class="form-control date-picker" placeholder="Select Date" type="text">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-md-2 col-form-label">Pekerjaan</label>
                                                <div class="col-sm-12 col-md-10">
                                                    <input class="form-control" placeholder="Pekerjaan" type="pekerjaan">
                                                </div>
                                            </div>


									
											<div class="btn-list">
												<input class="btn btn-primary" type="submit" value="Simpan">
                                            </div>
												
				</div>
			        </div>
		                </div>
                            
                </form>
												
					
									
										
									



@endsection
