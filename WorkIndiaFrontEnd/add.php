<?php
	session_start();
	$user="root";
	$pass="";
	$db="WorkIndia";
	$conn=mysqli_connect("localhost",$user,$pass,$db);
	$title=$_POST['title'];
	$desc=$_POST['desc'];
	$username=$_SESSION["username"];
	echo "<html>
	<head>
		<link rel='stylesheet' type='text/css' href='Style.css'>
		<title>Note App</title>
	</head>
		<body>
			<table>
				<tr>";
	if(mysqli_query($conn,"Insert into notes values ('$username','$title','$desc')"))
		echo "<th><h3>Note Added!<h3></th>";
	else
		echo "<th><h3>Note with same title already exists!<h3></th>";
	echo"</tr>
				<tr>
					<td><button><a href='menu.html'>Menu</a></button></td>
				</tr>
			</table>
		</body>
	</html>";
	mysqli_close($conn);
?>