<?php
	$user="root";
	$pass="";
	$db="WorkIndia";
	$conn=mysqli_connect("localhost",$user,$pass,$db);
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$pin=$_POST['pin'];
	echo "<html>
	<head>
		<link rel='stylesheet' type='text/css' href='Style.css'>
		<title>Note App</title>
	</head>
		<body>
			<form action='view.php' method='post'>
		<table>
			<tr>
				<th><h2>";
	if(mysqli_query($conn,"Insert into login values ('$name','$username','$password','$pin')"))
		echo "Sign Up Successful";
	else
		echo "Username already taken";
	echo "</h2></th>
			</tr>
			<tr>
				<td><button><a href='login.html'>login</a></button></td>
			</tr>
		</table>
			</form>
		</body>
	</html>";
	mysqli_close($conn);
?>