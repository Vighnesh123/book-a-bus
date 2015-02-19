<div class="bookings view">
<h2><?php echo __('Booking'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($booking['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $booking['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schedule'); ?></dt>
		<dd>
			<?php echo $this->Html->link($booking['Schedule']['id'], array('controller' => 'schedules', 'action' => 'view', $booking['Schedule']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seat Code'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['seat_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($booking['Bus']['id'], array('controller' => 'buses', 'action' => 'view', $booking['Bus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Booking Status'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['booking_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Booking'), array('action' => 'edit', $booking['Booking']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Booking'), array('action' => 'delete', $booking['Booking']['id']), array(), __('Are you sure you want to delete # %s?', $booking['Booking']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Buses'), array('controller' => 'buses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bus'), array('controller' => 'buses', 'action' => 'add')); ?> </li>
	</ul>
</div>
