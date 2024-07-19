$sql1 = "SELECT * FROM problem WHERE prob_id = '$ID'";
		$result_problem = mysqli_query($conn, $sql1);
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
$user_list_sql = "SELECT * FROM `user` WHERE `user_id`='$ID'";
$result_user_list = mysqli_query($conn, $user_list_sql);
    if (mysqli_num_rows($result_user_list) == 1) {
        while ($row_user = mysqli_fetch_assoc($result_user_list)) {
            $user_id = $row_user['user_id'];
            $user_user = $row_user['user_user'];
            $user_name = $row_user['user_name'];
            $user_sirname = $row_user['user_sirname'];
            $user_pass = $row_user['user_pass'];
            $user_tel = $row_user['user_tel'];
            $user_type = $row_user['user_type'];
        }
    }