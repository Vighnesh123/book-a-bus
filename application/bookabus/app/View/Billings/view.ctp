<div class="billings view">
<h2><?php echo __('Billing'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($billing['Billing']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($billing['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $billing['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Booking'); ?></dt>
		<dd>
			<?php echo $this->Html->link($billing['Booking']['id'], array('controller' => 'bookings', 'action' => 'view', $billing['Booking']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Billing'), array('action' => 'edit', $billing['Billing']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Billing'), array('action' => 'delete', $billing['Billing']['id']), array(), __('Are you sure you want to delete # %s?', $billing['Billing']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Billings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Invoices'); ?></h3>
	<?php if (!empty($billing['Invoice'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Billing Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($billing['Invoice'] as $invoice): ?>
		<tr>
			<td><?php echo $invoice['billing_id']; ?></td>
			<td><?php echo $invoice['employee_id']; ?></td>
			<td><?php echo $invoice['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'invoices', 'action' => 'view', $invoice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'invoices', 'action' => 'edit', $invoice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'invoices', 'action' => 'delete', $invoice['id']), array(), __('Are you sure you want to delete # %s?', $invoice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
