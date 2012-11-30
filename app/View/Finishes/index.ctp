<div class="finishes index">
	<h2><?php echo __('Finishes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($finishes as $finish): ?>
	<tr>
		<td><?php echo h($finish['Finish']['id']); ?>&nbsp;</td>
		<td><?php echo h($finish['Finish']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $finish['Finish']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $finish['Finish']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $finish['Finish']['id']), null, __('Are you sure you want to delete # %s?', $finish['Finish']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Finish'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Finish Types'), array('controller' => 'finish_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Finish Type'), array('controller' => 'finish_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
