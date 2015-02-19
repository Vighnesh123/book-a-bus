<div class="schedules view">
<h2><?php echo __('Schedule'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($schedule['Bus']['id'], array('controller' => 'buses', 'action' => 'view', $schedule['Bus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destination'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['destination']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['station']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departure'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['departure']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ETA'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['ETA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fare'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['fare']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trip Status'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['trip_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Schedule'), array('action' => 'edit', $schedule['Schedule']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Schedule'), array('action' => 'delete', $schedule['Schedule']['id']), array(), __('Are you sure you want to delete # %s?', $schedule['Schedule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Buses'), array('controller' => 'buses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bus'), array('controller' => 'buses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bookings'); ?></h3>
	<?php if (!empty($schedule['Booking'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Schedule Id'); ?></th>
		<th><?php echo __('Seat Code'); ?></th>
		<th><?php echo __('Bus Id'); ?></th>
		<th><?php echo __('Booking Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($schedule['Booking'] as $booking): ?>
		<tr>
			<td><?php echo $booking['id']; ?></td>
			<td><?php echo $booking['customer_id']; ?></td>
			<td><?php echo $booking['schedule_id']; ?></td>
			<td><?php echo $booking['seat_code']; ?></td>
			<td><?php echo $booking['bus_id']; ?></td>
			<td><?php echo $booking['booking_status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bookings', 'action' => 'view', $booking['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bookings', 'action' => 'edit', $booking['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bookings', 'action' => 'delete', $booking['id']), array(), __('Are you sure you want to delete # %s?', $booking['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
