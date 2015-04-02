<?php
$this->Paginator->options(array(
    'update' => '#potato',
    'evalScripts' => true,
    'type' => 'ajax'
));
?>
<table class="table">
    <thead>
    <tr>
        <!-- <th>Bus Liner</th> -->
        <th><?php echo $this->Paginator->sort('station', 'Station')?></th>
        <th><?php echo $this->Paginator->sort('destination', 'Destination')?></th>
        <th><?php echo $this->Paginator->sort('departure', 'Departure')?></th>
        <th><?php echo $this->Paginator->sort('date', 'Date')?></th>
        <th><?php echo $this->Paginator->sort('ETA', 'ETA')?></th>
        <th><?php echo $this->Paginator->sort('action', 'Action')?></th>
    </tr>
    </thead>
    <?php foreach($schedules as $schedule): ?>
    <tr>
        <td> <?php echo h($schedule['Schedule']['station']); ?> </td>
        <td> <?php echo h($schedule['Schedule']['destination']); ?> </td>
        <td> <?php echo h($schedule['Schedule']['departure']); ?> </td>
        <td> <?php echo h(date('M d, Y',strtotime($schedule['Schedule']['date']))); ?> </td>
        <td> <?php echo h($schedule['Schedule']['ETA']); ?> </td>
        <td class="actions">
            <?php echo $this->Html->link(__('Reserve a seat'), array('controller'=> 'Schedules', 'action' => 'reserve', $schedule['Schedule']['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>