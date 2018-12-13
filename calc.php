<?php

//$week = array("日", "月", "火", "水", "木", "金", "土");
try{
    $user = "proapp5cs2018";
    $pass = "";
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=salesioproapp2018;charset=utf8", $user, $pass);
    $startday = date("Y-m-d", strtotime($_POST["start"]));
    $endday = date("Y-m-d", strtotime($_POST["end"]));
    $sql = "SELECT * FROM attendance WHERE absent_day >= :startday && absent_day <= :endday;";
    $stmt = $pdo->prepare($sql);
    $stmt -> bindValue(":startday", $startday, PDO::PARAM_STR);
    $stmt -> bindValue(":endday", $endday, PDO::PARAM_STR);
    $stmt -> execute();

    //データ
    while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
    }


}
catch(PDOException $e){
    echo("<p>500 Inertnal Server Error</p>");
    exit($e->getMessage());
}

?>