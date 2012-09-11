<div class="kitchensSubcriterias index">
	<h2><?php echo __('Kitchens Subcriterias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('subcriteria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('kitchen_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($kitchensSubcriterias as $kitchensSubcriteria): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($kitchensSubcriteria['Subcriteria']['name'], array('controller' => 'subcriterias', 'action' => 'view', $kitchensSubcriteria['Subcriteria']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($kitchensSubcriteria['Kitchen']['name'], array('controller' => 'kitchens', 'action' => 'view', $kitchensSubcriteria['Kitchen']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $kitchensSubcriteria['KitchensSubcriteria']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $kitchensSubcriteria['KitchensSubcriteria']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $kitchensSubcriteria['KitchensSubcriteria']['id']), null, __('Are you sure you want to delete # %s?', $kitchensSubcriteria['KitchensSubcriteria']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Kitchens Subcriteria'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Subcriterias'), array('controller' => 'subcriterias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcriteria'), array('controller' => 'subcriterias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kitchens'), array('controller' => 'kitchens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitchen'), array('controller' => 'kitchens', 'action' => 'add')); ?> </li>
	</ul>
</div>
