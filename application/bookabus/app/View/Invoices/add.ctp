<div class="invoices form">
<?php echo $this->Form->create('Invoice'); ?>
	<fieldset>
		<legend><?php echo __('Add Invoice'); ?></legend>
	<?php
		echo $this->Form->input('billing_id');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Billings'), array('controller' => 'billings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing'), array('controller' => 'billings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
