@extends('layouts.home_master')

@section('breadcrumb')

	<li class="">
		 <a href="#">Tabungan</a> <span class="divider">/</span>
	</li>
	<li class="active">
		 Kode Nasabah
	</li>
@stop

@section('link2')
		{{-- form --}}
        <!--/.fluid-container-->
        <link href="{{asset('vendors/datepicker.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('vendors/uniform.default.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('vendors/chosen.min.css')}}" rel="stylesheet" media="screen">

        <link href="{{asset('vendors/wysiwyg/bootstrap-wysihtml5.css')}}" rel="stylesheet" media="screen">

        <!-- <script src="vendors/jquery-1.9.1.js"></script> -->
        <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
        <script src="{{asset('vendors/jquery.uniform.min.js')}}"></script>
        <script src="{{asset('vendors/chosen.jquery.min.js')}}"></script>
        <script src="{{asset('vendors/bootstrap-datepicker.js')}}"></script>

        <script src="{{asset('vendors/wysiwyg/wysihtml5-0.3.0.js')}}"></script>
        <script src="{{asset('vendors/wysiwyg/bootstrap-wysihtml5.js')}}"></script>

        <script src="{{asset('vendors/wizard/jquery.bootstrap.wizard.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/form-validation.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.form-validator.min.js')}}"></script>
        
     <script src="{{asset('assets/scripts.js')}}"></script> 
        <script>

    jQuery(document).ready(function() {   
       FormValidation.init();
    });
    

        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
		$.validate();
        </script>
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
        <div class="muted pull-left">Edit Nasabah</div>
        <div class="pull-right"><span class="badge badge-warning">Nasabah Info</span></div>
    </div>
    <div class="block-content collapse in">
    	{!! Form::model($datas, array('route' => array('nasupdate', $datas->id), 'method'=>'PUT', 'class'=>'form-horizontal')) !!}
				<!-- model(menerima data, array('route' => array('alamat alias', menerimadata->id) -->
				
				<div class="controls">
					{!! Form::hidden('kdnas', null,
					array(
						'class' => 'input-xlarge uneditable-input',
						'placeholder' => 'Kode Nasabah')) !!}
				</div>

				<div class="control-group">
					{!! Form::label('kodenasabah', 'Kode Nasabah', array('class'=>'control-label')) !!}
					<div class="controls"><span class="input-xlarge uneditable-input">{{$datas->kdnas}}</span>
							@if($errors->has('kodenasabah'))
								<div class="alert alert-warning"> {{ $errors->first('kodenasabah') }} </div>
							@endif
							
					</div>
				</div>
				
				<div class="control-group">
					{!! Form::label('namanasabah', 'Nama Nasabah', array('class'=>'control-label')) !!}
					<div class="controls">
						{!! Form::text('nama', null,
							array(
								'class' => 'input-xlarge',
								'placeholder' => 'Nama Nasabah',
								'data-validation' => 'required')) !!}
							@if($errors->has('kodenasabah'))
								<div class="alert alert-warning"> {{ $errors->first('namanasabah') }} </div>
							@endif
					</div>
				</div>

				<div class="control-group">
					{!! Form::label('alamat', 'Alamat', array('class'=>'control-label')) !!}
					<div class="controls">
						{!! Form::textarea('alamat', null,
							array(
								'class'=>'input-xlarge',
								'style' => "width: 810px; height: 200px",
								'placeholder'=>'Alamat',
								'data-validation' => 'required')) !!}
							@if($errors->has('alamatnasabah'))
								<div class="alert alert-warning"> {{ $errors->first('alamatnasabah') }} </div>
							@endif
					</div>
				</div>	

				<div class="control-group">
					{!! Form::label('kelurahan', 'Kelurahan', array('class' => 'control-label')) !!}
					<div class="controls">
						{!! Form::text('kelurahan', null,
							array(
								'class' => 'input-xlarge',
								'placeholder' => 'Kelurahan',
								'data-validation' => 'required')) !!}
							@if($errors->has('kelurahan'))
								<div class="alert alert-warning"> {{ $errors->first('kelurahan') }} </div>
							@endif
					</div>
				</div>

				<div class="control-group">
					{!! Form::label('kecamatan', 'Kecamatan', array('class' => 'control-label')) !!}
					<div class="controls">
						{!! Form::text('kecamatan', null,
							array(
								'class' => 'input-xlarge',
								'placeholder' => 'Kecamatan',
								'data-validation' => 'required')) !!}
							@if($errors->has('kecamatan'))
								<div class="alert alert-warning"> {{ $errors->first('kecamatan') }} </div>
							@endif
					</div>
				</div>

				<div class="control-group">
					{!! Form::label('kota', 'Kota', array('class' => 'control-label')) !!}
					<div class="controls">
						{!! Form::text('kota', null,
							array(
								'class' => 'input-xlarge',
								'placeholder' => 'Kota',
								'data-validation' => 'required')) !!}
							@if($errors->has('kota'))
								<div class="alert alert-warning"> {{ $errors->first('kota') }} </div>
							@endif
					</div>
				</div>

				<div class="control-group">
					{!! Form::label('kodepos', 'Kode Pos', array('class'=>'control-label')) !!}
					<div class="controls">
						{!! Form::text('kdpos', null,
							array(
								'class' => 'input-xlarge',
								'placeholder' => 'Kode Pos',
								'data-validation' => 'number')) !!}
							@if($errors->has('kdposnasabah'))
								<div class="alert alert-warning"> {{ $errors->first('kdposnasabah') }} </div>
							@endif
					</div>
				</div>
				
				<div class="control-group">
					{!! Form::label('tempatlahir', 'Tempat Lahir', array('class' => 'control-label')) !!}
					<div class="controls">
						{!! Form::text('tptlahir', null,
							array(
								'class' => 'input-xlarge',
								'placeholder' => 'Tempat Lahir',
								'data-validation' => 'required')) !!}
							@if($errors->has('tempatlahir'))
								<div class="alert alert-warning"> {{ $errors->first('tempatlahir') }} </div>
							@endif
					</div>
				</div>

				<div class="control-group">
					{!! Form::label('lglahir', 'Tanggal Lahir', array('class'=>'control-label')) !!}
					<div class="controls">
						
						<input  type="text" name="tglahir" class="input-xlarge datepicker" data-validation="required" value={{date('d-m-Y', strtotime($datas->tglahir))}} >
						
							@if($errors->has('tglahirnasabah'))
								<div class="alert alert-warning"> {{ $errors->first('tglahirnasabah') }} </div>
							@endif
					</div>
				</div>

				<div class="control-group">
					{!! Form::label('namaibu', 'Nama Ibu', array('class'=>'control-label')) !!}
					<div class="controls">
						{!! Form::text('namaibu', null,
							array(
								'class' => 'input-xlarge',
								'placeholder' => 'Nama Ibu',
								'data-validation' => 'required')) !!}
							@if($errors->has('namaibunasabah'))
								<div class="alert alert-warning"> {{ $errors->first('namaibunasabah') }} </div>
							@endif
					</div>
				</div>

				<div class="control-group">
					{!! Form::label('telp', 'Telepon', array('class'=>'control-label')) !!}
					<div class="controls">
						{!! Form::text('telp', null,
							array(
								'class' => 'input-xlarge',
								'placeholder' => 'Telepon',
								'data-validation' => 'number')) !!}
							@if($errors->has('teleponnasabah'))
								<div class="alert alert-warning"> {{ $errors->first('teleponnasabah') }} </div>
							@endif
					</div>
				</div>

				<div class="control-group">
					{!! Form::label('noktp', 'No KTP', array('class'=>'control-label')) !!}
					<div class="controls">
						{!! Form::text('noktp', null,
							array(
								'class' => 'input-xlarge',
								'placeholder' => 'No KTP',
								'data-validation' => 'length number',
								'data-validation-length' => 'max15')) !!}
							@if($errors->has('noktpnasabah'))
								<div class="alert alert-warning"> {{ $errors->first('noktpnasabah') }} </div>
							@endif
					</div>	
				</div>

				<div class="control-group">
					{!! Form::label('npwp', 'No NPWP', array('class' => 'control-label')) !!}
					<div class="controls">
						{!! Form::text('npwp', null,
							array(
								'class' => 'input-xlarge',
								'placeholder' => 'No NPWP',
								'data-validation' => 'length number',
								'data-validation-length' => 'max15')) !!}
							@if($errors->has('npwpnasabah'))
								<div class="alert alert-warning"> {{ $errors->first('npwpnasabah') }} </div>
							@endif
					</div>
				</div>

				<div class="control-group">
					{!! Form::label('pekerjaan', 'Pekerjaan', array('class' => 'control-label')) !!}
					<div class="controls">
						{!! Form::text('pekerjaan', null,
							array(
								'class' => 'input-xlarge',
								'placeholder' => 'Pekerjaan',
								'data-validation' => 'required')) !!}
							@if($errors->has('pekerjaan'))
								<div class="alert alert-warning"> {{ $errors->first('pekerjaan') }} </div>
							@endif
					</div>
				</div>

				<div class="control-group">
					{!! Form::submit('Save', array('class'=>'btn btn-primary')) !!}
					
					<a href="{{ url('pembiayaan/indexnasabah') }}" class="btn btn-primary">Cancel</a>
				</div>

		{!! Form::close() !!}
    </div>
</div>
@stop