@extends('layouts.home_master')

@section('breadcrumb')
<li class="active">
  select                                
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
<div class="row-fluid section">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Form Wizard</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <div id="rootwizard">
                                        <div class="navbar">
                                          <div class="navbar-inner">
                                            <div class="container">
                                        <ul>
                                            <li><a href="#tab1" data-toggle="tab">Step 1</a></li>
                                            
                                        </ul>
                                         </div>
                                          </div>
                                        </div>
                                        
                                        <div class="tab-content">
                                            <div class="tab-pane" id="tab1">

                                               <form class="form-horizontal">
                                                  <fieldset>
                                                        <div class="control-group">
                                                            <label class="control-label" for="select01">Select list</label>
                                                            <div class="controls">
                                                              <select id="select01" class="chzn-select">
                                                                <option>something</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                              </select>
                                                            </div>
                                                        </div>
                                                  </fieldset>
                                                </form>
                                                
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                <!-- /wizard -->



                                                  
                                                        
@stop