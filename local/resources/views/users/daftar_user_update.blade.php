@extends('layouts.home_master')

@section('breadcrumb')

	<li class="">
		 <a href="#">Users</a> <span class="divider">/</span>
	</li>
	<li class="active">
		 Daftar User
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
        <div class="muted pull-left">Edit Daftar User</div>
        <div class="pull-right"><span class="badge badge-warning">User Info</span></div>
    </div>
    <div class="block-content collapse in">
    	{!! Form::model($datas, array('route' => array('userupdate', $datas->id), 'method'=>'PUT')) !!}
				<!-- model(menerima data, array('route' => array('alamat alias', menerimadata->id) -->
				<div class="form-group">
					{!! Form::label('nama', 'Nama') !!}
					{!! Form::text('name', null,
						array(
							'class' => 'form-control',
							'placeholder' => 'Nama')) !!}
						@if($errors->has(''))
							<div class="alert alert-warning"> {{ $errors->first('') }} </div>
						@endif
				</div>	

				<div class="form-group">
					{!! Form::label('username', 'Username') !!}
					{!! Form::text('username', null,
						array(
							'class' => 'form-control',
							'placeholder' => 'Username')) !!}
						@if($errors->has(''))
							<div class="alert alert-warning"> {{ $errors->first('') }} </div>
						@endif
					
				</div>	

				<div class="form-group">
					{!! Form::label('inisial', 'Inisial') !!}
					{!! Form::text('inisial', null,
						array(
							'class' => 'form-control',
							'placeholder' => 'Inisial User')) !!}
						@if($errors->has(''))
							<div class="alert alert-warning"> {{ $errors->first('') }} </div>
						@endif
					
				</div>	

				<div class="form-group">
					{!! Form::label('email') !!}
					{!! Form::text('email', null,
						array(
							'class' => 'form-control',
							'placeholder' => 'Email')) !!}
						@if($errors->has(''))
							<div class="alert alert-warning"> {{ $errors->first('') }} </div>
						@endif
				</div>

				<div class="form-group">
					{!! Form::label('role') !!}
					{!! Form::select('role', $role); !!}
						@if($errors->has(''))
							<div class="alert alert-warning"> {{ $errors->first('') }} </div>
						@endif
				</div>

				<div class="form-group">
					{!! Form::label('password') !!}
					{!! Form::password('password', null,
						array(
							'class' => 'form-control',
							'placeholder' => 'Password')) !!}
						@if($errors->has(''))
							<div class="alert alert-warning"> {{ $errors->first('') }} </div>
						@endif
				</div>

				<div class="form-group">
					{!! Form::submit('Save', array('class'=>'btn btn-primary')) !!}
					
					<a href="{{ url('users/daftaruser') }}" class="btn btn-primary">Cancel</a>
				</div>

		{!! Form::close() !!}
    </div>
</div>
@stop