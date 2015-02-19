<div class="creditInfos view">
<h2><?php echo __('Credit Info'); ?></h2>
	<dl>
		<dt><?php echo __('Customer Id'); ?></dt>
		<dd>
			<?php echo h($creditInfo['CreditInfo']['customer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Number'); ?></dt>
		<dd>
			<?php echo h($creditInfo['CreditInfo']['card_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credit Provider'); ?></dt>
		<dd>
			<?php echo h($creditInfo['CreditInfo']['credit_provider']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expiration Date'); ?></dt>
		<dd>
			<?php echo h($creditInfo['CreditInfo']['expiration_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Credit Info'), array('action' => 'edit', $creditInfo['CreditInfo']['customer_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Credit Info'), array('action' => 'delete', $creditInfo['CreditInfo']['customer_id']), array(), __('Are you sure you want to delete # %s?', $creditInfo['CreditInfo']['customer_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Credit Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credit Info'), array('action' => 'add')); ?> </li>
	</ul>
</div>
