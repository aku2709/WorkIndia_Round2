<?php
	session_start();
	$_SESSION['title']=$_POST['title'];
	echo "<html>
		<body>
			<form action='view.php' method='post'>
				Enter PIN: <input type='password' placeholder='****' name='pin' pattern='[0-9]{4}' maxlength='4'><br>
				<button type='submit'>Sumbit</button><br><br>
				<button><a href='menu.html'>Menu</a></button>
			</form>
		</body>
	</html>";
?>