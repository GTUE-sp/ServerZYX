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
    //$sql = "SELECT * FROM attendance WHERE absent_day >= :startday AND absent_day <= :endday ORDER BY cast(student_id as signed)";
    //$sql = "SELECT * FROM attendance WHERE absent_day >= :startday AND absent_day <= :endday ORDER BY student_id";
    echo("00000 0 1 2 3 4 5 6 7 8 9<br>");
    for ($i = 0; $i < 60; $i++) {
        $sql = "SELECT * FROM attendance WHERE absent_day >= :startday AND absent_day <= :endday AND student_id = :student";
        $stmt = $pdo->prepare($sql);
        $stmt -> bindValue(":startday", $startday, PDO::PARAM_STR);
        $stmt -> bindValue(":endday", $endday, PDO::PARAM_STR);
        $stmt -> bindValue(":student", $stunum[$i], PDO::PARAM_STR);
        $stmt -> execute();
        //データ構造がクソpythonを見習えks
        $class0 = 0;
        $class1 = 0;
        $class2 = 0;
        $class3 = 0;
        $class4 = 0;
        $class5 = 0;
        $class6 = 0;
        $class7 = 0;
        $class8 = 0;
        $class9 = 0;
        while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
            $class0 += (int)$row["class0"];
            $class1 += (int)$row["class1"];
            $class2 += (int)$row["class2"];
            $class3 += (int)$row["class3"];
            $class4 += (int)$row["class4"];
            $class5 += (int)$row["class5"];
            $class6 += (int)$row["class6"];
            $class7 += (int)$row["class7"];
            $class8 += (int)$row["class8"];
            $class9 += (int)$row["class9"];
            //var_dump($row);
            /*
            echo($row["id"]." ".$row["student_id"]." ".$row["absent_day"]." ".$row["class0"]." ".$row["class1"]." ".$row["class2"]." ".$row["class3"]." ".$row["class4"]." ".$row["class5"]." ".$row["class6"]." ".$row["class7"]." ".$row["class8"]." ".$row["class9"]." ".$row["remarks"]);
            echo("<br>");
            */
        }
        echo($stunum[$i]." ".$class0." ".$class1." ".$class2." ".$class3." ".$class4." ".$class5." ".$class6." ".$class7." ".$class8." ".$class9."<br>");
        //echo("<br>");
    }

    //データ
    /*
    while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
        //var_dump($row);
        echo($row["id"]." ".$row["student_id"]." ".$row["absent_day"]." ".$row["class0"]." ".$row["class1"]." ".$row["class2"]." ".$row["class3"]." ".$row["class4"]." ".$row["class5"]." ".$row["class6"]." ".$row["class7"]." ".$row["class8"]." ".$row["class9"]." ".$row["remarks"]);
        echo("<br>");
    }
    */


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