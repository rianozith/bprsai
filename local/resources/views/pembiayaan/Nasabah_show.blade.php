@extends('layouts.home_master')

@section('breadcrumb')
<li class="active">
  Informasi Nasabah 
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
            $('#jnspmb').on('change', function() {
              if ( this.value == 'mudhorobah')
              {
                $("#bagihasil").show();
              }
              else
              {
                $("#bagihasil").hide();
              }
            });
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
                    $('#rootwizard').find('.pager  .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Data selesai diinput, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });

        </script>

@stop

@section('content')
    
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Info Nasabah Pembiayaan</div>
                                {{-- <div class="pull-right"><span class="badge badge-warning">View More</span>
                                </div> --}}
                                <div class="btn-group pull-right">
                                        <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('pembiayaan/createpembiayaan', $datas->id )}}">Pembiayaan Nasabah</a></li>
                                            <li><a href="" >Print</i></a></li>

                                        </ul>
                                                                               
                                </div>

                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#nasabah">Info</a></li>
                                        
                                    </ul>

                                    <div class="tab-content">
                                        <div id="nasabah" class="tab-pane fade in active">
                                        <h3>Informasi Nasabah</h3>
                                        <form class="form-horizontal">
                                                      <div class="control-group">
                                                        {!! Form::label('kodenasabah', 'Kode Nasabah', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                            <span class="input-xlarge uneditable-input">{{$datas->kdnas}}</span>
                                                        </div>                    
                                                      </div>  

                                                      <div class="control-group">
                                                        {!! Form::label('namanasabah', 'Nama Nasabah', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$datas->nama}}</span>
                                                        </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('alamat', 'Alamat', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input " style ="width: 810px; height: 200px">{{$datas->alamat}}</span>
                                                          </div>
                                                      </div>  
                                                      <div class="control-group">
                                                        {!! Form::label('kelurahan', 'Kelurahan', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input " >{{$datas->kelurahan}}</span>
                                                          </div>
                                                      </div>  
                                                      <div class="control-group">
                                                        {!! Form::label('kecamatan', 'Kecamatan', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input " >{{$datas->kecamatan}}</span>
                                                          </div>
                                                      </div>  
                                                      <div class="control-group">
                                                        {!! Form::label('kota', 'Kota', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input " >{{$datas->kota}}</span>
                                                          </div>
                                                      </div>  

                                                      <div class="control-group">
                                                        {!! Form::label('kodepos', 'Kode Pos', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$datas->kdpos}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('tptlahir', 'Tempat Lahir', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$datas->tptlahir}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('tglahir', 'Tanggal Lahir', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$datas->converttgl($datas->tglahir)}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('umur', 'Umur', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$datas->umur}}</span>
                                                          </div>
                                                      </div>
                                                      
                                                      <div class="control-group">
                                                        {!! Form::label('namaibu', 'Nama Ibu', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$datas->namaibu}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('telp', 'Telepon', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$datas->telp}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('noktp', 'No KTP', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$datas->noktp}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('npwp', 'No NPWP', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$datas->npwp}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('pekerjaan', 'Pekerjaan', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$datas->pekerjaan}}</span>
                                                          </div>
                                                      </div>
                                                  </div> <!-- end tab1-->
                                            </form>  
                                    </div>

                                    
                                        
                                    </div> {{-- end tabs --}}
                                    <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>

                                </div> {{-- end span12 --}}

                                
                            </div> {{-- end block collapse in --}}
                        </div> {{-- end block --}}
                    </div> {{-- end row fluid --}}
@stop