<div class="scheadules index">
	<h2><?php echo __('Scheadules'); ?></h2>
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
	<?php foreach ($scheadules as $scheadule): ?>
	<tr>
		<td><?php echo h($scheadule['Scheadule']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($scheadule['Bus']['id'], array('controller' => 'buses', 'action' => 'view', $scheadule['Bus']['id'])); ?>
		</td>
		<td><?php echo h($scheadule['Scheadule']['destination']); ?>&nbsp;</td>
		<td><?php echo h($scheadule['Scheadule']['station']); ?>&nbsp;</td>
		<td><?php echo h($scheadule['Scheadule']['departure']); ?>&nbsp;</td>
		<td><?php echo h($scheadule['Scheadule']['ETA']); ?>&nbsp;</td>
		<td><?php echo h($scheadule['Scheadule']['date']); ?>&nbsp;</td>
		<td><?php echo h($scheadule['Scheadule']['fare']); ?>&nbsp;</td>
		<td><?php echo h($scheadule['Scheadule']['trip_status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $scheadule['Scheadule']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $scheadule['Scheadule']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $scheadule['Scheadule']['id']), array(), __('Are you sure you want to delete # %s?', $scheadule['Scheadule']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Scheadule'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Buses'), array('controller' => 'buses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bus'), array('controller' => 'buses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
