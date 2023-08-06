<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script >
  function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  let y = document.forms["myForm"]["mname"].value;
  if (y == "") {
    alert("Middle Name must be filled out");
    return false;
  }
  let z = document.forms["myForm"]["lname"].value;
  if (z == "") {
    alert("Last Name must be filled out");
    return false;
  }
  let title = document.forms["myForm"]["title"].value;
  if (title == "") {
    alert("Title must be filled out");
    return false;
  }
  let district = document.forms["myForm"]["district"].value;
  if (district == "") {
    alert("District must be filled out");
    return false;
  }
  
  let phone = document.forms["myForm"]["phone"].value;
  if (phone == "") {
    alert("Phone must be filled out");
    return false;
  }
  
}
  </script>
  <style>body {
  
  background-image: url('background.png');
  align:left;
}
table{
	background-color:rgb(255, 255, 255,0.5);
	
}
label{
	font-weight: bold;
}
</style>
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>ERP System</h1>
  <p>Business Management System!</p> 
</div>
 
<div class="container mt-5"  align="center">
  <form name="myForm" action="insert.php" onsubmit="return validateForm()" method="post">
  <div class="form-group">
  
	<table>
	<tr><td><h5>Enter Customer Details:</h5></td></tr>
	<tr>
	<td> <label for="Title">Title: </label></td>
	<td> <select id="title" name="title">
		<option value="Mr">Mr</option>
		<option value="Mrs">Mrs</option>
		<option value="Miss">Miss</option>
		<option value="Dr">Dr</option>
	</select></td>
	</tr>
	<tr>
	<td><label for=" ID"> ID: </label></td>
	<td><input type="text" id="id" name="id" required></td>
	</tr>
	<tr>
	<td><label for=" First name"> First name: </label></td>
	<td><input type="text" id="fname" name="fname"></td>
	</tr>
	<tr>
	<td><label for=" Last name"> Middle name: </label></td>
	<td><input type="text" id="mname" name="mname"></td>
	</tr>
	<tr>
	<td><label for=" Last name"> Last name: </label></td>
	<td><input type="text" id="lname" name="lname"></td>
	</tr>
	<tr>
	<td><label for=" contact no">Contact number: </label></td>
	<td><input type="tel" id="phone" name="phone" placeholder="0791234678" pattern="[0-9]{10}" ></td>
	</tr>
	<tr>
	<td><label for="district">District: </label></td>
	<td><input type="text" id="district" name="district"></td>
	</tr><br>
	<tr><td></td><td></td></tr>
	</table><br>
	
	
    <Button type="button" onclick="window.location.href='item.php';">Go To Item Page</Button>
	<input type="submit" value="Submit">
     
   

   
  </div><br>
  <div>
  
  
  </div>
  </div>
  
  
</body>
</html>