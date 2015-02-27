<div class="bookings index">
	<h2><?php echo __('Bookings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('schedule_id'); ?></th>
			<th><?php echo $this->Paginator->sort('seat_code'); ?></th>
			<th><?php echo $this->Paginator->sort('bus_id'); ?></th>
			<th><?php echo $this->Paginator->sort('booking_status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($bookings as $booking): ?>
	<tr>
		<td><?php echo h($booking['Booking']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($booking['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $booking['Customer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($booking['Schedule']['id'], array('controller' => 'schedules', 'action' => 'view', $booking['Schedule']['id'])); ?>
		</td>
		<td><?php echo h($booking['Booking']['seat_code']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($booking['Bus']['id'], array('controller' => 'buses', 'action' => 'view', $booking['Bus']['id'])); ?>
		</td>
		<td><?php echo h($booking['Booking']['booking_status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $booking['Booking']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $booking['Booking']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $booking['Booking']['id']), array(), __('Are you sure you want to delete # %s?', $booking['Booking']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Booking'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Buses'), array('controller' => 'buses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bus'), array('controller' => 'buses', 'action' => 'add')); ?> </li>
	</ul>
</div>