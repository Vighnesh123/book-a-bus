<div class="seats view">
<h2><?php echo __('Seat'); ?></h2>
	<dl>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($seat['Seat']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($seat['Bus']['id'], array('controller' => 'buses', 'action' => 'view', $seat['Bus']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seat'), array('action' => 'edit', $seat['Seat']['code'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Seat'), array('action' => 'delete', $seat['Seat']['code']), array(), __('Are you sure you want to delete # %s?', $seat['Seat']['code'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Seats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seat'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Buses'), array('controller' => 'buses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bus'), array('controller' => 'buses', 'action' => 'add')); ?> </li>
	</ul>
</div>
