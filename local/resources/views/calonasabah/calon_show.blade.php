@extends('layouts.home_master')

@section('breadcrumb')
<li class="active">
  Show Calon Nasabah 
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
                                <div class="muted pull-left">Show Nasabah</div>
                                {{-- <div class="pull-right"><span class="badge badge-warning">View More</span>
                                </div> --}}
                            </div>
                            <div class="block-content collapse in">
                                <form class="form-horizontal">
                                    <div class="control-group">                                
                                    <label class="control-label">Kode Nasabah : </label>
                                        <div class="controls">
                                            {{ $datas -> kdnas }}
                                        </div>
                                    </div>

                                    <div class="control-group">                                
                                    <label class="control-label">Nama : </label>
                                        <div class="controls">
                                            {{ $datas -> nama }}
                                        </div>
                                    </div>

                                    <div class="control-group">                                
                                    <label class="control-label">Alamat : </label>
                                        <div class="controls">
                                            <?php echo $datas -> alamat ?>
                                        </div>
                                    </div>

                                    <div class="control-group">                                
                                    <label class="control-label">Kode Pos : </label>
                                        <div class="controls">
                                            {{ $datas -> kdpos }}
                                        </div>
                                    </div>

                                    <div class="control-group">                                
                                    <label class="control-label">Tempat Lahir : </label>
                                        <div class="controls">
                                            {{ $datas -> tptlahir }}
                                        </div>
                                    </div>

                                    <div class="control-group">                                
                                    <label class="control-label">Tanggal Lahir : </label>
                                        <div class="controls">
                                            {{date('d-m-Y', strtotime($datas -> tglahir))}}
                                        </div>
                                    </div>

                                    <div class="control-group">                                
                                    <label class="control-label">Nama Ibu : </label>
                                        <div class="controls">
                                            {{ $datas -> namaibu }}
                                        </div>
                                    </div>

                                    <div class="control-group">                                
                                    <label class="control-label">Telepon : </label>
                                        <div class="controls">
                                            {{ $datas -> telp }}
                                        </div>
                                    </div>

                                    <div class="control-group">                                
                                    <label class="control-label">No KTP : </label>
                                        <div class="controls">
                                            {{ $datas -> noktp }}
                                        </div>
                                    </div>

                                    <div class="control-group">                                
                                    <label class="control-label">NPWP : </label>
                                        <div class="controls">
                                            {{ $datas -> npwp }}
                                        </div>
                                    </div>

                                    <div class="control-group">                                
                                    <label class="control-label">Pekerjaan : </label>
                                        <div class="controls">
                                            {{ $datas -> pekerjaan }}
                                        </div>
                                    </div>
                                    <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
                                </form>

                            </div> {{-- end block collapse in --}}
                        </div> {{-- end block --}}
                    </div> {{-- end row fluid --}}
@stop