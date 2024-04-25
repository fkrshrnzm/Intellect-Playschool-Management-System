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
    header("location:viewvakassessmentle.php?id=".$aid);
}
if(mysqli_num_rows($resultINT)>0) {
    header("location:viewintelligentassessmentle.php?id=".$aid);
}

?>