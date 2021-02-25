<!DOCTYPE html>
<head>
<title>Form Add Data</title>
<meta charset = "UTF-8">
</head>
<body>
<h1> Add Data </h1>
<form action = "insert.php" method = "post">
	First name: <br/>
	<input type = "text" name = "first_name" required>
	<br/>
	Last name: <br/>
	<input type = "text" name = "last_name" required>
	<br/>
	City: <br/>
	<input type = "text" name = "city_name" required>
	<br/>
	Email: <br/>
	<input type = "email" name = "email" required>
	<br/><br/>
	<input type = "submit" name = "save" value = "Submit">
</form>
</body>
</html>