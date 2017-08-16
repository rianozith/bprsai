<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>@yield('title')</title>
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet" media="screen">
        
        <link href="{{asset('vendors/easypiechart/jquery.easy-pie-chart.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">
        <script src="{{asset('vendors/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>

        @yield('link1')
        <style>
            .batas-left {
             border-right: 1px solid #333;
             }
             
        </style>
        
        {{-- bootstrap end --}}

    </head>
    
    <body>

        {{-- navbar --}}
        @include('layouts/navbar')
        {{-- navbar end --}}


        <div class="container-fluid">
            <div class="row-fluid">
                {{-- sidebar --}}
                {{-- <div class="span3" id="sidebar">
                    @include('layouts/sidebar2')
                </div> --}}
                {{-- sidebar end --}}
                
                <!--/span-->
                <div class="span12" id="content">
                    <div class="row-fluid">
                        {{-- <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Success </h4>
                        	The operation completed successfully 
                            <h1></h1>

                        </div> --}}

                        {{-- breadcrumb --}}
                        @include('layouts/breadcrumb')
                        {{-- breadcrumb end --}}
                        

                    </div>
                        {{-- content --}}                        
                        @yield('content')
                        {{-- cnotent end --}}
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <hr>
            
            {{-- footer --}}
            @include('layouts/footer')
            {{-- footer end --}}

        </div>
        <script src="{{asset('vendors/jquery-1.9.1.min.js')}}"></script>
        
        
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        @yield('link2')
        
    </body>

</html>