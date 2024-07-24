
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	session_start();
	include("conn.php");
	$prob_date = date('Ymd_His');
	echo $_SESSION['user_id'];

	switch ($_SESSION['user_type']) {
		case '1':
			echo("<form method=post enctype=multipart/form-data>
				
				<input type=date name=prob_date value=$prob_date>
				<input type=time name=prob_time>
				<input type=file name=prob_pic onchange=preview()>
				<img id=prepic width=auto height=100px>
				<script type=text/javascript>
				function preview() {
					prepic.src=URL.createObjectURL(event.target.files[0]);
				}
				</script>
				<input type=text name=prob_dis>
				<input type=text name=prob_event>
				<input type=text name=prob_resu>
				<input type=text name=prob_repo_user_id
				<input type=date name=prob_repo_date>
				<input type=text name=prob_repo_advice>
				<input type=submit name=send>
			</form>");
			break;
		case '2':
			echo("<form method=post enctype=multipart/form-data>
				
				<input type=date name=prob_date value=$prob_date>
				<input type=time name=prob_time>
				<input type=file name=prob_pic onchange=preview()>
				<img id=prepic width=auto height=100px>
				<script type=text/javascript>
				function preview() {
					prepic.src=URL.createObjectURL(event.target.files[0]);
				}
				</script>
				<input type=text name=prob_dis>
				<input type=text name=prob_event>
				<input type=text name=prob_resu>
				<input type=text name=prob_repo_user_id>
				<input type=date name=prob_repo_date>
				<input type=text name=prob_repo_advice>
				<input type=submit name=send>
			</form>");
			break;
		case '3':
		if ($_GET['type'] == "problem") {
			echo("<form method=post enctype=multipart/form-data>

				<input type=date name=prob_date value=$prob_date>
				<input type=time name=prob_time>
				<input type=file name=prob_pic onchange=preview()>
				<img id=prepic width=auto height=100px>
				<script type=text/javascript>
				function preview() {
					prepic.src=URL.createObjectURL(event.target.files[0]);
				}
				</script>
				<input type=text name=prob_dis>
				<input type=text name=prob_event>
				<input type=text name=prob_resu>
				<input type=text name=prob_repo_user_id>
				<input type=date name=prob_repo_date>
				<input type=text name=prob_repo_advice>
				<input type=submit name=send>
				</form>");
		}elseif ($_GET['type'] == "user") {
			echo "<form method=post enctype=multipart/form-data>
				<input type=text name=user_user>
				<input type=text name=user_name>
				<input type=text name=user_sirname>
				<input type=text name=user_pass>
				<input type=text name=user_tel>
				<input type=text name=user_type>
				<input type=submit name=send>
			</form>";
		}
			
			break;
		
		default:
			echo("some thing error");
			break;
	}
	if($_POST){
		$prob_date = $_POST['prob_date'];
		$prob_time = $_POST['prob_time'];
		//$prob_pic = $_FILE['prob_pic']['name'];
		$prob_id_user = $_SESSION['user_id'];
		$prob_dis = $_POST['prob_dis'];
		$prob_event = $_POST['prob_event'];
		$prob_resu = $_POST['prob_resu'];
		$prob_repo_user_id = $_POST['prob_repo_user_id'];
		$prob_repo_date = $_POST['prob_repo_date'];
		$prob_repo_advice = $_POST['prob_repo_advice'];
		if ($_FILES["prob_pic"]["name"] != ""){

			$target_file = "upload/" . date('Ymd_His') . $_FILES["prob_pic"]["name"];
			

			if (move_uploaded_file($_FILES["prob_pic"]["tmp_name"], $target_file)) {
			    $prob_pic = $target_file;
			   
			} else {
			    echo "Sorry, there was an error uploading your file.";
			    //exit();
			}
		$sql = "INSERT INTO problem (prob_id, prob_date, prob_time, prob_pic, prob_id_user, prob_dis, prob_event, prob_resu, prob_repo_user_id, prob_repo_date, prob_repo_advice) VALUES (NULL, '$prob_date', '$prob_time', '$prob_pic', '$prob_id_user', '$prob_dis', '$prob_event', '$prob_resu', '$prob_repo_user_id', '$prob_repo_date', '$prob_repo_advice')";
		$resutl = mysqli_query($conn, $sql);
		if ($resutl == true){
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
		}
		$user_user = $_POST['user_user']; 
		$user_name = $_POST['user_name']; 
		$user_sirname = $_POST['user_sirname']; 
		$user_pass = $_POST['user_pass']; 
		$user_tel = $_POST['user_tel']; 
		$user_type = $_POST['user_type']; 
		$sql_user_add = "INSERT INTO `user` (`user_id`, `user_user`, `user_name`, `user_sirname`, `user_pass`, `user_tel`, `user_type`) VALUES (NULL, '$user_user', '$user_name', '$user_sirname', '$user_pass', '$user_tel', '$user_type')";
		$resutl_1 = mysqli_query($conn, $sql_user_add);
		if ($resutl_1 == true){
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
		}

}
}
	

?>
</body>
</html>