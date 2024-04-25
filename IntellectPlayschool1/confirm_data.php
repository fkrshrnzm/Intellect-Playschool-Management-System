<?php
include 'dbconnect.php';
include 'headerstaff.php';

echo'<link rel="stylesheet" href="assets/sweetalert2.css">
    <link rel="stylesheet" href="assets/sweetalert2.min.css">
    <script src="assets/sweetalert2.all.js"></script>
    <script src="assets/sweetalert2.all.min.js"></script>
    <script src="assets/sweetalert2.js"></script>
    <script src="assets/sweetalert2.min.js"></script>';

if(isset($_GET['s_id']))
{
    $s_ID = $_GET['s_id'];
}

if(isset($_GET['att_Date']))
{
    $attdate = $_GET['att_Date'];
}

// Check if the date already exists in the database
$query = "SELECT * FROM attendance WHERE att_Date = '$attdate' AND s_ID = '$s_ID'";
$result = mysqli_query($con, $query);
$num_rows = mysqli_num_rows($result);

if ($num_rows > 0) {
    // Update an existing record
    $query = "UPDATE attendance SET att_Confirmation = 1 WHERE att_Date = '$attdate' AND s_ID = '$s_ID'";
    mysqli_query($con, $query);
        echo'<span></span>';
        $sm = "Successfull!";
            echo '<script>
                Swal.fire({
              title: "Successful!",
              text: "Attendance Confirmed",
              icon: "success",
            }).then(function() {
                window.location.href = "teacher_confirm.php";
            });
            </script>';
} else {
    echo'<span></span>';
        $em = "Unknown Error Occurred!";
        echo '<script type="text/javascript">
                Swal.fire({
                icon: "error",
                title: "Error",
                text: "'.$em.'",
            }).then(function() {
                window.location.href = "teacher_confirm.php";
            });
            </script>';
}

//close connection
mysqli_close($con);
?>