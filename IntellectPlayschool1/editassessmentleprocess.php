<?php
include ('dbconnect.php');
include 'headerstaff.php';

if(isset($_GET['id']))
{
	$aid = $_GET['id'];
}
echo "test1";
$sqlVAK = "SELECT * FROM academic_le
JOIN academic_le_vak ON academic_le.acad_ID = academic_le_vak.acad_ID
WHERE academic_le.acad_ID='$aid'";

$sqlINT = "SELECT * FROM academic_le
JOIN academic_le_intelligent ON academic_le.acad_ID = academic_le_intelligent.acad_ID
WHERE academic_le.acad_ID='$aid'";

$resultVAK = mysqli_query($con, $sqlVAK);
$countrowVAK = mysqli_fetch_array($resultVAK);
$row1=mysqli_num_rows($resultVAK);

$resultINT = mysqli_query($con, $sqlINT);
$countrowINT = mysqli_fetch_array($resultINT);
$row2=mysqli_num_rows($resultINT);
echo $row1. "    " .$row2;
echo "test2";
if( $row1>0){
    header("location:updatevakassessmentle.php?id=".$aid);
}
if($row2>0) {
    header("location:updateintelligentassessmentle.php?id=".$aid);
}

?>