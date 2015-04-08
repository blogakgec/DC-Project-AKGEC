<html>
<head>
    <title>Late Entry | Report</title>
    
    <!-- bootstrapcdn -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- css file -->
    <link rel="stylesheet" type="text/css" href="../public/css/inside.css">
    <!-- css file -->
    <link rel="stylesheet" type="text/css" href="../public/css/mainpage.css">     
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
            <!-- empty -->
            <div class="col-md-1 col-sm-1"></div>               
        </div>
        {!!  Form::open(['route' => 'generate_three_entry_report']) !!}
        <div class="wrapper row block">
            <div class="generate_buttons col-md-8 col-md-offset-2"> 
                    <!-- <button class="btn btn-default generate">
                        <h3>Generate document for students with 3 late entries</h3>
                    </button> -->
                    
                    
                    {!!Form::submit('Generate document for students with 3 late entries', array('class' => 'btn btn-default generate', 'id' => 'report_Button')  ) !!}
                    {!!Form::close()!!}

                    <!-- Button trigger modal -->
                    <a href="#modal1" data-toggle="modal" style="text-decoration:none;">    
                        <button class="btn btn-default generate" >
                            <h3>Generate document for students for a certain period</h3>
                        </button>
                    </a>                    
                </div>  
            </div>

            
            <!-- footer -->
            <div class="footer row">
                <h4 class="text-center">&copy;<strong>SOFTWARE INCUBATOR</strong></h4>
            </div>
        </div>  
        <!-- modal -->
        <div class="modal fade" id="modal1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div clss="modal-header">
                        <h3>Welcome</h3>
                    </div>
                    <div class="modal-body">
                        <!-- calendar -->
                        <div class="container">
                            <div class="col-sm-6" style="height:130px;">
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker9'>
                                        <input type='text' class="form-control" />
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- branch dropdown -->
                    <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                        Branches
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ece</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cse</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">it</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">me</a></li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning" data-dismiss="modal">Submit</button>
            </div>
        </div>
    </div>
</div>


<!-- javascript          -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- jquery -->
<script type="text/javascript" src="../public/js/jquery.js"></script>
<!-- bootstrap --> 
<script type="text/javascript" src="../public/js/bootstrap.js"></script>


<script type="text/javascript">
        // calendar access
        $('#datetimepicker6').data("DateTimePicker").FUNCTION()

             //calendar script

             $(function () {
                $('#datetimepicker9').datetimepicker({
                    viewMode: 'years'
                });
            });

                //calendar script 2

                $(function () {
                    $('#datetimepicker2').datetimepicker({
                        locale: 'ru'
                    });
                });
                
                
                </script>
            </body>
            </html>