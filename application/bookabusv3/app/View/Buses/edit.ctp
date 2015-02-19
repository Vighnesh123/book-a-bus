<div class="buses form">
<?php echo $this->Form->create('Bus'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bus'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('plate_no');
		echo $this->Form->input('seating_cap');
		echo $this->Form->input('type');
		echo $this->Form->input('condition');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Bus.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Bus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Buses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seats'), array('controller' => 'seats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seat'), array('controller' => 'seats', 'action' => 'add')); ?> </li>
	</ul>
</div>
