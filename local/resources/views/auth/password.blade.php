<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>reset password</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 pad">

                    <h1>reset password</h1><hr>

                    {!! Form::open(['action'=>'Auth\PasswordController@getEmail', 'method'=>'post', 'class'=>'form']) !!}
                    {!! csrf_field() !!}
                    <div class="form-group">
                        {!! Form::label('email') !!}
                        {!! Form::text('email',null,
                            array(
                                'class'=>'form-control',
                                'placeholder'=>'email'  )) !!}
                    </div>
                    
                    
                    <div>
                        {!! Form::submit('send password link', array('class'=>'btn btn-primary')) !!}
                        
                    </div>
                    <div></div>
                    {!! Form::close() !!}
            </div>
            <div class="col-md-4"></div>

        </div>

    </div>


    
    


</body>
</html>