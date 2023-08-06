<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div>
		<h2>Invoice Report</h2>
	</div>
	<form action="db.php" method="post">
	Choose Date Range: <input type="text" name="date">
	<input type="submit" name="Search">
	</form>
	<div>
	<table>
	<thead>
	<tr>
	<th scope="col">Invoice number</th>
	<th scope="col">Date</th>
	<th scope="col">Customer</th>
	<th scope="col">Customer district</th>
	<th scope="col">Item count</th>
	<th scope="col">Invoice amount</th>
	
	</tr></thead>
	<tbody>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "erp");
		$limit=5;
		$getQuery="SELECT * FROM invoice";
		$result=mysqli_query($conn,$getQuery);
		$total_num_rows=mysqli_num_rows($result);
		$total_pages=ceil($total_num_rows/$limit);
		if(!isset($_GET['page'])){
			$page_number=1;
		}
		else{
			$page_number=$_GET['page'];
		}
		$initial_page=($page_number-1)*$limit;
		if(!isset($_POST['Search'])){
				$getQuery="SELECT invoice.invoice_no,invoice.date,invoice.customer,customer.district,invoice.item_count,invoice.amount FROM invoice JOIN customer ON invoice.customer=customer.id LIMIT".$initial_page.','.$limit;
				getData($getQuery);
		}
		else if(isset($_POST['date'])&& isset($_POST['Search'])){
			$date=$_POST['date'];
							$getQuery="SELECT invoice.invoice_no,invoice.date,invoice.customer,customer.district,invoice.item_count,invoice.amount FROM invoice JOIN customer ON invoice.customer=customer.id WHERE invoice.date=$date LIMIT".$initial_page.','.$limit;
						getData($getQuery);
		}
		?>
	</tbody>
	</table></div>
	
</body>
</html>