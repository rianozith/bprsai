<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BprsAI Login Form</title>

<link href="{{asset('vendors/bluelogin/login-box.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" />

</head>

<body class="background">


	<div class="centerdiv">


		<div class="login-box">
			{!! Form::open(['action'=>'Auth\AuthController@getLogin', 'role'=>'form', 'method'=>'post', 'class'=>'form-horizontal'])!!}
			<H3 align="center">Login</H3>
			<div align="center">Masukan username dan password untuk login:</div>
			<br/>

				@if($errors->has('username'))
	            	<div align="center" style="color:red; font-size:16px"> {{ $errors->first('username') }} </div>
	            @endif

	        
	        <div class="control-group">
                {!! Form::label('username', 'Username', array('class' => 'login-box-name')) !!}
                	<div class="login-box-field">
                        {!! Form::text('username', null,
                        array(
                        'class' => 'form-login',
                        'placeholder' => '')) !!}
                   
                    </div>
            </div>

            <div class="control-group">
                {!! Form::label('password', 'Password', array('class' => 'login-box-name')) !!}
                	<div class="login-box-field">
                        {!! Form::password('password', null,
                        array(
                        'class' => 'form-login',
                        'placeholder' => '')) !!}
                   
                    </div>
            </div>
			
			<input type="image" src="{{asset('vendors/bluelogin/images/login-btn.png')}}">
			<span class="pull-right">
				<p>username admin</p> <p>password adminadmin</p>
			</span>
			
			


			{!! Form::close()!!}

		</div> 

	</div>

</body>
</html>
