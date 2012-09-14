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
		<li><?php echo $this->Html->link(__('List Criteria Values'), array('controller' => 'criteria_values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Criteria Values'); ?></h3>
	<?php if (!empty($criteria['CriteriaValue'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Criteria Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($criteria['CriteriaValue'] as $criteriaValue): ?>
		<tr>
			<td><?php echo $criteriaValue['criteria_id']; ?></td>
			<td><?php echo $criteriaValue['id']; ?></td>
			<td><?php echo $criteriaValue['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'criteria_values', 'action' => 'view', $criteriaValue['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'criteria_values', 'action' => 'edit', $criteriaValue['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'criteria_values', 'action' => 'delete', $criteriaValue['id']), null, __('Are you sure you want to delete # %s?', $criteriaValue['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
