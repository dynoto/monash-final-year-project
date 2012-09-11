<div class="subcriterias view">
<h2><?php  echo __('Subcriteria'); ?></h2>
	<dl>
		<dt><?php echo __('Subcriteria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subcriteria['Subcriteria']['name'], array('controller' => 'subcriterias', 'action' => 'view', $subcriteria['Subcriteria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subcriteria['Subcriteria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($subcriteria['Subcriteria']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subcriteria'), array('action' => 'edit', $subcriteria['Subcriteria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subcriteria'), array('action' => 'delete', $subcriteria['Subcriteria']['id']), null, __('Are you sure you want to delete # %s?', $subcriteria['Subcriteria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcriterias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcriteria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcriterias'), array('controller' => 'subcriterias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcriteria'), array('controller' => 'subcriterias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kitchens'), array('controller' => 'kitchens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitchen'), array('controller' => 'kitchens', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Subcriterias'); ?></h3>
	<?php if (!empty($subcriteria['Subcriteria'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Subcriteria Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subcriteria['Subcriteria'] as $subcriteria): ?>
		<tr>
			<td><?php echo $subcriteria['subcriteria_id']; ?></td>
			<td><?php echo $subcriteria['id']; ?></td>
			<td><?php echo $subcriteria['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subcriterias', 'action' => 'view', $subcriteria['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subcriterias', 'action' => 'edit', $subcriteria['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subcriterias', 'action' => 'delete', $subcriteria['id']), null, __('Are you sure you want to delete # %s?', $subcriteria['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subcriteria'), array('controller' => 'subcriterias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Kitchens'); ?></h3>
	<?php if (!empty($subcriteria['Kitchen'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subcriteria['Kitchen'] as $kitchen): ?>
		<tr>
			<td><?php echo $kitchen['id']; ?></td>
			<td><?php echo $kitchen['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'kitchens', 'action' => 'view', $kitchen['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'kitchens', 'action' => 'edit', $kitchen['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'kitchens', 'action' => 'delete', $kitchen['id']), null, __('Are you sure you want to delete # %s?', $kitchen['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Kitchen'), array('controller' => 'kitchens', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
