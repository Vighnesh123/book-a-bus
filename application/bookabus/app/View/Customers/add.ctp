<div class="customers form">
<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend><?php echo __('Add Customer'); ?></legend>
	<?php
		echo $this->Form->input('fname');
		echo $this->Form->input('lname');
		echo $this->Form->input('MI');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('birthday');
		echo $this->Form->input('valid');
		echo $this->Form->input('register_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Billings'), array('controller' => 'billings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing'), array('controller' => 'billings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Credit Infos'), array('controller' => 'credit_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credit Info'), array('controller' => 'credit_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loginfos'), array('controller' => 'loginfos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loginfo'), array('controller' => 'loginfos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rewards'), array('controller' => 'rewards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reward'), array('controller' => 'rewards', 'action' => 'add')); ?> </li>
	</ul>
</div>
