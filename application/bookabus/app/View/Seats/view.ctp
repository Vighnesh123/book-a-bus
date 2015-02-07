<div class="seats view">
<h2><?php echo __('Seat'); ?></h2>
	<dl>
		<dt><?php echo __('Seat Code'); ?></dt>
		<dd>
			<?php echo h($seat['Seat']['seat_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Booking'); ?></dt>
		<dd>
			<?php echo $this->Html->link($seat['Booking']['id'], array('controller' => 'bookings', 'action' => 'view', $seat['Booking']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seat'), array('action' => 'edit', $seat['Seat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Seat'), array('action' => 'delete', $seat['Seat']['id']), array(), __('Are you sure you want to delete # %s?', $seat['Seat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Seats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seat'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
