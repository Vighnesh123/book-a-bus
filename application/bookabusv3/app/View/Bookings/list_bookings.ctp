<?php
//($allBookings);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-offset-1 col-md-10 data-group">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <td>TRANSACTION CODE</td>
                            <td>DESTINATION</td>
                            <td>DEPARTURE TIME</td>
                            <td>STATUS</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allBookings as $bookings) : ?>
                        <tr>
                            <td><?php echo $this->Html->link(h($bookings['Booking']['transaction_code']), array('controller'=>'Bookings', 'action'=>'my_booking',h($bookings['Booking']['transaction_code'])))?></td>
                            <td><?php echo h($bookings['Schedule']['destination'])?></td>
                            <td><?php echo h($bookings['Schedule']['date'])?></td>
                            <td><?php echo h($bookings['Booking']['booking_status'])?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>