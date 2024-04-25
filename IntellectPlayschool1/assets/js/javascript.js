// Fetching ajax

function selectFee(){
    var x = document.getElementById("student").value;

    $.ajax({
        url:"financial(Admin)_fee_process.php",
        type: "POST",
        data:{
            id : x
        },
        success:function(data){
            $("#tableStudentFee").html(data);
        }
    })
}
function uploadReceipt(feeID){
    $.ajax({
        url:"uploadPDFtable.php",
        type: "POST",
        data:{
            receiptID : feeID
        },
        success:function(data){
            $("#divUploadReceipt").html(data);
        }
    })
}

function paymentHistory(feeID){
    $.ajax({
        url:"paymentHistory.php",
        type: "POST",
        data:{
            feeID : feeID
        },
        success:function(data){
            $("#divUploadReceipt").html(data);
        }
    })
}
function selectAllFee(){
    $.ajax({
        url:"financial(Admin)_fee_all_process.php",
        success:function(data){
            $("#tableStudentFee").html(data);
        }
    })
}
function selectOverdueFee(){


    $.ajax({
        url:"financial(Admin)_fee_overdue_process.php",
        success:function(data){
            $("#tableStudentFee").html(data);
        }
    })
}
function selectCompletedFee(){


    $.ajax({
        url:"financial(Admin)_fee_completed_process.php",
        success:function(data){
            $("#tableStudentFee").html(data);
        }
    })
}
function selectDueFee(){


    $.ajax({
        url:"financial(Admin)_fee_due_process.php",
        success:function(data){
            $("#tableStudentFee").html(data);
        }
    })
}

function selectPayment(feeID){
    var y = document.getElementById("fee").value;

    $.ajax({
        url:"financial(Admin)_pay_process.php",
        type: "POST",
        data:{
            id : feeID
        },
        success:function(data){
            $("#tableStudentPayment").html(data);
        }
    })
}

function updateAmount(referenceNo, feeID, No){
    var payPID = "payapproval".concat(No);
    var value = document.getElementById(payPID).value;
    $.ajax({
        url:"financial(Admin)_pay_approval_process.php",
        type: "POST",
        data:{
            fee_ID : feeID,
            refNo : referenceNo,
            value : value
        },
        success:function(data){
            // document.write(payPID);
            // document.write(value,refNo,ID);
        }
    })
}

function rejectPayment(referenceNo){
    $.ajax({
        url:"financial(Admin)_pay_reject_process.php",
        type: "POST",
        data:{

            refNo : referenceNo,

        },
        success:function(data){

        }
    })
}

function revertPayment(referenceNo, feeID, No){
    var payPID = "payapproval".concat(No);
    var value = document.getElementById(payPID).value;

    $.ajax({
        url:"financial(Admin)_pay_revert_process.php",
        type: "POST",
        data:{
            fee_ID : feeID,
            refNo : referenceNo,
            value : value
        },
        success:function(data){

        }
    })
}

// function revertPayment(referenceNo, feeID){
//     var value = document.getElementById("payapproval").value;
//
//     $.ajax({
//         url:"financial(Admin)_pay_revert_process.php",
//         type: "POST",
//         data:{
//             fee_ID : feeID,
//             refNo : referenceNo,
//             value : value
//         },
//         success:function(data){
//
//         }
//     })
// }

function feeDelete(feeID){

    $.ajax({
        url:"financial(Admin)_fee_delete.php",
        type: "POST",
        data:{
            fee_ID : feeID
        },
        success:function(data){

        }
    })
}




function feeModify(feeID){

    $.ajax({
        url:"financial(Admin)_fee_delete.php",
        type: "POST",
        data:{
            fee_ID : feeID
        },
        success:function(data){

        }
    })
}

// $(document).ready(function () {
//     $('.open-modal-fee-delete').click(function(){
//         $('#feeID').val($(this).data('feeID'));
//         $('#feeID2').html($(this).data('feeID'));
//     });
// });


