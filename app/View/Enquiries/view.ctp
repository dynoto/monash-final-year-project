<div class="enquiries view">
<h2><?php  echo __('Enquiry'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($enquiry['Enquiry']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($enquiry['Enquiry']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($enquiry['Enquiry']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($enquiry['Enquiry']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($enquiry['Enquiry']['message']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Enquiry'), array('action' => 'edit', $enquiry['Enquiry']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Enquiry'), array('action' => 'delete', $enquiry['Enquiry']['id']), null, __('Are you sure you want to delete # %s?', $enquiry['Enquiry']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Enquiries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Enquiry'), array('action' => 'add')); ?> </li>
	</ul>
</div>
