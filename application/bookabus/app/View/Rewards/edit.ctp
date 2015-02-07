<div class="rewards form">
<?php echo $this->Form->create('Reward'); ?>
	<fieldset>
		<legend><?php echo __('Edit Reward'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Reward.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Reward.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Rewards'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
