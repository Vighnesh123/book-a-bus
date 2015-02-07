<div class="seats form">
<?php echo $this->Form->create('Seat'); ?>
	<fieldset>
		<legend><?php echo __('Edit Seat'); ?></legend>
	<?php
		echo $this->Form->input('seat_code');
		echo $this->Form->input('booking_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Seat.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Seat.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Seats'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
