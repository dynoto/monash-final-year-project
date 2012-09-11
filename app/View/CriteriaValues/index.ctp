<div class="criteriaValues index">
	<h2><?php echo __('Criteria Values'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('criteria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($criteriaValues as $criteriaValue): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($criteriaValue['Criteria']['name'], array('controller' => 'criterias', 'action' => 'view', $criteriaValue['Criteria']['id'])); ?>
		</td>
		<td><?php echo h($criteriaValue['CriteriaValue']['id']); ?>&nbsp;</td>
		<td><?php echo h($criteriaValue['CriteriaValue']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $criteriaValue['CriteriaValue']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $criteriaValue['CriteriaValue']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $criteriaValue['CriteriaValue']['id']), null, __('Are you sure you want to delete # %s?', $criteriaValue['CriteriaValue']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Criteria Value'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Criterias'), array('controller' => 'criterias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criteria'), array('controller' => 'criterias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kitchens'), array('controller' => 'kitchens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitchen'), array('controller' => 'kitchens', 'action' => 'add')); ?> </li>
	</ul>
</div>
