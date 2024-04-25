<?php 
include ('dbconnect.php');
include 'headerstaff.php';

if(isset($_GET['id']))
{
	$aid = $_GET['id'];
}

$sqlVAK = "SELECT * FROM academic_fk
JOIN academic_fk_vak ON academic_fk.acad_ID = academic_fk_vak.acad_ID
WHERE academic_fk.acad_ID='$aid'";

$sqlINT = "SELECT * FROM academic_fk
JOIN academic_fk_intelligent ON academic_fk.acad_ID = academic_fk_intelligent.acad_ID
WHERE academic_fk.acad_ID='$aid'";

$sqlSUB = "SELECT * FROM academic_fk
JOIN academic_fk_subject ON academic_fk.acad_ID = academic_fk_subject.acad_ID
WHERE academic_fk.acad_ID='$aid'";

$resultVAK = mysqli_query($con, $sqlVAK);
$countrowVAK = mysqli_fetch_array($resultVAK);

$resultINT = mysqli_query($con, $sqlINT);
$countrowINT = mysqli_fetch_array($resultINT);

$resultSUB = mysqli_query($con, $sqlSUB);
$countrowSUB = mysqli_fetch_array($resultSUB);

if( mysqli_num_rows($resultVAK)>0){
    
    //SQL Delete
    $sql = "DELETE FROM academic_fk_vak WHERE acad_ID ='$aid'";
    $result = mysqli_query($con, $sql);
    $sql1 = "DELETE FROM academic_fk WHERE acad_ID ='$aid'";
    $result = mysqli_query($con, $sql1);
    mysqli_close($con);
    header("location:createassessment.php");
    }

if(mysqli_num_rows($resultINT)>0) {
    $sql = "DELETE FROM academic_fk_intelligent WHERE acad_ID ='$aid'";
    $result = mysqli_query($con, $sql);
    $sql1 = "DELETE FROM academic_fk WHERE acad_ID ='$aid'";
    $result = mysqli_query($con, $sql1);
    mysqli_close($con);
    header("location:createassessment.php");
}

if(mysqli_num_rows($resultSUB)>0) {
    $sql = "DELETE FROM academic_fk_subject WHERE acad_ID ='$aid'";
    $result = mysqli_query($con, $sql);
    $sql1 = "DELETE FROM academic_fk WHERE acad_ID ='$aid'";
    $result = mysqli_query($con, $sql1);
    mysqli_close($con);
    header("location:createassessment.php");
}

?>