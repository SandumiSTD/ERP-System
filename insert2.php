<!DOCTYPE html>
<html>

<head>
	<title>Insert Page</title>
</head>

<body>
	<center>
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "erp");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$itemcode = $_REQUEST['itemcode'];
		$itemname = $_REQUEST['itemname'];
		$category = $_REQUEST['category'];
		$subcategory = $_REQUEST['subcategory'];
		$quantity = $_REQUEST['quantity'];
		$unitprice =$_REQUEST['unitprice'];
		$id=$_REQUEST['id'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO item VALUES ('$id','$itemcode','$itemname','$category','$subcategory','$quantity','$unitprice')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$id\n $itemcode\n $itemname\n $category\n $subcategory\n $quantity\n $unitprice");
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
