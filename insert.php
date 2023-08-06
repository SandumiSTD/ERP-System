<!DOCTYPE html>
<html>

<head>
	<title>Insert Page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "erp");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$phone = $_REQUEST['phone'];
		$district = $_REQUEST['district'];
		$title = $_REQUEST['title'];
		$mname =$_REQUEST['mname'];
		$id=$_REQUEST['id'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO customer VALUES ('$id','$title','$fname','$mname','$lname','$phone','$district')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$id\n $title\n $fname\n $mname\n $lname\n $phone\n $district");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
