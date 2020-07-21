<?php
	session_start();
	$_SESSION['title']=$_POST['title'];
	echo "<html>
	<head>
		<link rel='stylesheet' type='text/css' href='Style.css'>
		<title>Note App</title>
	</head>
		<body>
			<form action='view.php' method='post'>
		<table>
			<tr>
				<th colspan='2'><h2>Kindly verify your PIN</h2></th>
			</tr>
			<tr>
				<td>Enter PIN:</td>
				<td><input type='password' placeholder='****' name='pin' pattern='[0-9]{4}' maxlength='4'></td>
			</tr>
			<tr>
				<td colspan='2'><button type='submit'>Sumbit</button></td>
			</tr>
			<tr>
				<td colspan='2'><button><a href='menu.html'>Menu</a></button></td>
			</tr>
		</table>
			</form>
		</body>
	</html>";
?>