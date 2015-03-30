<html lang="en">

<head>

<meta charset="UTF-8">
<title>Datewise</title>

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
    <h3 align="left">Simulated Date : <?php echo $Session['entry_date']; ?></h3>
    
     {!!  Form::open(['route' => 'date_change_submit']) !!}
        <div id="Datewise_entry_field">
        
        {!! Form::input('date', 'entryDate', null, ['class' => 'form-control']) !!}
    </div>
    <div id="Datewise_entry_button">
        {!!Form::submit('NEW DATEWISE ENTRY', array('class' => 'btn btn-primary ', 'id' => 'datewiseEntry')  ) !!}
        </div>
        {!! Form::close() !!}

        {!!  Form::open(['route' => 'back_button']) !!}
        <div id="Back_button">
        {!!Form::submit('MAKE ENTRY FOR TODAY', array('class' => 'btn btn-primary ', 'id' => 'backButton')  ) !!}
        </div>
        {!! Form::close() !!}
        


        {!!  Form::open(['route' => 'logout_submit']) !!}
        <div id="Late_entry_button">
        <center>
        {!!Form::submit('LOGOUT', array('class' => 'btn btn-primary btn-lg', 'id' => 'registerLateEntry')  ) !!}
        </center>
        {!! Form::close() !!}
        </div>
        </div>
<div id="clock_box">
                <p id="clock"></p>
            </div>
            {!! Form::open(['route' => 'datewise_info']) !!}
    
   <div class="formBlock" >
    <div class="input-group input-group-lg" id="formInput">
    {!! Form::text('studentNumber', null , array('class' => 'form-control', 'placeholder' => 'Student Number' ) ) !!}
  </div>
  <div id="formButton">
  {!!Form::submit('SUBMIT', array('class' => 'btn btn-primary btn-lg', 'id' => 'submitButton')  ) !!}
    </div>   
  {!! Form::close() !!}
    </div> -->
        
         
        

</body>
<html>