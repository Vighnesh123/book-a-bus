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
		<li><?php echo $this->Html->link(__('List Scheadules'), array('controller' => 'scheadules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scheadule'), array('controller' => 'scheadules', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Scheadules'); ?></h3>
	<?php if (!empty($bus['Scheadule'])): ?>
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
	<?php foreach ($bus['Scheadule'] as $scheadule): ?>
		<tr>
			<td><?php echo $scheadule['id']; ?></td>
			<td><?php echo $scheadule['bus_id']; ?></td>
			<td><?php echo $scheadule['destination']; ?></td>
			<td><?php echo $scheadule['station']; ?></td>
			<td><?php echo $scheadule['departure']; ?></td>
			<td><?php echo $scheadule['ETA']; ?></td>
			<td><?php echo $scheadule['date']; ?></td>
			<td><?php echo $scheadule['fare']; ?></td>
			<td><?php echo $scheadule['trip_status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'scheadules', 'action' => 'view', $scheadule['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'scheadules', 'action' => 'edit', $scheadule['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'scheadules', 'action' => 'delete', $scheadule['id']), array(), __('Are you sure you want to delete # %s?', $scheadule['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Scheadule'), array('controller' => 'scheadules', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
