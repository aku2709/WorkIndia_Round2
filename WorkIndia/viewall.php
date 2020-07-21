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
		<body>
			<h2>$name, You have $count notes.</h2>";
			if($count>0)
			{
			echo "<form action='verifypin.php' method='post'>
				<select name='title' size='$count'>";
				while($row=mysqli_fetch_array($result))
				{
					$title=$row['Title'];
					echo "<option value='$title'>$title</option>";
				}
				echo "</select><br><br>
				<button type='submit'>submit</button><br><br>";
			}
				echo "<button><a href='add.html'>Add Note</a></button><br><br>
				<button><a href='menu.html'>Menu</a></button>
			</form>
		</body>
	</html>";
	mysqli_close($conn);
?>