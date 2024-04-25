<?php
include 'dbconnect.php';
include 'headerstaff.php';

$acc_ID = $_SESSION['acc_ID'];
$sql="SELECT * FROM student WHERE acc_ID = $acc_ID";
$result = mysqli_query($con,$sql);

date_default_timezone_set('Asia/Kuala_Lumpur');
$date = new DateTime();
$weekStart = clone $date;
$weekStart->modify(('Saturday' == $weekStart->format('l')) ? 'Monday next week' : (('Sunday' == $weekStart->format('l')) ? 'Monday next week' : 'Monday this week'));
$weekEnd = clone $weekStart;
$weekEnd->modify('next friday');


while ($row = mysqli_fetch_array($result)) {

    $s_ID = $row['s_ID'];

    for ($i = clone $weekStart; $i <= $weekEnd; $i->modify('+1 day')) {
        $dateloop = $i->format('Y-m-d');

        if($i->format('l') != 'Saturday' && $i->format('l') != 'Sunday'){
            $q = "INSERT INTO attendance(att_User,att_Date,att_Type,att_Confirmation,s_ID) 
            VALUE (0,'$dateloop', 1 ,0,'$s_ID') ON DUPLICATE KEY UPDATE s_ID = '$s_ID', att_Date = '$dateloop'";
            mysqli_query($con, $q);
        }
    }
}

header('location: student_attendance.php');

//close connection
mysqli_close($con);
?>