<div class="criterias view">
<h2><?php  echo __('Criteria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($criteria['Criteria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($criteria['Criteria']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($criteria['Criteria']['type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Criteria'), array('action' => 'edit', $criteria['Criteria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Criteria'), array('action' => 'delete', $criteria['Criteria']['id']), null, __('Are you sure you want to delete # %s?', $criteria['Criteria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Criterias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criteria'), array('action' => 'add')); ?> </li>
	</ul>
</div>
