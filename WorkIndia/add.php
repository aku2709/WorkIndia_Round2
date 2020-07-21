<?php
	session_start();
	$user="root";
	$pass="";
	$db="WorkIndia";
	$conn=mysqli_connect("localhost",$user,$pass,$db);
	$title=$_POST['title'];
	$desc=$_POST['desc'];
	$username=$_SESSION["username"];
	if(mysqli_query($conn,"Insert into notes values ('$username','$title','$desc')"))
		echo "Note Added";
	else
		echo mysqli_error();
	echo "<br><br><button><a href='menu.html'>Menu</a></button>";
	mysqli_close($conn);
?>