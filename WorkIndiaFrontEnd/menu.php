<?php
session_start();
$name=$_SESSION['name'];
echo "<html>
	<head>
		<link rel='stylesheet' type='text/css' href='Style.css'>
		<title>Note App</title>
	</head>
	<body>
		<table>
			<tr>
				<th><h2>Welcome $name!</h2></th>
			</tr>
			<tr>
				<td><button><a href='add.html'>Add Note</a></button></td>
			</tr>
			<tr>
				<td><button><a href='viewall.php'>View All Notes</a></button></td>
			</tr>
			<tr>
				<td><button><a href='index.html'>Log Out</a></button></td>
			</tr>
		</table>
	</body>
</html>";
?>
