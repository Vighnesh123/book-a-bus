<div class="rewards view">
<h2><?php echo __('Reward'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reward['Reward']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reward['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $reward['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Point'); ?></dt>
		<dd>
			<?php echo h($reward['Reward']['point']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Action'); ?></dt>
		<dd>
			<?php echo h($reward['Reward']['action']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($reward['Reward']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($reward['Reward']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reward'), array('action' => 'edit', $reward['Reward']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reward'), array('action' => 'delete', $reward['Reward']['id']), array(), __('Are you sure you want to delete # %s?', $reward['Reward']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rewards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reward'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
