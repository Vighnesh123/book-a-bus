<div class="scheadules view">
<h2><?php echo __('Scheadule'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($scheadule['Scheadule']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($scheadule['Bus']['id'], array('controller' => 'buses', 'action' => 'view', $scheadule['Bus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destination'); ?></dt>
		<dd>
			<?php echo h($scheadule['Scheadule']['destination']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo h($scheadule['Scheadule']['station']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departure'); ?></dt>
		<dd>
			<?php echo h($scheadule['Scheadule']['departure']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ETA'); ?></dt>
		<dd>
			<?php echo h($scheadule['Scheadule']['ETA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($scheadule['Scheadule']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fare'); ?></dt>
		<dd>
			<?php echo h($scheadule['Scheadule']['fare']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trip Status'); ?></dt>
		<dd>
			<?php echo h($scheadule['Scheadule']['trip_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Scheadule'), array('action' => 'edit', $scheadule['Scheadule']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Scheadule'), array('action' => 'delete', $scheadule['Scheadule']['id']), array(), __('Are you sure you want to delete # %s?', $scheadule['Scheadule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Scheadules'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scheadule'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Buses'), array('controller' => 'buses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bus'), array('controller' => 'buses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bookings'); ?></h3>
	<?php if (!empty($scheadule['Booking'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Scheadule Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Booking Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($scheadule['Booking'] as $booking): ?>
		<tr>
			<td><?php echo $booking['id']; ?></td>
			<td><?php echo $booking['scheadule_id']; ?></td>
			<td><?php echo $booking['customer_id']; ?></td>
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
