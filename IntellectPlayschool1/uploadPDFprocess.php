<?php 
include('dbconnect.php'); 

$fee_ID = $_GET['fee_ID'];
$type_file = $_FILES['fee_FileName']['type'];
if($type_file == "application/pdf")
{
    $fee_Amount = trim($_POST['fee_Amount']);
    $generate  = date("ymdhis").rand(1111,9999);
    $new_name  = $generate.".pdf";

    $sql = "INSERT INTO student_fee_pdf (fee_Amount,fee_ReferenceNo,fee_ID,fee_PayDate) VALUES ('$fee_Amount','$generate','$fee_ID', NOW())";
    mysqli_query($con,$sql);

    $query = mysqli_query($con, "SELECT fee_ID FROM student_fee_pdf ORDER BY fee_ID DESC LIMIT 1");
    $data  = mysqli_fetch_array($query);
    
    $file_temp = $_FILES['fee_FileName']['tmp_name'];
    $folder    = "file";

    move_uploaded_file($file_temp, "$folder/$new_name");

    mysqli_query($con,"UPDATE student_fee_pdf SET fee_FileName='$new_name' WHERE fee_ReferenceNo='$generate'");

    $order = "PDF upload completed";
}else{
    $order = "upload failed, file is not a PDF";
} 
?>
<script>
    alert('<?php echo $order;?>'); location='financial(parent).php';
</script>