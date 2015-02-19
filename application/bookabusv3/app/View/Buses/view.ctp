<div class="buses view">
<h2><?php echo __('Bus'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bus['Bus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plate No'); ?></dt>
		<dd>
			<?php echo h($bus['Bus']['plate_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seating Cap'); ?></dt>
		<dd>
			<?php echo h($bus['Bus']['seating_cap']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($bus['Bus']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Condition'); ?></dt>
		<dd>
			<?php echo h($bus['Bus']['condition']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bus'), array('action' => 'edit', $bus['Bus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bus'), array('action' => 'delete', $bus['Bus']['id']), array(), __('Are you sure you want to delete # %s?', $bus['Bus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Buses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bus'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seats'), array('controller' => 'seats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seat'), array('controller' => 'seats', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bookings'); ?></h3>
	<?php if (!empty($bus['Booking'])): ?>
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
	<?php foreach ($bus['Booking'] as $booking): ?>
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
<div class="related">
	<h3><?php echo __('Related Schedules'); ?></h3>
	<?php if (!empty($bus['Schedule'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Bus Id'); ?></th>
		<th><?php echo __('Destination'); ?></th>
		<th><?php echo __('Station'); ?></th>
		<th><?php echo __('Departure'); ?></th>
		<th><?php echo __('ETA'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Fare'); ?></th>
		<th><?php echo __('Trip Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bus['Schedule'] as $schedule): ?>
		<tr>
			<td><?php echo $schedule['id']; ?></td>
			<td><?php echo $schedule['bus_id']; ?></td>
			<td><?php echo $schedule['destination']; ?></td>
			<td><?php echo $schedule['station']; ?></td>
			<td><?php echo $schedule['departure']; ?></td>
			<td><?php echo $schedule['ETA']; ?></td>
			<td><?php echo $schedule['date']; ?></td>
			<td><?php echo $schedule['fare']; ?></td>
			<td><?php echo $schedule['trip_status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'schedules', 'action' => 'view', $schedule['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'schedules', 'action' => 'edit', $schedule['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'schedules', 'action' => 'delete', $schedule['id']), array(), __('Are you sure you want to delete # %s?', $schedule['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Seats'); ?></h3>
	<?php if (!empty($bus['Seat'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Bus Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bus['Seat'] as $seat): ?>
		<tr>
			<td><?php echo $seat['code']; ?></td>
			<td><?php echo $seat['bus_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'seats', 'action' => 'view', $seat['code'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'seats', 'action' => 'edit', $seat['code'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'seats', 'action' => 'delete', $seat['code']), array(), __('Are you sure you want to delete # %s?', $seat['code'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Seat'), array('controller' => 'seats', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
