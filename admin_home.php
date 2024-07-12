<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="logout.php">logout</a>
<?php
session_start();
echo $_SESSION['user_type'];

?>
</body>
</html>