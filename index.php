<html>
<head>
	<title>Cutomer Portal</title>
</head>
<body>
	<form method="POST" action="module/save.php">
		<label>Customer Name: </label><input type="text" name="customerName" required>
		<label>Customer Code: </label><input type="text" name="customerCode" required>
		<label>State: </label><input type="text" name="state" required>
		<input type="submit" value="Save" name="saveCustomer">
	</form>
	<?php 
		if(isset($_GET['action']) && $_GET['action'] == 'success') {
			echo "customer saved successfully";
		}
	?>
</body>
</html>