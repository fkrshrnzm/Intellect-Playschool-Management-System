<?php 
include ('dbconnect.php');
include 'headerstaff.php';

if(isset($_GET['id']))
{
	$aid = $_GET['id'];
}

$sqlVAK = "SELECT * FROM academic_le
JOIN academic_le_vak ON academic_le.acad_ID = academic_le_vak.acad_ID
WHERE academic_le.acad_ID='$aid'";

$sqlINT = "SELECT * FROM academic_le
JOIN academic_le_intelligent ON academic_le.acad_ID = academic_le_intelligent.acad_ID
WHERE academic_le.acad_ID='$aid'";

$resultVAK = mysqli_query($con, $sqlVAK);
$countrowVAK = mysqli_fetch_array($resultVAK);

$resultINT = mysqli_query($con, $sqlINT);
$countrowINT = mysqli_fetch_array($resultINT);

if( mysqli_num_rows($resultVAK)>0){

    //SQL Delete
    $sql = "DELETE FROM academic_le_vak WHERE acad_ID ='$aid'";
    $result = mysqli_query($con, $sql);
    $sql1 = "DELETE FROM academic_le WHERE acad_ID ='$aid'";
    $result = mysqli_query($con, $sql1);
    mysqli_close($con);
    header("location:admin_assessment.php");
    }

if(mysqli_num_rows($resultINT)>0) {
    $sql = "DELETE FROM academic_le_intelligent WHERE acad_ID ='$aid'";
    $result = mysqli_query($con, $sql);
    $sql1 = "DELETE FROM academic_le WHERE acad_ID ='$aid'";
    $result = mysqli_query($con, $sql1);
    mysqli_close($con);
    header("location:admin_assessment.php");
}

?>