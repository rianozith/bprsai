
@extends('layouts.home_master')

@section('title')
	Kode Jenis Penggunaan index
@stop

@section('breadcrumb')

	<li class="">
		 <a href="#">Tabungan</a> <span class="divider">/</span>
	</li>
	<li class="active">
		 Kode Jenis Penggunaan
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
        <div class="muted pull-left">Kode Jenis Penggunaan</div>
        <div class="pull-right">
        	{!! Form::open(['action'=>'jpeggnController@searchjpeggn', 'method'=>'GET', 'class'=>'form']) !!}
        	{!! Form::text('carijpeggn', null,
						array(
							'class' => 'form-control',
							'placeholder' => 'search')) !!}
        	{!! Form::close() !!}
       	</div>

        {{-- <div class="pull-right"><span class="badge badge-warning">Account Officer Info</span></div> --}}
    </div>
    <div class="block-content collapse in">
		<div class="table-toolbar">
			<div class="btn-group">
				<a href="{{url('/pembiayaan/createjpeggn')}}" > <button class="btn btn-success">Tambah Jenis Penggunaan <i class="icon-plus icon-white"></i></button></a>
            </div>
            <div class="btn-group pull-right">
                <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="{{url('pembiayaan/printpdfjpeggn')}}" target="_blank">Print</a></li>
                    <li><a href="{{url('pembiayaan/savepdfjpeggn')}}">Save as PDF</a></li>
                    <li><a href="{{url('pembiayaan/exceljpeggn')}}">Export to Excel</a></li>
                </ul>
            </div>
        </div>    	
        <br>
    	<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Kode Jenis Penggunaan</th>
					<th>Keterangan</th>
					<th>Otorisasi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = $jnspeng->firstItem() - 1 ; ?>
				@foreach($jnspeng as $value)
				<?php $no++ ;?>
					<tr >
						<td>{{ $no }}</td>
						<td>{{ $value -> kd_jpeggn }}</td>
						<td>{{ $value -> ket }}</td>
						<td>{{ $value -> otorisasi }}</td>
						<td>
							<a href="{{url('pembiayaan/editjpeggn', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-pencil"></span> </a>
							<a href="{{url('pembiayaan/deletejpeggn', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-trash"></span></a>
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
					<div class="pagination">{!! str_replace('/?', '?', $jnspeng->render()) !!}</div> 	
				</div>
				<div class="span4">
					
				</div>
		</div>
</div>

	
	

	
@stop
