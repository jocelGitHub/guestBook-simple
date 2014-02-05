<?php
	include "utilities.php";
	$id = $_GET['id'];

	delete_all($id);
	echo "<script>alert('Successfully Deleted!!');window.location.href='backend.php'</script>";
?>
?>