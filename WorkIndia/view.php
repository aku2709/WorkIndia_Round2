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
			<body>
				<h2>$title</h2>
				<p>$desc</p>
			</body>
		</html>";
	}
	else
		echo mysqli_error($conn);
	echo "<br><br><button><a href='menu.html'>Menu</a></button>";
}
	if($result=mysqli_query($conn,"SELECT * from login where username='$username'"))
	if($row=mysqli_fetch_array($result))
	{
		if($_POST['pin']==$row['PIN'])
				viewDesc();
		else
				echo "Invalid PIN!<br><br><button><a href='menu.html'>Menu</a></button>";
	}
	mysqli_close($conn);
?>