<?php
	include "utilities.php";

	$id = $_GET['id'];
	$approved = view_data($id);
	if($approved['is_approved'] == 'N'){
		approved($id);
		 header("location:backend.php");
	}else{
		reject($id);
		 header("location:backend.php");
	}
	
?>