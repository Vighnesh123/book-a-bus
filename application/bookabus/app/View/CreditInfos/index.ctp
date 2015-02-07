<div class="creditInfos index">
	<h2><?php echo __('Credit Infos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('card_number'); ?></th>
			<th><?php echo $this->Paginator->sort('credit_provider'); ?></th>
			<th><?php echo $this->Paginator->sort('expiration_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($creditInfos as $creditInfo): ?>
	<tr>
		<td><?php echo h($creditInfo['CreditInfo']['customer_id']); ?>&nbsp;</td>
		<td><?php echo h($creditInfo['CreditInfo']['card_number']); ?>&nbsp;</td>
		<td><?php echo h($creditInfo['CreditInfo']['credit_provider']); ?>&nbsp;</td>
		<td><?php echo h($creditInfo['CreditInfo']['expiration_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $creditInfo['CreditInfo']['customer_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $creditInfo['CreditInfo']['customer_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $creditInfo['CreditInfo']['customer_id']), array(), __('Are you sure you want to delete # %s?', $creditInfo['CreditInfo']['customer_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Credit Info'), array('action' => 'add')); ?></li>
	</ul>
</div>
