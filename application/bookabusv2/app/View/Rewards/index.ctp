<div class="rewards index">
	<h2><?php echo __('Rewards'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('point'); ?></th>
			<th><?php echo $this->Paginator->sort('action'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rewards as $reward): ?>
	<tr>
		<td><?php echo h($reward['Reward']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reward['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $reward['Customer']['id'])); ?>
		</td>
		<td><?php echo h($reward['Reward']['point']); ?>&nbsp;</td>
		<td><?php echo h($reward['Reward']['action']); ?>&nbsp;</td>
		<td><?php echo h($reward['Reward']['description']); ?>&nbsp;</td>
		<td><?php echo h($reward['Reward']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reward['Reward']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reward['Reward']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reward['Reward']['id']), array(), __('Are you sure you want to delete # %s?', $reward['Reward']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Reward'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
