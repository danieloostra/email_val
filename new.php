<!DOCTYPE html>
<html>
<head>
	<meta charset="udf-8">
	<title></title>
</head>
<body>
<!-- NEW --> 
	<form action="process.php" method="post">
		<h5>Name: </h5>
		<input type="text" name="name" placeholder="Your Name Here."/>
		<h5>Email: </h5>
		<input type="text" name="email" placeholder="Your Email Here."/>
		<input type="hidden" name="behavior" value="create"/>
		<input type="submit" value="Submit"/>
	</form>

<!-- 	<form action="process.php" method="post">
		<h5>Name: </h5>
		<input type="text" name="name" placeholder="Your Name Here."/>
		<h5>Email: </h5>
		<input type="text" name="email" placeholder="Your Email Here."/>
		<input type="hidden" name="behavior" value="delete_user"/>
		<input type="submit" value="Submit"/>
	</form> -->
<!-- -->
</body>
</html>