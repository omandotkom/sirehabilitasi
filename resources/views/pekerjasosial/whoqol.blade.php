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
									<li class="breadcrumb-item active" aria-current="page">Form WHOQOL</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4"></h4>
				<div class="row clearfix">
					
					<div class="pd-ltr-20 xs-pd-20-10">
						<div class="min-height-200px">
							
														
										<div class="pd-20 card-box mb-30">
													<div class="clearfix">
														<div class="pull-left">
															<div class="pull-left">
																<h4 class="text-blue h4">WHOQOL</h4>
															</div>
															
														</div>
														
													</div>
													<form action="{{route('savewhoqol')}}" method="post">
														@csrf
														<div class="form-group row">
															<label class="col-sm-12 col-md-2 col-form-label">Kode Pemerlu</label>
															<div class="col-sm-12 col-md-10">
																<input class="form-control" name="pemerlulayanan_id" type="text" placeholder="1">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-12 col-md-2 col-form-label">Nama</label>
															<div class="col-sm-12 col-md-10">
																<input class="form-control" name="nama"  type="text" placeholder="">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-12 col-md-2 col-form-label">Tanggal Wawancara</label>
															<div class="col-sm-12 col-md-10">
																<input class="form-control date-picker" name="tanggalwawancara" placeholder="Select Date" type="text">
															</div>
														</div>
														<h10>Lengkapi tabel berikut berdasarkan hasil nilai yang diperoleh</h10>
													<div class="form-group row">
												
														<table class="table table-bordered">
															<thead>
																<body>


															<tr>
															<td rowspan="2"></td>
															<td rowspan="2">Equation for computing domain scores</td>
															<td rowspan="2">Raw score</td>
																<td colspan="2">Transformed scores</td>
															</tr>
															<tr>    
															<td>4-20</td>
															<td>0-100</td>
															</tr>
															<tr>
																<td>Domain 1</td>
																<td>Q3 + Q4 + Q10 + Q15 + Q16 + Q17 + Q18</td>
																<td><textarea name="domain1a" cols="5" rows="2"></textarea><br></td>
																<td><textarea name="domain1b" cols="5" rows="2"></textarea><br></td>
																<td><textarea name="domain1c" cols="5" rows="2"></textarea><br></td>
															</tr>
															<tr>
																<td>Domain 2</td>
																<td>Q5 + Q6 + Q7 + Q11 + Q19 + Q26</td>
																<td><textarea name="domain2a" cols="5" rows="2"></textarea><br></td>
																<td><textarea name="domain2b" cols="5" rows="2"></textarea><br></td>
																<td><textarea name="domain2c" cols="5" rows="2"></textarea><br></td>
															</tr>
															<tr>
																<td>Domain 3</td>
																<td>Q20 + Q21 + Q22</td>
																<td><textarea name="domain3a" cols="5" rows="2"></textarea><br></td>
																<td><textarea name="domain3b" cols="5" rows="2"></textarea><br></td>
																<td><textarea name="domain3c" cols="5" rows="2"></textarea><br></td>
															</tr>
															<tr>
																<td>Domain 4</td>
																<td>Q8 + Q9 + Q12 + Q13 + Q14 + Q23 + Q24 + Q25</td>
																<td><textarea name="domain4a" cols="5" rows="2"></textarea><br></td>
																<td><textarea name="domain4b" cols="5" rows="2"></textarea><br></td>
																<td><textarea name="domain4c" cols="5" rows="2"></textarea><br></td>
															</tr>
														</table>
														</body>
		 													<div class="btn-list">												
																<input class="btn btn-primary" type="submit" value="Simpan">								
															</div>
											</div>
										</div>
								</div>
								</div>
								</div>
							
					</form>

@endsection