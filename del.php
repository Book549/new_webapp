<?php
	include("conn.php");
	$ID = $_GET['id'];
	$type = $_GET['type'];
	session_start();
	switch ($_GET['type']) {
		case 'problem':
			$sql = "DELETE FROM `problem` WHERE `problem`.`prob_id` = $ID";

			break;

		case 'user':
			$sql = "DELETE FROM `user` WHERE `user`.`user_id` = $ID";

			break;

		default:
			# code...
			break;
	}
	mysqli_query($conn,$sql);
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
			}

?>