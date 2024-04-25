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
    header("location:adminupdatevakassessmentfk.php?id=".$aid);
}
if(mysqli_num_rows($resultINT)>0) {
    header("location:adminupdateintelligentassessmentfk.php?id=".$aid);
}
if(mysqli_num_rows($resultSUB)>0) {
    header("location:adminupdatesubjectassessmentfk.php?id=".$aid);
}

?>