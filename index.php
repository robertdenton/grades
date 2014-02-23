<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" type="image/ico" href="http://new.cuindependent.com/wp-content/uploads/2013/11/nav.jpg" />
		
		<title>Grades Database</title>
		<style type="text/css" title="currentStyle">
			@import "media/css/page.css";
			@import "media/css/table.css";
		</style>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable();
			} );
		</script>
		<style>
		h1{margin-bottom:0px;}
		h5{margin-top: 3px;}
		</style>
	</head>
	<body id="dt_example">
		<div id="container">
			<p style="text-align:right;margin:0px;"><a href="http://www.cuindependent.com">HOME</a></p>
			<h1 style="margin-top:0px"><a href="http://www.cuindependent.com">CU Independent</a> Grades Database</h1>
			<h5>Produced by <a href="http://www.robertrdenton.com">Rob Denton</a></h5>
			<p>Below is a searchable, sortable representation of every class at CU during the Spring 2013 and Fall 2013 semesters and its grade distribution, revealing what percent of the class got an A, B, C or D/F.</p>
			<p>All of this data is publicly accessible through the <a href="www.colorado.edu/pba/‎">CU Office of Planning and Budget Analysis</a> <a href="www.colorado.edu/pba/course/gradesintro.htm">here</a>.</p>
			<p><b>Note: This is a considerable amount of data, please give it a second to load.</b></p>
			<div id="demo">
				<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
					<thead>
						<tr>
							<th>Row</th>						
							<th>Subject</th>
							<th>Number</th>
							<th>Course</th>
							<th>Instructor</th>							
							<th>Percent As</th>
							<th>Percent Bs</th>
							<th>Percent Cs</th>
							<th>Percent Ds & Fs</th>
							<th>Credit hours</th>
							<th>FCQ: Hours per week</th>
							<th>Enrollment</th>
							<th>Term</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$con=mysqli_connect("host","user","pass","yourDB");
						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }

						$result = mysqli_query($con,"SELECT * FROM yourTable");

						while($row = mysqli_fetch_array($result))
					  		{


						?>
						<tr>
						    <td><?=$row['id']; ?></td>					    
						    <td><?=$row['Subject']; ?></td>
						    <td><?=$row['Course']; ?></td>
						    <td><?=$row['CourseTitle']; ?></td>
						    <td><?=$row['insname1']; ?></td>
						    <td><?=$row['PCT_A']; ?></td>
						    <td><?=$row['PCT_B']; ?></td>
						    <td><?=$row['PCT_C']; ?></td>
						    <td><?=$row['PCT_DF']; ?></td>
						    <td><?=$row['Hours']; ?></td>
						    <td><?=$row['Workload_Hrs_Wk']; ?></td>
						    <td><?=$row['N_ENROLL']; ?></td>
						    <td><?=$row['YearTerm']; ?></td>
						</tr>    
					<?php
					}
					mysqli_free_result($result);

					?>
					</tbody>
				</table>
			</div>
			<div class="spacer"></div>
			<h5 style="text-align:right;">Created with the help of <a href="https://datatables.net/">DataTables</a>.</h5>
		</div>
	</body>
</html>