<div class="rewards form">
<?php echo $this->Form->create('Reward'); ?>
	<fieldset>
		<legend><?php echo __('Add Reward'); ?></legend>
	<?php
		echo $this->Form->input('customer_id');
		echo $this->Form->input('point');
		echo $this->Form->input('action');
		echo $this->Form->input('description');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rewards'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
