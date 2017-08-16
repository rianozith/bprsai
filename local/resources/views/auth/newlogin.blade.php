<!DOCTYPE html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Form</title>
  <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">

  <link rel="stylesheet" href="{{asset('vendors/newlogin/newlogin.css')}}">
  
  
  <style type="text/css">
  
  </style>
  
</head>

<body>
<div id="login-button">
  <img src="{{asset('vendors/newlogin/login-w-icon.png')}}">
  </img>
</div>
<div id="container">
  <div>
    
  </div>
  <h1>Log In</h1>
  <span class="close-btn">
    <a href="{{ URL('/') }}"><img src="{{asset('vendors/newlogin/circle_close_delete_-128.png')}}"></img></a>
  </span>

  {!! Form::open(['action'=>'Auth\AuthController@getLogin', 'method'=>'post', 'class'=>'form col-md-12 center-block']) !!}
  {!! csrf_field() !!}
    
    {!! Form::text('username',null,['placeholder'=>'username'  ]) !!}
    @if($errors->has('username'))
      <a class="alert alert-warning"> {{ $errors->first('username') }} </a>
    @endif

    {!! Form::password('password',array('placeholder'=>'password'   )) !!} 
    @if($errors->has('password'))
      <a class="alert alert-warning"> {{ $errors->first('password') }} </a>
    @endif

    {{-- <a href="#" type="submit" name="login">Log in</a> --}}
    <a >{!! Form::submit('login') !!}</a>
    <div id="remember-container">
      <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
      <span id="remember">Remember me</span>
      <span id="register">Register</span>
    </div>
{!! Form::close() !!}
</div>

<!-- register Password Container -->
<div id="register-container">
   <h1>Register</h1>
  <span class="close-btn">
    <a href="{{ URL('/') }}"><img src="{{asset('vendors/newlogin/circle_close_delete_-128.png')}}"></img></a>
  </span>

  <form>
    <a href="register" class="orange-btn">Sign Up</a>
</form>
</div> 
<script type="text/javascript" src="{{asset('vendors/newlogin/jquery.min.js')}}"></script>
<script type="text/javascript" >

$('#login-button').click(function(){
  $('#login-button').fadeOut("slow",function(){
    $("#container").fadeIn();
    TweenMax.from("#container", .4, { scale: 0, ease:Sine.easeInOut});
    TweenMax.to("#container", .4, { scale: 1, ease:Sine.easeInOut});
  });
});

$(".close-btn").click(function(){
  TweenMax.from("#container", .4, { scale: 1, ease:Sine.easeInOut});
  TweenMax.to("#container", .4, { left:"0px", scale: 0, ease:Sine.easeInOut});
  $("#container, #register-container").fadeOut(800, function(){
    $("#login-button").fadeIn(800);
  });
});

/* register Password */
$('#register').click(function(){
  $("#container").fadeOut(function(){
    $("#register-container").fadeIn();
  });
});
</script>
</body>
</html>