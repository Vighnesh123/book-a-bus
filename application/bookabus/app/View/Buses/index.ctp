<div class="buses index">
	<h2><?php echo __('Buses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('plate_no'); ?></th>
			<th><?php echo $this->Paginator->sort('seating_cap'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('condition'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($buses as $bus): ?>
	<tr>
		<td><?php echo h($bus['Bus']['id']); ?>&nbsp;</td>
		<td><?php echo h($bus['Bus']['plate_no']); ?>&nbsp;</td>
		<td><?php echo h($bus['Bus']['seating_cap']); ?>&nbsp;</td>
		<td><?php echo h($bus['Bus']['type']); ?>&nbsp;</td>
		<td><?php echo h($bus['Bus']['condition']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bus['Bus']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bus['Bus']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bus['Bus']['id']), array(), __('Are you sure you want to delete # %s?', $bus['Bus']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bus'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Scheadules'), array('controller' => 'scheadules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scheadule'), array('controller' => 'scheadules', 'action' => 'add')); ?> </li>
	</ul>
</div>
