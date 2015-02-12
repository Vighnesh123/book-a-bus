<div class="bookings form">
<?php echo $this->Form->create('Booking'); ?>
	<fieldset>
		<legend><?php echo __('Add Booking'); ?></legend>
	<?php
		echo $this->Form->input('scheadule_id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('booking_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bookings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Scheadules'), array('controller' => 'scheadules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scheadule'), array('controller' => 'scheadules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seats'), array('controller' => 'seats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seat'), array('controller' => 'seats', 'action' => 'add')); ?> </li>
	</ul>
</div>
