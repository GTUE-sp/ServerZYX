<?php
session_start();

if(!isset($_SESSION["name"])){	/*ログインしていないとき*/
	header("location: login.php");
}



?>

<!doctype HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>main</title>
</head>
<body>

とりあえず仮置き<br>
<a href='logout.php'>ログアウト</a>
	
<body>
<html>
