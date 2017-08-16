@extends('layouts.home_master')

@section('content')

<div class="row-fluid">
    <!-- block -->
    <div class="block">
    	<div class="navbar navbar-inner block-header">
        	<div class="muted pull-left">Show Account Officer</div>
        	<div class="pull-right"><span class="badge badge-warning">Account Officer Info</span></div>
    	</div>
    <div class="block-content collapse in">

		<ul>
		
			<li>
					 
			ID  				 : {{ $datas-> id }} <br>
			kode Account Officer : {{ $datas-> kd_officer }} <br>
			keterangan 			 : {{ $datas-> nama }} <br>
			Otorisasi   		 : {{ $datas -> otorisasi }} <br>
			ao 			   		 : {{ $datas -> ao }} <br>
			created_at			 : {{ $datas-> created_at }} <br>
			
			</li>
		
		</ul>
		<a href="{{ URL::previous() }}" class="btn btn-primary btn-md">back</a>
		<!-- route('home') }} atau url('home') -->
		<br><hr>
	</div>
</div>
@stop