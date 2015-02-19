<div class="creditInfos form">
<?php echo $this->Form->create('CreditInfo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Credit Info'); ?></legend>
	<?php
		echo $this->Form->input('customer_id');
		echo $this->Form->input('card_number');
		echo $this->Form->input('credit_provider');
		echo $this->Form->input('expiration_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CreditInfo.customer_id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('CreditInfo.customer_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Credit Infos'), array('action' => 'index')); ?></li>
	</ul>
</div>
