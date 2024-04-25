<?php
include 'dbconnect.php';

$fee_ID=$_POST['fee_ID'];

$sql = mysqli_query($con, "DELETE FROM student_fee_pdf WHERE fee_ID='$fee_ID'");
$sql2 = mysqli_query($con, "DELETE FROM student_fee WHERE fee_ID='$fee_ID'");

?>