<div class="seats index">
	<h2><?php echo __('Seats'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('bus_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($seats as $seat): ?>
	<tr>
		<td><?php echo h($seat['Seat']['code']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($seat['Bus']['id'], array('controller' => 'buses', 'action' => 'view', $seat['Bus']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $seat['Seat']['code'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $seat['Seat']['code'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $seat['Seat']['code']), array(), __('Are you sure you want to delete # %s?', $seat['Seat']['code'])); ?>
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
		<li><?php echo $this->Html->link(__('New Seat'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Buses'), array('controller' => 'buses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bus'), array('controller' => 'buses', 'action' => 'add')); ?> </li>
	</ul>
</div>
