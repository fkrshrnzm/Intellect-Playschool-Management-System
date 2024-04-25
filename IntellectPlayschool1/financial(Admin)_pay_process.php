<?php
$no=1;
include 'dbconnect.php';
$fee_ID = $_POST['id'];

$checksql = "SELECT * FROM student_fee_pdf WHERE fee_ID ='$fee_ID'";
$resultcheck = mysqli_query($con, $checksql);
$count = mysqli_num_rows($resultcheck);
if($count==0){
    echo $count;
    $parent = "SELECT a.acc_ID ,a.fName,a.lName FROM student_fee 
            LEFT JOIN student s on s.s_ID = student_fee.s_ID
            LEFT JOIN account a on s.acc_ID = a.acc_ID
            WHERE fee_ID='$fee_ID'";
    $resultP = mysqli_query($con, $parent);
    $rowP = mysqli_fetch_array($resultP);?>
    <tr>
    <td><?php echo "NO PAYMENT HAS BEEN MADE BY <a href='#modalPayProcess' data-bs-toggle='modal' data-bs-target='#modalPayProcess' data-id='123'>" .$rowP['fName']. " " .$rowP['lName'];?></a></td>
    </tr>
    <?php
}else{
    echo $count;
    $sql = "SELECT * FROM student_fee_pdf
        LEFT JOIN student_fee_payment_status_desc ON student_fee_pdf.fee_PaymentStatus = student_fee_payment_status_desc.fee_PayStatus
        WHERE student_fee_pdf.fee_ID='$fee_ID'";
    $query = mysqli_query($con,$sql);
    while ($data=mysqli_fetch_array($query)) {
        $viewpdf="viewPDF.php?fee_ReferenceNo=".$data['fee_ReferenceNo'];
        $deletepdf="deletePDF.php?fee_ReferenceNo=".$data['fee_ReferenceNo'];?>

        <tr style="font-size: 18px">
            <td><?php echo $no;?></td>
            <td><?php echo $data['fee_ReferenceNo'];?></td>
            <td><input id="payapproval<?php echo $no?>" name="verifiedamount" type="number" class="form-control" style="max-width: 150px"  placeholder="<?php echo $data['fee_Amount'];?>"/></td>
            <td><?php echo date("j F Y", strtotime($data['fee_PayDate']));?></td>
            <td><?php echo date("h:ia", strtotime($data['fee_PayDate']));?></td>
            <td><?php echo $data['fee_PayStatusDesc'];?></td>
            <td><button class="btn btn-outline-info text-black-50"><a href="<?php echo $viewpdf;?>" style="text-decoration: none;" onclick="window.open('<?php echo $viewpdf;?>', '_blank', 'toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=315,width=900,height=700'); return false;">View PDF</a></button></td>
            <td><button id="btnapprove" class="btn btn-success text-white-70 mr-1" value="submit" onclick="updateAmount(<?php echo $data['fee_ReferenceNo'];?>, <?php echo $data['fee_ID'];?>, <?php echo $no?>)">Approve</button>
            <button id="btnreject" class="btn btn-danger text-black-70" value="submit" onclick="rejectPayment(<?php echo $data['fee_ReferenceNo'];?>)">Reject</button>
            <button id="btnrevert" class="btn btn-warning text-black-70" value="submit" onclick="revertPayment(<?php echo $data['fee_ReferenceNo'];?>, <?php echo $data['fee_ID'];?>,<?php echo $no?>)">Revert</button></td>
        </tr>
        <?php
        $no++;
    }
}
?>


