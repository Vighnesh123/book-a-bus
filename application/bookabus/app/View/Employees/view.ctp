<div class="employees view">
<h2><?php echo __('Employee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fname'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['fname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lname'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Added'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['date_added']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emp Status'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['emp_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $employee['Employee']['id']), array(), __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Invoices'); ?></h3>
	<?php if (!empty($employee['Invoice'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Billing Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employee['Invoice'] as $invoice): ?>
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
