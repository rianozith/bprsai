@extends('layouts.home_master')

@section('title')
	Kode Account Officer
@stop

@section('breadcrumb')

<li class="">
	 <a href="#">Tabungan</a> <span class="divider">/</span>
</li>
<li class="active">
	 Kode Account Officer
</li>
@stop

@section('link1')
@stop

@section('link2')
	<script src="{{asset('assets/scripts.js')}}"></script>
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
											<th>Kode Account Officer</th>
											<th>Nama</th>											
											<th>Otorisasi</th>	
											<th>AO</th>	
										</tr>
									</thead>
									<tbody>
										
										@foreach ($cari as $data)
											<tr>
												<td>{{ $data -> kd_officer }}</td>
												<td>{{ $data -> nama }}</td>
												<td>{{ $data -> otorisasi }}</td>
												<td>{{ $data -> ao }}</td>
											</tr>
										@endforeach
								@else 
										<h2 class="text-center">Data Tidak Ditemukan</h2>
										
									</tbody>
								@endif
								</table>
								

								<div class="">
									<a href="{{ URL::previous() }}"><button class="btn btn-primary">Back</button></a>
								</div>
                            </div> {{-- end block collapse in --}}
                        </div> {{-- end block --}}
                    </div> {{-- end row fluid --}}
@stop                    