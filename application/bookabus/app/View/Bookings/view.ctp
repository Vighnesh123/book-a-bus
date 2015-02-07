<div class="bookings view">
<h2><?php echo __('Booking'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Scheadule'); ?></dt>
		<dd>
			<?php echo $this->Html->link($booking['Scheadule']['id'], array('controller' => 'scheadules', 'action' => 'view', $booking['Scheadule']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($booking['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $booking['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Booking Status'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['booking_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Booking'), array('action' => 'edit', $booking['Booking']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Booking'), array('action' => 'delete', $booking['Booking']['id']), array(), __('Are you sure you want to delete # %s?', $booking['Booking']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scheadules'), array('controller' => 'scheadules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scheadule'), array('controller' => 'scheadules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Billings'), array('controller' => 'billings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing'), array('controller' => 'billings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seats'), array('controller' => 'seats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seat'), array('controller' => 'seats', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Billings'); ?></h3>
	<?php if (!empty($booking['Billing'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Booking Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($booking['Billing'] as $billing): ?>
		<tr>
			<td><?php echo $billing['id']; ?></td>
			<td><?php echo $billing['customer_id']; ?></td>
			<td><?php echo $billing['booking_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'billings', 'action' => 'view', $billing['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'billings', 'action' => 'edit', $billing['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'billings', 'action' => 'delete', $billing['id']), array(), __('Are you sure you want to delete # %s?', $billing['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Billing'), array('controller' => 'billings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Seats'); ?></h3>
	<?php if (!empty($booking['Seat'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Seat Code'); ?></th>
		<th><?php echo __('Booking Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($booking['Seat'] as $seat): ?>
		<tr>
			<td><?php echo $seat['seat_code']; ?></td>
			<td><?php echo $seat['booking_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'seats', 'action' => 'view', $seat['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'seats', 'action' => 'edit', $seat['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'seats', 'action' => 'delete', $seat['id']), array(), __('Are you sure you want to delete # %s?', $seat['id'])); ?>
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
