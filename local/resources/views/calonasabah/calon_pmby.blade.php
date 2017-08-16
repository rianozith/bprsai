@extends('layouts.home_master')

@section('breadcrumb')
<li class="active">
  Data Calon Nasabah                                          
</li>
@stop

@section('link1')
        

@stop

@section('link2')

        <!--/.fluid-container-->
        <link href="{{asset('vendors/datepicker.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('vendors/uniform.default.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('vendors/chosen.min.css')}}" rel="stylesheet" media="screen">

        <link href="{{asset('vendors/wysiwyg/bootstrap-wysihtml5.css')}}" rel="stylesheet" media="screen">

        
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
                    $('#rootwizard').find('.pager  .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Data selesai diinput, Terimakasih');
                $('#rootwizard').find("").trigger('click');
            });
        });

        </script>

@stop

@section('content')

                    <!-- wizard -->
                          <div class="row-fluid section">
                               <!-- block -->
                              <div class="block">
                                  <div class="navbar navbar-inner block-header">
                                      <div class="muted pull-left">Data Calon Nasabah</div>
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
                                              <div class="tab-content">
                                                  <div class="tab-pane" id="tab1">
                                                        
        {!! Form::model($datas, array('route' => array('nasupdate', $datas->id), 'method'=>'PUT', 'class'=>'form-horizontal')) !!}
        <div class="control-group">
          {!! Form::label('kodenasabah', 'Kode Nasabah', array('class' => 'control-label')) !!}
          <div class="controls">
              <span class="input-xlarge uneditable-input">{{$datas->kdnas}}</span>
              @if($errors->has('kodenasabah'))
                <div class="alert alert-warning"> {{ $errors->first('kodenasabah') }} </div>
              @endif
          </div>
                    
        </div>  

        <div class="control-group">
          {!! Form::label('namanasabah', 'Nama Nasabah', array('class' => 'control-label')) !!}
          <div class="controls">
            {!! Form::text('nama', null,
              array(
                'class' => 'input-xlarge',
                'placeholder' => 'Nama Nasabah')) !!}
              @if($errors->has('kodenasabah'))
                <div class="alert alert-warning"> {{ $errors->first('kodenasabah') }} </div>
              @endif
          </div>
        </div>

        <div class="control-group">
          {!! Form::label('alamat', 'Alamat', array('class' => 'control-label')) !!}
          <div class="controls">
            {!! Form::textarea('alamat', null,
              array(
                'class'=>'input-xlarge textarea',
                'style' => "width: 810px; height: 200px",
                'placeholder'=>'Alamat')) !!}
              @if($errors->has('alamatnasabah'))
                <div class="alert alert-warning"> {{ $errors->first('alamatnasabah') }} </div>
              @endif
          </div>
        </div>  

        <div class="control-group">
          {!! Form::label('kodepos', 'Kode Pos', array('class' => 'control-label')) !!}
          <div class="controls">
            {!! Form::text('kdpos', null,
              array(
                'class' => 'input-xlarge',
                'placeholder' => 'Kode Pos')) !!}
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
                'placeholder' => 'Tempat Lahir')) !!}
              @if($errors->has('tempatlahir'))
                <div class="alert alert-warning"> {{ $errors->first('tempatlahir') }} </div>
              @endif
          </div>
        </div>

        <div class="control-group">
          {!! Form::label('tglahir', 'Tanggal Lahir', array('class' => 'control-label')) !!}
          <div class="controls">
            {!! Form::text('tglahir', null,
              array(
                'class' => 'input-xlarge datepicker',
                'placeholder' => 'Tanggal Lahir')) !!}
              @if($errors->has('tglahirnasabah'))
                <div class="alert alert-warning"> {{ $errors->first('tglahirnasabah') }} </div>
              @endif
          </div>
        </div>
        
        <div class="control-group">
          {!! Form::label('namaibu', 'Nama Ibu', array('class' => 'control-label')) !!}
          <div class="controls">
            {!! Form::text('namaibu', null,
              array(
                'class' => 'input-xlarge',
                'placeholder' => 'Nama Ibu')) !!}
              @if($errors->has('namaibunasabah'))
                <div class="alert alert-warning"> {{ $errors->first('namaibunasabah') }} </div>
              @endif
          </div>
        </div>

        <div class="control-group">
          {!! Form::label('telp', 'Telepon', array('class' => 'control-label')) !!}
          <div class="controls">
            {!! Form::text('telp', null,
              array(
                'class' => 'input-xlarge',
                'placeholder' => 'Telepon')) !!}
              @if($errors->has('teleponnasabah'))
                <div class="alert alert-warning"> {{ $errors->first('teleponnasabah') }} </div>
              @endif
          </div>
        </div>

        <div class="control-group">
          {!! Form::label('noktp', 'No KTP', array('class' => 'control-label')) !!}
          <div class="controls">
            {!! Form::text('noktp', null,
              array(
                'class' => 'input-xlarge',
                'placeholder' => 'No KTP')) !!}
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
                'placeholder' => 'No NPWP')) !!}
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
                'placeholder' => 'Pekerjaan')) !!}
              @if($errors->has('pekerjaan'))
                <div class="alert alert-warning"> {{ $errors->first('pekerjaan') }} </div>
              @endif
          </div>
        </div>

        <div class="control-group">
          
        </div>

        

    {!! Form::close() !!}
                                                        
                                                      
                                                  </div>
                                                  <div class="tab-pane" id="tab2">
                                                      {!! Form::open(['action'=>'nasabahController@storenas', 'method'=>'post', 'class'=>'form-horizontal']) !!}
                                                        <fieldset>
                                                          <div class="control-group">
                                                            {!! Form::label('noregao', 'Officer', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('noregao', $officer,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has('noregao'))
                                                                  <div class="alert alert-warning"> {{ $errors->first('noregao') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('jmlbiaya', 'Jumlah biaya yang diajukan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('jmlbiaya', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has('noregao'))
                                                                  <div class="alert alert-warning"> {{ $errors->first('noregao') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('tujuanpmb', 'Tujuan Pembiayaan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('tujuanpmb', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has('tujuanpmb'))
                                                                  <div class="alert alert-warning"> {{ $errors->first('tujuanpmb') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('jangkawaktu', 'Jangka Waktu', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('jangkawaktu', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('jnspmb', 'Jenis Pembiayaan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('jnspmb', [
                                                                'mudhorobah' => 'Mudhorobah',
                                                                'murabahah' => 'Murabahah',
                                                                'qord' => 'Qord',
                                                                'rahn' => 'Rahn'],
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('bghslbank', 'Bagi Hasil Untuk Bank', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('bghslbank', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('bghslnas', 'Bagi Hasil Untuk Nasabah', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('bghslnas', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('biayadmin', 'Biaya Administrasi', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('biayadmin', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('jaminan', 'Barang Jaminan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::textarea('jaminan', null,
                                                                array(
                                                                  'class'=>'input-xlarge textarea',
                                                                  'style' => "width: 810px; height: 200px",
                                                                  'placeholder'=>'Barang Jaminan')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>  

                                                          <div class="control-group">
                                                            {!! Form::label('jmlmargin', 'Jumlah Margin', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('jmlmargin', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('tglmohon', 'Tanggal Permohonan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('tglmohon', null,
                                                                array(
                                                                  'class' => 'input-xlarge datepicker',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>
                                                          
                                                          <div class="control-group">
                                                            {!! Form::label('tglakhir', 'Tanggal Jangka Waktu Akhir', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('tglakhir', null,
                                                                array(
                                                                  'class' => 'input-xlarge datepicker',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('angsuranpokok', 'Angsuran Pokok /bulan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('angsuranpokok', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('angsuranmargin', 'Angsuran Margin /bulan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('angsuranmargin', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('angsuranpokokakhir', 'Angsuran Pokok Jatuh Tempo', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('angsuranpokokakhir', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('angsuranmarginakhir', 'Angsuran Margin Jatuh Tempo', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('angsuranmargin', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('biayatagih', 'Biaya Penagihan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('biayatagih', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('pemilikjaminan', 'Pemilik Jaminan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('pemilikjaminan', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('sifat', 'Sifat A', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('sifat', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('jnspenggunaan', 'Jenis Penggunaan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('jnspenggunaan', $jpeggn,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>
                                                        </fieldset>
                                                      {!! Form::close() !!}
                                                  </div>

                                                  <div class="tab-pane" id="tab3">
                                                      {!! Form::open(['action'=>'nasabahController@storenas', 'method'=>'post', 'class'=>'form-horizontal']) !!}<fieldset>
                                                        <fieldset>

                                                          <div class="control-group">
                                                            {!! Form::label('golongan', 'Golongan 847', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('golongan', $golongan,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('sektor', 'Sektor Ekonomi', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('sektor', $sektor,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('agunan', 'Agunan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('agunan', $agunan,
                                                                array(
                                                                  'class' => 'input-xlarge ',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('hrgperolehan', 'Harga Perolehan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('hrgperolehan', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('njop', 'NJOP', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('njop', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('ikat', 'Jenis Pengikat', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('ikat', [
                                                                'ksjnotariil' => 'SKJ Notariil',
                                                                'skmth' => 'SKMTH',
                                                                'fiducia' => 'FIDUCIA',
                                                                'apht' => 'APHT',
                                                                'dll' => 'Lain - Lain'],
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                            <div class="control-group">
                                                            {!! Form::label('wilayah', 'Wilayah', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('wilayah', $wilayah,
                                                                array(
                                                                  'class' => 'input-xlarge chzn-select'
                                                                   )) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('biaya', 'Biaya', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('biaya', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('metode', 'Metode Bagi Hasil', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('metode', [
                                                                '1' => 'Profit Sharing',
                                                                '2' => 'Non Profit Sharing'],
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                            <div class="control-group">
                                                            {!! Form::label('peminjam', 'Peminjam', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('peminjam', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('milik', 'Tujuan Kepemilikan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('milik', [
                                                                '71' => 'Kepemilikan rumah yang dijamin dengan hak tanggungan pertama dengan tujuan untuk dihuni',
                                                                '72' => 'Kepemilikan kendaraan bermotor',
                                                                '73' => 'Lainnya'],
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('lokasiusaha', 'Lokasi Usaha', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::textarea('lokasiusaha', null,
                                                                array(
                                                                  'class'=>'input-xlarge textarea',
                                                                  'style' => "width: 810px; height: 200px",
                                                                  'placeholder'=>'')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>  

                                                          <div class="control-group">
                                                            {!! Form::label('namapmbyan', 'Nama Pembiayaan', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('namapmbyan', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('golpiutang', 'Golongan Piutang', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::select('golpiutang',[
                                                                '1' => 'Usaha Mikro',
                                                                '2' => 'Usaha Kecil',
                                                                '3' => 'Usaha Menengah',
                                                                '4' => 'Lainnya'],
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('tglrealisasi', 'Tanggal Realisasi', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('tglrealisasi', null,
                                                                array(
                                                                  'class' => 'input-xlarge datepicker',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                          <div class="control-group">
                                                            {!! Form::label('nopp', 'Nomor PP', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('nopp', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => '')) !!}
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
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
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
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
                                                                @if($errors->has(''))
                                                                  <div class="alert alert-warning"> {{ $errors->first('') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>

                                                        </fieldset>
                                                      {!! Form::close() !!}
                                                  </div>
                                                  <ul class="pager wizard">
                                                      <li class="previous first" style="display:none;"><a href="javascript:void(0);">First</a></li>
                                                      <li class="previous"><a href="javascript:void(0);">Previous</a></li>
                                                      <li class="next last" style="display:none;"><a href="javascript:void(0);">Last</a></li>
                                                      <li class="next"><a href="javascript:void(0);">Next</a></li>
                                                      <li class="next finish" style="display:none;"><a href="{{url('pembiayaan/shownasabah', $datas->id)}}" >Finish</a></li>
                                                  </ul>
                                              </div>  
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- /block -->
                          </div>
                      <!-- /wizard -->

@stop