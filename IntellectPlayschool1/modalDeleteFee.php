<?php?><!-- The modal -->
<div class="modal fade" id="modalDeleteFee" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabelLarge">Modal Title</h4>
            </div>

            <div class="modal-body">
                <form method="post" action="financial(Admin)_fee_delete.php">
                    <?php echo $fee_ID  ?>
                    <input type="text" name="fee_ID" id="feeID" value="" readonly>
                    <h3> ID: <span id="feeID2"></span></h3>
                    <div class="form-btn"> <button type="submit" class="btn btn-danger">Confirm Delete Fee</button> </div>
                </form>
            </div>

        </div>
    </div>
</div>