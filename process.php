<?php
session_start();
require_once('connection.php');
$create = function($data){
	//var_dump($data);
	//die();

	$query = "INSERT INTO users(name, email, created, updated) VALUES ('".$_POST['name']."','".$_POST['email']."', NOW(),NOW())";
	//echo($query);
	//die;
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    run_mysql_query($query); 
    }
	header("Location:results.php");
};

$delete_user = function($data){
	var_dump($data);
	die();

	// $query = "delete from users(name, email, created, updated) values ('".$_POST['name']."','".$_POST['email']."', NOW(),NOW())";
	// echo($query);
	// //die;
	// run_mysql_query($query); 
	// header("Location:results.php");
};

$show = function ($data){
	var_dump($data);
	die();
	// $query = "select * from users order by id";
};

$action_catcher = [
 'create' => $create,
 'delete' => $delete_user,
 'show' => $show
];
// Action Catcher is just a function and 
// ($_POST) invokes the function passing 
// in the argument $_POST

$action_catcher[$_POST['behavior']]($_POST);

?>


