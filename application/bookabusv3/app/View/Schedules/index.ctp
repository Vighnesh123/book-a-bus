<div class="schedules index">
	<h2><?php echo __('Schedules'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('bus_id'); ?></th>
			<th><?php echo $this->Paginator->sort('destination'); ?></th>
			<th><?php echo $this->Paginator->sort('station'); ?></th>
			<th><?php echo $this->Paginator->sort('departure'); ?></th>
			<th><?php echo $this->Paginator->sort('ETA'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('fare'); ?></th>
			<th><?php echo $this->Paginator->sort('trip_status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($schedules as $schedule): ?>
	<tr>
		<td><?php echo h($schedule['Schedule']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($schedule['Bus']['id'], array('controller' => 'buses', 'action' => 'view', $schedule['Bus']['id'])); ?>
		</td>
		<td><?php echo h($schedule['Schedule']['destination']); ?>&nbsp;</td>
		<td><?php echo h($schedule['Schedule']['station']); ?>&nbsp;</td>
		<td><?php echo h($schedule['Schedule']['departure']); ?>&nbsp;</td>
		<td><?php echo h($schedule['Schedule']['ETA']); ?>&nbsp;</td>
		<td><?php echo h($schedule['Schedule']['date']); ?>&nbsp;</td>
		<td><?php echo h($schedule['Schedule']['fare']); ?>&nbsp;</td>
		<td><?php echo h($schedule['Schedule']['trip_status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $schedule['Schedule']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $schedule['Schedule']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $schedule['Schedule']['id']), array(), __('Are you sure you want to delete # %s?', $schedule['Schedule']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Schedule'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Buses'), array('controller' => 'buses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bus'), array('controller' => 'buses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
