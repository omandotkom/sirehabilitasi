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
								<li class="breadcrumb-item active" aria-current="page">Form ASI</li>
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
													<h4 class="text-blue h4">Formulir Hasil Asesmen</h4>
												</div>

											</div>

										</div>
										<form action="{{route('saveasi')}}" method="post">
											@csrf
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Kode Pemerlu</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" name="pemerlulayanan_id" type="text" placeholder="1">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Tanggal Masuk</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control date-picker" name="tanggalmasuk" placeholder="Select Date" type="text">
												</div>
											</div>

											<div class="form-group row">

												<table class="table table-bordered">
													<thead>
														<tr>
															<td rowspan="2">JENIS</td>
															<td colspan="9">MASALAH YANG DIHADAPI</td>
														</tr>
														<tr>
															<td>1</td>
															<td>2</td>
															<td>3</td>
															<td>4</td>
															<td>5</td>
															<td>6</td>
															<td>7</td>
															<td>8</td>
															<td>9</td>
														</tr>
														<tr>
															<td>Medis</td>
															<td>
																<input type="checkbox" name="medis[]" value="1"> <br />
															</td>
															<td>
																<input type="checkbox" name="medis[]" value="2"> <br />
															</td>
															<td>
																<input type="checkbox" name="medis[]" value="3"> <br />
															</td>
															<td>
																<input type="checkbox" name="medis[]" value="4"> <br />
															</td>
															<td>
																<input type="checkbox" name="medis[]" value="5"> <br />
															</td>
															<td>
																<input type="checkbox" name="medis[]" value="6"> <br />
															</td>
															<td>
																<input type="checkbox" name="medis[]" value="7"> <br />
															</td>
															<td>
																<input type="checkbox" name="medis[]" value="8"> <br />
															</td>
															<td>
																<input type="checkbox" name="medis[]" value="9"> <br />
															</td>
														</tr>
														<tr>
															<td>Pekerjaan/Dukungan</td>
															<td>
																<input type="checkbox" name="pekerjaandukungan[]" value="1"> <br />
															</td>
															<td>
																<input type="checkbox" name="pekerjaandukungan[]" value="2"> <br />
															</td>
															<td>
																<input type="checkbox" name="pekerjaandukungan[]" value="3"> <br />
															</td>
															<td>
																<input type="checkbox" name="pekerjaandukungan[]" value="4"> <br />
															</td>
															<td>
																<input type="checkbox" name="pekerjaandukungan[]" value="5"> <br />
															</td>
															<td>
																<input type="checkbox" name="pekerjaandukungan[]" value="6"> <br />
															</td>
															<td>
																<input type="checkbox" name="pekerjaandukungan[]" value="7"> <br />
															</td>
															<td>
																<input type="checkbox" name="pekerjaandukungan[]" value="8"> <br />
															</td>
															<td>
																<input type="checkbox" name="pekerjaandukungan[]" value="9"> <br />
															</td>
														</tr>

														<tr>
															<td>Napza</td>
															<td>
																<input type="checkbox" name="napza[]" value="1"> <br />
															</td>
															<td>
																<input type="checkbox" name="napza[]" value="2"> <br />
															</td>
															<td>
																<input type="checkbox" name="napza[]" value="3"> <br />
															</td>
															<td>
																<input type="checkbox" name="napza[]" value="4"> <br />
															</td>
															<td>
																<input type="checkbox" name="napza[]" value="5"> <br />
															</td>
															<td>
																<input type="checkbox" name="napza[]" value="6"> <br />
															</td>
															<td>
																<input type="checkbox" name="napza[]" value="7"> <br />
															</td>
															<td>
																<input type="checkbox" name="napza[]" value="8"> <br />
															</td>
															<td>
																<input type="checkbox" name="napza[]" value="9"> <br />
															</td>
														</tr>
														<tr>
															<td>Keluarga/Sosial</td>
															<td>
																<input type="checkbox" name="keluargasosial[]" value="1"> <br />
															</td>
															<td>
																<input type="checkbox" name="keluargasosial[]" value="2"> <br />
															</td>
															<td>
																<input type="checkbox" name="keluargasosial[]" value="3"> <br />
															</td>
															<td>
																<input type="checkbox" name="keluargasosial[]" value="4"> <br />
															</td>
															<td>
																<input type="checkbox" name="keluargasosial[]" value="5"> <br />
															</td>
															<td>
																<input type="checkbox" name="keluargasosial[]" value="6"> <br />
															</td>
															<td>
																<input type="checkbox" name="keluargasosial[]" value="7"> <br />
															</td>
															<td>
																<input type="checkbox" name="keluargasosial[]" value="8"> <br />
															</td>
															<td>
																<input type="checkbox" name="keluargasosial[]" value="9"> <br />
															</td>
														</tr>
														<tr>
															<td>Psikiatris</td>
															<td>
																<input type="checkbox" name="psikiatris[]" value="1"> <br />
															</td>
															<td>
																<input type="checkbox" name="psikiatris[]" value="2"> <br />
															</td>
															<td>
																<input type="checkbox" name="psikiatris[]" value="3"> <br />
															</td>
															<td>
																<input type="checkbox" name="psikiatris[]" value="4"> <br />
															</td>
															<td>
																<input type="checkbox" name="psikiatris[]" value="5"> <br />
															</td>
															<td>
																<input type="checkbox" name="psikiatris[]" value="6"> <br />
															</td>
															<td>
																<input type="checkbox" name="psikiatris[]" value="7"> <br />
															</td>
															<td>
																<input type="checkbox" name="psikiatris[]" value="8"> <br />
															</td>
															<td>
																<input type="checkbox" name="psikiatris[]" value="9"> <br />
															</td>
														</tr>
														<tr>
															<td colspan="1">Klien Memenuhi Kriteria Diagnosis Napza</td>
															<td colspan="9">
																<textarea cols="50" name="keterangandiagnosis" rows="2"></textarea><br>
															</td>
														</tr>
														<tr>
															<td colspan="1">Diagnosis Lainnya</td>
															<td colspan="9">
																<textarea cols="50" name="diagnosislainnya" rows="10"></textarea><br>
															</td>
														</tr>

														</tbody>
												</table>
												<div class="btn-list">
													<input class="btn btn-primary" type="submit" value="Simpan">
												</div>
											</div>
									</div>
								</div>
							</div>
							</form>



							@endsection