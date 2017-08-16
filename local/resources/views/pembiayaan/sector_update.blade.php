@extends('layouts.home_master')

@section('breadcrumb')

	<li class="">
		 <a href="#">Tabungan</a> <span class="divider">/</span>
	</li>
	<li class="active">
		 Kode Sektor
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
        <div class="muted pull-left">Edit Kode Sektor</div>
        <div class="pull-right"><span class="badge badge-warning">Sektor Info</span></div>
    </div>
    <div class="block-content collapse in">
    	{!! Form::model($datas, array('route' => array('updatesek', $datas->id), 'method'=>'PUT')) !!}
				<!-- model(menerima data, array('route' => array('alamat alias', menerimadata->id) -->
				<div class="form-group">
					{!! Form::label('kd_sektor1', 'Kode sektor') !!}
					{!! Form::text('kd_sektor1', null,
						array(
							'class' => 'form-control',
							'placeholder' => 'Kode Sektor')) !!}
						@if($errors->has(''))
							<div class="alert alert-warning"> {{ $errors->first('') }} </div>
						@endif
				</div>	

				<div class="form-group">
					{!! Form::label('ket', 'keterangan') !!}
					{!! Form::textarea('ket', null,
						array(
							'class'=>'form-control',
							'placeholder'=>'Keterangan')) !!}
						@if($errors->has(''))
							<div class="alert alert-warning"> {{ $errors->first('') }} </div>
						@endif
				</div>	

				<div class="checkbox">
			      <label>{!! Form::checkbox('otorisasi', 'Y') !!} Otorisasi</label>
			    </div>
				
				<div class="form-group">
					{!! Form::submit('Save', array('class'=>'btn btn-primary')) !!}
					
					<a href="{{ url('pembiayaan/indexsektor') }}" class="btn btn-primary">Cancel</a>
				</div>

		{!! Form::close() !!}
    </div>
</div>
@stop