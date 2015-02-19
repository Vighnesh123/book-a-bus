<div class="employees view">
<h2><?php echo __('Employee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fname'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['fname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lname'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Permission'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['permission']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $employee['Employee']['id']), array(), __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?> </li>
	</ul>
</div>
