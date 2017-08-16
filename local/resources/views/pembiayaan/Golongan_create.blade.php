@extends('layouts.home_master')

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

	<ul>	
	    @foreach($errors -> all() as $error)
	    	<div class="alert alert-warning">
	    		<button type="button" class="close" data-dismiss="alert">&times;</button>
	        	<li>{{ $error }}</li>
	        </div>
	    @endforeach    
	</ul>

<div class="row-fluid">
    <!-- block -->
    <div class="block">
    	<div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Input Kode Golongan</div>
        <div class="pull-right"><span class="badge badge-warning">Golongan Info</span></div>
    </div>
    <div class="block-content collapse in">
    	{!! Form::open(['action'=>'golonganController@storegol', 'method'=>'post', 'class'=>'form']) !!}
				<div class="form-group">
					{!! Form::label('sandi', 'Kode Golongan') !!}
					{!! Form::text('sandi', null,
						array(
							'class' => 'form-control',
							'placeholder' => 'Kode Golongan')) !!}
						@if($errors->has('kodegolongan'))
							<div class="alert alert-warning"> {{ $errors->first('kodegolongan') }} </div>
						@endif
				</div>	

				<div class="form-group">
					{!! Form::label('keterangan', 'keterangan') !!}
					{!! Form::textarea('keterangan', null,
						array(
							'class'=>'form-control',
							'placeholder'=>'Keterangan')) !!}
						@if($errors->has('ketgolongan'))
							<div class="alert alert-warning"> {{ $errors->first('ketgolongan') }} </div>
						@endif
				</div>	

				<div class="form-group">
					{!! Form::submit('Save', array('class'=>'btn btn-primary')) !!}
					
					<a href="{{ url('pembiayaan/indexgol') }}" class="btn btn-primary">Cancel</a>
				</div>

		{!! Form::close() !!}
    </div>
</div>


@stop