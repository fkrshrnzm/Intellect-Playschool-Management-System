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

if(!empty($aid) && !empty($acad_IntelliComm1) && !empty($acad_IntelliComm2) && !empty($acad_IntelliComm3) && !empty($acad_IntelliComm4) && !empty($acad_IntelliComm5) && !empty($acad_IntelliComm6) && !empty($acad_IntelliComm7) && !empty($acad_IntelliComm8) && !empty($acad_IntelliComm9)) {
    $query2 = "INSERT INTO academic_le_intelligent (acad_ID, acad_IntelliType, acad_IntelliComm)
               VALUES
               ('$aid', 1, '$acad_IntelliComm1'),
               ('$aid', 3, '$acad_IntelliComm3'),
               ('$aid', 4, '$acad_IntelliComm4'),
               ('$aid', 5, '$acad_IntelliComm5'),
               ('$aid', 6, '$acad_IntelliComm6'),
               ('$aid', 7, '$acad_IntelliComm7'),
               ('$aid', 8, '$acad_IntelliComm8'),
               ('$aid', 9, '$acad_IntelliComm9')";

    $result2 = mysqli_query($con, $query2);
    if(!$result2) {
        die("Error: " . mysqli_error($con));
    }
    else {
        echo "<script>
        window.location.href='teacher_assessment.php';
        alert('You have successfully created an assessment.');
        </script>";
    }
} else {
    echo "Error: one or more variables are empty.";
}
?>