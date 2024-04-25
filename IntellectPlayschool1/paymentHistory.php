<?php
include 'dbconnect.php';
?><div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="text-primary fw-bold m-0">Payment History</h6>
            </div>
            <div class="card-body">
                <div style="overflow-x:auto;">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Reference No.</th>
                            <th>Amount (RM)</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Slip</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $fee_ID = $_POST['feeID'];
                        $no = 1;
                        $sql = "SELECT * FROM student_fee_pdf
                                LEFT JOIN student_fee_payment_status_desc ON student_fee_pdf.fee_PaymentStatus = student_fee_payment_status_desc.fee_PayStatus
                                WHERE fee_ID='$fee_ID'";
                        $query = mysqli_query($con,$sql);
                        while ($data=mysqli_fetch_array($query)) {
                            $viewpdf="viewPDF.php?fee_ReferenceNo=".$data['fee_ReferenceNo'];
                            $deletepdf="deletePDF.php?fee_ReferenceNo=".$data['fee_ReferenceNo'];
                            ?>
                            <tr>
                                <td><?php echo $no;?></td>
                                <td><?php echo $data['fee_ReferenceNo'];?></td>
                                <td><?php echo $data['fee_Amount'];?></td>
                                <td><?php echo date("j F Y", strtotime($data['fee_PayDate']));?></td>
                                <td><?php echo date("H:i:s", strtotime($data['fee_PayDate']));?></td>
                                <td><?php echo $data['fee_PayStatusDesc'];?></td>
                                <td><button class="btn btn-outline-info btn-sm text-black-50"><a href="<?php echo $viewpdf;?>" style="text-decoration: none;" onclick="window.open('<?php echo $viewpdf;?>', '_blank', 'toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=315,width=900,height=700'); return false;">View PDF</a></button></td>
                            </tr>
                            <?php
                            $no++;
                        }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>