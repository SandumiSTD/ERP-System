<!DOCTYPE html>
<html lang="en">
<head>
  <title>Item</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <script>
  function validateForm() {
  let x = document.forms["myForm2"]["itemcode"].value;
  if (x == "") {
    alert("Item Code must be filled out");
    return false;
  }
  let y = document.forms["myForm2"]["itemname"].value;
  if (y == "") {
    alert("Item Name must be filled out");
    return false;
  }
  let z = document.forms["myForm2"]["category"].value;
  if (z == "") {
    alert("Category must be filled out");
    return false;
  }
  let title = document.forms["myForm2"]["subcategory"].value;
  if (title == "") {
    alert("Sub category must be filled out");
    return false;
  }
  let district = document.forms["myForm2"]["quantity"].value;
  if (district == "") {
    alert("Quantity must be filled out");
    return false;
  }
  
  let phone = document.forms["myForm2"]["unitprice"].value;
  if (phone == "") {
    alert("Unit price must be filled out");
    return false;
  }
  
}
  </script>
  <style>
body {
  
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
<body >

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>ERP System</h1>
  <p>Business Management System!</p> 
</div>
 
<div class="container mt-5" align="center">
  <form name="myForm2" action="insert2.php" onsubmit="return validateForm()" method="post">
  <div class="form-group">
	<table>
	<tr><td><h5>Enter Item Details:</h5></td></tr>
	<tr>
	<td><label for=" First name"> ID: </label></td>
	<td><input type="text" id="id" name="id" required></td>
	</tr>
	
	<tr>
	<td><label for="Item code">Item code: </label></td>
	<td><input type="text" id="itemcode" name="itemcode"></td>
	</tr>
	<tr>
	<td><label for="Item name">Item name: </label></td>
	<td><input type="text" id="itemname" name="itemname"></td>
	</tr>
	<tr>
	<td> <label for="category">Item category: </label></td>
	<td> <select id="category" name="category">
		<option value="Printers">Printers</option>
		<option value="Laptops">Laptops</option>
		<option value="Gadgets">Gadgets</option>
		<option value="Inkbottels">Ink bottels</option>
		<option value="Cartridges">Cartridges</option>
	</select></td>
	</tr>
	<tr>
	<td> <label for="subcategory">Item Subcategory: </label></td>
	<td> <select id="subcategory" name="subcategory">
		<option value="HP">HP</option>
		<option value="Dell">Dell</option>
		<option value="Lenovo">Lenovo</option>
		<option value="Acer">Acer</option>
		<option value="Samsung">Samsung</option>
	</select></td>
	</tr>
	<tr>
	<td><label for="quantity">Quantity: </label></td>
	<td><input type="text" id="quantity" name="quantity" ></td>
	</tr>
	<tr>
	<td><label for="unitprice">Unit price: </label></td>
	<td><input type="text" id="unitprice" name="unitprice"></td>
	</tr>
	</table> <br>
	
	
	<Button type="button" onclick="window.location.href='report.php';">View Report</Button>
	<input type="submit" value="Submit">
     
   
   
  </div><br>
  <div>
  
  
  </div>
  </div>
  
  
</body>
</html>