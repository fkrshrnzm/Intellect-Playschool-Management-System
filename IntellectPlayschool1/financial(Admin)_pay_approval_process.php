<?php
include 'dbconnect.php';

$fee_ID = $_POST['fee_ID'];
$referenceNo = $_POST['refNo'];
$fee_Credit = $_POST['value'];


$sql1 = "UPDATE student_fee_pdf SET fee_PaymentStatus='1' WHERE fee_ReferenceNo='$referenceNo'";
$sql2 = "UPDATE student_fee SET fee_Credit='$fee_Credit' WHERE fee_ID='$fee_ID'";

$result1 = mysqli_query($con, $sql1);
$result2 = mysqli_query($con, $sql2);

?>




