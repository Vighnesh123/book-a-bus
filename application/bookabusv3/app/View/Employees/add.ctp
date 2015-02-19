<div class="employees form">
<?php echo $this->Form->create('Employee'); ?>
	<fieldset>
		<legend><?php echo __('Add Employee'); ?></legend>
	<?php
		echo $this->Form->input('fname');
		echo $this->Form->input('lname');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('permission');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?></li>
	</ul>
</div>
