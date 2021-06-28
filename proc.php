<?php
$db=mysqli_connect("localhost","root","","crud");
$id=0;
$fn='';
$email='';
$password='';
$update=false;

if(isset($_POST['sub']))
	{
		$fn=$_POST['fn'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		mysqli_query($db,"insert into `info` (id,Name,Email,Password) values('','$fn','$email','$password')");
		header("location:main.php");
	}
if(isset($_GET['delete']))
	{
		$a=$_GET['delete'];
		mysqli_query($db,"delete from info where id=$a");
		header("location:main.php");
	}
if(isset($_GET['edit']))
	{
		$id=$_GET['edit'];
		$update=true;
		$res=mysqli_query($db,"select * from `info` where id=$id");
		if(mysqli_num_rows($res)==1)
		{
		$row=mysqli_fetch_assoc($res);
		$fn=$row['Name'];
		$email=$row['Email'];
		$password=$row['Password'];
		}
	}
if(isset($_POST['upd']))
	{
		$id=$_POST['id'];
		$fn=$_POST['fn'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		mysqli_query($db,"update info set Name='$fn',Email='$email',Password='$password' where id=$id");
		header("location:main.php");
	}
	
?>