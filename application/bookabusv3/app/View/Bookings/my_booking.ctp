<?php
//debug($bookingInfo);
?>
<script>
function confirmCancel(){
    return confirm("Are you sure you want to cancel request ?");
}
</script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-offset-1 col-md-10 data-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class='col-sm-12 control-label'>Reference Number :</label>
                        <div class='col-sm-12 control-label'><?php echo $bookingInfo[0]['Booking']['transaction_code']?></div>
                    </div>
                    <div class="form-group">
                        <label class='col-sm-12 control-label'>Reserved To :</label>
                        <div class='col-sm-12 control-label'><?php echo $bookingInfo[0]['Customer']['lname'].", ".$bookingInfo[0]['Customer']['fname']." ".$bookingInfo[0]['Customer']['MI']?></div>
                    </div>
                    <div class="form-group">
                        <label class='col-sm-12 control-label'>Destination :</label>
                        <div class='col-sm-12 control-label'><?php echo $bookingInfo[0]['Schedule']['station']." to ". $bookingInfo[0]['Schedule']['destination']?></div>
                    </div>
                    <div class="form-group">
                        <label class='col-sm-12 control-label'>Date :</label>
                        <div class='col-sm-12 control-label'><?php echo $bookingInfo[0]['Schedule']['date']?></div>
                    </div>
                    <div class="form-group">
                        <label class='col-sm-12 control-label'>Departure Time :</label>
                        <div class='col-sm-12 control-label'><?php echo $bookingInfo[0]['Schedule']['departure']?></div>
                    </div>
                    <div class="form-group">
                        <label class='col-sm-12 control-label'>Fare Per Seat :</label>
                        <div class='col-sm-12 control-label'><?php echo $bookingInfo[0]['Schedule']['fare']?></div>
                    </div>
                    <div class="form-group">
                        <label class='col-sm-12 control-label'>Reserved Seats :</label>
                        <div class='col-sm-12 control-label'>
                            <?php foreach ($bookingInfo as $bookingSeats){
                                echo $bookingSeats['Booking']['seat_code'] . " ";
                            }?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class='col-sm-12 control-label'>Total Number of Reserved Seats :</label>
                        <div class='col-sm-12 control-label'>
                            <?php echo count($bookingInfo);?>
                        </div>
                    </div>
                    <?php echo $this->Html->link($this->Form->button('Button'), array('controller'=>'Customers', 'action' => '/dashboard'), array('escape'=>false,'title' => "Back To Dashboard")); ?>
                </div>
                <?php echo $this->Form->create(); ?>
                <?php 
                foreach ($bookingInfo as $bookingIds){
                    echo $this->Form->hidden('id.', array('value'=>$bookingIds['Booking']['id'])); 
                } ?>
                <?php echo $this->Form->submit('Cancel Request', array('onclick'=>'return confirmCancel()')); ?>
            </div>
        </div>
    </div>
</div>