<?php
$no=1;
$con = mysqli_connect("localhost", "root", "", "iptestv3");


$sql = "SELECT * FROM student_fee
        LEFT JOIN student_session_desc ON student_fee.fee_Session = student_session_desc.prog_Session
        LEFT JOIN student_fee_status_desc ON student_fee.fee_Status = student_fee_status_desc.fee_Status
        LEFT JOIN academic_prog_desc ON student_fee.fee_Program = academic_prog_desc.acad_Prog
        LEFT JOIN student_fee_category_desc ON student_fee.fee_Category = student_fee_category_desc.fee_Category
        LEFT JOIN student ON student_fee.s_ID = student.s_ID WHERE student_fee.fee_Status=0";

$query = mysqli_query($con,$sql);

//buat table
while ($data=mysqli_fetch_array($query)) {

    ?>
    <tr style="font-size: 18px" >
        <td><?php echo $no;?></td>
        <td><?php echo date("Y", strtotime($data['fee_Date']));?></td>
        <td><?php echo"<option value = '".$data['fee_Category']."'>".$data['fee_CategoryDesc']."</option>";?></td>
        <td><?php echo date("j F Y", strtotime($data['fee_Due']));?></td>
        <!--        <td>--><?php //echo"<option value = '".$data['prog_Session']."'>".$data['session_Desc']."</option>";?><!--</td>-->
        <td><?php echo"<option value = '".$data['fee_Status']."'>".$data['fee_StatusDesc']."</option>";?></td>
        <td><?php echo $data['fee_Debit'];?></td>
        <td><?php echo $data['fee_Credit'];?></td>
        <td><?php echo $data['fee_Outstanding'];?></td>
        <td><button id="fee" class="btn btn-outline-info text-black-50 justify-content-center" value="<?php echo $data['fee_ID'];?>" onclick="selectPayment(<?php echo $data['fee_ID'];?>)">View Payment</button></td>
        <!--        <td><button class="btn btn-outline-warning text-black-70" onclick="feeModify(--><?php //echo $data['fee_ID']?>//)">Modify</button></td>
        <td><button type='button' class='open-model-fee-delete btn btn-outline-danger text-black-70' onclick='feeDelete(<?php echo $data['fee_ID'] ?>)' >Delete</button> &nbsp</td>

    </tr>
    <?php
    $no++;
}?>

