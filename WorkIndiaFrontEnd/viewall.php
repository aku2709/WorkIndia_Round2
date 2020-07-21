<?php
	session_start();
	$user="root";
	$pass="";
	$db="WorkIndia";
	$conn=mysqli_connect("localhost",$user,$pass,$db);
	$username=$_SESSION['username'];
	$name=$_SESSION['name'];
	$result=mysqli_query($conn,"SELECT * from notes where username='$username'");
	$count=mysqli_num_rows($result);
	echo "<html>
	<head>
		<link rel='stylesheet' type='text/css' href='Style.css'>
		<title>Note App</title>
	</head>
		<body>
		<form action='verifypin.php' method='post'>
		<table>
			<tr>
				<th><h2>$name, You have $count notes</h2></th>
			</tr>";
			if($count>0)
			{
				echo "<tr>
				<td><select name='title' size='$count'>";
				while($row=mysqli_fetch_array($result))
				{
					$title=$row['Title'];
					echo "<option value='$title'>$title</option>";
				}
				echo "</select><br><br>
				</td>
			</tr>
			<tr>
				<td><button type='submit'>Submit</button></td>
			</tr>";
			}
			echo "<tr>
				<td><button><a href='add.html'>Add Note</a></button></td>
			</tr>
			<tr>
				<td><button><a href='menu.html'>Menu</a></button></td>
			</tr>
		</table>
			</form>
		</body>
	</html>";
	mysqli_close($conn);
?>