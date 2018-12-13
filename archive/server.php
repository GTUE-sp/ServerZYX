<?php

try{
    $user = "proapp5cs2018";
    $pass = "";
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=salesioproapp2018;charset=utf8", $user, $pass);
    $student_id = $_POST["student_id"];
    $absent_day = date("Y-m-d", strtotime($_POST["absent_day"]));
    $state = $_POST["state"];
    $num_class = $_POST["num_class"];
    $remarks = $_POST["remarks"];
    $sql = "INSERT INTO attendance(student_id, absent_day, state, num_class, remarks) VALUES (:student_id, :absent_day, :state, :num_class, :remarks);";
    $stmt = $pdo->prepare($sql);
    $stmt -> bindValue(":student_id", $student_id, PDO::PARAM_STR);
    $stmt -> bindValue(":absent_day", $absent_day, PDO::PARAM_STR);
    $stmt -> bindValue(":state", $state, PDO::PARAM_STR);
    $stmt -> bindValue(":num_class", $num_class, PDO::PARAM_STR);
    $stmt -> bindValue(":remarks", $remarks, PDO::PARAM_STR);
    $stmt -> execute();
    echo("Done.");

}
catch(PDOException $e){
    echo("<p>500 Inertnal Server Error</p>");
    exit($e->getMessage());
}

?>
