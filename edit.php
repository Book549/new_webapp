<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$ID = $_GET['id'];
session_start();
	include("conn.php");
	$sql1 = "SELECT * FROM problem WHERE prob_id = '$ID'";
		$result = mysqli_query($conn, $sql1);
		if (mysqli_num_rows($result) == 1) {
			while ($row = mysqli_fetch_assoc($result)) {
				//$_SESSION['user_id'] = $row['user_id'];
				//$_SESSION['user_type'] = $row['user_type'];
				$prob_time = $row['prob_time'];
				$prob_pic = $row['prob_pic'];
				$prob_dis = $row['prob_dis'];
				$prob_event = $row['prob_event'];
				$prob_resu = $row['prob_resu'];
				$prob_repo_user_id = $row['prob_repo_user_id'];
				$prob_repo_date = $row['prob_repo_date'];
				$prob_repo_advice = $row['prob_repo_advice'];
				$prob_date = $row['prob_date'];
				
			}
		}
	switch ($_SESSION['user_type']) {
		case '1':
			echo("<form method=\"post\" enctype=\"multipart/form-data\">
	<input type=\"date\" name=\"prob_date\" value=\"$prob_date\">
	<input type=\"time\" name=\"prob_time\" value=\"$prob_time\">
	<input type=\"file\" name=\"prob_pic\" value=\"$prob_pic\">
	<input type=\"text\" name=\"prob_dis\" value=\"$prob_dis\">
	<input type=\"text\" name=\"prob_event\" value=\"$prob_event\">
	<input type=\"text\" name=\"prob_resu\" value=\"$prob_resu\">
	<input type=\"text\" name=\"prob_repo_user_id\" value=\"$prob_repo_user_id\">
	<input type=\"date\" name=\"prob_repo_date\" value=\"$prob_repo_date\">
	<input type=\"text\" name=\"prob_repo_advice\" value=\"$prob_repo_advice\">
	<input type=\"submit\" name=\"send\">
</form>");
			break;
		case '2':
			echo("<form method=\"post\" enctype=\"multipart/form-data\">
	<input type=\"date\" name=\"prob_date\" value=\"$prob_date\">
	<input type=\"time\" name=\"prob_time\" value=\"$prob_time\">
	<input type=\"file\" name=\"prob_pic\" value=\"$prob_pic\">
	<input type=\"text\" name=\"prob_dis\" value=\"$prob_dis\">
	<input type=\"text\" name=\"prob_event\" value=\"$prob_event\">
	<input type=\"text\" name=\"prob_resu\" value=\"$prob_resu\">
	<input type=\"text\" name=\"prob_repo_user_id\" value=\"$prob_repo_user_id\">
	<input type=\"date\" name=\"prob_repo_date\" value=\"$prob_repo_date\">
	<input type=\"text\" name=\"prob_repo_advice\" value=\"$prob_repo_advice\">
	<input type=\"submit\" name=\"send\">
</form>");
			break;
		case '3':
			echo("<form method=\"post\" enctype=\"multipart/form-data\">
	<input type=\"date\" name=\"prob_date\" value=\"$prob_date\">
	<input type=\"time\" name=\"prob_time\" value=\"$prob_time\">
	<input type=\"file\" name=\"prob_pic\" value=\"$prob_pic\">
	<input type=\"text\" name=\"prob_dis\" value=\"$prob_dis\">
	<input type=\"text\" name=\"prob_event\" value=\"$prob_event\">
	<input type=\"text\" name=\"prob_resu\" value=\"$prob_resu\">
	<input type=\"text\" name=\"prob_repo_user_id\" value=\"$prob_repo_user_id\">
	<input type=\"date\" name=\"prob_repo_date\" value=\"$prob_repo_date\">
	<input type=\"text\" name=\"prob_repo_advice\" value=\"$prob_repo_advice\">
	<input type=\"submit\" name=\"send\">
</form>");
			break;
		
		default:
			echo("some thing error");
			break;
	}
	if($_POST){
		$prob_date = $_POST['prob_date'];
		$prob_time = $_POST['prob_time'];
		//$prob_pic = $_FILE['prob_pic']['name'];
		//$prob_id_user = $_POST['prob_id_user'];
		$prob_dis = $_POST['prob_dis'];
		$prob_event = $_POST['prob_event'];
		$prob_resu = $_POST['prob_resu'];
		$prob_repo_user_id = $_POST['prob_repo_user_id'];
		$prob_repo_date = $_POST['prob_repo_date'];
		$prob_repo_advice = $_POST['prob_repo_advice'];

		$sql = "UPDATE problem SET prob_date = '$prob_date', prob_time = '$prob_time', prob_resu = '$prob_resu', prob_repo_date = '$prob_repo_date', prob_repo_advice = '$prob_repo_advice' WHERE problem.prob_id = '$ID'";
		$resutl = mysqli_query($conn, $sql);
		if ($resutl == true){
			header("location: user_home.php");
		}
	}

?>
</body>
</html>