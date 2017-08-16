
@extends('layouts.home_master')

@section('title')
	Kode Nasabah Index
@stop

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
        
     <script src="{{asset('assets/scripts.js')}}"></script> 
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
        <div class="muted pull-left">Kode Nasabah</div>
        <div class="pull-right">
        	<!-- form input untuk searching -->
        	{!! Form::open(['action'=>'nasabahController@searchnas', 'method'=>'GET', 'class'=>'form']) !!}
        	{!! Form::text('carinas', null,
						array(
							'class' => 'form-control',
							'placeholder' => 'Nama/Kode Nasabah/No KTP')) !!}
        	{!! Form::close() !!}
       	</div>

        {{-- <div class="pull-right"><span class="badge badge-warning">Sektor Info</span></div> --}}
    </div>
    <div class="block-content collapse in">
		<div class="table-toolbar">
			<div class="btn-group">
				<a href="{{url('/pembiayaan/createnasabah')}}" > <button class="btn btn-success">Tambah Nasabah <i class="icon-plus icon-white"></i></button></a>
            </div>
            <div class="btn-group pull-right">
                <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="{{url('pembiayaan/printpdfnasabah')}}" target="_blank">Print</a></li>
                    <li><a href="{{url('pembiayaan/savepdfnasabah')}}">Save as PDF</a></li>
                    <li><a href="{{url('pembiayaan/excelnasabah')}}">Export to Excel</a></li>
                </ul>
            </div>
        </div>    	
        <br>
    	<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th><center>Kode Nasabah</center></th>
					<th><center>Nama</center></th>
					<th><center>Alamat</center></th>
					<th><center>Kode Pos</center></th>
					<th><center>Tempat Lahir</center></th>
					<th><center>Tgl Lahir</center></th>
					<th><center>Umur</center></th>
					<th><center>Ibu Kandung</center></th>					
					<th><center>Telp</center></th>
					<th><center>No KTP</center></th>
					<th><center>NPWP</center></th>
					<th><center>Pekerjaan</center></th>
					<th><center>Action</center></th>
				</tr>
			</thead>
			<tbody>
				<?php $no = $nasabah->firstItem() - 1 ; ?>
				@foreach($nasabah as $value)
				<?php $no++ ;?>
					<tr >
						<td>{{ $no }}</td>
						<td><a href="{{url('pembiayaan/shownasabah', $value->id)}}"><?php echo $value -> kdnas ?></a></td>
						<td><?php echo $value -> nama ?></td>
						<td><?php echo $value -> alamat,' ',$value -> kelurahan,' ', $value -> kecamatan,' ', $value -> kota ?></td>
						<td><?php echo $value -> kdpos ?></td>
						<td><?php echo $value -> tptlahir?></td>
						<td>{{date('d-m-Y', strtotime($value -> tglahir))}}</td>
						<td><?php echo $value -> umur ?></td>
						<td><?php echo $value -> namaibu ?></td>
						<td><?php echo $value -> telp ?></td>
						<td><?php echo $value -> noktp ?></td>
						<td><?php echo $value -> npwp ?></td>
						<td><?php echo $value -> pekerjaan ?></td>
						<td>
							<a href="{{url('pembiayaan/editnasabah', $value->id )}}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit Nasabah"><span class="icon-pencil"></span> </a>
							<a href="{{url('pembiayaan/deletenasabah', $value->id )}}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Delete Nasabah"><span class="icon-trash"></span></a>
							<a href="{{url('pembiayaan/createpembiayaan', $value->id )}}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Pembiayaan Nasabah"><span class="icon-briefcase"></span></a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{-- end block colapse in--}}
				
	</div>
		<div class="row-fluid">
				
				<div class="span8 offset4">
					<div class="pagination">{!! str_replace('/?', '?', $nasabah->render()) !!}</div> 	
				</div>
				
		</div>
</div>

	
	

	
@stop
