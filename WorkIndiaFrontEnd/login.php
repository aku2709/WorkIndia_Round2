<?php
	$user="root";
	$pass="";
	$db="WorkIndia";
	$conn=mysqli_connect("localhost",$user,$pass,$db);
	$username=$_POST['username'];
	$password=$_POST['password'];
	$result=mysqli_query($conn,"SELECT * from login where username='$username'");
	if(mysqli_num_rows($result)==0)
	{
		echo "NO SUCH USER REGISTERED";
		echo "<br><br><a href='login.html'>login</a>";
	}
	else
	{
		while($data=mysqli_fetch_array($result))
		{
		if($data['Password']==$password)
		{
			session_start();
			$_SESSION['name']=$data['Name'];
			$_SESSION['username']=$username;
			header("Location: menu.php");
		}
		else
		{
			echo "INVALID PASSWORD";
			echo "<br><br><a href='login.html'>login</a>";
		}
		}
	}
	mysqli_close($conn);
?>