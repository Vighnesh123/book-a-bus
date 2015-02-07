<div class="loginfos view">
<h2><?php echo __('Loginfo'); ?></h2>
	<dl>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($loginfo['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $loginfo['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($loginfo['Loginfo']['password']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Loginfo'), array('action' => 'edit', $loginfo['Loginfo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Loginfo'), array('action' => 'delete', $loginfo['Loginfo']['id']), array(), __('Are you sure you want to delete # %s?', $loginfo['Loginfo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Loginfos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loginfo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
