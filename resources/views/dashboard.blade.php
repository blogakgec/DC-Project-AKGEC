<html>
<head>
    <title>Late Entry | Search</title>      
    
    <!-- css file -->
    <!-- mainpage -->
    <link rel="stylesheet" type="text/css" href="../public/css/mainpage.css">             
    <!-- clock files-->
    <link rel="stylesheet" href="FlipClock-master/compiled/flipclock.css">
    <!-- bootstrapcdn -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- date time picker -->
    <link rel="stylesheet" href="/path/to/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
    <!-- inside css -->
    <link rel="stylesheet" type="text/css" href="../public/css/inside.css">
    <!-- clock1 css-->
    <link rel="stylesheet" type="text/css" href="../public/css/clock1.css">
    
    <!-- scripts -->            
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="FlipClock-master/compiled/flipclock.js"></script>      
</head>

<body>
    <div class="container-fluid">
        <!-- header -->
        <div class="header row">
            <div class="col-md-2 col-sm-1"></div>
            <h1 class="text-center center col-md-7 col-sm-8">AKGEC LATE ENTRY SYSTEM</h1>
            <!-- empty -->
            <div class="col-md-1 col-sm-1"></div>
            <!-- logout button at top -->

            {!!  Form::open(['route' => 'logout_submit']) !!}

            {!!Form::submit('Logout', array('class' => 'btn btn-default col-md-1 col-sm-1 logout')  ) !!}

            {!! Form::close() !!}

                <!-- <button class="btn btn-default col-md-1 col-sm-1 logout">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    <span> Logout</span>
                </button> -->
                <!-- empty -->
                <div class="col-md-1 col-sm-1"></div>   
                
            </div>
            
            <!-- content middle-->
            <div class="wrapper row block">
                
                <div class="container">
                    <!-- clock -->
                    <div class="row clock col-md-offset-3">
                    </div>

                    <!-- button field / input group -->
                    {!! Form::open(['route' => 'dashboard_info']) !!}
                    <div class="row">   
                        <div class="col-md-6 col-md-offset-3 fhieght">
                            <div class="input-group">

                               <!--  {!! Form::open(['route' => 'dashboard_info']) !!} -->
                            <!-- {!! Form::text('studentNumber', null , array('class' => 'form-control', 'placeholder' => 'Enter the Student Number' ) ) !!}
                            {!!Form::submit('Search', array('class' => 'btn btn-warning', 'id' => 'submitButton')  ) !!}  
                            {!! Form::close() !!}
                        -->
                        <!-- <input type="text" class="form-control" placeholder="Enter the Student Number"> -->
                        {!! Form::text('studentNumber', null , array('class' => 'form-control', 'placeholder' => 'Enter the Student Number' ) ) !!}
                        <span class="input-group-btn">
                            <!-- <button class="btn btn-warning" type="button">Search</button> -->
                            {!!Form::submit('Search', array('class' => 'btn btn-warning', 'id' => 'submitButton')  ) !!}

                        </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->    
            {!! Form::close() !!}
            <!-- or -->
            <div class="or">
                OR MAKE DATEWISE ENTRY
            </div>
            <!-- date time picker -->
            {!!  Form::open(['route' => 'date_submit']) !!}
            
            <div class="row fheight1">
                <div class="col-md-6 col-md-offset-3 bottom_pad" style="height:100px;">
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker10'>
                            <!-- <input type='text' class="form-control" placeholder="Enter date for a datewise entry"/> -->
                            {!! Form::input('date', 'entryDate', null, ['class' => 'form-control']) !!}

                            <span class="input-group-btn">
                                {!!Form::submit('Simulate', array('class' => 'btn btn-warning', 'id' => 'datewiseEntry'))!!}
                            </span>
                        </div>
                    </div>  
                </div>
            </div>  
            {!! Form::close() !!}
            <!-- buttons -->
            {!! Form::open (['route'=>'daily_submit'])!!}
            <div class="buttons col-md-offset-2 row">
                <!-- <button class="btn-lg btn-default bt_style col-md-3 col-sm-4">Daily Records Report</button> -->
                
                {!!Form::submit('Daily Report', array('class'=>'btn-lg btn-default bt_style col-md-3 col-sm-4', 'id'=>'dailyButton')) !!}
                {!!Form::close() !!}
                {!!  Form::open(['route' => 'report_submit']) !!}
                <div class="col-md-1 col-sm-1"></div>
                <!-- <button class="btn-lg btn-default bt_style col-md-3 col-sm-4">Some Records Report</button> -->
                {!!Form::submit('Generate Reports', array('class' => 'btn-lg btn-default bt_style col-md-3 col-sm-4', 'id' => 'reportButton')  ) !!}

            </div>
            {!! Form::close() !!}
        </div>  
    </div>
    
    <div class="footer row">
        <h4 class="text-center">&copy;<strong>SOFTWARE INCUBATOR</strong></h4>
    </div>                  
</div>  
<!-- javascript -->
<script type="text/javascript">
var clock;

$(document).ready(function() {
    clock = $('.clock').FlipClock({
        clockFace: 'TwelveHourClock'
    });
});

            // disable scroll
            if(window.addEventListener){
                window.addEventListener('DOMMouseScroll',wheel,false);
            }

            function wheel(event)
            {
                event.preventDefault();
                event.returnValue=false;
            }
            window.onmousewheel=document.onmousewheel=wheel;


            // date time picker

            $(function () {
                $('#datetimepicker10').datetimepicker({
                    viewMode: 'years',
                    format: 'MM/YYYY'
                });
            }); 
            </script>           
        </body>
        </html>