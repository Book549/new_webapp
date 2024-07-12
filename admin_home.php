<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>admin</h1>
	<a href="add.php?type=problem">add_problem</a>
	<a href="add.php?type=user">add_user</a>
	<a href="logout.php">logout</a>

	<table border="5px">
	<tr>
		<th>prob_id</th>
		<th>prob_date</th>
		<th>prob_time</th>
		<th>prob_pic</th>
		<th>prob_id_user</th>
		<th>prob_dis</th>
		<th>prob_event</th>
		<th>prob_resu</th>
		<th>prob_repo_user_id</th>
		<th>prob_repo_date</th>
		<th>prob_repo_advice</th>
		<th>edit</th>
		<th>del</th>
	</tr>
	
	<?php
	include("conn.php");
	session_start();
	echo $_SESSION['user_type'];
	$id_user = $_SESSION['user_id'];
	echo "$id_user";

	$sql = "SELECT * FROM problem";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) >= 1) {
		while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>".$row['prob_id']."</td>" ;
		echo "<td>".$row['prob_date']."</td>" ;
		echo "<td>".$row['prob_time']."</td>" ;
		echo "<td>".$row['prob_pic']."</td>" ;
		echo "<td>".$row['prob_id_user']."</td>" ;
		echo "<td>".$row['prob_dis']."</td>" ;
		echo "<td>".$row['prob_event']."</td>" ;
		echo "<td>".$row['prob_resu']."</td>" ;
		echo "<td>".$row['prob_repo_user_id']."</td>" ;
		echo "<td>".$row['prob_repo_date']."</td>" ;
		echo "<td>".$row['prob_repo_advice']."</td>" ;
		echo "<td><a href=\"edit.php?id=". $row['prob_id'] ."&type=problem\">edit</a></td>" ;
		echo "<td><a href=\"del.php?id=". $row['prob_id'] ."&type=problem\">del</td></tr>" ;

		
		}
	}
	?>
	</table>

	<table border="5px">
		<tr>
			<th>user_id</th>
			<th>user_user</th>
			<th>user_name</th>
			<th>user_sirname</th>
			<th>user_pass</th>
			<th>user_tel</th>
			<th>user_type</th>
		</tr>
		<?php
		$users_sql = "SELECT * FROM user";
		$result_user = mysqli_query($conn, $users_sql);
		if (mysqli_num_rows($result_user) >= 1) {
			while ($row_user = mysqli_fetch_assoc($result_user)) {
				echo "<td>".$row_user['user_id']."</td>";
				echo "<td>".$row_user['user_user']."</td>";
				echo "<td>".$row_user['user_name']."</td>";
				echo "<td>".$row_user['user_sirname']."</td>";
				echo "<td>".$row_user['user_pass']."</td>";
				echo "<td>".$row_user['user_tel']."</td>";
				echo "<td>".$row_user['user_type']."</td>";
				echo "<td><a href=\"edit.php?id=". $row_user['user_id'] ."&type=user\">edit</a></td>";
				echo "<td><a href=\"del.php?id=". $row_user['user_id'] ."&type=user\">del</a></td><tr>";
			}
		}
		?>
	</table>

		

</body>
</html>