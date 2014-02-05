<?php
	include "utilities.php";
	$lists = view_approved();
?>
<html>
<head>
	<title>Messages</title>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
</head>
<div class="navbar">
        <div class="navbar-inner">
          <div class="container">
            <h1><a href="MessageFront.php" class="brand text-success">Laverdad Guests</a></h1>
          </div>
        </div>
        <div class = "container well" style = "background:skyblue">
			<body>
				
				<div class = "container">
					<div class="span6 offset3 well" style = "margin-top:50px">
						<table class = "table table-striped">
							<caption><h3 style = "background:green; color:white">Messages</h3></caption>
							<?php foreach ($lists as $list):?>
							<tr>
								<td><?php echo $list['name'];?><br><small class="text-success"><?php echo $list['date_posted'];?></small></td>
								<td><?php echo $list['message'];?></td>
							</tr>
							<?php endforeach;?>	
						</table>
					</div>
				</div>
				<br><br><br>
				<div class = "container">				
					<div class="span6 offset3 well">
						<center>
							<div class = "row"><h3 style = "background:green; color:white; margin-left:20px">POST NEW MESSAGE</h3></div>
							<form action = "post_message.php" method = 'POST'>
							<div class = "row">
								Name&nbsp&nbsp<input type = "text" name = "fname">
							</div>
							<div class = "row">
								Email&nbsp&nbsp<input type = "text" name = "email">
							</div>
							<div class = "row" style = "margin-right:25px">
								Message&nbsp&nbsp <textarea type = "text" name = "message"></textarea>
							</div>
							<div class = "row">
								<input type = 'submit' name = "send" value = "POST MESSAGE" class = "btn btn-primary">
							</div>
							</form>
							<form action = "backend.php">
							<input type = "submit" value = "VIEW LIST" class = "btn btn-default">
							</form>
						</center>
					</div>
				</div>
				
			</body>
		</div>
	</div>
</html>