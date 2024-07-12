
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>user</h1>
	<a href="add.php">add</a>

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
	$sql = "SELECT * FROM problem WHERE prob_id_user = '$id_user'";
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
		echo "<td><a href=\"edit.php?id=". $row['prob_id'] ."\">edit</a></td>" ;
		echo "<td>del</td></tr>" ;

		
		}
	}
	?>
	</table>

		

</body>
</html>