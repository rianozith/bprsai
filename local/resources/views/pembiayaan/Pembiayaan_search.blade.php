@extends('layouts.home_master')

@section('title')
	Nasabah Search
@stop

@section('breadcrumb')

<li class="">
	 <a href="#">Tabungan</a> <span class="divider">/</span>
</li>
<li class="active">
	 Kode Nasabah
</li>
@stop

@section('link1')
@stop

@section('link2')
	<script src="{{asset('assets/scripts.js')}}"></script>
	<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip(); 
		});
	</script>
@stop


@section('content')
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Hasil Pencarian</div>
                                {{-- <div class="pull-right"><span class="badge badge-warning">View More</span>
                                </div> --}}
                                
                            </div>
                            <div class="block-content collapse in">
                            	
						    	<table class="table table-hover table-bordered">
								@if (count($cari) > 0)						    		
									<thead>
										<tr>
											<th><center>No Register</center></th>
											<th><center>Kode Nasabah</center></th>
											<th><center>Nama Pembiayaan</center></th>
											<th><center>Alamat</center></th>
											<th><center>Nama AO</center></th>
											<th><center>Pengajuan Biaya</center></th>
											<th><center>Tanggal Permohonan</center></th>
											<th><center>Action</center></th>
										</tr>
									</thead>
									<tbody>
										
										@foreach ($cari as $data)
											<tr>
												<td>{{ $data -> noregister }}</td>
												<td>{{ $data -> kdnas }}</td>
												<td>{{ $data -> nama }}</td>
												<td><?php echo $data -> alamat ?></td>
												<td>{{ $data -> namaao }}</td>
												<td>{{ $data -> pengajuanbiaya }}</td>
												<td>{{date('d-m-Y', strtotime($data -> tglmohon))}}</td>
												<td>
													<a href="{{url('pembiayaan/showpembiayaan',$data->id )}}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Detail Pembiayaan Nasabah"><span class="icon-eye-open"></span></a>
													<a href="{{url('pembiayaan/editpembiayaan', $data->id )}}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit Pembiayaan"><span class="icon-pencil"></span> </a>
													<a href="{{url('pembiayaan/deletepembiayaan', $data->id )}}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Delete pembiayaan"><span class="icon-trash"></span></a>
												</td>
												
											</tr>
										@endforeach
								@else 
										<h2 class="text-center">Data Tidak Ditemukan <br>
										
									</tbody>
								@endif
								</table>
								

								<div class="">
									<a href="{{ url('pembiayaan/indexpembiayaan') }}"><button class="btn btn-primary">Back</button></a>
								</div>
                            </div> {{-- end block collapse in --}}
                        </div> {{-- end block --}}
                    </div> {{-- end row fluid --}}
@stop                    