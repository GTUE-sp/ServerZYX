<?php
session_start();

if(!isset($_SESSION["name"])){	/*ログインしていないとき*/
	header("location: index.php");
}



?>

<!doctype HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css" />
	<meta charset="UTF-8">
	<title>main</title>
</head>
<body>

とりあえず仮置き<br>
ここに出席簿のやつを置け
<!--
<table border="1">
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
		<td>5</td>
		<td>6</td>
		<td>7</td>
		<td>8</td>
		<td>9</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>
			<p class="name">HR</p>
		</td>
		
		<?php
		/*
		try{
			$user = "proapp5cs2018";
			$pass = "";
			$pdo = new PDO("mysql:host=127.0.0.1;dbname=salesioproapp2018;charset=utf8", $user, $pass);
			$day = strval(date("w"));
			$week = array("0","1","2","3","4","5","6");
			$sql = "SELECT * FROM `class` WHERE id = :d";
			$stmt = $pdo->prepare($sql);
			$stmt -> bindValue(":d", $week[$day], PDO::PARAM_STR);
			$stmt -> execute();
			//echo($test."<br>");
			
			//while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
				//var_dump($row);
				//echo($row["student_id"]." ".$row["name"]);
				//echo("<br>");
				//echo($test."<br>");
			//}
			
			$row = $stmt -> fetch(PDO::FETCH_ASSOC);
			echo("<td colspan=\"2\"><p class=\"name\">".$row["cla1"]."</p>");
			echo("<td colspan=\"2\"><p class=\"name\">".$row["cla3"]."</p>");
			echo("<td colspan=\"2\"><p class=\"name\">".$row["cla5"]."</p>");
			echo("<td colspan=\"2\"><p class=\"name\">".$row["cla7"]."</p>");
		}
		catch(PDOException $e){
			echo("<p>500 Inertnal Server Error</p>");
			exit($e->getMessage());
		}
		echo("<td><p class=\"name\">帰宅</p>");
		echo("</tr>");

		
		try{
			$user = "proapp5cs2018";
			$pass = "";
			$pdo = new PDO("mysql:host=127.0.0.1;dbname=salesioproapp2018;charset=utf8", $user, $pass);
			$sql = "SELECT `student_id`,`name` FROM `student`;";
			$stmt = $pdo->prepare($sql);
			$stmt -> execute();
			while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
				echo("<tr>");
				echo("<td>".$row["student_id"]."</td>");
				echo("<td>".$row["name"]."</td>");
				for ($i=0; $i < 10; $i++) { 
					echo("<td></td>");
				}
				echo("</tr>");
				//echo($row["student_id"]." ".$row["name"]);
				//echo("<br>");
				//echo("");
			}
		}
		catch(PDOException $e){
			echo("<p>500 Inertnal Server Error</p>");
			exit($e->getMessage());
		}
*/
		?>

	
</table>
-->




<a href='logout.php'>ログアウト</a>
	
</body>
</html>
