<?php mb_internal_encoding('UTF-8'); ?>
<?php
session_start();

if(isset($_SESSION["name"])){	/*すでにログインしているとき*/
	header("location: main.php");
}

if(isset($_POST["SIGNUP"])){
	$new_usr = $_POST["ID"];
	$new_pas = $_POST["PASS"];
	$chk_pas = $_POST["PASSchk"];
/*	DB接続	*/
	
	if($new_pas !== $chk_pas){
		print('<p>Error:ユーザの新規作成に失敗しました<br>
		パスワードをもう一度確認してください</p>');

	}else{
		include "db_ac.php";	//接続先dbの取得
		try{
			$ffftp = new PDO($dsn, $usr, $pas);
			$ffftp->query('SET NAMES utf8');
	
			$sql="select username from teacher";
			foreach($ffftp->query($sql) as $row){
				if(strtolower($new_usr) === $row["username"]){
					print("<p>Error:ユーザの新規作成に失敗しました<br>
					そのユーザIDはすでに使用されています</p>");
					$Errflag = 1;	//スマートと程遠い力技 要改善
				}
			}if(!isset($Errflag)){
				$sql ="insert into teacher(username,password) values(:usr,:pas)";//IDはauto_incrementで勝手に入る
				$stmt=$ffftp->prepare($sql);
				$stmt->bindValue(":usr",$new_usr,PDO::PARAM_STR);
				$stmt->bindValue(":pas",$new_pas,PDO::PARAM_STR);
				$stmt->execute();
				
	
				$_SESSION["name"] = $new_usr;
				print("ユーザ登録に成功しました<br>
				<a href='main.php'>こちら</a>のリンクより移動してください");
				exit(1);
			}
	
		}catch (PDOException $e){
			print('Error:'.$e->getMessage());
			die();
		}	
	
	}
}
?>


<!doctype HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>SIGN UP</title>
</head>
<body>
	<h1>新規登録</h1>
	<form id="loginform" name="loginform" action="" method="POST">
		<fieldset>
			<legend>登録フォーム</legend>
			<label>ユーザID</label>
			<input required type="text" name="ID" placeholder="write it" pattern="^[0-9A-Za-z]+$" maxlength=32>
			<br>
			<label>パスワード</label>
			<input required type="password" name="PASS" placeholder="write it" pattern="^[0-9A-Za-z]+$" maxlength=32>
			<br>
			<label>パスワード[確認]</label>
			<input required type="password" name="PASSchk" placeholder="write it"  pattern="^[0-9A-Za-z]+$" maxlength=32>
			<br>
			<input type="submit" name="SIGNUP" value="sign up">
			<font size=-1 color=red>[※すべて半角英数のみ 32文字まで]</font>
		</fieldset>
	</form>
	<br>
	
	
<body>
<html>
