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
        <div class="muted pull-left">Input Daftar User</div>
        <div class="pull-right"><span class="badge badge-warning">User Info</span></div>
    </div>
    <div class="block-content collapse in">
    			{!! Form::open(['action'=>'userController@storeuser', 'method'=>'post', 'class'=>'form col-md-12 center-block']) !!}
                        <div class="form-group">
                            {!! Form::label('name') !!}
                            {!! Form::text('name', null,
                                array(
                                    'class' => 'form-control input-lg',
                                    'placeholder' => 'name')) !!}
                                @if($errors->has('name'))
                                    <div class="alert alert-warning"> {{ $errors->first('name') }} </div>
                                @endif
                        </div>  

                        <div class="form-group">
                            {!! Form::label('username') !!}
                            {!! Form::text('username', null,
                                array(
                                    'class' => 'form-control input-lg',
                                    'placeholder' => 'username')) !!}
                                @if($errors->has('username'))
                                    <div class="alert alert-warning"> {{ $errors->first('username') }} </div>
                                @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('inisial') !!}
                            {!! Form::select('inisial', $inisial)!!}
                                @if($errors->has('username'))
                                    <div class="alert alert-warning"> {{ $errors->first('inisial') }} </div>
                                @endif
                        </div>


                        <div class="form-group">
                            {!! Form::label('email') !!}
                            {!! Form::text('email', null,
                                array(
                                    'class'=>'form-control input-lg',
                                    'placeholder'=>'email@gmail.com')) !!}
                                @if($errors->has('email'))
                                    <div class="alert alert-warning"> {{ $errors->first('email') }} </div>
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
                            {!! Form::password('password',
                                array(
                                    'class'=>'form-control input-lg')) !!}
                                @if($errors->has('password'))
                                    <div class="alert alert-warning"> {{ $errors->first('password') }} </div>
                                @endif
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Register', array('class'=>'btn btn-primary ')) !!}
                            <a href="{{ url('users/daftaruser') }}" class="btn btn-primary">Cancel</a>
                        </div>

                        {!! Form::close() !!}
    </div>
</div>


@stop