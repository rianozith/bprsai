@extends('layouts.home_master')


@section('link1')
        
@stop

@section('link2')
        <!--/.fluid-container-->
        
        <script src="{{asset('vendors/easypiechart/jquery.easy-pie-chart.js')}}"></script>
        <script src="{{asset('assets/scripts.js')}}"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
@stop


@section('content')
    @if (session('message'))
        <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>{{ session('message') }}</p>
        </div>
    @endif
    
                    

                    <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            
                            <!-- /block -->
                        </div>

                        <div class="span6">
                            <!-- block -->
                            
                            <!-- /block -->
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            
                            <!-- /block -->
                        </div>

                        <div class="span6">
                            <!-- block -->
                            
                            <!-- /block -->
                        </div>
                    </div>

                    
                        

@stop                        