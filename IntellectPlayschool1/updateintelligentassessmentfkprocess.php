<?php
include ("dbconnect.php");

$aid = $_POST['aid'];
$acad_IntelliComm1 = $_POST['acad_IntelliComm1'];
$acad_IntelliComm2 = $_POST['acad_IntelliComm2'];
$acad_IntelliComm3 = $_POST['acad_IntelliComm3'];
$acad_IntelliComm4 = $_POST['acad_IntelliComm4'];
$acad_IntelliComm5 = $_POST['acad_IntelliComm5'];
$acad_IntelliComm6 = $_POST['acad_IntelliComm6'];
$acad_IntelliComm7 = $_POST['acad_IntelliComm7'];
$acad_IntelliComm8 = $_POST['acad_IntelliComm8'];
$acad_IntelliComm9 = $_POST['acad_IntelliComm9'];

if(!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


if($acad_IntelliComm1 != NULL){
    $query1 = "UPDATE academic_fk_intelligent SET acad_IntelliComm = '$acad_IntelliComm1' WHERE acad_ID = '$aid' and acad_IntelliType = 1";
    $result = mysqli_query($con, $query1);
    if (!$result) {
        die("Error: " . mysqli_error($con));
    } else {
        echo "Successfully updated values into the table.";
    }
}
if($acad_IntelliComm2 != NULL){
    $query2 = "UPDATE academic_fk_intelligent SET acad_IntelliComm = '$acad_IntelliComm2' WHERE acad_ID = '$aid' and acad_IntelliType = 2";
    $result = mysqli_query($con, $query2);
    if (!$result) {
        die("Error: " . mysqli_error($con));
    } else {
        echo "Successfully updated values into the table.";
    }
}
if($acad_IntelliComm3 != NULL){
    $query3 = "UPDATE academic_fk_intelligent SET acad_IntelliComm = '$acad_IntelliComm3' WHERE acad_ID = '$aid' and acad_IntelliType = 3";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        die("Error: " . mysqli_error($con));
    } else {
        echo "Successfully updated values into the table.";
    }
}
if($acad_IntelliComm4 != NULL){
    $query4 = "UPDATE academic_fk_intelligent SET acad_IntelliComm = '$acad_IntelliComm4' WHERE acad_ID = '$aid' and acad_IntelliType = 4";
    $result = mysqli_query($con, $query4);
    if (!$result) {
        die("Error: " . mysqli_error($con));
    } else {
        echo "Successfully updated values into the table.";
    }
}
if($acad_IntelliComm5 != NULL){
    $query5 = "UPDATE academic_fk_intelligent SET acad_IntelliComm = '$acad_IntelliComm5' WHERE acad_ID = '$aid' and acad_IntelliType = 5";
    $result = mysqli_query($con, $query5);
    if (!$result) {
        die("Error: " . mysqli_error($con));
    } else {
        echo "Successfully updated values into the table.";
    }
}
if($acad_IntelliComm6 != NULL){
    $query6 = "UPDATE academic_fk_intelligent SET acad_IntelliComm = '$acad_IntelliComm6' WHERE acad_ID = '$aid' and acad_IntelliType = 6";
    $result = mysqli_query($con, $query6);
    if (!$result) {
        die("Error: " . mysqli_error($con));
    } else {
        echo "Successfully updated values into the table.";
    }
}
if($acad_IntelliComm7 != NULL){
    $query7 = "UPDATE academic_fk_intelligent SET acad_IntelliComm = '$acad_IntelliComm7' WHERE acad_ID = '$aid' and acad_IntelliType = 7";
    $result = mysqli_query($con, $query7);
    if (!$result) {
        die("Error: " . mysqli_error($con));
    } else {
        echo "Successfully updated values into the table.";
    }
}
if($acad_IntelliComm8 != NULL){
    $query8 = "UPDATE academic_fk_intelligent SET acad_IntelliComm = '$acad_IntelliComm8' WHERE acad_ID = '$aid' and acad_IntelliType = 8";
    $result = mysqli_query($con, $query8);
    if (!$result) {
        die("Error: " . mysqli_error($con));
    } else {
        echo "Successfully updated values into the table.";
    }
}
if($acad_IntelliComm9 != NULL){
    $query9 = "UPDATE academic_fk_intelligent SET acad_IntelliComm = '$acad_IntelliComm9' WHERE acad_ID = '$aid' and acad_IntelliType = 9";
    $result = mysqli_query($con, $query9);
    if (!$result) {
        die("Error: " . mysqli_error($con));
    } else {
        echo "Successfully updated values into the table.";
    }
}
    

?>