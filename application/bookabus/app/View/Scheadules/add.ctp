<div class="scheadules form">
<?php echo $this->Form->create('Scheadule'); ?>
	<fieldset>
		<legend><?php echo __('Add Scheadule'); ?></legend>
	<?php
		echo $this->Form->input('bus_id');
		echo $this->Form->input('destination');
		echo $this->Form->input('station');
		echo $this->Form->input('departure');
		echo $this->Form->input('ETA');
		echo $this->Form->input('date');
		echo $this->Form->input('fare');
		echo $this->Form->input('trip_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Scheadules'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Buses'), array('controller' => 'buses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bus'), array('controller' => 'buses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
