<?php
include ('dbconnect.php');
$sID = $_POST['student'];
$program = $_POST['program'];
$session= $_POST['session'];
//var_dump($sID,$program,$session);
$sql = " UPDATE student set 
                    acad_Prog='$program', prog_Session='$session' WHERE s_ID='$sID'";

$result = mysqli_query($con, $sql);

header('location:admin_pending.php');
?>
