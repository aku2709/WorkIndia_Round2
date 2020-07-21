<?php
	$user="root";
	$pass="";
	$db="WorkIndia";
	$conn=mysqli_connect("localhost",$user,$pass,$db);
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$pin=$_POST['pin'];
	if(mysqli_query($conn,"Insert into login values ('$name','$username','$password','$pin')"))
		echo "Sign Up Successful";
	else
		echo "Username already taken";
	echo "<br><br><a href='login.html'>login</a>";
	mysqli_close($conn);
?>