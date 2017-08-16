
@extends('layouts.home_master')

@section('title')
	Kode Sifat Index
@stop

@section('breadcrumb')

	<li class="">
		 <a href="#">Tabungan</a> <span class="divider">/</span>
	</li>
	<li class="active">
		 Kode Sifat
	</li>
@stop

@section('link2')
	<script src="{{asset('assets/scripts.js')}}"></script>
@stop

@section('content')
						
	@if(Session::has('pesan'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<h4>Success </h4>
			<h4>{{ Session::get('pesan') }}</h4>
		</div>
	@endif

<div class="row-fluid">
    <!-- block -->
    <div class="block">
    	<div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Kode Sifat</div>
        <div class="pull-right">
        	{!! Form::open(['action'=>'sifatController@indexsifat', 'method'=>'GET', 'class'=>'form']) !!}
        	{!! Form::text('carisifat', null,
						array(
							'class' => 'form-control',
							'placeholder' => 'search')) !!}
        	{!! Form::close() !!}
       	</div>

        {{-- <div class="pull-right"><span class="badge badge-warning">Sektor Info</span></div> --}}
    </div>
    <div class="block-content collapse in">
		<div class="table-toolbar">
			 
        </div>    	
        <br>
    	<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Kode Sifat</th>
					<th>Keterangan</th>
					{{-- <th>Action</th> --}}
				</tr>
			</thead>
			<tbody>
				<?php $no = $sifat->firstItem() - 1 ; ?>
				@foreach($sifat as $value)
				<?php $no++ ;?>
					<tr >
						<td>{{ $no }}</td>
						<td>{{ $value -> kd_sifat }}</td>
						<td>{{ $value -> ket }}</td>
						{{-- <td>
							<a href="{{url('pembiayaan/editgol', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-pencil"></span> </a>
							<a href="{{url('pembiayaan/deletegol', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-trash"></span></a>
						</td> --}}
					</tr>
				@endforeach
			</tbody>
		</table>
		{{-- end block colapse in--}}
				
	</div>
		<div class="row-fluid">
				<div class="span4">
					
				</div>
				<div class="span4">
					<div class="pagination">{!! str_replace('/?', '?', $sifat->render()) !!}</div> 	
				</div>
				<div class="span4">
					
				</div>
		</div>
</div>

	
	

	
@stop
