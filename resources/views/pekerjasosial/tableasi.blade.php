@extends('pekerjasosial.layout') 

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
									<li class="breadcrumb-item"><a href="index-pegawai-asesmen.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Data Hasil Asesmen</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
				
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Data Hasil Asesmen/ASI</h4>
				  
					</div> 
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">Nama</th>
									<th class="datatable-nosort">Tanggal Kedatangan</th>
									<th class="datatable-nosort">Aksi</th>
								</tr>
							</thead>
							 <tbody>
								<tr>
									<td class="table-plus"></td>
									<td class="table-plus"></td>
									
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												
												<a class="dropdown-item" href="/edit-asi"><i class="dw dw-edit2"></i> Edit and View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
                                </tbody>
						
						</table>
					</div>
				</div>
@endsection
