<?php

?>
<script>
function goBack() {
    window.history.back();
}
</script>
<div class="container">
    <div class="row">
            <div class="col-md-12">
                <div class="col-md-offset-1 col-md-10 data-group">
                    <h2>Is this Info correct ?</h2>
                    <br><?php echo h($transactionInfo['Booking']['station']);?> to <?php echo h($transactionInfo['Booking']['destination']);?>
                    <br><?php echo h($transactionInfo['Booking']['date']);?> / <?php echo h($transactionInfo['Booking']['departure']);?> :
                    <br> Reserved Seats : <?php foreach($transactionInfo['Booking']['seat_code'] as $value){ echo $value . " "; }?>
                    <br>Total Number of Seats: <?php $seatcount = count($transactionInfo['Booking']['seat_code']); echo $seatcount; ?>
                    <br>Fare per seat : <?php echo h($transactionInfo['Booking']['fare']);?>
                    <br>Total Price : <?php echo number_format($transactionInfo['Booking']['fare'] * $seatcount,2);?>
                </div>
                <button onclick="goBack()"> No </button>
                <?php 
                echo $this->Form->create('Booking',array('action'=>'save_reserve'));
                echo $this->Form->input('customer_id', array ('value'=>$logged_in['id'], 'type'=>'hidden'));
                echo $this->Form->input('seat_bus_id', array('value'=>$transactionInfo['Booking']['seat_bus_id'], 'type'=>'hidden'));
                echo $this->Form->input('schedule_id', array('value'=>$transactionInfo['Booking']['schedule_id'], 'type'=>'hidden'));
                foreach ($transactionInfo['Booking']['seat_code'] as $seats){
                    echo $this->Form->input('seat_code.', array('value'=>$seats, 'type'=>'hidden'));
                }
                //$this->Form->input('seat_code', array('value'=>$transactionInfo['Booking']['seat_code'], 'type'=>'hidden'));
                echo $this->Form->submit('Submit');
                ?>
            </div>
    </div>