
@extends('layouts.home_master')

@section('title')
	Kode Golongan Index
@stop

@section('breadcrumb')

	<li class="">
		 <a href="#">Tabungan</a> <span class="divider">/</span>
	</li>
	<li class="active">
		 Kode Golongan
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
        <div class="muted pull-left">Kode Golongan</div>
        <div class="pull-right">
        	<!-- form input untuk searching -->
        	{!! Form::open(['action'=>'golonganController@searchgol', 'method'=>'GET', 'class'=>'form']) !!}
        	{!! Form::text('carigol', null,
						array(
							'class' => 'form-control',
							'placeholder' => 'search')) !!}
        	{!! Form::close() !!}
       	</div>

        {{-- <div class="pull-right"><span class="badge badge-warning">Sektor Info</span></div> --}}
    </div>
    <div class="block-content collapse in">
		<div class="table-toolbar">
			<div class="btn-group">
				<a href="{{url('/pembiayaan/creategol')}}" > <button class="btn btn-success">Tambah Kode Golongan <i class="icon-plus icon-white"></i></button></a>
            </div>
            <div class="btn-group pull-right">
                <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="{{url('pembiayaan/printpdfgol')}}" target="_blank">Print</a></li>
                    <li><a href="{{url('pembiayaan/savepdfgol')}}">Save as PDF</a></li>
                    <li><a href="{{url('pembiayaan/excelgol')}}">Export to Excel</a></li>
                </ul>
            </div>
        </div>    	
        <br>
    	<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Kode Golongan</th>
					<th>Keterangan</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = $golongan->firstItem() - 1 ; ?>
				@foreach($golongan as $value)
				<?php $no++ ;?>
					<tr >
						<td>{{ $no }}</td>
						<td>{{ $value -> sandi }}</td>
						<td>{{ $value -> keterangan }}</td>
						<td>
							<a href="{{url('pembiayaan/editgol', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-pencil"></span> </a>
							<a href="{{url('pembiayaan/deletegol', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-trash"></span></a>
						</td>
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
					<div class="pagination">{!! str_replace('/?', '?', $golongan->render()) !!}</div> 	
				</div>
				<div class="span4">
					
				</div>
		</div>
</div>

	
	

	
@stop
