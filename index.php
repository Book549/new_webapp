<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<h1>LOGIN</h1>
<form action="" method="post">
	<table>user</table>
	<input type="text" name="user"><br>
	<table>pass</table>
	<input type="text" name="pass"><br>
	<input type="submit" name="send">
</form>
<?php
	include("conn.php");
	session_start();
	if (isset($_POST['send'])) {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$sql = "SELECT * FROM user WHERE user_user = '$user' AND user_pass = '$pass'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) == 1) {
			while ($row = mysqli_fetch_assoc($result)) {
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['user_type'] = $row['user_type'];
				//echo $_SESSION['user_type'];
			}
		}
		switch ($_SESSION['user_type']) {
			case '1':
				header("location: user_home.php");

				break;
			case '2':
				//controer
				break;
			case '3':
				//admin
				header("location: admin_home.php");
				//exit();
				break;
			default:
				echo "SOME THING IS WRONG, plz try again";
				break;
		}
	}
	
?>
</body>
</html>