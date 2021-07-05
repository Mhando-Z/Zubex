<?php

$connection = mysqli_connect("localhost", "root", "", "formregistration");

if ($connection === false) {
    die("ERROR: Could not connect" .mysqli_connect_error());
}

$coursename = $_POST['coursename'];
$coursecode1 = $_POST['coursecode'];
$department1 = $_POST['department'];
$semester1 = $_POST['semester'];
$year1 = $_POST['year'];
$teacher1 = $_POST['teacher'];
$grade1 = $_POST['grade'];
$description1 = $_POST['description'];


$sql = "INSERT INTO coz (coursename, coursecode, department, year, semester, teacher, grade, description)
VALUES ('$coursename', '$coursecode1', '$department1','$semester1', '$year1', '$teacher1', '$grade1','$description1')";

if(mysqli_query($connection, $sql)) {
    echo "Records inserted successfully. <br>";
    include("display.php");

} else {
    echo "ERROR: Could not execute entry" .mysqli_error($connection);
}

/*mysqli_close($connection);*/
?>
