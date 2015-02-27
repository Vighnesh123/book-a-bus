<div class="customers form">
<?php echo $this->Form->create('Customer'); ?>
<?php echo $this->Form->create('Loginfo'); ?>
	<fieldset>
		<legend><?php echo __('Add Customer'); ?></legend>
	<?php
		echo $this->Form->input('fname', array('label'=>'First Name'));
		echo $this->Form->input('lname', array('label'=>'Last Name'));
		echo $this->Form->input('MI', array('label'=>'Middle Initial'));
		echo $this->Form->input('email', array('label'=>'Email Address'));
		echo $this->Form->input('phone', array('label'=>'Phone Number'));
		echo $this->Form->input('birthday', array(
                    'type'=>'date',
                    'label'=>'Date of Birth',
                    'dateFormat'=>'MDY',
                    'minYear' => date('Y') - 70,
                    'maxYear' => date('Y') - 18,
                    ));                 
                echo $this->Form->input('loginfo.0.customer_id');
                echo $this->Form->input('loginfo.0.password');
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
