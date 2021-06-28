<?php
include "proc.php";
?>
<html>
	<head>
		<title>
			Crud
		</title>
	<style>
	h1
	{
	font-size:30px;
	}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	</head>
	
	<body>
		<h1>
			<center>
			<div style="letter-spacing:15px;">
				CRUD APP
				</div>
			</center>
		</h1><br><br><br>
		<div class="container">
		
		<div class="row justify-content-center">
		<div style="height:370px;overflow-y:auto;">
		<table class="table">
			<tr style="background-color:white">
				<th><center>Name</center></th>
				<th><center>E-Mail</center></th>
				<th><center>Password</center></th>
				<th><center>Action</center></th>
			</tr>
			<?php
			$res=mysqli_query($db,"select * from `info`");
			while($row=mysqli_fetch_assoc($res))
			{			
			?>
			<tr>
				<td><center><?php echo $row['Name'];?></center></td>
				<td><center><?php echo $row['Email'];?></center></td>
				<td><center><?php echo $row['Password'];?></center></td>
				<td><center><a href="main.php?edit=<?php echo $row['id'] ?>" class="btn btn-info">Edit</a>  <a href="proc.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></center></td>
			</tr>
			<?php
			}
			?>
		</table>
		</div>
		</div>
		
		<form method="post" action="proc.php">
			<input type="hidden" name="id" value=<?php echo $id; ?>>
			<div class="form-group">
				<input type="text" class="form-control" name="fn" value="<?php echo $fn; ?>" placeholder="Enter Name..." autocomplete="off"><br>
			</div>
			
			<div class="form-group">
				<input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Enter Email ID..." autocomplete="off"><br>
			</div>
			
			<div class="form-group">
				<input type="password" class="form-control" name="password" value="<?php echo $password; ?>" placeholder="Enter Password..." autocomplete="off"><br>
			</div>
			
			<div class="form-group">
				<?php 
				if($update==true)
				{
				?>
				<input type="submit" class="btn btn-info" name="upd" value="Update">
				<?php
				}
				else
				{
				?>
				<input type="submit" class="btn btn-success" name="sub" value="Submit">
				<?php
				}
				?>
				</div>
		</form>
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</body>
</html>