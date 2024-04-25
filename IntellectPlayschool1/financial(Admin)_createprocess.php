<?php 
include('dbconnect.php'); 

$s_ID =$_POST['s_ID'];
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $fee_Category =$_POST['fee_Category'];
    $fee_Program =$_POST['fee_Program'];
    $fee_Session =$_POST['fee_Session'];
    $fee_Due =$_POST['feeDue'];
    $fee_Debit ="";
    //$fee_ID =rand(0001,9999);

    $sql = "SELECT fee_Pricing
            FROM student_fee_pricing 
            WHERE fee_Category ='$fee_Category' && prog_Session ='$fee_Session'";
    $query = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($query);

    switch ([$fee_Category, $fee_Session]) {
        case ['0','0']:
            $fee_Debit = $row['fee_Pricing'];
            // yearly fee LE...half-day(910), full-day(1000)
            break;
        case ['0','1']:
            // yearly fee LE...half-day(910), full-day(1000)
            $fee_Debit = $row['fee_Pricing'];
            break;
        case ['0','2']:
            // yearly fee FK...half-day(910), full-day(1000)
            $fee_Debit = $row['fee_Pricing'];
            break;
        case ['1','0']:
            // deposit...monthly half-day(250)/full-day(420) for January + deposit(500) 
            $fee_Debit = $row['fee_Pricing'];
            break;
        case ['1','1']:
            // playgroup...separate kan from monthly/yearly fee (100)
            $fee_Debit = $row['fee_Pricing'];
            break;
        case ['1','2']:
            // food...half-day(720)/full-day(1440) 2x instalment,in January & June
            $fee_Debit = $row['fee_Pricing'];
            break;
        case ['2','0']:
            // registration annually(280)...before March
            $fee_Debit = $row['fee_Pricing'];
        case ['2','1']:
            // monthly fee...half-day(250), full-day(420)
            $fee_Debit = $row['fee_Pricing'];
            break;
        case ['2','2']:
            // yearly fee...half-day(1050), full-day(1140)
            $fee_Debit = $row['fee_Pricing'];
            break;
        case ['3','0']:
            // deposit...monthly half-day(250)/full-day(420) for January + deposit(500) 
            $fee_Debit = $row['fee_Pricing'];
            break;
        case ['3','1']:
            // playgroup...separate kan from monthly/yearly fee (100)
            $fee_Debit = $row['fee_Pricing'];
            break;
        case ['3','2']:
            // food...half-day(720)/full-day(1440) 2x instalment,in January & June
            $fee_Debit = $row['fee_Pricing'];
            break;
        case ['4','0']:
            // registration annually(280)...before March
            $fee_Debit = $row['fee_Pricing'];
        case ['4','1']:
            // monthly fee...half-day(250), full-day(420)
            $fee_Debit = $row['fee_Pricing'];
            break;
        case ['4','2']:
            // yearly fee...half-day(1050), full-day(1140)
            $fee_Debit = $row['fee_Pricing'];
            break;
        case ['5','0']:
            // deposit...monthly half-day(250)/full-day(420) for January + deposit(500)
            $fee_Debit = $row['fee_Pricing']; 
            break;
        case ['5','1']:
            // playgroup...separate kan from monthly/yearly fee (100)
            $fee_Debit = $row['fee_Pricing'];
            break;
        case ['5','2']:
            // food...half-day(720)/full-day(1440) 2x instalment,in January & June
            $fee_Debit = $row['fee_Pricing'];
            break;
        case ['6','0']:
            // deposit...monthly half-day(250)/full-day(420) for January + deposit(500) 
            $fee_Debit = $row['fee_Pricing'];
            break;
        case ['6','1']:
            // playgroup...separate kan from monthly/yearly fee (100)
            $fee_Debit = $row['fee_Pricing'];
            break;
        case ['6','2']:
            // food...half-day(720)/full-day(1440) 2x instalment,in January & June
            $fee_Debit = $row['fee_Pricing'];
            break;
        
    }

    $sql = "INSERT INTO student_fee (s_ID,fee_Category,fee_Program,fee_Session,fee_Debit,fee_Date, fee_Due) VALUES ('$s_ID','$fee_Category','$fee_Program','$fee_Session','$fee_Debit',NOW(), '$fee_Due')";

    mysqli_query($con,$sql);

 //   $query = mysqli_query($con, "SELECT fee_ID FROM student_fee ORDER BY fee_ID DESC LIMIT 1");
 //   $data  = mysqli_fetch_array($query);

    $order = "Fee creation successful";
}else{
    $order = "Fee creation failed";
} 
?>
<script>
    alert('<?php echo $order;?>'); location='financial(Admin).php';
</script>