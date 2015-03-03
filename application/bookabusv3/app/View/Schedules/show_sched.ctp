<?php
//echo $data;
//print_r( $schedules);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 data-group">
            <table class='table'>
                <thead>
                    <tr>
                        <!-- <th>Bus Liner</th> -->
                        <th>Station</th>
                        <th>Destination</th>
                        <th>Departure Time</th>
                        <th>Date</th>
                        <th>ETA</th>           
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($schedules as $schedule) :?>
                    <?php $destination = $schedule['Schedule']['destination']?>
                    <tr>
                         <!-- <td><?php //echo "Five Star";//h($schedule['Schedule']['liner'])  ?></td> <!-- This should have the liner-->
                        <td><?php echo h($schedule['Schedule']['station'])?></td>
                        <td><?php echo h($schedule['Schedule']['destination'])?></td>
                        <td><?php echo h($schedule['Schedule']['departure'])?></td>
                        <td><?php echo h($schedule['Schedule']['date'])?></td>
                        <td><?php echo h($schedule['Schedule']['ETA'])?></td>
                        
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <h2>Other trips going to <?php if(isset($destination)); ?></h2>
            <table class='table'>
                <thead>
                    <tr>
                        <!-- <th>Bus Liner</th> -->
                        <th>Station</th>
                        <th>Destination</th>
                        <th>Departure Time</th>
                        <th>Date</th>
                        <th>ETA</th>           
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($schedules2 as $schedule2) :?>
                    <tr>
                         <!-- <td><?php //echo "Five Star";//h($schedule['Schedule']['liner'])  ?></td> <!-- This should have the liner-->
                        <td><?php echo h($schedule2['Schedule']['station'])?></td>
                        <td><?php echo h($schedule2['Schedule']['destination'])?></td>
                        <td><?php echo h($schedule2['Schedule']['departure'])?></td>
                        <td><?php echo h($schedule2['Schedule']['date'])?></td>
                        <td><?php echo h($schedule2['Schedule']['ETA'])?></td>
                        
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>