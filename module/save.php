<?php
$sSuccess = 'error';
if(isset($_POST['saveCustomer'])) {
	echo "saved";
	$sSuccess = 'success';
}
header("location: ../index.php?action=".$sSuccess);