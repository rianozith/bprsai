<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Login Form</title>
        <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="{{asset('css/bootstraplogin.min.css')}}" rel="stylesheet">
    
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="{{asset('css/styleslogin.css')}}" rel="stylesheet">
    </head>
<body>


            <ul>  
                @foreach($errors -> all() as $error)
                  <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <li>{{ $error }}</li>
                    </div>
                @endforeach    
            </ul>  

    <!-- <div class="alert alert-success">
    @if(Session::has('flash_message'))
        {{ Session::get('flash_message') }}
    @endif
    </div> -->

<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><a href="{{ URL('/') }}">x</a></button>
          <h1 class="text-center">Registration</h1>
      </div>
      <div class="modal-body">
                        {!! Form::open(['action'=>'Auth\AuthController@getRegister', 'method'=>'post', 'class'=>'form col-md-12 center-block']) !!}
                        <div class="form-group">
                            {!! Form::label('name') !!}
                            {!! Form::text('name', null,
                                array(
                                    'class' => 'form-control input-lg',
                                    'placeholder' => 'name')) !!}
                                @if($errors->has('name'))
                                    <div class="alert alert-warning"> {{ $errors->first('name') }} </div>
                                @endif
                        </div>  

                        <div class="form-group">
                            {!! Form::label('username') !!}
                            {!! Form::text('username', null,
                                array(
                                    'class' => 'form-control input-lg',
                                    'placeholder' => 'username')) !!}
                                @if($errors->has('username'))
                                    <div class="alert alert-warning"> {{ $errors->first('username') }} </div>
                                @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('inisial') !!}
                            {!! Form::text('inisial', null,
                                array(
                                    'class' => 'form-control input-lg',
                                    'placeholder' => 'inisial user')) !!}
                                @if($errors->has('inisial'))
                                    <div class="alert alert-warning"> {{ $errors->first('inisial') }} </div>
                                @endif
                        </div>


                        <div class="form-group">
                            {!! Form::label('email') !!}
                            {!! Form::text('email', null,
                                array(
                                    'class'=>'form-control input-lg',
                                    'placeholder'=>'email@gmail.com')) !!}
                                @if($errors->has('email'))
                                    <div class="alert alert-warning"> {{ $errors->first('email') }} </div>
                                @endif
                        </div>  

                        <div class="form-group">
                            {!! Form::label('password') !!}
                            {!! Form::password('password',
                                array(
                                    'class'=>'form-control input-lg')) !!}
                                @if($errors->has('password'))
                                    <div class="alert alert-warning"> {{ $errors->first('password') }} </div>
                                @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('password_confirmation') !!}
                            {!! Form::password('password_confirmation',
                                array(
                                    'class'=>'form-control input-lg')) !!}
                                @if($errors->has('password'))
                                    <div class="alert alert-warning"> {{ $errors->first('password') }} </div>
                                @endif
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Register', array('class'=>'btn btn-primary btn-lg btn-block')) !!}
                        </div>

                        {!! Form::close() !!}
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <a href="{{ URL('/') }}"><button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button></a>
          </div>    
      </div>
  </div>
  </div>
</div>
    <!-- script references -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstraplogin.min.js')}}"></script>                    

</body>
</html>