<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Late Entry | Daily Report</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/dashboard.css">

</head>

<body>

    <div class="jumbotron">
        
      <h1 align="center">DAILY REPORT</h1>
      
  </div>
  <div id="date">
    <h3 align="left">Today is <?php echo date("l, d M Y"); ?></h3>

    
    {!!  Form::open(['route' => 'back_button']) !!}
    <div id="back_button">
        {!!Form::submit('BACK', array('class' => 'btn btn-primary ', 'id' => 'backButton')  ) !!}
    </div>
    {!! Form::close() !!}
    {!!  Form::open(['route' => 'logout_submit']) !!}
    <div id="Logout">
        <center>
            {!!Form::submit('LOGOUT', array('class' => 'btn btn-primary btn-lg', 'id' => 'logoutButton')  ) !!}
        </center>
        {!! Form::close() !!}
    </div>
</div>
{!!  Form::open(['route' => 'daily_report']) !!}


<div id="Date_report_field">
    <p>Report of Date </p>
    
    {!! Form::input('date', 'reportDate', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
<div id="Branch_report_field">
   <p>Select Branch(es)</p>

   {!! Form::select('branch', ['ALL', 'CS', 'IT', 'EC', 'EN', 'EI', 'CE', 'ME', 'MCA', 'MBA']) !!}
</div>
<center>
    {!!Form::submit('Get Report', array('class' => 'btn btn-primary btn-lg', 'id' => 'report_Button')  ) !!}
</center>

{!! Form::close() !!}
</div>













</body>
<html>