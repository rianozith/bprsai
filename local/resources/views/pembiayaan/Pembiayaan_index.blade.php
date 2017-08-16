
@extends('layouts.home_master')

@section('title')
	Index Pembiayaan
@stop

@section('breadcrumb')

	<li class="">
		 <a href="#">Pembiayaan</a> <span class="divider">/</span>
	</li>
	<li class="active">
		 Index Pembiayaan
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
        
     <script src="{{asset('assets/scripts.js')}}"></script>      
     <script src="{{asset('assets/myscript.js')}}"></script>
     <script>
		$(document).ready(function(){   $('[data-toggle="tooltip"]').tooltip(); });
	 </script>
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
        </script>
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
        <div class="muted pull-left">Index Pembiayaan</div>
        <div class="pull-right">
        	<!-- form input untuk searching -->
        	{!! Form::open(['action'=>'pembiayaanController@searchpembiayaan', 'method'=>'GET', 'class'=>'form']) !!}
        	{!! Form::text('caripembiayaan', null,
						array(
							'class' => 'form-control',
							'placeholder' => 'cari pembiayaan')) !!}
        	{!! Form::close() !!}
       	</div>

        {{-- <div class="pull-right"><span class="badge badge-warning">Sektor Info</span></div> --}}
    </div>
    <div class="block-content collapse in">
		<div class="table-toolbar">
			
            
        </div>

        <br>
    	<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th><center>No Register</center></th>
					<th><center>Nama Pembiayaan</center></th>
					<th><center>No Rekening</center></th>
					<th><center>Alamat</center></th>
					<th><center>Nama AO</center></th>
					<th><center>Pengajuan Biaya</center></th>
					<th><center>Tanggal Permohonan</center></th>
					<th><center>Action</center></th>
				</tr>
			</thead>
			<tbody>
				<?php $no = $index->firstItem() - 1 ; ?>
				@foreach($index as $value)
				<?php $no++ ;?>
					<tr >
						<td>{{ $no }}</td>
						<td><?php echo $value -> noregister ?></td>
						<td><?php echo $value -> nama ?></td>
						<td><?php echo $value -> kdnas ?></td>
						<td><?php echo $value -> alamat ?></td>
						<td><?php echo $value -> namaao ?></td>
						<td><?php echo $model->rupiah($value -> pengajuanbiaya)?></td>
						<td><?php echo date('d-m-Y', strtotime($value -> tglmohon))?></td>
						
						<td>
							<a href="{{url('pembiayaan/showpembiayaan',$value->id )}}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Detail Pembiayaan Nasabah"><span class="icon-eye-open"></span></a>
							<a href="{{url('pembiayaan/editpembiayaan', $value->id )}}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit Pembiayaan"><span class="icon-pencil"></span> </a>
							<a href="{{url('pembiayaan/deletepembiayaan', $value->id )}}" class="btn btn-info btn-xs del" data-toggle="tooltip" title="Delete pembiayaan"><span class="icon-trash"></span></a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{-- end block colapse in--}}
				
	</div>
		<div class="row-fluid">
				
				<div class="span8 offset4">
					<div class="pagination">{!! str_replace('/?', '?', $index->render()) !!}</div> 	
				</div>
				
		</div>
</div>

	
	

	
@stop
