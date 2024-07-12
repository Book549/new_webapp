
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	session_start();
	include("conn.php");
	switch ($_SESSION['user_type']) {
		case '1':
			echo("<form method=\"post\" enctype=\"multipart/form-data\">
	<input type=\"date\" name=\"prob_date\">
	<input type=\"time\" name=\"prob_time\">
	<input type=\"file\" name=\"prob_pic\">
	<input type=\"text\" name=\"prob_dis\">
	<input type=\"text\" name=\"prob_event\">
	<input type=\"text\" name=\"prob_resu\">
	<input type=\"text\" name=\"prob_repo_user_id\">
	<input type=\"date\" name=\"prob_repo_date\">
	<input type=\"text\" name=\"prob_repo_advice\">
	<input type=\"submit\" name=\"send\">
</form>");
			break;
		case '2':
			echo("<form method=\"post\" enctype=\"multipart/form-data\">
	<input type=\"date\" name=\"prob_date\">
	<input type=\"time\" name=\"prob_time\">
	<input type=\"file\" name=\"prob_pic\">
	<input type=\"text\" name=\"prob_dis\">
	<input type=\"text\" name=\"prob_event\">
	<input type=\"text\" name=\"prob_resu\">
	<input type=\"text\" name=\"prob_repo_user_id\">
	<input type=\"date\" name=\"prob_repo_date\">
	<input type=\"text\" name=\"prob_repo_advice\">
	<input type=\"submit\" name=\"send\">
</form>");
			break;
		case '3':
			echo("<form method=\"post\" enctype=\"multipart/form-data\">
	<input type=\"date\" name=\"prob_date\">
	<input type=\"time\" name=\"prob_time\">
	<input type=\"file\" name=\"prob_pic\">
	<input type=\"text\" name=\"prob_dis\">
	<input type=\"text\" name=\"prob_event\">
	<input type=\"text\" name=\"prob_resu\">
	<input type=\"text\" name=\"prob_repo_user_id\">
	<input type=\"date\" name=\"prob_repo_date\">
	<input type=\"text\" name=\"prob_repo_advice\">
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

		$sql = "INSERT INTO problem (prob_id, prob_date, prob_time, prob_pic, prob_id_user, prob_dis, prob_event, prob_resu, prob_repo_user_id, prob_repo_date, prob_repo_advice) VALUES (NULL, '$prob_date', '$prob_time', 'prob_pic', 'prob_id_user', '$prob_dis', '$prob_event', '$prob_resu', '$prob_repo_user_id', '$prob_repo_date', '$prob_repo_advice')";
		$resutl = mysqli_query($conn, $sql);
		if ($resutl == true){
			header("location: user_home.php");
		}
	}
	

?>
</body>
</html>