<div class="customers view">
<h2><?php echo __('Customer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fname'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['fname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lname'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MI'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['MI']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthday'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['birthday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['valid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Register Date'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['register_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['id']), array(), __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Billings'); ?></h3>
	<?php if (!empty($customer['Billing'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Booking Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['Billing'] as $billing): ?>
		<tr>
			<td><?php echo $billing['id']; ?></td>
			<td><?php echo $billing['customer_id']; ?></td>
			<td><?php echo $billing['booking_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'billings', 'action' => 'view', $billing['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'billings', 'action' => 'edit', $billing['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'billings', 'action' => 'delete', $billing['id']), array(), __('Are you sure you want to delete # %s?', $billing['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Billing'), array('controller' => 'billings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Bookings'); ?></h3>
	<?php if (!empty($customer['Booking'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Scheadule Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Booking Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['Booking'] as $booking): ?>
		<tr>
			<td><?php echo $booking['id']; ?></td>
			<td><?php echo $booking['scheadule_id']; ?></td>
			<td><?php echo $booking['customer_id']; ?></td>
			<td><?php echo $booking['booking_status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bookings', 'action' => 'view', $booking['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bookings', 'action' => 'edit', $booking['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bookings', 'action' => 'delete', $booking['id']), array(), __('Are you sure you want to delete # %s?', $booking['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Credit Infos'); ?></h3>
	<?php if (!empty($customer['CreditInfo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Card Number'); ?></th>
		<th><?php echo __('Credit Provider'); ?></th>
		<th><?php echo __('Expiration Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['CreditInfo'] as $creditInfo): ?>
		<tr>
			<td><?php echo $creditInfo['customer_id']; ?></td>
			<td><?php echo $creditInfo['card_number']; ?></td>
			<td><?php echo $creditInfo['credit_provider']; ?></td>
			<td><?php echo $creditInfo['expiration_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'credit_infos', 'action' => 'view', $creditInfo['customer_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'credit_infos', 'action' => 'edit', $creditInfo['customer_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'credit_infos', 'action' => 'delete', $creditInfo['customer_id']), array(), __('Are you sure you want to delete # %s?', $creditInfo['customer_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Credit Info'), array('controller' => 'credit_infos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Loginfos'); ?></h3>
	<?php if (!empty($customer['Loginfo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['Loginfo'] as $loginfo): ?>
		<tr>
			<td><?php echo $loginfo['customer_id']; ?></td>
			<td><?php echo $loginfo['password']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'loginfos', 'action' => 'view', $loginfo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'loginfos', 'action' => 'edit', $loginfo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'loginfos', 'action' => 'delete', $loginfo['id']), array(), __('Are you sure you want to delete # %s?', $loginfo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Loginfo'), array('controller' => 'loginfos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Rewards'); ?></h3>
	<?php if (!empty($customer['Reward'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Point'); ?></th>
		<th><?php echo __('Action'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['Reward'] as $reward): ?>
		<tr>
			<td><?php echo $reward['id']; ?></td>
			<td><?php echo $reward['customer_id']; ?></td>
			<td><?php echo $reward['point']; ?></td>
			<td><?php echo $reward['action']; ?></td>
			<td><?php echo $reward['description']; ?></td>
			<td><?php echo $reward['date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rewards', 'action' => 'view', $reward['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rewards', 'action' => 'edit', $reward['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rewards', 'action' => 'delete', $reward['id']), array(), __('Are you sure you want to delete # %s?', $reward['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reward'), array('controller' => 'rewards', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
