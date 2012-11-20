<div class="criteriaValuesProducts index">
	<h2><?php echo __('Criteria Values Products'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('criteria_value_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($criteriaValuesProducts as $criteriaValuesProduct): ?>
	<tr>
		<td><?php echo h($criteriaValuesProduct['CriteriaValuesProduct']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($criteriaValuesProduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $criteriaValuesProduct['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($criteriaValuesProduct['CriteriaValue']['name'], array('controller' => 'criteria_values', 'action' => 'view', $criteriaValuesProduct['CriteriaValue']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $criteriaValuesProduct['CriteriaValuesProduct']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $criteriaValuesProduct['CriteriaValuesProduct']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $criteriaValuesProduct['CriteriaValuesProduct']['id']), null, __('Are you sure you want to delete # %s?', $criteriaValuesProduct['CriteriaValuesProduct']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Criteria Values Product'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Criteria Values'), array('controller' => 'criteria_values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products Order Items'), array('controller' => 'products_order_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products Order Item'), array('controller' => 'products_order_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
