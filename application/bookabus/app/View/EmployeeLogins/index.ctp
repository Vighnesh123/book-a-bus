<div class="employeeLogins index">
	<h2><?php echo __('Employee Logins'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($employeeLogins as $employeeLogin): ?>
	<tr>
		<td><?php echo h($employeeLogin['EmployeeLogin']['employee_id']); ?>&nbsp;</td>
		<td><?php echo h($employeeLogin['EmployeeLogin']['username']); ?>&nbsp;</td>
		<td><?php echo h($employeeLogin['EmployeeLogin']['password']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employeeLogin['EmployeeLogin']['employee_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employeeLogin['EmployeeLogin']['employee_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employeeLogin['EmployeeLogin']['employee_id']), array(), __('Are you sure you want to delete # %s?', $employeeLogin['EmployeeLogin']['employee_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Employee Login'), array('action' => 'add')); ?></li>
	</ul>
</div>
