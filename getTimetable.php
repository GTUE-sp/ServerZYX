<?php

try{
    $user = "proapp5cs2018";
    $pass = "";
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=salesioproapp2018;charset=utf8", $user, $pass);
    //$test = $_POST["test"];
    $day = strval(date("w"));
	$week = array("0","1","2","3","4","5","6");
	$sql = "SELECT * FROM `class` WHERE id = :d";
    $stmt = $pdo->prepare($sql);
    $stmt -> bindValue(":d", $week[$day], PDO::PARAM_STR);
    $stmt -> execute();
    //echo($test."<br>");
    /*
    while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
        var_dump($row);
        //echo($row["student_id"]." ".$row["name"]);
        echo("<br>");
        //echo($test."<br>");
    }
    */
    $rows = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    //var_dump($rows);
    header("Access-Control-Allow-Origin: *");
    echo(json_encode($rows, JSON_UNESCAPED_UNICODE));
}
catch(PDOException $e){
    echo("<p>500 Inertnal Server Error</p>");
    exit($e->getMessage());
}
?>