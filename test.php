<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="get" enctype="multipart/form-data">
	<input type="text" name="user_user">
	<input type="text" name="user_name">
	<input type="text" name="user_sirname">
	<input type="text" name="user_pass">
	<input type="text" name="user_tel">
	<input type="text" name="user_type">
	<input type="submit" name="send">
</form>
</body>
</html>
UPDATE `user` SET `user_user` = '', `user_name` = '', `user_sirname` = '', `user_pass` = '', `user_tel` = '', `user_type` = '' WHERE `user`.`user_id` = 6;