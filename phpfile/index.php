<?php mb_internal_encoding('UTF-8'); ?>
<?php
session_start();

if(isset($_SESSION["name"])){	/*すでにログインしているとき*/
	header("location: main.php");
}


if(isset($_POST["LOGIN"])){
	$th_usr = $_POST["ID"];
	$th_pas = $_POST["PASS"];

/*	DB接続*/
	include "db_ac.php";	//接続先dbの取得
	try{
		$ffftp = new PDO($dsn, $usr, $pas);
	
		$ffftp->query('SET NAMES utf8');
		
		session_regenerate_id(true);
		
		$sql = "select * from teacher where username = '$th_usr'";
		
		$stmt = $ffftp->prepare($sql);
		$stmt->bindValue(":th_usr",$th_usr.PDO::PARAM_STR);
		$stmt->execute();
		
	
	}catch (PDOException $e){
		print('Error:'.$e->getMessage());
		die();
	}
	
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	if($th_pas === $row["password"]){
		$_SESSION["name"] = $th_usr;
		header("location: main.php");
	}else{
		print('<p>Error:ログインに失敗しました<br>	
		そのようなユーザIDは存在しないか、パスワードが間違っています</p>');
	
	}

}

?>


<!doctype HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="phphp.css">
</head>
<body>
	<h1>login</h1>
	<form id="loginform" name="loginform" action="" method="POST">
		<fieldset>
			<legend>ログインフォーム</legend>
			<label>ユーザID</label>
			<input required type="text" name="ID" placeholder="write it" pattern="^[0-9A-Za-z]+$" maxlength=32>
			<br>
			<label>パスワード</label>
			<input required type="password" name="PASS" placeholder="write it" pattern="^[0-9A-Za-z]+$" maxlength=32>
			<br>
			<input type="submit" name="LOGIN" value="ログイン">
		</fieldset>
	</form>
	<br>
	
	<form name="signinform" action="signup.php" method="POST">
		<fieldset>
			<legend>新規登録はこちら</legend>
			<input type="submit" name="SIGNIN" value="新規登録">
		</fieldset>
	</form>
	
<body>
<html>
