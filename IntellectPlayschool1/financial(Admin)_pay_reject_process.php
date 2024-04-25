<?php
include 'dbconnect.php';

$fee_ID = $_POST['fee_ID'];
$referenceNo = $_POST['refNo'];



$sql1 = "UPDATE student_fee_pdf SET fee_PaymentStatus='2' WHERE fee_ReferenceNo='$referenceNo'";

$result1 = mysqli_query($con, $sql1);

?>




