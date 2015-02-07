<div class="employeeLogins form">
<?php echo $this->Form->create('EmployeeLogin'); ?>
	<fieldset>
		<legend><?php echo __('Edit Employee Login'); ?></legend>
	<?php
		echo $this->Form->input('employee_id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EmployeeLogin.employee_id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('EmployeeLogin.employee_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employee Logins'), array('action' => 'index')); ?></li>
	</ul>
</div>
