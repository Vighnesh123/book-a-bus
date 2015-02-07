<div class="creditInfos form">
<?php echo $this->Form->create('CreditInfo'); ?>
	<fieldset>
		<legend><?php echo __('Add Credit Info'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Credit Infos'), array('action' => 'index')); ?></li>
	</ul>
</div>
