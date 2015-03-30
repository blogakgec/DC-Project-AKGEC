<html lang="en">

<head>

<meta charset="UTF-8">
<title>Next Entry</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../public/css/dashboard.css">

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

        {!!  Form::open(['route' => 'back_button']) !!}
        <div id="back_button">
        {!!Form::submit('BACK', array('class' => 'btn btn-primary ', 'id' => 'backButton')  ) !!}
        </div>
        {!! Form::close() !!}
        {!!  Form::open(['route' => 'logout_submit']) !!}
        <div id="Late_entry_button">
        <center>
        {!!Form::submit('LOGOUT', array('class' => 'btn btn-primary btn-lg', 'id' => 'logoutButton')  ) !!}
        </center>
        {!! Form::close() !!}
        </div>
        </div>

       

        <div id="Student_pic" class="box">
            <img src="http://a.dryicons.com/images/icon_sets/shine_icon_set/png/256x256/user.png">
        </div>

        <div id="Student_info" class="box">
            <h2>Details of {{ $info->student_name  }}</h2>
            <hr>
            <h4>Student Number : {{ $info->student_id }}</h4>
            <h4>Branch : {{ $info->branch }}</h4>
            <h4>Year : {{ $info->year }} Year</h4>
            <h4>E-mail : {{ $info->email }}</h4>
            <h4>Contact No. : {{ $info->contact_no }}</h4>
        </div>
        
       <h2>Late Entry</h2>

        @foreach ($entries as $entry)
            <div id="Student_entries" class="box">

            
                
                <h4> {{ $entry->entry_time }} </h4>
            

            </div>
        @endforeach
        {!! Form::open(['route' => 'register_entry']) !!}
        <div id="Late_entry_button">
        <center>
        {!!Form::submit('REGISTER LATE ENTRY', array('class' => 'btn btn-primary btn-lg', 'id' => 'registerLateEntry')  ) !!}
        </center>
        {!! Form::close() !!}
        </div>

           






</body>
<html>