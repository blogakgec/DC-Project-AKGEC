<html lang="en">

<head>

<meta charset="UTF-8">
<title>Dashboard</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../public/css/dashboard.css">
<script type="text/javascript">
            function timedMsg()
            {
                var t=setInterval("change_time();",1000);
            }
            function change_time()
            {
                var d = new Date();
                var curr_hour = d.getHours();
                var curr_min = d.getMinutes();
                var curr_sec = d.getSeconds();
            if(curr_hour > 12)
                curr_hour = curr_hour - 12;
                if(curr_hour < 10)
                { 
                    curr_hour= '0'+curr_hour;
                }
                if(curr_min <10)
                {
                    curr_min= '0'+curr_min;
                }
                if(curr_sec < 10)
                    curr_sec= '0'+curr_sec;
                
                
            document.getElementById('clock').innerHTML =curr_hour+':'+curr_min+':'+curr_sec;
            }
            timedMsg();   
        </script>
</head>

<body>

<div class="jumbotron">
	
  <h1 align="center">Welcome, Mr. <?php echo $Session['current_user']; ?></h1>
</div>
<div id="date">
    <h3 align="left">Today is <?php echo date("l, d M Y"); ?></h3>
    
         {!!  Form::open(['route' => 'date_submit']) !!}
        <div id="Datewise_entry_field">
        
        {!! Form::input('date', 'entryDate', null, ['class' => 'form-control']) !!}
    </div>
    <div id="Datewise_entry_button">
        {!!Form::submit('DATEWISE ENTRY', array('class' => 'btn btn-primary ', 'id' => 'datewiseEntry')  ) !!}
        </div>
        {!! Form::close() !!}
        {!!  Form::open(['route' => 'report_submit']) !!}
        <div id="Report_button">
        <center>
        {!!Form::submit('Generate Report', array('class' => 'btn btn-primary ', 'id' => 'reportButton')  ) !!}
        </center>
        {!! Form::close() !!}
        </div>

        {!!  Form::open(['route' => 'logout_submit']) !!}
        <div id="Logout_button">
        <center>
        {!!Form::submit('LOGOUT', array('class' => 'btn btn-primary btn-lg', 'id' => 'logoutButton')  ) !!}
        </center>
        {!! Form::close() !!}
        </div>
		</div>
<div id="clock_box">
                <p id="clock"></p>
            </div>
            {!! Form::open(['route' => 'dashboard_info']) !!}
    
   <div class="formBlock" >
    <div class="input-group input-group-lg" id="formInput">
   	{!! Form::text('studentNumber', null , array('class' => 'form-control', 'placeholder' => 'Student Number' ) ) !!}
  </div>
  <div id="formButton">
  {!!Form::submit('SUBMIT', array('class' => 'btn btn-primary btn-lg', 'id' => 'submitButton')  ) !!}
    </div>   
  {!! Form::close() !!}
    </div>

</body>
<html>