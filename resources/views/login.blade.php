<html lang="en">

<head>

<meta charset="UTF-8">
<title>Login</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../public/css/login.css">

</head>

<body>

<div class="jumbotron">
  <h1 align="center">AKGEC LATE ENTRY SYSTEM</h1>
</div>

<div class="panel panel-default" >
  <div class="panel-heading"><h2 align="center">ADMINISTRATOR LOGIN</h2></div>
  <div class="panel-body">
    
    
    
    <!-- Login Form -->

  {!! Form::open(['route' => 'submit_login']) !!}
    
    <div class="input-group input-group-lg">
    <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
    {!! Form::text('username', null , array('class' => 'form-control', 'placeholder' => 'Username' ) ) !!}
  </div>
  <br>
    <div class="input-group input-group-lg">
    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></span>
    {!! Form::password('password' , array('class' => 'form-control', 'placeholder' => 'Password') ) !!}
    </div>
    <br>
    <center>
      
        {!!Form::submit('SUBMIT', array('class' => 'btn btn-primary btn-lg', 'id' => 'loginButton')  ) !!}
    </center>
{!! Form::close() !!}


  </div>
</div>

</body>

</html>