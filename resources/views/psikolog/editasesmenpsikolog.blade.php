@extends('psikolog.layout') 

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
									<li class="breadcrumb-item"><a href="/dashboardpsikolog">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Asesmen</li>
								</ol>
							</nav>
						</div>
                    </div>
                </div>


                
                    <div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Asesmen Psikolog</h4>
						</div>
                        </div>

                        <form action="{{route('saveasesmenpsikolog',$ps->id)}}" method="post">
                        @csrf
                      
							
							
												
										
								
									<div class="pd-20 card-box mb-30">
										<div class="clearfix">
											
											<div class="pull-right">
												<!--<a href="#basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a> -->
											</div>
										</div>

                                        <div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Tanggal Asesmen</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control date-picker" value="{{$ps->tanggalasesmen}}" name="tanggalasesmen" placeholder="Select Date" type="text">
												</div>
										</div>

										<div class="form-group row">
												<label class="col-sm-12 col-md-2 col-form-label">Kode Pemerlu</label>
												<div class="col-sm-12 col-md-10">
													<input class="form-control" value="{{$ps->pemerlulayanan_id}}" name="pemerlulayanan_id" type="text" placeholder="Johnny Brown">
												</div>
										</div>

                                        <h9>A. Wawancara</h9>
                                        <hr>
										<h9>Case History</h9></hr>
						                <div class="form-group">
						                    	<label>a. Pengalaman Masa Kecil</label>
							                    <textarea  name="pengalaman" class="form-control">{{$ps->pengalaman}}</textarea>
						                </div>

                                        <div class="form-group">
						                    	<label>b. Riwayat Penggunaan Napza</label>
							                    <textarea name="riwayatnapza" class="form-control">{{$ps->riwayatnapza}}</textarea>
						                </div>

                                        <div class="form-group">
						                    	<label>c. Faktor Penyebab Penggunaan Napza </label>
							                    <textarea name="penyebabnapza" class="form-control">{{$ps->penyebabnapza}}</textarea>
						                </div>

                                        <h9>d. Perilaku Menyimpang</h9>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                <th scope="col">Jenis</th>
                                                <th scope="col">Ya</th>
                                                <th scope="col">Tidak</th>
                                                <th scope="col">Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>Pencurian</td>
                                                <td>
                                                    @php
                                                        $pencurian = json_decode($ps->pencurian);
                                                        $c_pencurian = json_decode($pencurian->c_pencurian);
                                                    @endphp
                                                    <input type="checkbox" @if(in_array('ya',$c_pencurian))checked @endif name="c_pencurian[]" value="ya"> <br />
												</td>
                                                <td>
                                                    <input type="checkbox" @if(in_array('tidak',$c_pencurian))checked @endif name="c_pencurian[]" value="tidak"> <br />
                                                </td>
                                                <td>
                                                <textarea name="n_pencurian" cols="50" rows="2">{{$pencurian->n_pencurian}}</textarea><br>
                                                </td>
                                                </tr>
                                                @php
                                                        $perampokan = json_decode($ps->perampokan);
                                                        $c_perampokan = json_decode($perampokan->c_perampokan);
                                                @endphp
                                                <tr>
                                                <td>Penjambretan/Perampokan</td>
                                                <td>
                                                    <input type="checkbox" @if(in_array('ya',$c_perampokan))checked @endif name="c_perampokan[]" value="ya"> <br />
												</td>
                                                <td>
                                                    <input type="checkbox" @if(in_array('tidak',$c_perampokan))checked @endif name="c_perampokan[]" value="tidak"> <br />
                                                </td>
                                                <td>
                                                <textarea name="n_perampokan" cols="50" rows="2">{{$perampokan->n_perampokan}}</textarea><br>
                                                </td>
                                                </tr>
                                                @php
                                                        $tawuran = json_decode($ps->tawuran);
                                                        $c_tawuran = json_decode($tawuran->c_tawuran);
                                                @endphp
                                                <tr>
                                                <td>Tawuran</td>
                                                <td>
                                                    <input type="checkbox" @if(in_array('ya',$c_tawuran))checked @endif name="c_tawuran[]" value="ya"> <br />
												</td>
                                                <td>
                                                    <input type="checkbox" @if(in_array('tidak',$c_tawuran))checked @endif name="c_tawuran[]" value="tidak"> <br />
                                                </td>
                                                <td>
                                                <textarea name="n_tawuran" cols="50" rows="2">{{$tawuran->n_tawuran}}</textarea><br>
                                                </td>
                                                </tr>

                                                @php
                                                        $seksbebas = json_decode($ps->seksbebas);
                                                        $c_seksbebas = json_decode($seksbebas->c_seksbebas);
                                                @endphp
                                                <tr>
                                                <td>Seks Bebas/Tawuran</td>
                                                <td>
                                                    <input @if(in_array('ya',$c_seksbebas))checked @endif type="checkbox" name="c_seksbebas[]" value="ya"> <br />
												</td>
                                                <td>
                                                    <input @if(in_array('tidak',$c_seksbebas))checked @endif type="checkbox" name="c_seksbebas[]" value="tidak"> <br />
                                                </td>
                                                <td>
                                                <textarea name="n_seksbebas" cols="50" rows="2">{{$seksbebas->n_seksbebas}}</textarea><br>
                                                </td>
                                                </tr>

                                                @php
                                                        $napza = json_decode($ps->napza);
                                                        $c_napza = json_decode($napza->c_napza);
                                                @endphp
                                                <tr>
                                                <td>Penyalahgunaan Napza</td>
                                                <td>
                                                    <input @if(in_array('ya',$c_napza))checked @endif type="checkbox" name="c_napza[]" value="ya"> <br />
												</td>
                                                <td>
                                                    <input type="checkbox" @if(in_array('tidak',$c_napza))checked @endif name="c_napza[]" value="tidak"> <br />
                                                </td>
                                                <td>
                                                <textarea name="n_napza" cols="50" rows="2">{{$napza->n_napza}}</textarea><br>
                                                </td>
                                                </tr>

                                                @php
                                                        $miras = json_decode($ps->miras);
                                                        $c_miras = json_decode($miras->c_miras);
                                                @endphp
                                                <tr>
                                                <td>Penyalahgunaan Miras/alkohol</td>
                                                <td>
                                                    <input type="checkbox" @if(in_array('ya',$c_miras))checked @endif name="c_alkohol[]" value="ya"> <br />
												</td>
                                                <td>
                                                    <input type="checkbox" @if(in_array('tidak',$c_miras))checked @endif name="c_alkohol[]" value="tidak"> <br />
                                                </td>
                                                <td>
                                                <textarea name="n_alkohol" cols="50" rows="2"></textarea><br>
                                                </td>
                                                </tr>

                                                @php
                                                        $menjualnapza = json_decode($ps->menjualnapza);
                                                        $c_menjualnapza = json_decode($menjualnapza->c_menjualnapza);
                                                @endphp
                                                <tr>
                                                <td>Mengedarkan/ Menjual Napza</td>
                                                <td>
                                                    <input type="checkbox" @if(in_array('ya',$c_menjualnapza))checked @endif name="c_menjualnapza[]" value="ya"> <br />
												</td>
                                                <td>
                                                    <input type="checkbox" @if(in_array('tidak',$c_menjualnapza))checked @endif name="c_menjualnapza[]" value="tidak"> <br />
                                                </td>
                                                <td>
                                                <textarea name="n_menjualnapza" cols="50" rows="2">{{$menjualnapza->n_menjualnapza}}</textarea><br>
                                                </td>
                                                </tr>
                                                @php
                                                        $penjara = json_decode($ps->penjara);
                                                        $c_penjara = json_decode($penjara->c_penjara);
                                                @endphp
                                                <tr>
                                                <td>Pengalaman di Penjara</td>
                                                <td>
                                                    <input @if(in_array('ya',$c_penjara))checked @endif type="checkbox" name="c_penjara[]" value="ya"> <br />
												</td>
                                                <td>
                                                    <input type="checkbox" @if(in_array('tidak',$c_penjara))checked @endif name="c_penjara[]" value="tidak"> <br />
                                                </td>
                                                <td>
                                                <textarea name="n_penjara" cols="50" rows="2">{{$penjara->n_penjara}}</textarea><br>
                                                </td>
                                                </tr>

                                                
                                            </tbody>
                                        </table>

                                        <h9>e. Riwayat Kesehatan Jiwa</h9>
                                        <div class="form-group">
						                    	<label>1. Percobaan bunuh diri/ self harm/ menyakiti diri sendiri?</label>
							                    <textarea name="percobaanbunuhdiri"  class="form-control">{{$ps->percobaanbunuhdiri}}</textarea>
						                </div>
										
                                        <div class="form-group">
						                    	<label>2. Riwayat Pemeriksaan Psikiater</label>
							                    <textarea name="riwayatpemeriksaanpsikiater" class="form-control">{{$ps->riwayatpemeriksaanpsikiater}}</textarea>
						                </div>

                                        
                                        <div class="form-group">
						                    	<label>2. Hubungan PPKS </label>
							                    <textarea name="hubunganppks" class="form-control">{{$ps->hubunganppks}}</textarea>
						                </div>

                                        <div class="form-group">
						                    	<label>3. Potensi yang dimiliki</label>
							                    <textarea name="potensiyangdimiliki" class="form-control">{{$ps->potensiyangdimiliki}}</textarea>
						                </div>

                                        <div class="form-group">
						                    	<label>4. Kesiapan mengikuti Rehabilitasi</label>
							                    <textarea name="kesiapanrehabilitasi" class="form-control">{{$ps->kesiapanrehabilitasi}}</textarea>
						                </div>

                                        <h9>B. Psikodiagnostik</h9>
                                        <div class="form-group">
						                    	<label>1. Hasil Beck Anxiety Inventory (BAI)</label>
							                    <textarea name="bai" class="form-control">{{$ps->bai}}</textarea>
						                </div>

                                        <div class="form-group">
						                    	<label>2. Hasil Beck Depression Inventory (BDI)</label>
							                    <textarea name="bdi" class="form-control">{{$ps->bdi}}</textarea>
						                </div>

                                        <div class="form-group">
						                    	<label>3. Hasil State-Trait Anger Expression Inventory (STAXI)</label>
							                    <textarea name="staxi" class="form-control">{{$ps->staxi}}</textarea>
						                </div>

                                        <div class="form-group">
						                    	<label>4. Hasil Tes Grafis</label>
							                    <textarea name="tesgrafis" class="form-control">{{$ps->tesgrafis}}</textarea>
						                </div>

                                        <div class="form-group">
						                    	<label>5. Hasil Tes Self-Reporting Questionnaire (SRQ)</label>
							                    <textarea class="form-control" name="srq">{{$ps->srq}}</textarea>
						                </div>

                                        <div class="form-group">
						                    	<label>6. Skala Well-being</label>
							                    <textarea name="skalawellbeing" class="form-control">{{$ps->skalawellbeing}}</textarea>
						                </div>

                                        <div class="form-group">
						                    	<label>7. Hasil Tes Intelegensi</label>
							                    <textarea name="intelegensi" class="form-control">{{$ps->intelegensi}}</textarea>
						                </div>

                                        <h9>Rencana Intervensi</h9>
                                        <div class="form-group">
						                    	<label>a. Rumusan Masalah    </label>
							                    <textarea name="rumusanmasalah" class="form-control">{{$ps->rumusanmasalah}}</textarea>
						                </div>

                                        <div class="form-group">
						                    	<label>b. Kesimpulan  </label>
							                    <textarea name="kesimpulan" class="form-control">{{$ps->kesimpulan}}</textarea>
						                </div>

                                        <div class="form-group">
						                    	<label>c. Rencana Intervensi  </label>
							                    <textarea name="rencanaintervensi" class="form-control">{{$ps->rencanaintervensi}}</textarea>
						                </div>
                                        
                        
											</div>
											<div class="btn-list">												
																<input class="btn btn-primary" type="submit" value="Simpan">								
															</div>
											</div>
											</div>
											
											</form>

						
						
					

@endsection
