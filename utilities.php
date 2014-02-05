<?php
	mysql_connect("localhost", "root") && mysql_select_db("excercise");

	session_start();

	function approved($id){
		$query = "UPDATE messages SET is_approved = 'Y' WHERE id = '{$id}'";
		$result = mysql_query($query);
	}

	function reject($id){
		$query = "UPDATE messages SET is_approved = 'N' WHERE id = '{$id}' ";
		$result = mysql_query($query);	
	}

	function create_message($name, $email, $message, $approved){
		$query = "INSERT INTO messages(name , message, email, date_posted, is_approved ) VALUES('$name', '$email', '$message', CURRENT_DATE, '$approved')";
		$result = mysql_query($query);
	}

	function delete_all($id){
		$query = "DELETE FROM messages WHERE id = '$id' ";
		$result = mysql_query($query);
	}

	function view_all(){
		$query = "SELECT * FROM messages";
		$result = mysql_query($query);
		$list = array();
		if(mysql_num_rows($result)>0){
			while($row = mysql_fetch_assoc($result)){
					$list[] = $row;
			}
		}
		return $list;

	}

	function view_data($id){
		$query = "SELECT is_approved FROM messages WHERE id = '$id' ";
		$result = mysql_query($query);
		$row = mysql_fetch_assoc($result);
		return $row;
	}

	function view_approved(){
		$query = "SELECT * FROM messages WHERE is_approved = 'Y' ";
		$result = mysql_query($query);
		$list = array();
		if(mysql_num_rows($result)>0){
			while($row = mysql_fetch_assoc($result)){
				$list[] = $row;
			}
		}
		return $list;

	}
	
?>