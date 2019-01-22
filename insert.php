<?php

try{
    $user = "proapp5cs2018";
    $pass = "";
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=salesioproapp2018;charset=utf8", $user, $pass);
    $student_id = $_POST["student_id"];
    $absent_day = date("Y-m-d", strtotime($_POST["absent_day"]));
    //強引なupdate
    $sql = "DELETE FROM attendance WHERE absent_day = :absent_day AND student_id = :student_id";
    $stmt = $pdo->prepare($sql);
    $stmt -> bindValue(":student_id", $student_id, PDO::PARAM_STR);
    $stmt -> bindValue(":absent_day", $absent_day, PDO::PARAM_STR);
    $stmt -> execute();
    //どうしてこうなった
    $class0 = $_POST["class0"];
    $class1 = $_POST["class1"];
    $class2 = $_POST["class2"];
    $class3 = $_POST["class3"];
    $class4 = $_POST["class4"];
    $class5 = $_POST["class5"];
    $class6 = $_POST["class6"];
    $class7 = $_POST["class7"];
    $class8 = $_POST["class8"];
    $class9 = $_POST["class9"];
    $remarks = $_POST["remarks"];
    $sql = "INSERT INTO attendance(student_id, absent_day, class0, class1, class2, class3, class4, class5, class6, class7, class8, class9, remarks) VALUES (:student_id, :absent_day, :class0, :class1, :class2, :class3, :class4, :class5, :class6, :class7, :class8, :class9, :remarks);";
    $stmt = $pdo->prepare($sql);
    $stmt -> bindValue(":student_id", $student_id, PDO::PARAM_STR);
    $stmt -> bindValue(":absent_day", $absent_day, PDO::PARAM_STR);
    //は？？？？？？？？？
    $stmt -> bindValue(":class0", $class0, PDO::PARAM_STR);
    $stmt -> bindValue(":class1", $class1, PDO::PARAM_STR);
    $stmt -> bindValue(":class2", $class2, PDO::PARAM_STR);
    $stmt -> bindValue(":class3", $class3, PDO::PARAM_STR);
    $stmt -> bindValue(":class4", $class4, PDO::PARAM_STR);
    $stmt -> bindValue(":class5", $class5, PDO::PARAM_STR);
    $stmt -> bindValue(":class6", $class6, PDO::PARAM_STR);
    $stmt -> bindValue(":class7", $class7, PDO::PARAM_STR);
    $stmt -> bindValue(":class8", $class8, PDO::PARAM_STR);
    $stmt -> bindValue(":class9", $class9, PDO::PARAM_STR);
    $stmt -> bindValue(":remarks", $remarks, PDO::PARAM_STR);
    $stmt -> execute();
    //echo("Done.");
    header("location: main.php");

}
catch(PDOException $e){
    echo("<p>500 Inertnal Server Error</p>");
    exit($e->getMessage());
}

?>