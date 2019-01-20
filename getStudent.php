<?php

try{
    $user = "proapp5cs2018";
    $pass = "";
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=salesioproapp2018;charset=utf8", $user, $pass);
    //$test = $_POST["test"];
    $sql = "SELECT `attendance_num`,`student_id`,`name` FROM `student`";
    $stmt = $pdo->prepare($sql);
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

<!-- test -->
<!--
<html>
<head>
    <meta charset="utf-8">
    <title>testcalculation</title>
</head>
<body>
    <form action="getStudent.php" method="post">
    <input type="hidden" name="test" value="testdata">
    <input type="submit" value="get">
    </form>
</body>
</html>
-->