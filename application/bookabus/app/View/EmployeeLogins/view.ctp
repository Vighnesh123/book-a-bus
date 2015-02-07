<div class="employeeLogins view">
<h2><?php echo __('Employee Login'); ?></h2>
	<dl>
		<dt><?php echo __('Employee Id'); ?></dt>
		<dd>
			<?php echo h($employeeLogin['EmployeeLogin']['employee_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($employeeLogin['EmployeeLogin']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($employeeLogin['EmployeeLogin']['password']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee Login'), array('action' => 'edit', $employeeLogin['EmployeeLogin']['employee_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee Login'), array('action' => 'delete', $employeeLogin['EmployeeLogin']['employee_id']), array(), __('Are you sure you want to delete # %s?', $employeeLogin['EmployeeLogin']['employee_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employee Logins'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Login'), array('action' => 'add')); ?> </li>
	</ul>
</div>
