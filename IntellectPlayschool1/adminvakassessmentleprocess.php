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


if(!empty($aid) && !empty($acad_VAKComm_V) && !empty($acad_VAKComm_A) && !empty($acad_VAKComm_K) && !empty($acad_VAKComm_C)) {
    $query1 = "INSERT INTO academic_le_vak (acad_ID, acad_VAKType, acad_VAKComm)
               VALUES
              ('$aid', 1, '$acad_VAKComm_V'),
               ('$aid', 2, '$acad_VAKComm_A'),
              ('$aid', 3, '$acad_VAKComm_K'),
               ('$aid', 4, '$acad_VAKComm_C')";
    $result = mysqli_query($con, $query1);
    if(!$result) {
        die("Error: " . mysqli_error($con));
    }
    else {
        echo "<script>
        window.location.href='admin_assessment.php';
        alert('You have successfully created an assessment.');
        </script>";
    }
} else {
    echo "Error: one or more variables are empty.";
}
/*include ("dbconnect.php");


$acad_VAKType = "SELECT FROM academic_vaktype_desc (acad_VAKType)";
$acad_VAKComm_V = $_POST['acad_VAKComm_V'];
$acad_VAKComm_A = $_POST['acad_VAKComm_A'];
$acad_VAKComm_K = $_POST['acad_VAKComm_K'];
$acad_VAKComm_C = $_POST['acad_VAKComm_C'];

foreach ($_POST['acad_VAKType'] as $value) {
    if($value=='1')
    $query = "INSERT INTO academic_le_vak (acad_VAKComm) VALUES ('$acad_VAKComm_V')";
    
    else if($value=='2')
    $query = "INSERT INTO academic_le_vak (acad_VAKComm) VALUES ('$acad_VAKComm_A')";

    else if($value=='3')
    $query = "INSERT INTO academic_le_vak (acad_VAKComm) VALUES ('$acad_VAKComm_A')";
     
    else
    $query = "INSERT INTO academic_le_vak (acad_VAKComm) VALUES ('$acad_VAKComm_C')";
    mysqli_query($conn, $query);
}

mysqli_close($con);

include 'headermain.php';


?>

<div class="container">
    
</div>


<?php

include 'footermain.php';
*/


?>
