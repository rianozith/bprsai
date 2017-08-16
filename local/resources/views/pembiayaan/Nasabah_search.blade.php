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
                                <div class="pull-right">
						        	<!-- form input untuk searching -->
						        	{!! Form::open(['action'=>'nasabahController@searchnas', 'method'=>'GET', 'class'=>'form']) !!}
						        	{!! Form::text('carinas', null,
												array(
													'class' => 'form-control',
													'placeholder' => 'Nama/Kode Nasabah/No KTP')) !!}
						        	{!! Form::close() !!}
						       	</div>
                            </div>
                            <div class="block-content collapse in">
                            	
						    	<table class="table table-hover table-bordered">
								@if (count($cari) > 0)						    		
									<thead>
										<tr>
											<th>Kode Nasabah</th>
											<th>Nama</th>
											<th>Alamat</th>
											<th>Kode Pos</th>
											<th>Tempat Lahir</th>
											<th>Tanggal Lahir</th>
											<th>Ibu Kandung</th>											
											<th>Telp</th>
											<th>No KTP</th>
											<th>No NPWP</th>
											<th>Pekerjaan</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										
										@foreach ($cari as $data)
											<tr>
												<td><a href="{{url('pembiayaan/shownasabah', $data->id)}}">{{ $data -> kdnas }}</a></td>
												<td>{{ $data -> nama }}</td>
												<td><?php echo $data -> alamat ?></td>
												<td>{{ $data -> kdpos }}</td>
												<td>{{ $data -> tptlahir }}</td>
												<td>{{date('d-m-Y', strtotime($data -> tglahir))}}</td>
												<td>{{ $data -> namaibu }}</td>												
												<td>{{ $data -> telp }}</td>
												<td>{{ $data -> noktp }}</td>
												<td>{{ $data -> npwp }}</td>
												<td>{{ $data -> pekerjaan }}</td>
												<td><a href="{{url('pembiayaan/editnasabah', $data->id )}}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit Nasabah"><span class="icon-pencil"></span> </a> | <a href="{{url('pembiayaan/deletenasabah', $data->id )}}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Delete Nasabah"><span class="icon-trash"></span></a> | <a href="{{url('pembiayaan/createpembiayaan', $data->id )}}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Pembiayaan Nasabah"><span class="icon-briefcase"></span> </a></td>
												
											</tr>
										@endforeach
								@else 
										<h2 class="text-center">Data Tidak Ditemukan <br>
										<a href="{{url('/pembiayaan/createnasabah')}}" class="btn btn-success"> Tambah Nasabah Baru?</a></h2>
									</tbody>
								@endif
								</table>
								

								<div class="">
									<a href="{{ url('pembiayaan/indexnasabah') }}"><button class="btn btn-primary">Back</button></a>
								</div>
                            </div> {{-- end block collapse in --}}
                        </div> {{-- end block --}}
                    </div> {{-- end row fluid --}}
@stop                    