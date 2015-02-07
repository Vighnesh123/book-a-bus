<div class="buses form">
<?php echo $this->Form->create('Bus'); ?>
	<fieldset>
		<legend><?php echo __('Add Bus'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Buses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Scheadules'), array('controller' => 'scheadules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scheadule'), array('controller' => 'scheadules', 'action' => 'add')); ?> </li>
	</ul>
</div>
