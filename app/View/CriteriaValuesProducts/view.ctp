<div class="criteriaValuesProducts view">
<h2><?php  echo __('Criteria Values Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($criteriaValuesProduct['CriteriaValuesProduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($criteriaValuesProduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $criteriaValuesProduct['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Criteria Value'); ?></dt>
		<dd>
			<?php echo $this->Html->link($criteriaValuesProduct['CriteriaValue']['name'], array('controller' => 'criteria_values', 'action' => 'view', $criteriaValuesProduct['CriteriaValue']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Criteria Values Product'), array('action' => 'edit', $criteriaValuesProduct['CriteriaValuesProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Criteria Values Product'), array('action' => 'delete', $criteriaValuesProduct['CriteriaValuesProduct']['id']), null, __('Are you sure you want to delete # %s?', $criteriaValuesProduct['CriteriaValuesProduct']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Criteria Values Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criteria Values Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Criteria Values'), array('controller' => 'criteria_values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products Order Items'), array('controller' => 'products_order_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products Order Item'), array('controller' => 'products_order_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Products Order Items'); ?></h3>
	<?php if (!empty($criteriaValuesProduct['ProductsOrderItem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Order Item Id'); ?></th>
		<th><?php echo __('Criteria Values Product Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($criteriaValuesProduct['ProductsOrderItem'] as $productsOrderItem): ?>
		<tr>
			<td><?php echo $productsOrderItem['id']; ?></td>
			<td><?php echo $productsOrderItem['order_item_id']; ?></td>
			<td><?php echo $productsOrderItem['criteria_values_product_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products_order_items', 'action' => 'view', $productsOrderItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products_order_items', 'action' => 'edit', $productsOrderItem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products_order_items', 'action' => 'delete', $productsOrderItem['id']), null, __('Are you sure you want to delete # %s?', $productsOrderItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Products Order Item'), array('controller' => 'products_order_items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
