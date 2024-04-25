<?php
include("dbconnect.php");

if(!session_id())
{
    session_start();
}

echo'<link rel="stylesheet" href="assets/sweetalert2.css">
    <link rel="stylesheet" href="assets/sweetalert2.min.css">
    <script src="assets/sweetalert2.all.js"></script>
    <script src="assets/sweetalert2.all.min.js"></script>
    <script src="assets/sweetalert2.js"></script>
    <script src="assets/sweetalert2.min.js"></script>';


if (isset($_POST['submit']) && isset($_FILES['rtkmedia'])) {
    include "dbconnect.php";

    $media_name = $_FILES['rtkmedia']['name'];
    $media_size = $_FILES['rtkmedia']['size'];
    $tmp_name = $_FILES['rtkmedia']['tmp_name'];
    $error = $_FILES['rtkmedia']['error'];

    $s_ID = $_POST['s_ID'];
    $attdate = $_POST['attdate'];
    $rtkstatus = $_POST['rtkstatus'];

    if ($error == 0) {
        if ($media_size > 5000000) {
            $em = "Sorry, your file is too large.";
            header("Location: student_RTK.php?error=$em");
        }else {
            $media_ex = pathinfo($media_name, PATHINFO_EXTENSION);
            $media_ex_lc = strtolower($media_ex);

            $allowed_exs = array("jpg", "jpeg", "png"); 

            if (in_array($media_ex_lc, $allowed_exs)) {
                $new_media_name = uniqid("IMG-", true).'.'.$media_ex_lc;
                $media_upload_path = 'media/'.$new_media_name;
                move_uploaded_file($tmp_name, $media_upload_path);

                //UPDATE into Database
                // Check if the date already exists in the database
                $query = "SELECT * FROM attendance WHERE att_Date = '$attdate' AND s_ID = '$s_ID'";
                $result = mysqli_query($con, $query);
                $num_rows = mysqli_num_rows($result);

                if ($num_rows > 0) {
                    // Update an existing record
                    $query = "UPDATE attendance SET att_RTKstatus = $rtkstatus, att_RTKmedia = '$new_media_name' WHERE att_Date = '$attdate' AND s_ID = '$s_ID'";
                    mysqli_query($con, $query);
                    echo'<span></span>';
                    $sm = "Successfull!";
                        echo '<script>
                            Swal.fire({
                          title: "Successful!",
                          text: "RTK Test successfully sent to database",
                          icon: "success",
                        }).then(function() {
                            window.location.href = "parent_attendance.php";
                        });
                        </script>';
                }
                else{
                     // Update an existing record
                     $query = "INSERT INTO attendance(att_Date, att_User, att_RTKstatus, att_RTKmedia, s_ID) VALUE ('$attdate',0,'$rtkstatus','$new_media_name', '$s_ID')";
                     mysqli_query($con, $query);
                     echo'<span></span>';
                    $sm = "Successfull!";
                        echo '<script>
                            Swal.fire({
                          title: "Successful!",
                          text: "RTK Test successfully sent to database",
                          icon: "success",
                        }).then(function() {
                            window.location.href = "parent_attendance.php";
                        });
                        </script>';
                }

            }else {
                $em = "You can't upload files of this type";
            }
        }
    }else {
        $em = "unknown error occurred!";
    }

}else {
    echo"ERROR FILE INPUT!";
}
?>