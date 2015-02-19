<div class="customers form">
<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend><?php echo __('Edit Customer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fname');
		echo $this->Form->input('lname');
		echo $this->Form->input('MI');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('birthday');
		echo $this->Form->input('valid');
		echo $this->Form->input('register_date');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Customer.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Customer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Credit Infos'), array('controller' => 'credit_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credit Info'), array('controller' => 'credit_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rewards'), array('controller' => 'rewards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reward'), array('controller' => 'rewards', 'action' => 'add')); ?> </li>
	</ul>
</div>
