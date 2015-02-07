<div class="buses form">
<?php echo $this->Form->create('Bus'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bus'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('plate_no');
		echo $this->Form->input('seating_cap');
		echo $this->Form->input('type');
		echo $this->Form->input('condition');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Bus.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Bus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Buses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Scheadules'), array('controller' => 'scheadules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scheadule'), array('controller' => 'scheadules', 'action' => 'add')); ?> </li>
	</ul>
</div>
