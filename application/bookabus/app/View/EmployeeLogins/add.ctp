<div class="employeeLogins form">
<?php echo $this->Form->create('EmployeeLogin'); ?>
	<fieldset>
		<legend><?php echo __('Add Employee Login'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employee Logins'), array('action' => 'index')); ?></li>
	</ul>
</div>
