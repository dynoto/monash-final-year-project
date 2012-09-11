<div class="criteriaValuesKitchens index">
	<h2><?php echo __('Criteria Values Kitchens'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('criteria_value_id'); ?></th>
			<th><?php echo $this->Paginator->sort('kitchen_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($criteriaValuesKitchens as $criteriaValuesKitchen): ?>
	<tr>
		<td><?php echo h($criteriaValuesKitchen['CriteriaValuesKitchen']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($criteriaValuesKitchen['CriteriaValue']['name'], array('controller' => 'criteria_values', 'action' => 'view', $criteriaValuesKitchen['CriteriaValue']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($criteriaValuesKitchen['Kitchen']['name'], array('controller' => 'kitchens', 'action' => 'view', $criteriaValuesKitchen['Kitchen']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $criteriaValuesKitchen['CriteriaValuesKitchen']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $criteriaValuesKitchen['CriteriaValuesKitchen']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $criteriaValuesKitchen['CriteriaValuesKitchen']['id']), null, __('Are you sure you want to delete # %s?', $criteriaValuesKitchen['CriteriaValuesKitchen']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Criteria Values Kitchen'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Criteria Values'), array('controller' => 'criteria_values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kitchens'), array('controller' => 'kitchens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitchen'), array('controller' => 'kitchens', 'action' => 'add')); ?> </li>
	</ul>
</div>
