<?php

//$week = array("日", "月", "火", "水", "木", "金", "土");
$stunum = array("14501");
for ($i = 1; $i < 60; $i++) {
    $stunum = array_merge($stunum, array(strval(14501 + $i)));
}
//var_dump($stunum);
//echo("<br>");
try{
    $user = "proapp5cs2018";
    $pass = "";
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=salesioproapp2018;charset=utf8", $user, $pass);
    $startday = date("Y-m-d", strtotime($_POST["start"]));
    $endday = date("Y-m-d", strtotime($_POST["end"]));
    $sql = "SELECT * FROM attendance WHERE absent_day >= :startday AND absent_day <= :endday; ORDER BY student_id";
    $stmt = $pdo->prepare($sql);
    $stmt -> bindValue(":startday", $startday, PDO::PARAM_STR);
    $stmt -> bindValue(":endday", $endday, PDO::PARAM_STR);
    $stmt -> execute();

    //データ
    while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
        var_dump($row);
        echo("<br>");
    }


}
catch(PDOException $e){
    echo("<p>500 Inertnal Server Error</p>");
    exit($e->getMessage());
}

?>

<!-- test -->
<html>
<head>
    <meta charset="utf-8">
    <title>testcalculation</title>
</head>
<body>
    <form action="calc.php" method="post">
    <input type="date" name="start" min="2017-01-01" max="2019-03-31">
    <input type="date" name="end">
    <input type="submit" value="test it">
    </form>
</body>
</html>