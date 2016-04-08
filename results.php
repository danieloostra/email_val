
<?php
// This is where our index is going to be!
	require_once('connection.php');
	$query = "SELECT * FROM users";
	$users = fetch_all($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<body>
		<?php
		for ($i=0; $i < count($users); $i++) 
		{ 
		$users[$i];
		?>
		<p>Email: <?= $users[$i]['email'] ?> || Name: <?= $users[$i]['name'] ?> || <?= $users[$i]['created'] ?></p>
		<?php
		}
		?>
	</body>
</html>
