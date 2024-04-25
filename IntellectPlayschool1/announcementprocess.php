<?php

if (isset($_POST['submit']) && isset($_FILES['cmedia'])) {
    include "dbconnect.php";

    echo "<pre>";
    print_r($_FILES['cmedia']);
    echo "</pre>";

    $cTitle = $_POST['cTitle'];
    $ccategory = $_POST['ccategory'];
    $ctype = $_POST['ctype'];
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];
    $cid = $_POST['cid'];
    $cdesc = $_POST['cdesc'];
//    $ctime = $_POST['ctime'];
    $img_name = $_FILES['cmedia']['name'];
    $img_size = $_FILES['cmedia']['size'];
    $tmp_name = $_FILES['cmedia']['tmp_name'];
    $error = $_FILES['cmedia']['error'];


    if ($error === 0) {
        if ($img_size > 100000000) {
            $em = "Sorry, your file is too large.";
            header("Location:admin_announcement.php?error=$em");
        }else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'img/announcement/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database
                $sql = "INSERT INTO announcement(announce_ID, announce_Type, announce_Category, announce_Title	, announce_Media, announce_Desc, announce_Time, announce_Start, announce_End)
				VALUES ('$cid','$ctype', '$ccategory', '$cTitle', '$new_img_name', '$cdesc', NOW(), '$sdate', '$edate')";
                mysqli_query($con, $sql);
                mysqli_close($con);
                header("location: admin_announcement.php");
            }else {
                $em = "You can't upload files of this type";
                header("Location: admin_announcement.php?error=".urlencode($em)."#popup");
            }
        }
    }else {
        $em = "unknown error occurred!";
        header("Location: admin_announcement.php?error=".urlencode($em)."#popup");
    }

}else {
    header("Location: admin_announcement.php");
}

?>