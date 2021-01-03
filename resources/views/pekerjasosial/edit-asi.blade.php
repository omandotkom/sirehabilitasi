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

								<div id="printArea">
									<div class="pd-20 card-box mb-30">
										<div class="clearfix">
											<div class="pull-left">
												<div class="pull-left">
													<h4 class="text-blue h4">Formulir Hasil Asesmen</h4>
												</div>

											</div>

										</div>
										<form action="{{route('saveasi',$asi->id)}}" method="post">
											@csrf
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Kode Pemerlu</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" name="pemerlulayanan_id" value="{{$asi->pemerlulayanan_id}}" type="text" placeholder="1">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Tanggal Masuk</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control date-picker" name="tanggalmasuk" value="{{$asi->tanggalmasuk}}" placeholder="Select Date" type="text">
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
															@php
															$med = json_decode($asi->medis);
															$pd = json_decode($asi->pekerjaandukungan);
															$nap = json_decode($asi->napza);
															$kl = json_decode($asi->keluargasosial);
															$ps = json_decode($asi->psikiatris);
															@endphp
															<td>
																<input type="checkbox" @if(!is_null($med) && in_array('1',$med))checked @endif name="medis[]" value="1"> <br />
															</td>
															<td>
																<input type="checkbox" @if(!is_null($med) && in_array('2',$med))checked @endif name="medis[]" value="2"> <br />
															</td>
															<td>
																<input type="checkbox" @if(!is_null($med) && in_array('3',$med))checked @endif name="medis[]" value="3"> <br />
															</td>
															<td>
																<input type="checkbox" @if(!is_null($med) && in_array('4',$med))checked @endif name="medis[]" value="4"> <br />
															</td>
															<td>
																<input type="checkbox" @if(!is_null($med) && in_array('5',$med))checked @endif name="medis[]" value="5"> <br />
															</td>
															<td>
																<input type="checkbox" name="medis[]" @if(!is_null($med) && in_array('6',$med))checked @endif value="6"> <br />
															</td>
															<td>
																<input type="checkbox" name="medis[]" value="7" @if(!is_null($med) && in_array('7',$med))checked @endif> <br />
															</td>
															<td>
																<input type="checkbox" name="medis[]" value="8" @if(!is_null($med) && in_array('8',$med))checked @endif> <br />
															</td>
															<td>
																<input type="checkbox" name="medis[]" value="9" @if(!is_null($med) && in_array('9',$med))checked @endif> <br />
															</td>
														</tr>
														<tr>
															<td>Pekerjaan/Dukungan</td>
															@for ($i = 1; $i <= 9; $i++) <td>
																<input type="checkbox" @if(!is_null($pd) && in_array($i,$pd))checked @endif name="pekerjaandukungan[]" value="{{$i}}"> <br />
																</td>
															@endfor
														</tr>

														<tr>
															<td>Napza</td>
															@for ($i = 1; $i <= 9; $i++) <td>
																<input type="checkbox" @if(!is_null($nap) && in_array($i,$nap))checked @endif name="napza[]" value="{{$i}}"> <br />
																</td>
															@endfor

														</tr>
														<tr>
															<td>Keluarga/Sosial</td>
															@for ($i = 1; $i <= 9; $i++) <td>
																<input type="checkbox" @if(!is_null($kl) && in_array($i,$kl))checked @endif name="keluargasosial[]" value="{{$i}}"> <br />
																</td>
																@endfor
														</tr>
														<tr>
															<td>Psikiatris</td>
															@for ($i = 1; $i <= 9; $i++) <td>
																<input type="checkbox" @if(!is_null($ps) && in_array($i,$ps))checked @endif name="psikiatris[]" value="{{$i}}"> <br />
																</td>
																@endfor

														</tr>
														<tr>
															<td colspan="1">Klien Memenuhi Kriteria Diagnosis Napza</td>
															<td colspan="9">
																<textarea cols="50" name="keterangandiagnosis" rows="2">{{$asi->keterangandiagnosis}}</textarea><br>
															</td>
														</tr>
														<tr>
															<td colspan="1">Diagnosis Lainnya</td>
															<td colspan="9">
																<textarea cols="50" name="diagnosislainnya" rows="10">{{$asi->diagnosislainnya}}</textarea><br>
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
							</div>
							</form>



							@endsection