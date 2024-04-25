<?php 
include('dbconnect.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>View PDF</title>
</head>

<body>
    <hr>
    <b>Payment Information</b>
    <button style="margin-left: 75%;" onclick="closePage()">Close</button>
    <script>
        function closePage() {
        window.close();
    }
</script>
    <hr>
    <?php
        $fee_ReferenceNo = mysqli_real_escape_string($con,$_GET['fee_ReferenceNo']);
        $sql    = "SELECT * FROM student_fee_pdf WHERE fee_ReferenceNo='$fee_ReferenceNo'";
        $query  = mysqli_query($con,$sql);
        $data   = mysqli_fetch_array($query); 
    ?>
<table width="100%" border="0">
    <tr>
        <td width="120">Amount</td>
        <td>: <?php echo $data['fee_Amount'];?></td>
    </tr>
    <tr>
        <td width="120">Reference No.</td>
        <td>: <?php
                $reference=$data['fee_FileName'];
                $reference_info=pathinfo($reference);
                echo $reference_info['filename'];?></td>
    </tr>
    <tr>
        <td width="120">Date Of Payment</td>
        <td>: <?php echo date("j F Y", strtotime($data['fee_PayDate']));?></td>
    </tr>
    <tr>
        <td width="120">Time Of Payment</td>
        <td>: <?php echo date("H:i:s", strtotime($data['fee_PayDate']));?></td>
    </tr>
</table>
<hr>
<embed type="application/pdf" src="file/<?php echo $data['fee_FileName'];?>" width="100%" height="600"></embed>
</body>
</html>