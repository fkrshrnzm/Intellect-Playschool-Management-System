<?php

include ("dbconnect.php");

$aid = $_POST['aid'];

$acad_VAKComm_V = $_POST['acad_VAKComm_V'];
$acad_VAKComm_A = $_POST['acad_VAKComm_A'];
$acad_VAKComm_K = $_POST['acad_VAKComm_K'];
$acad_VAKComm_C = $_POST['acad_VAKComm_C'];

/*$sql = "SELECT * FROM academic_le 
        LEFT JOIN academic_le_vak ON academic_le.acad_ID = academic_le_vak.acad_ID        
        WHERE acad_ID='$aid'";
$result = mysqli_query($con,$sql);
*/


if ($acad_VAKComm_V != NULL) {
    $query1 = "UPDATE academic_le_vak SET acad_VAKComm = '$acad_VAKComm_V' WHERE acad_ID = '$aid' and acad_VAKType = 1";
    $result = mysqli_query($con, $query1);
    if (!$result) {
        die("Error: " . mysqli_error($con));
    }
}
if ($acad_VAKComm_A != NULL) {
    $query2 = "UPDATE academic_le_vak SET acad_VAKComm = '$acad_VAKComm_A' WHERE acad_ID = '$aid' and acad_VAKType = 2";
    $result = mysqli_query($con, $query2);
    if (!$result) {
        die("Error: " . mysqli_error($con));
    }
}
if ($acad_VAKComm_K != NULL) {
    $query3 = "UPDATE academic_le_vak SET acad_VAKComm = '$acad_VAKComm_K' WHERE acad_ID = '$aid' and acad_VAKType = 3";
    $result = mysqli_query($con, $query3);
    if (!$result) {
        die("Error: " . mysqli_error($con));
    }
}
if ($acad_VAKComm_C != NULL) {
    $query4 = "UPDATE academic_le_vak SET acad_VAKComm = '$acad_VAKComm_C' WHERE acad_ID = '$aid' and acad_VAKType = 4";
    $result = mysqli_query($con, $query4);
    if (!$result) {
        die("Error: " . mysqli_error($con));
    }
}

echo "<script>
        window.location.href='admin_assessment.php';
        alert('You have successfully modified an assessment.');
        </script>";

?>
