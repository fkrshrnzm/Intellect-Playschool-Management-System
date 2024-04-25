<?php
//db connection
include("dbconnect.php");

//retrieve input
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$tid = $_POST['tid'];

$pwd = $_POST['pwd'];
$repeat_pwd = $_POST['repeat_pwd'];

if($pwd != $repeat_pwd){
    echo "Please enter same password";
    header('location:teacher_register2.php');
}
else{

$sql = "UPDATE account set acc_pwd = '$pwd', fName='$fname', lName='$lname' where acc_ID='$tid'";
}

mysqli_query($con,$sql);
mysqli_close($con);
echo '<script>
    window.location.href="login.php";
    alert("Successfull! Please Login");</script>';
?>

