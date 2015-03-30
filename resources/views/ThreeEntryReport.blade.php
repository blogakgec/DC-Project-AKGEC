<html>
<head>
<title>Three Entries Report</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../public/css/dashboard.css">
</head>
<body>
	<div class="jumbotron">
    
  <h1 align="center">LATE COMERS</h1>
  <h3 align="center">With 3 Entry Count</h3> 
  <h3 align="center">All Branches</h3>
</div>
	<div id="table" class="container" align="center">
           <table border="1"  style="border-collapse:collapse;">
            <tr>
                 <th>SNO</th>
                <th>STUDENT NUMBER</th>
                <th>STUDENT NAME</th>
                <th>BRANCH </th>
                <th>YEAR</th>
                </tr>



 <?php

$serial=1;
 foreach ($entries as $entry) {


 				
		 		
		 		 $info = \DB::table('Students_infos')->where('student_id', $entry->student_id)->first();
		 		 $passInfo = array('student_id' =>$info->student_id ,
		 		 					'student_name'=>$info->student_name,
		 		 					'branch'=>$info->branch,
		 		 					'year'=>$info->year);
		 	
		 		 
		 	
 				echo "<tr><td>" . $serial . "</td><td>" . $passInfo['student_id'] . "</td><td>" . $passInfo['student_name'] . "</td><td>" . $passInfo['branch'] . "</td><td>" . $passInfo['year'] . "</td></tr>";;
		 		 	$serial++;
		 		 
		}
	
?>

</body>
</html>