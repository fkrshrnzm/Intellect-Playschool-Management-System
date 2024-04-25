<?php
include 'dbconnect.php';
$fee_ID = $_POST['receiptID'];

$sql = "SELECT * FROM student_fee
        LEFT JOIN student_session_desc ON student_fee.fee_Session = student_session_desc.prog_Session
        LEFT JOIN student_fee_status_desc ON student_fee.fee_Status = student_fee_status_desc.fee_Status
        LEFT JOIN academic_prog_desc ON student_fee.fee_Program = academic_prog_desc.acad_Prog
        LEFT JOIN student_fee_category_desc ON student_fee.fee_Category = student_fee_category_desc.fee_Category
        LEFT JOIN student ON student_fee.s_ID = student.s_ID 
        WHERE fee_ID='$fee_ID'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

?>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="text-primary fw-bold m-0">Upload Payment Receipt</h6>
            </div>
            <div style="overflow-x:auto;">
                <h5>Student: <?php echo $row['fName']. " ".$row['lName']?> </h5>
                <h5>Fee Category:
                    <?php if ($row['fee_Category']==0){?>
                    <?php echo date("F", strtotime($row['fee_Due']))." ".$row['fee_CategoryDesc']." Fee";}else{?>
                    <?php echo $row['fee_CategoryDesc'];}?>
                </h5>
                <h5>Fee Amount: RM<?php echo $row['fee_Debit']?></h5>
                <h5>Amount to be Pay: RM<?php echo $row['fee_Outstanding']?></h5>
                <form action="uploadPDFprocess.php?fee_ID=<?php echo $fee_ID ?>" method="post" enctype="multipart/form-data">
                    <table width="100%" border="0">
                        <tr>
                            <td width="150">Amount Paid <h12 style="font-size: 12px; color: darkgrey;">(RM)</h12></td>
                            <td>
                                <input type="number" name="fee_Amount" min="0" placeholder="Ex: 100" required>
                            </td>
                        </tr>
                        <tr>
                            <td width="150">Select PDF <h12 style="font-size: 12px; color: darkgrey;">(max 4Mb)</h12></td>
                            <td>
                                <br>
                                <input type="file" id="input-file-max-fs" name="fee_FileName" class="file-upload" data-max-file-size="4M"/>
                            </td>
                        </tr>
                        <tr>
                            <td width="150"></td>
                            <td>
                                <input type="submit" name="btn" value="Upload PDF">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

