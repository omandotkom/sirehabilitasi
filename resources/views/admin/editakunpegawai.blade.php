@extends('admin.layout') 

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
									<li class="breadcrumb-item active" aria-current="page">Edit Akun Pegawai</li>
								</ol>
							</nav>
							
						
						</div>
					</div>
				</div>
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Edit Akun Pegawai</h4>
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
												<label class="col-sm-12 col-md-2 col-form-label">NIP</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" placeholder="" type="">
												</div>
											</div>
											
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Jabatan</label>
												<div class="col-sm-12 col-md-10">
													<select class="custom-select col-12">
														<option selected="">Pilih</option>
														<option value="1">Pegawai Asesmen</option>
														<option value="2">Tenaga Kesehatan</option>
														<option value="2">Pekerja Sosial</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Username</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" placeholder="" type="text">
												</div>
											</div>
											
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Password</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" placeholder="******" type="">
												</div>
											</div>
											

									
											<div class="btn-list">
												<input class="btn btn-primary" type="submit" value="Simpan">
                                            </div>
                                            </form>								
				</div>
			        </div>
		                </div>
                            
                
												
					
									
										
									



@endsection
