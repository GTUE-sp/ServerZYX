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
    $row = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    //print_r($row);
    //echo($row[0]["cla3"]."<br>");
    $timetable = array($row[0]["cla0"], $row[0]["cla1"], $row[0]["cla2"], $row[0]["cla3"], $row[0]["cla4"], $row[0]["cla5"], $row[0]["cla6"], $row[0]["cla7"], $row[0]["cla8"]);
    $response = array('id'=>$row[0]["id"], 'day_of_week'=>$row[0]["day"], 'timetable'=>$timetable);
    //var_dump($response);
    header("Access-Control-Allow-Origin: *");
    echo(json_encode($response, JSON_UNESCAPED_UNICODE));
}
catch(PDOException $e){
    echo("<p>500 Inertnal Server Error</p>");
    exit($e->getMessage());
}
?>