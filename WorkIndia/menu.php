<?php
session_start();
$name=$_SESSION['name'];
echo "<html>
	<body>
		<h1>Welcome $name</h1>
		<button><a href='add.html'>Add Note</a></button>
		<button><a href='viewall.php'>View All Notes</a></button>
	</body>
</html>";
?>
