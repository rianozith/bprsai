@extends('layouts.home_master')

@section('breadcrumb')

	<li class="">
		 <a href="#">Tabungan</a> <span class="divider">/</span>
	</li>
	<li class="active">
		 Kode Account Officer
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
        <div class="muted pull-left">Edit Kode officer</div>
        <div class="pull-right"><span class="badge badge-warning">Officer Info</span></div>
    </div>
    <div class="block-content collapse in">
    	{!! Form::model($datas, array('route' => array('aoupdate', $datas->id), 'method'=>'PUT')) !!}
				<!-- model(menerima data, array('route' => array('alamat alias', menerimadata->id) -->
				<div class="form-group">
					{!! Form::label('kd_officer', 'Kode Officer') !!}
					{!! Form::text('kd_officer', null,
						array(
							'class' => 'form-control',
							'placeholder' => 'Kode Officer')) !!}
						@if($errors->has(''))
							<div class="alert alert-warning"> {{ $errors->first('') }} </div>
						@endif
				</div>	

				<div class="form-group">
					{!! Form::label('nama', 'nama') !!}
					{!! Form::textarea('nama', null,
						array(
							'class'=>'form-control',
							'placeholder'=>'Nama')) !!}
						@if($errors->has(''))
							<div class="alert alert-warning"> {{ $errors->first('') }} </div>
						@endif
				</div>

				<div class="form-group">
					{!! Form::label('inisial', 'Inisial') !!}
					{!! Form::textarea('inisial', null,
						array(
							'class'=>'form-control',
							'placeholder'=>'Nama')) !!}
						@if($errors->has(''))
							<div class="alert alert-warning"> {{ $errors->first('') }} </div>
						@endif
				</div>
				
				<div class="checkbox">
			      <label>{!! Form::checkbox('ao', 'Y') !!} AO</label>
			    </div>
				<div class="form-group">
					{!! Form::submit('Save', array('class'=>'btn btn-primary')) !!}
					
					<a href="{{ url('pembiayaan/indexao') }}" class="btn btn-primary">Cancel</a>
				</div>

		{!! Form::close() !!}
    </div>
</div>
@stop