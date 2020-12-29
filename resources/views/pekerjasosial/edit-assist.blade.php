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
								<li class="breadcrumb-item active" aria-current="page">Form Assist</li>
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



									<div id="printArea">

										<div class="pd-20 card-box mb-30">
											<div class="clearfix">
												<div class="pull-left">
													<div class="pull-left">
														<h4 class="text-blue h4">Kartu Umpan Balik Pasien</h4>
													</div>

												</div>

											</div>
											<form action="{{route('saveassist',$assist->id)}}" method="post">
												@csrf
												<div class="form-group row">
													<label class="col-sm-12 col-md-2 col-form-label">Kode Pemerlu </label>
													<div class="col-sm-12 col-md-10">
														<input class="form-control" type="text" value="{{$assist->pemerlulayanan_id}}" name="pemerlulayanan_id" placeholder="Johnny Brown">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-12 col-md-2 col-form-label">Tanggal Pemeriksaan</label>
													<div class="col-sm-12 col-md-10">
														<input class="form-control date-picker" value="{{$assist->tanggalpemeriksaan}}" name="tanggalpemeriksaan" placeholder="Select Date" type="text">
													</div>
												</div>

												<body>
													<h8> Skor Penggunaan Zat</h8>

													<table class="table table-bordered table-striped">
														<thead>
															<tr>
																<th>No</th>
																<th>Zat</th>
																<th>Skor Pasien</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>a</td>
																<td>Tembakau (rokok, cerutu, kretek, dll)</td>
																<td>
																	<textarea name="a" cols="10" rows="2">{{$assist->a}}</textarea><br>
																</td>
															</tr>
															<tr>
																<td>b</td>
																<td>Minuman beralkohol (bir, anggur, spiritus, tuak, dll)</td>
																<td>
																	<textarea name="b" cols="10" rows="2">{{$assist->b}}</textarea><br>
																</td>
															</tr>
															<tr>
																<td>c</td>
																<td>Kanabis (marijuana, ganja, gelek, cimeng, dll)</td>
																<td>
																	<textarea name="c" cols="10" rows="2">{{$assist->c}}</textarea><br>
																</td>
															</tr>
															<tr>
																<td>d</td>
																<td>Kokain</td>
																<td>
																	<textarea name="d" cols="10" rows="2">{{$assist->d}}</textarea><br>
																</td>
															</tr>
															<tr>
																<td>e</td>
																<td>Stimulan jenis amfetamin (ekstasi, shabu, dll)</td>
																<td>
																	<textarea name="e" cols="10" rows="2">{{$assist->e}}</textarea><br>
																</td>
															</tr>
															<tr>
																<td>f</td>
																<td>Inhalansia (lem, bensin, tiner, dll)</td>
																<td>
																	<textarea name="f" cols="10" rows="2">{{$assist->f}}</textarea><br>
																</td>
															</tr>
															<tr>
																<td>g</td>
																<td>Sedatif atau obat tidur (Pil koplo, Valium, Dumolid, Lexotan, Rohypnol, Mogadon, dll)</td>
																<td>
																	<textarea name="g" cols="10" rows="2">{{$assist->g}}</textarea><br>
																</td>
															</tr>
															<tr>
																<td>h</td>
																<td>Halusinogen (LSD, mushrooms, PCP, dll)</td>
																<td>
																	<textarea name="h" cols="10" rows="2">{{$assist->h}}</textarea><br>
																</td>
															</tr>
															<tr>
																<td>i</td>
																<td>Opioid(heroin, putaw, morfin, metadon, kodein, dll)</td>
																<td>
																	<textarea name="i" cols="10" rows="2">{{$assist->i}}</textarea><br>
																</td>
															</tr>
															<tr>
																<td>j</td>
																<td>
																	@php
																	$j = json_decode($assist->j);
																	@endphp
																	<textarea name="jname" cols="20" rows="2">{{$j->jname}}</textarea><br>
																</td>
																<td>
																	<textarea name="jvalue" cols="10" rows="2">{{$j->jvalue}}</textarea><br>
																</td>
															</tr>
														</tbody>
													</table>
													<div id="submitButton" class="btn-list">

														<input class="btn btn-primary" type="submit" value="Simpan">

													</div>
													<div id="printButton" class="btn-list">
														<input class="btn btn-primary" onclick="printDiv('printArea');" type="button" value="Cetak">
													</div>
										</div>
									</div>
								</div>
							</div>
							</form>
							@endsection