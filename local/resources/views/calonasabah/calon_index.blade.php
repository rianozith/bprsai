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
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
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
                                                  <li><a href="#tab2" data-toggle="tab">Pembiayaan Nasabah</a></li>
                                                  <li><a href="#tab3" data-toggle="tab">Summary</a></li>
                                              </ul>
                                               </div>
                                                </div>
                                              </div>
                                              <div id="bar" class="progress progress-striped active">
                                                <div class="bar"></div>
                                              </div>
                                              <div class="tab-content">
                                                  <div class="tab-pane" id="tab1">
                                                        
        {!! Form::open(['action'=>'nasabahController@storenas', 'method'=>'post', 'class'=>'form-horizontal']) !!}
        <div class="control-group">
          {!! Form::label('kodenasabah', 'Kode Nasabah', array('class' => 'control-label')) !!}
          <div class="controls">
            {!! Form::hidden('kdnas', $kode) !!}
            {!! Form::text('kdnas', $kode,
              array(
                'class' => 'input-xlarge uneditable-input',
                'placeholder' => 'Kode Nasabah',
                'disabled' => '')) !!}
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
          {!! Form::label('lglahir', 'Tanggal Lahir', array('class' => 'control-label')) !!}
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
          {!! Form::submit('Save', array('class'=>'btn btn-primary')) !!}
          
          <a href="{{ url('pembiayaan/indexnasabah') }}" class="btn btn-primary">Cancel</a>
        </div>

    {!! Form::close() !!}
                                                        
                                                      
                                                  </div>
                                                  <div class="tab-pane" id="tab2">
                                                      {!! Form::open(['action'=>'nasabahController@storenas', 'method'=>'post', 'class'=>'form-horizontal']) !!}
                                                        <fieldset>
                                                          <div class="control-group">
                                                            {!! Form::label('noregao', 'No reg AO', array('class' => 'control-label')) !!}
                                                            <div class="controls">
                                                              {!! Form::text('noregao', null,
                                                                array(
                                                                  'class' => 'input-xlarge',
                                                                  'placeholder' => 'No reg AO')) !!}
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
                                                                  'placeholder' => 'Jumlah biaya yang diajukan')) !!}
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
                                                                  'placeholder' => 'Jumlah biaya yang diajukan')) !!}
                                                                @if($errors->has('noregao'))
                                                                  <div class="alert alert-warning"> {{ $errors->first('noregao') }} </div>
                                                                @endif
                                                            </div>
                                                          </div>


                                                          <div class="control-group">
                                                            <label class="control-label" for="focusedInput">Address</label>
                                                            <div class="controls">
                                                              <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                            </div>
                                                          </div>
                                                          <div class="control-group">
                                                            <label class="control-label" for="focusedInput">City</label>
                                                            <div class="controls">
                                                              <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                            </div>
                                                          </div>
                                                          <div class="control-group">
                                                            <label class="control-label" for="focusedInput">State</label>
                                                            <div class="controls">
                                                              <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                            </div>
                                                          </div>
                                                        </fieldset>
                                                      {!! Form::close() !!}
                                                  </div>
                                                  <div class="tab-pane" id="tab3">
                                                      <form class="form-horizontal">
                                                        <fieldset>
                                                          <div class="control-group">
                                                            <label class="control-label" for="focusedInput">Company Name</label>
                                                            <div class="controls">
                                                              <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                            </div>
                                                          </div>
                                                          <div class="control-group">
                                                            <label class="control-label" for="focusedInput">Contact Name</label>
                                                            <div class="controls">
                                                              <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                            </div>
                                                          </div>
                                                          <div class="control-group">
                                                            <label class="control-label" for="focusedInput">Contact Phone</label>
                                                            <div class="controls">
                                                              <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                            </div>
                                                          </div>
                                                        </fieldset>
                                                      </form>
                                                  </div>
                                                  <ul class="pager wizard">
                                                      <li class="previous first" style="display:none;"><a href="javascript:void(0);">First</a></li>
                                                      <li class="previous"><a href="javascript:void(0);">Previous</a></li>
                                                      <li class="next last" style="display:none;"><a href="javascript:void(0);">Last</a></li>
                                                      <li class="next"><a href="javascript:void(0);">Next</a></li>
                                                      <li class="next finish" style="display:none;"><a href="javascript:;">Finish</a></li>
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