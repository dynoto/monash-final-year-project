<div class="finishes view">
<h2><?php  echo __('Finish'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($finish['Finish']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($finish['Finish']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Finish'), array('action' => 'edit', $finish['Finish']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Finish'), array('action' => 'delete', $finish['Finish']['id']), null, __('Are you sure you want to delete # %s?', $finish['Finish']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Finishes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Finish'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Finish Types'), array('controller' => 'finish_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Finish Type'), array('controller' => 'finish_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Finish Types'); ?></h3>
	<?php if (!empty($finish['FinishType'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Finish Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($finish['FinishType'] as $finishType): ?>
		<tr>
			<td><?php echo $finishType['id']; ?></td>
			<td><?php echo $finishType['name']; ?></td>
			<td><?php echo $finishType['finish_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'finish_types', 'action' => 'view', $finishType['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'finish_types', 'action' => 'edit', $finishType['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'finish_types', 'action' => 'delete', $finishType['id']), null, __('Are you sure you want to delete # %s?', $finishType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Finish Type'), array('controller' => 'finish_types', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($finish['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Discount'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($finish['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['description']; ?></td>
			<td><?php echo $product['price']; ?></td>
			<td><?php echo $product['discount']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), null, __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
