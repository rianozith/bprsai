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
        <script src="{{asset('vendors/tinymce/js/tinymce/jquery.tinymce.min.js')}}"></script>

        <script src="{{asset('vendors/wizard/jquery.bootstrap.wizard.min.js')}}"></script>

    	<script type="text/javascript" src="{{asset('vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/form-validation.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.price_format.2.0.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.form-validator.min.js')}}"></script>
        
     	  <script src="{{asset('assets/scripts.js')}}"></script>
        <script src="{{asset('assets/myscript.js')}}"></script>
        <script src="{{asset('assets/terbilang.js')}}"></script>
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
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });

        $.validate();

        

        </script>
@stop

@section('content')
	@if(count($errors) > 0)  
        <div class="alert alert-block">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h4 class="alert-heading">Warning!</h4>
          Terjadi Kesalahan Input, Silahkan Cek Kembali 
          </div>
      @endif

                    <!-- wizard -->
                          <div class="row-fluid section">
                               <!-- block -->
                              <div class="block">
                                  <div class="navbar navbar-inner block-header">
                                      <div class="muted pull-left">Data Calon Nasabah</div>
                                      <div class="pull-right">
                                          <!-- form input untuk searching -->
                                          
                                      </div>
                                  </div>
                                  <div class="block-content collapse in">
                                      <div class="span12">
                                          <div id="rootwizard">
                                              <div class="navbar">
                                                <div class="navbar-inner">
                                                  <div class="container">
                                              <ul>
                                                  <li><a href="#tab1" data-toggle="tab">Biodata Nasabah</a></li>
                                                  <li><a href="#tab2" data-toggle="tab">Input Pembiayaan</a></li>
                                                  <li><a href="#tab3" data-toggle="tab">Input Pembiayaan</a></li>
                                              </ul>
                                               </div>
                                                </div>
                                              </div>
                                              <div id="bar" class="progress progress-striped active">
                                                <div class="bar"></div>
                                              </div>









{{-- 'action'=>'pembiayaanController@storepembiayaan', --}}
                                              
                                              
                                              
                                              {!! Form::model($values, array('route' => array('pembiayaanupdate', $values->idx), 'method'=>'PUT', 'class'=>'form-horizontal', 'id'=>'formEditPembiayaan')) !!}
                                              <div class="tab-content">
                                                    
                                                  <div class="tab-pane" id="tab1">  
                                                      <div class="control-group">
                                                        {!! Form::label('kodenasabah', 'Kode Nasabah', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                            <span class="input-xlarge uneditable-input">{{$values->kdnas}}</span>
                                                        </div>                    
                                                      </div>  

                                                      <div class="control-group">
                                                        {!! Form::label('namanasabah', 'Nama Nasabah', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->nama}}</span>
                                                        </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('alamat', 'Alamat', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input " style ="width: 810px; height: 200px">{{$values->alamat}}</span>
                                                          </div>
                                                      </div>  

                                                      <div class="control-group">
                                                        {!! Form::label('kodepos', 'Kode Pos', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->kdpos}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('tptlahir', 'Tempat Lahir', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->tptlahir}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('tglahir', 'Tanggal Lahir', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$model->converttgl($values->tglahir)}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('umur', 'Umur', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->umur}}</span>
                                                          </div>
                                                      </div>
                                                      
                                                      <div class="control-group">
                                                        {!! Form::label('namaibu', 'Nama Ibu', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->namaibu}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('telp', 'Telepon', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->telp}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('noktp', 'No KTP', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->noktp}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('npwp', 'No NPWP', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->npwp}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('pekerjaan', 'Pekerjaan', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->pekerjaan}}</span>
                                                          </div>
                                                      </div>
                                                  </div> <!-- end tab1-->

                                                  <div class="tab-pane" id="tab2">

                                                          {!! Form::hidden('id_nasabah', null) !!}
                                                  
                                                          <div class="control-group">
                                                            {!! Form::label('namaao', 'Inisial AO', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('namaao', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'readonly' )) !!}
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('noregister', 'No Register', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('noregister', null,
                                                                array(
                                                                  'id' => 'noregister',
                                                                  'class' => 'input-xlarge ',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('noregister'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('noregister') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('pengajuanbiaya', 'Nilai Pembiayaan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('pengajuanbiaya', null,
                                                                array(
                                                                  'id' => 'nilaibiaya',
                                                                  'class' => 'input-xlarge',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('pengajuanbiaya'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('pengajuanbiaya') }} </span>
                                                                  @endif
                                                              {!! Form::hidden('pengajuanbiayainteger', null,
                                                                array(
                                                                  'id' => 'nilaibiayainteger',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {!! Form::hidden('pengajuanbiayaterbilang', null,
                                                                array(
                                                                  'id' => 'nilaibiayaterbilang',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {{-- <div id="nilaibiayaterbilang1"></div> --}}
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('tujuanbiaya', 'Tujuan Pembiayaan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('tujuanbiaya', null,
                                                                array(
                                                                  'id' => 'tujuanbiaya',
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}

                                                                  @if($errors->first('tujuanbiaya'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('tujuanbiaya') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('jnspenggunaan', 'Jenis Penggunaan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('jnspenggunaan', $jpeggn, null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('jnspenggunaan'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('jnspenggunaan') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>   

                                                          <div class="control-group">
                                                            {!! Form::label('jangkawaktu', 'Jangka Waktu', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('jangkawaktu', null,
                                                                array(
                                                                  'class' => 'input-large',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'number length',
                                                                  'data-validation-length' => 'max3')) !!}<span> Bulan</span>
                                                                  @if($errors->first('jangkawaktu'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('jangkawaktu') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group" >
                                                            {!! Form::label('jnspmbiayaan', 'Jenis Pembiayaan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('jnspmbiayaan', [
                                                                'mudhorobah' => 'Mudhorobah',
                                                                'murabahah' => 'Murabahah',
                                                                'qord' => 'Qord',
                                                                'rahn' => 'Rahn'],null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'id' => 'jnspmbiayaan',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('jnspmbiayaan'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('jnspmbiayaan') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group" id="bagihasil1">
                                                            {!! Form::label('bagihasilbank', 'Bagi Hasil Untuk Bank', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('bagihasilbank', null,
                                                                array(
                                                                  'id' => 'bagihasilbank',
                                                                  'class' => 'input-large',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  <span>%</span>
                                                                  @if($errors->first(''))
                                                                    <span class="alert alert-warning"> {{ $errors->first('') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group" id="bagihasil2">
                                                            {!! Form::label('bagihasilnasabah', 'Bagi Hasil Untuk Nasabah', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('bagihasilnasabah', null,
                                                                array(
                                                                  'id' => 'bagihasilnasabah',
                                                                  'class' => 'input-large',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  <span>%</span>
                                                                  @if($errors->first(''))
                                                                    <span class="alert alert-warning"> {{ $errors->first('') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>
                                                          
                                                          <div class="control-group">
                                                            {!! Form::label('tglmohon', 'Tanggal Permohonan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('tglmohon', $model->converttgl(null),
                                                                array(
                                                                  'class' => 'input-xlarge datepicker',
                                                                  'placeholder' => '')) !!}
                                                                  @if($errors->first('tglmohon'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('tglmohon') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('marginbank', 'Margin Bank', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('marginbank', null,
                                                                array(
                                                                  'id' => 'marginbank',
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('marginbank'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('marginbank') }} </span>
                                                                  @endif
                                                              {!! Form::hidden('marginbankinteger', null,
                                                                array(
                                                                  'id' => 'marginbankinteger',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {!! Form::hidden('marginbankterbilang', null,
                                                                array(
                                                                  'id' => 'marginbankterbilang',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {{-- <div id="marginbankterbilang1"></div> --}}
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('angsuranpokok', 'Angsuran Pokok /bulan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('angsuranpokok', null,
                                                                array(
                                                                  'id' => 'angsuranpokok',
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('angsuranpokok'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('angsuranpokok') }} </span>
                                                                  @endif
                                                              {!! Form::hidden('angsuranpokokinteger', null,
                                                                array(
                                                                  'id' => 'angsuranpokokinteger',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {!! Form::hidden('angsuranpokokterbilang', null,
                                                                array(
                                                                  'id' => 'angsuranpokokterbilang',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {{-- <div id="angsuranpokokterbilang1"></div> --}}
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('angsuranmargin', 'Angsuran Margin /bulan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('angsuranmargin', null,
                                                                array(
                                                                  'id' => 'angsuranmargin',
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('angsuranmargin'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('angsuranmargin') }} </span>
                                                                  @endif
                                                              {!! Form::hidden('angsuranmargininteger', null,
                                                                array(
                                                                  'id' => 'angsuranmargininteger',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {!! Form::hidden('angsuranmarginterbilang', null,
                                                                array(
                                                                  'id' => 'angsuranmarginterbilang',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {{-- <div id="angsuranmarginterbilang1"></div> --}}
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('angsuranpokokakhir', 'Angsuran Pokok Jatuh Tempo', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('angsuranpokokakhir', null,
                                                                array(
                                                                  'id' => 'angsuranpokokakhir',
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}<a class="btn " id="jtpokok">total</a>
                                                                  @if($errors->first('angsuranpokokakhir'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('angsuranpokokakhir') }} </span>
                                                                  @endif
                                                              {!! Form::hidden('angsuranpokokakhirinteger', null,
                                                                array(
                                                                  'id' => 'angsuranpokokakhirinteger',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {!! Form::hidden('angsuranpokokakhirterbilang', null,
                                                                array(
                                                                  'id' => 'angsuranpokokakhirterbilang',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {{-- <div id="angsuranpokokakhirterbilang1"></div> --}}
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('angsuranmarginakhir', 'Angsuran Margin Jatuh Tempo', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('angsuranmarginakhir', null,
                                                                array(
                                                                  'id' => 'angsuranmarginakhir',
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}<a class="btn " id="jtmargin">total</a>
                                                                  @if($errors->first('angsuranmarginakhir'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('angsuranmarginakhir') }} </span>
                                                                  @endif
                                                              {!! Form::hidden('angsuranmarginakhirinteger', null,
                                                                array(
                                                                  'id' => 'angsuranmarginakhirinteger',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {!! Form::hidden('angsuranmarginakhirterbilang', null,
                                                                array(
                                                                  'id' => 'angsuranmarginakhirterbilang',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {{-- <div id="angsuranmarginakhirterbilang1"></div> --}}
                                                            </div>
                                                          </div>
                                                          
                                                          <div class="control-group">
                                                            {!! Form::label('biayatagih', 'Biaya Penagihan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('biayatagih', null,
                                                                array(
                                                                  'id' => 'biayatagih',
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('biayatagih'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('biayatagih') }} </span>
                                                                  @endif
                                                              {!! Form::hidden('biayatagihinteger', null,
                                                                array(
                                                                  'id' => 'biayatagihinteger',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {!! Form::hidden('biayatagihterbilang', null,
                                                                array(
                                                                  'id' => 'biayatagihterbilang',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {{-- <div id="biayatagihterbilang1"></div> --}}
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('biayaadmin', 'Biaya Administrasi', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('biayaadmin', null,
                                                                array(
                                                                  'id' => 'biayaadmin',
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('biayaadmin'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('biayaadmin') }} </span>
                                                                  @endif
                                                              {!! Form::hidden('biayaadmininteger', null,
                                                                array(
                                                                  'id' => 'biayaadmininteger',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {!! Form::hidden('biayaadminterbilang', null,
                                                                array(
                                                                  'id' => 'biayaadminterbilang',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {{-- <div id="biayaadminterbilang1"></div> --}}
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('totalkewajiban', 'Total Kewajiban', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('totalkewajiban', null,
                                                                array(
                                                                  'id' => 'totalkewajiban',
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}<a class="btn " id="totalwajib">total</a>
                                                                  @if($errors->first('totalkewajiban'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('totalkewajiban') }} </span>
                                                                  @endif
                                                              {!! Form::hidden('totalkewajibaninteger', null,
                                                                array(
                                                                  'id' => 'totalkewajibaninteger',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {!! Form::hidden('totalkewajibanterbilang', null,
                                                                array(
                                                                  'id' => 'totalkewajibanterbilang',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {{-- <div id="totalkewajibanterbilang1"></div> --}}
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('brgjaminan', 'Barang Jaminan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::textarea('brgjaminan', null,
                                                                array(
                                                                  'class'=>'input-xlarge ',
                                                                  'style' => "width: 810px; height: 200px",
                                                                  'placeholder'=>'Barang Jaminan',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('brgjaminan'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('brgjaminan') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>  

                                                          <div class="control-group">
                                                            {!! Form::label('kepemilikanjaminan', 'Kepemilikan Jaminan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::radio('kepemilikanjaminan', 'Pribadi', null,['id'=>'jaminanradio1'])!!} <b>Pribadi &nbsp;</b>
                                                              {!! Form::radio('kepemilikanjaminan', 'Orang Lain', null,['id'=>'jaminanradio2'])!!} <b>Orang Lain</b>
                                                                  @if($errors->first('kepemilikanjaminan'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('kepemilikanjaminan') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group" id="identitasjaminan1"  >
                                                              {!! Form::label('identitasjaminan', 'Identitas Jaminan', array('class' => 'control-label')) !!}
                                                              <div class="controls" >

                                                                  <div class="control-group">
                                                                    {!! Form::label('jaminannama', 'Nama', array('class' => 'control-label')) !!}
                                                                      <div class="controls">
                                                                        {!! Form::text('jaminannama', null, ['data-validation'=>'alphanumeric']) !!}
                                                                      </div>
                                                                  </div>

                                                                  <div class="control-group">
                                                                    {!! Form::label('jaminanumur',  'Umur', array('class' => 'control-label')) !!}
                                                                      <div class="controls">
                                                                        {!! Form::text('jaminanumur', null, ['data-validation'=>'number length', 'data-validation-length' => 'max3']) !!}
                                                                      </div>
                                                                  </div>

                                                                  <div class="control-group">
                                                                    {!! Form::label('jaminanpekerjaan', 'Pekerjaan', array('class' => 'control-label')) !!}
                                                                      <div class="controls">
                                                                        {!! Form::text('jaminanpekerjaan', null, ['data-validation'=>'alphanumeric']) !!}
                                                                      </div>
                                                                  </div>

                                                                  <div class="control-group">
                                                                    {!! Form::label('jaminanalamat', 'Alamat', array('class' => 'control-label')) !!}
                                                                      <div class="controls">
                                                                        {!! Form::textarea('jaminanalamat', null, ['style' => "width: 310px; height: 100px",]) !!}
                                                                      </div>
                                                                  </div>

                                                                  <div class="control-group">
                                                                    {!! Form::label('jaminanktp', 'No KTP', array('class' => 'control-label')) !!}
                                                                      <div class="controls">
                                                                        {!! Form::text('jaminanktp', null, ['data-validation'=>'number length', 'data-validation-length' => 'max15']) !!}
                                                                      </div>
                                                                  </div>

                                                              </div>
                                                          </div>



                                                          <div class="control-group">
                                                            {!! Form::label('pemilikjaminan', 'Pemilik Jaminan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('pemilikjaminan', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('pemilikjaminan'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('pemilikjaminan') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('agunan', 'Agunan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('agunan', $agunan, null,
                                                                array(
                                                                  'id' => 'agunan',
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('agunan'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('agunan') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group" id="">
                                                            {!! Form::label('nilaiagunan', 'Nilai Agunan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('nilaiagunan', null,
                                                                array(
                                                                  'id' => 'nilaiagunan',
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first(''))
                                                                    <span class="alert alert-warning"> {{ $errors->first('nilaiagunan') }} </span>
                                                                  @endif
                                                              {!! Form::hidden('nilaiagunaninteger', null,
                                                                array(
                                                                  'id' => 'nilaiagunaninteger',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {!! Form::hidden('nilaiagunanterbilang', null,
                                                                array(
                                                                  'id' => 'nilaiagunanterbilang',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {{-- <div id="nilaiagunanterbilang1"></div> --}}
                                                            </div>
                                                          </div>

                                                          <div class="control-group" id="njop1">
                                                            {!! Form::label('njop', 'Nilai NJOP', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('njop', null,
                                                                array(
                                                                  'id' => 'njop',
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first(''))
                                                                    <span class="alert alert-warning"> {{ $errors->first('') }} </span>
                                                                  @endif
                                                              {!! Form::hidden('njopinteger', null,
                                                                array(
                                                                  'id' => 'njopinteger',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {!! Form::hidden('njopterbilang', null,
                                                                array(
                                                                  'id' => 'njopterbilang',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {{-- <div id="njopterbilang1"></div> --}}
                                                            </div>
                                                          </div>

                                                          <div class="control-group" >
                                                            {!! Form::label('ditaksasioleh', 'Ditaksasi Oleh', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('ditaksasioleh', null,
                                                                array(
                                                                  'id' => 'ditaksasioleh',
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                  @if($errors->first(''))
                                                                    <span class="alert alert-warning"> {{ $errors->first('ditaksasioleh') }} </span>
                                                                  @endif
                                                              
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('hrgperolehan', 'Harga Perolehan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('hrgperolehan', null,
                                                                array(
                                                                  'id' => 'hrgperolehan',
                                                                  'class' => 'input-xlarge ',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!} <a class="btn" id="perolehan">total</a>
                                                                  @if($errors->first('hrgperolehan'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('hrgperolehan') }} </span>
                                                                  @elseif($errors->first('hrgperolehaninteger'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('hrgperolehaninteger') }} </span>
                                                                  @endif
                                                              {!! Form::hidden('hrgperolehaninteger', null,
                                                                array(
                                                                  'id' => 'hrgperolehaninteger',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {!! Form::hidden('hrgperolehanterbilang', null,
                                                                array(
                                                                  'id' => 'hrgperolehanterbilang',
                                                                  'class' => 'input-xlarge')) !!}
                                                              {{-- <div id="hrgperolehanterbilang1"></div> --}}
                                                            </div>
                                                          </div>

                                                  </div> <!-- end tab 2-->

                                                  <div class="tab-pane" id="tab3">

                                                          <div class="control-group">
                                                            {!! Form::label('sifata', 'Sifat A', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('sifata', null,
                                                                array(
                                                                  'class' => 'input-large',
                                                                  'placeholder' => 'Default 2',
                                                                  'data-validation' => 'required' )) !!}
                                                                  @if($errors->first(''))
                                                                    <span class="alert alert-warning"> {{ $errors->first('') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>
                                                  
                                                          <div class="control-group">
                                                            {!! Form::label('golongan', 'Golongan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('golongan', $golongan, null) !!}
                                                                  @if($errors->first('golongan'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('golongan') }} </span>
                                                                  @endif                                                                
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('sektor', 'Sektor Ekonomi', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('sektor', $sektor, null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('sektor'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('sektor') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('wilayah', 'Wilayah', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('wilayah', $wilayah, null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('wilayah'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('wilayah') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group" >
                                                            {!! Form::label('ikat', 'Jenis Pengikat', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('ikat',$ikat,null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'id'=>'ikat1',
                                                                  'data-validation' => 'required')) !!}
                                                              @if($errors->first('ikat'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('ikat') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('metodebagihasil', 'Metode Bagi Hasil', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('metodebghasil', [
                                                                1 => 'Profit Sharing',
                                                                2 => 'Non Profit Sharing'],null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('metodebagihasil'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('metodebagihasil') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('tujuankepemilikan', 'Tujuan Kepemilikan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('tujuankepemilikan', [
                                                                71 => 'Kepemilikan rumah yang dijamin dengan hak tanggungan pertama dengan tujuan untuk dihuni',
                                                                72 => 'Kepemilikan kendaraan bermotor',
                                                                73 => 'Lainnya'],null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('tujuankepemilikan'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('tujuankepemilikan') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('lokasiusaha', 'Lokasi Usaha', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('lokasiusaha', $dati, null,
                                                                array(
                                                                  'class' => 'input-xlarge ',
                                                                  'data-validation' => 'required')) !!}
                                                                   @if($errors->first('lokasiusaha'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('lokasiusaha') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('namapembiayaan', 'Nama Pembiayaan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('namapembiayaan', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('namapembiayaan'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('namapembiayaan') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('golpiutang', 'Golongan Piutang', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('golpiutang',[
                                                                1 => 'Usaha Mikro',
                                                                2 => 'Usaha Kecil',
                                                                3 => 'Usaha Menengah',
                                                                4 => 'Lainnya'],null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '',
                                                                  'data-validation' => 'required')) !!}
                                                                  @if($errors->first('golpiutang'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('golpiutang') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('tglrealisasi', 'Tanggal Realisasi', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('tglrealisasi', $model->converttgl(null),
                                                                array(
                                                                  'class' => 'input-xlarge datepicker',
                                                                  'placeholder' => '')) !!}
                                                                  @if($errors->first('tglrealisasi'))
                                                                    <span class="alert alert-warning"> {{ $errors->first('tglrealisasi') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>
@if(Gate::check('be-admin') || Gate::check('be-legal'))
                                                          <div class="control-group">
                                                            {!! Form::label('nopp', 'Nomor PP', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('nopp', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                  @if($errors->first(''))
                                                                    <span class="alert alert-warning"> {{ $errors->first('nopp') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('nosph', 'Nomor SPH', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('nosph', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                  @if($errors->first(''))
                                                                    <span class="alert alert-warning"> {{ $errors->first('nosph') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('nottun', 'Nomor TTUN', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('nottun', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                  @if($errors->first(''))
                                                                    <span class="alert alert-warning"> {{ $errors->first('nottun') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('memokomite', 'Memo Komite', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::textarea('memokomite', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'style' => "width: 510px; height: 200px",
                                                                  'placeholder' => '')) !!}
                                                                  @if($errors->first(''))
                                                                    <span class="alert alert-warning"> {{ $errors->first('memokomite') }} </span>
                                                                  @endif
                                                            </div>
                                                          </div>
@endif
                                                  </div> <!-- end pane tab3-->
                                                  
                                                  
                                                  <ul class="pager wizard">
                                                      <li class="previous first" style="display:none;"><a href="javascript:void(0);">First</a></li>
                                                      <li class="previous"><a href="javascript:void(0);">Previous</a></li>
                                                      <li class="next last" style="display:none;"><a href="javascript:void(0);">Last</a></li>
                                                      <li class="next"><a href="javascript:void(0);">Next</a></li>
                                                      <li class="next finish" style="display:none;"><a type="submit" href="#" onclick='document.forms["formEditPembiayaan"].submit(); return false;' >Finish</a></li>
                                                  </ul>

                                              </div> <!-- end tab content-->
                                              {!! Form::close() !!}{{-- onclick='document.forms["formPembiayaan"].submit(); return false;' --}}
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- /block -->
                          </div>
                      <!-- /wizard -->

@stop