<?php

$json_str = file_get_contents('php://input');
$obj = json_decode($json_str);

try{
    $user = "root";
    $pass = "NAKAMURA199857ks!!!";
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=salesioproapp2018;charset=utf8", $user, $pass);
    $student_id = $obj->student_id;
    $absent_day = date("Y-m-d", strtotime($obj->absent_day));
    $state = $obj->state;
    $num_class = $obj->num_class;
    $remarks = $obj->remarks;
    $sql = "INSERT INTO attendance(student_id, absent_day, state, num_class, remarks) VALUES (:student_id, :absent_day, :state, :num_class, :remarks);";
    $stmt = $pdo->prepare($sql);
    $stmt -> bindValue(":student_id", $student_id, PDO::PARAM_STR);
    $stmt -> bindValue(":absent_day", $absent_day, PDO::PARAM_STR);
    $stmt -> bindValue(":state", $state, PDO::PARAM_STR);
    $stmt -> bindValue(":num_class", $num_class, PDO::PARAM_STR);
    $stmt -> bindValue(":remarks", $remarks, PDO::PARAM_STR);
    $stmt -> execute();
    error_log("Done.\n");

}
catch(PDOException $e){
    echo("<p>500 Inertnal Server Error</p>");
    exit($e->getMessage());
}

?>
