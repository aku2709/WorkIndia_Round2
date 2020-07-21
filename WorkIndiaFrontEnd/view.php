<?php
	session_start();
	$user="root";
	$pass="";
	$db="WorkIndia";
	$conn=mysqli_connect("localhost",$user,$pass,$db);
	$username=$_SESSION['username'];
function viewDesc()
{
	$user="root";
	$pass="";
	$db="WorkIndia";
	$conn=mysqli_connect("localhost",$user,$pass,$db);
	$username=$_SESSION['username'];
	$title=$_SESSION['title'];
	if($result=mysqli_query($conn,"SELECT * from notes where username='$username' and Title='$title'"))
	while($row=mysqli_fetch_array($result))
	{
		$desc=$row['Description'];
		echo "<html>
	<head>
		<link rel='stylesheet' type='text/css' href='Style.css'>
		<title>Note App</title>
	</head>
			<body>
		<table>
			<tr>
				<th><h2>$title</h2></th>
			</tr>
			<tr>
				<td>$desc</td>
			</tr>";
	}
	else
		echo mysqli_error($conn);
	echo "<tr>
		<td><button><a href='menu.html'>Menu</a></button></td>
	</tr>
	</body>
	</html>";
}
	if($result=mysqli_query($conn,"SELECT * from login where username='$username'"))
	if($row=mysqli_fetch_array($result))
	{
		if($_POST['pin']==$row['PIN'])
				viewDesc();
		else
			echo "<html>
	<head>
		<link rel='stylesheet' type='text/css' href='Style.css'>
		<title>Note App</title>
	</head>
			<body>
		<table>
			<tr>
				<th><h2>Invalid PIN!</h2></th>
			</tr>
			<tr>
				<td><button><a href='menu.html'>Menu</a></button></td>
	</tr>
	</body>
	</html>";
	}
	mysqli_close($conn);
?>