
@extends('layouts.home_master')


@section('content')
        

	@if(Session::has('pesan'))
		<div class="alert alert-success">
			{{ Session::get('pesan') }}
		</div>
		@endif

	<div class="row-fluid">
    <!-- block -->
    <div class="block">
    	<div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Kode Sektor</div>
        <div class="pull-right"><span class="badge badge-warning">Sektor Info</span></div>
    </div>
    <div class="block-content collapse in">
		@if (count($sektor))
		<ol>
			@foreach($sektor as $value)
				<li> 
					 ID           : {{ $value -> id }} <br>
					 kode sektor  : {{ $value -> kd_sektor1 }} <br>
					 Keterangan   : {{ $value -> ket }} <br>
					 Otorisasi    : {{ $value -> otorisasi }} <br>
					 created_at   : {{ $value -> created_at }} <br>
					 
					 					 
					<a href="" class="btn btn-primary btn-sm">lihat</a>
					<a href="" class="btn btn-primary btn-sm">ubah</a>
					<a href="" class="btn btn-primary btn-sm">hapus</a><br> <br>
				</li>
			@endforeach 
		</ol>
		@endif

		<div>
			<a href="pembiayaan/createsektor" > <button  class="btn btn-primary btn-md">tambah kode sektor</button> </a>
			<a href="pembiayaan/indexsektor" > <button  class="btn btn-primary btn-md">index kode sektor</button> </a>
		</div>

    </div>
	
	
@stop
