<?php
include ("dbconnect.php");



$aid = $_POST['aid'];
$manner1 = $_POST['acad_SubComm10'];
$writing1 = $_POST['acad_SubComm20'];
$reading1 = $_POST['acad_SubComm30'];
$counting1 = $_POST['acad_SubComm40'];
$manner2 = $_POST['acad_SubComm11'];
$writing2 = $_POST['acad_SubComm21'];
$reading2 = $_POST['acad_SubComm31'];
$counting2 = $_POST['acad_SubComm41'];
$manner3 = $_POST['acad_SubComm12'];
$writing3 = $_POST['acad_SubComm22'];
$reading3 = $_POST['acad_SubComm32'];
$counting3 = $_POST['acad_SubComm42'];
$manner4 = $_POST['acad_SubComm13'];
$writing4 = $_POST['acad_SubComm23'];
$reading4 = $_POST['acad_SubComm33'];
$counting4 = $_POST['acad_SubComm43'];
$manner5 = $_POST['acad_SubComm14'];
$writing5 = $_POST['acad_SubComm24'];
$reading5 = $_POST['acad_SubComm34'];
$counting5 = $_POST['acad_SubComm44'];
$manner6 = $_POST['acad_SubComm15'];
$writing6 = $_POST['acad_SubComm25'];
$reading6 = $_POST['acad_SubComm35'];
$counting6 = $_POST['acad_SubComm45'];
$manner7 = $_POST['acad_SubComm16'];
$writing7 = $_POST['acad_SubComm26'];
$reading7 = $_POST['acad_SubComm36'];
$counting7 = $_POST['acad_SubComm46'];
$manner8 = $_POST['acad_SubComm17'];
$writing8 = $_POST['acad_SubComm27'];
$reading8 = $_POST['acad_SubComm37'];
$counting8 = $_POST['acad_SubComm47'];





$sql="INSERT INTO academic_fk_subject(acad_ID, acad_SubName, acad_SubNameType, acad_SubComm)
    VALUES 
    ('$aid', 1, 1, '$manner1'),
    ('$aid', 1, 2, '$writing1'),
    ('$aid', 1, 3, '$reading1'),
    ('$aid', 1, 4, '$counting1'),
    ('$aid', 2, 1, '$manner2'),
    ('$aid', 2, 2, '$writing2'),
    ('$aid', 2, 3, '$reading2'),
    ('$aid', 2, 4, '$counting2'),
    ('$aid', 3, 1, '$manner3'),
    ('$aid', 3, 2, '$writing3'),
    ('$aid', 3, 3, '$reading3'),
    ('$aid', 3, 4, '$counting3'),
    ('$aid', 4, 1, '$manner4'),
    ('$aid', 4, 2, '$writing4'),
    ('$aid', 4, 3, '$reading4'),
    ('$aid', 4, 4, '$counting4'),
    ('$aid', 5, 1, '$manner5'),
    ('$aid', 5, 2, '$writing5'),
    ('$aid', 5, 3, '$reading5'),
    ('$aid', 5, 4, '$counting5'),
    ('$aid', 6, 1, '$manner6'),
    ('$aid', 6, 2, '$writing6'),
    ('$aid', 6, 3, '$reading6'),
    ('$aid', 6, 4, '$counting6'),
    ('$aid', 7, 1, '$manner7'),
    ('$aid', 7, 2, '$writing7'),
    ('$aid', 7, 3, '$reading7'),
    ('$aid', 7, 4, '$counting7'),
    ('$aid', 8, 1, '$manner8'),
    ('$aid', 8, 2, '$writing8'),
    ('$aid', 8, 3, '$reading8'),
    ('$aid', 8, 4, '$counting8')";



mysqli_query($con, $sql);

echo "<script>
        window.location.href='teacher_assessment.php';
        alert('You have successfully created an assessment.');
        </script>";
?>