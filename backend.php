<?php 
	include "utilities.php";
	
	$views  = view_all();
?>
<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
<div class="navbar">
        <div class="navbar-inner">
          <div class="container">
            <h1><a href="MessageFront.php" class="brand text-success">Laverdad Guests</a></h1>
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li><a href="MessageFront.php" class="active-link">Back</a></li>
              </ul>
            </div>
          </div>
        </div>


	<div class = "container well">
		<table class = "table" style = "background:beige">
			<caption style = "background:black; color:green"><h2>Messages</h2></caption>
			<tr style = "background:black; color:white">
				<td>No.</td>
				<td>Name</td>
				<td>Email</td>
				<td>Message</td>
				<td>Date Posted</td>
				<td>Approved</td>
				<td>Actions</td>
				<td></td>
			</tr>
			<?php foreach ($views as $view):?>
			<tr>
				<td><?php echo $view['id'];?></td>
				<td><?php echo $view['name'];?></td>
				<td><?php echo $view['email'];?></td>
				<td><?php echo $view['message'];?></td>
				<td><?php echo $view['date_posted'];?></td>
				<td><?php echo $view['is_approved'];?></td>
				<td>
					<form action = "approved.php?id=<?php echo $view['id'];?>" method = 'POST'>
						<?php
						if($view['is_approved'] == 'Y'){
							echo "<input type = 'submit' name = 'approved' value = 'Reject' class = 'btn btn-success'>";
						}else{
							echo "<input type = 'submit' name = 'reject' value = 'Approve' class = 'btn btn-warning'>";
						}
						?>
						</form>
				</td>
				<td>	
					<form action = "delete.php?id=<?php echo $view['id'];?>" method = 'POST'>
						<input type = 'submit' name = 'delete2' value = "DELETE" class = 'btn btn-danger'></form>
				</td>
			</tr>
			<?php endforeach;?>
		</table>
		<center><a href="MessageFront.php"><button class = "btn btn-info">Back</button></a></center>
	</div>
</div>