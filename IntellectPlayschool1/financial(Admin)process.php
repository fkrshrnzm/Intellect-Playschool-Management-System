<?php
$no=1;
$con = mysqli_connect("localhost", "root", "", "iptestv3");
$s_ID = $_POST['id'];

$sql = "SELECT * FROM student_fee
        LEFT JOIN student_session_desc ON student_fee.fee_Session = student_session_desc.prog_Session
        LEFT JOIN student_fee_status_desc ON student_fee.fee_Status = student_fee_status_desc.fee_Status
        LEFT JOIN academic_prog_desc ON student_fee.fee_Program = academic_prog_desc.acad_Prog
        LEFT JOIN student_fee_category_desc ON student_fee.fee_Category = student_fee_category_desc.fee_Category
        LEFT JOIN student ON student_fee.s_ID = student.s_ID
        WHERE student_fee.s_ID='$s_ID'";


$query = mysqli_query($con,$sql);

//buat table
while ($data=mysqli_fetch_array($query)) {
    echo "WOIIIIIIII";
    $viewhistory="financial(admin)_history.php?fee_ID=".$data['fee_ID'];
?>
    <tr >
        <td><?php echo $no;?></td>
        <td><?php echo date("Y", strtotime($data['fee_Date']));?></td>
        <td><?php echo"<option value = '".$data['fee_Category']."'>".$data['fee_CategoryDesc']."</option>";?></td>
        <td><?php echo"<option value = '".$data['acad_Prog']."'>".$data['description']."</option>";?></td>
        <td><?php echo"<option value = '".$data['prog_Session']."'>".$data['session_Desc']."</option>";?></td>
        <td><?php echo"<option value = '".$data['fee_Status']."'>".$data['fee_StatusDesc']."</option>";?></td>
        <td><?php echo $data['fee_Debit'];?></td>
        <td><?php echo $data['fee_Credit'];?></td>
        <td><?php echo $data['fee_Outstanding'];?></td>
        <td><button class="btn btn-link btn-sm"><a href="<?php echo $viewhistory;?>">View History</a></button></td>
        <td><?php echo "<a href = 'financial(Admin)_fee_approval.php? id=".$data['fee_ID']."' class='btn btn-outline-warning text-black-50'>Approval</a> &nbsp";?></td>
    </tr>
    <?php
    $no++;
}?>
