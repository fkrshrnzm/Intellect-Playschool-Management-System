<?php
include ('dbconnect.php');

if($_POST['id']){
    $s_ID = $_POST['id'];
    $sql = mysqli_query($con, "SELECT * FROM student_session_desc ssd JOIN student s on ssd.prog_Session = s.prog_Session WHERE s.s_ID='$s_ID'");
    $row = mysqli_fetch_array($sql);
    echo $row['session_Desc'];
    echo '<input type="hidden" name="fee_Session" value="'.$row["prog_Session"].'">';
}

?>