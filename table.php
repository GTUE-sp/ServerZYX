<?php mb_internal_encoding('UTF-8'); ?>
<?php
session_start();

if(isset($_SESSION["name"])){	/*すでにログインしているとき*/
	header("location: main.php");
}

//
//工事中．
//

include "db_ac.php";	//接続先dbの取得
try{
	$ffftp = new PDO($dsn, $usr, $pas);
	$ffftp->query('SET NAMES utf8');

	$sql = "SELECT * from student";
	foreach($ffftp->query($sql) as $row){
		echo($row["student_id"]." ");
		echo($row["name"]."<br>");

	}
}catch (PDOException $e){
print('Error:'.$e->getMessage());
		die();
}	


?>


<!doctype HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>SIGN UP</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="jqjj.js"></script>
</head>
<body>
<div id="stutable"></div>
	
<body>
<html>
