<div class="invoices view">
<h2><?php echo __('Invoice'); ?></h2>
	<dl>
		<dt><?php echo __('Billing'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoice['Billing']['id'], array('controller' => 'billings', 'action' => 'view', $invoice['Billing']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoice['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $invoice['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Invoice'), array('action' => 'edit', $invoice['Invoice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Invoice'), array('action' => 'delete', $invoice['Invoice']['id']), array(), __('Are you sure you want to delete # %s?', $invoice['Invoice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Billings'), array('controller' => 'billings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing'), array('controller' => 'billings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
