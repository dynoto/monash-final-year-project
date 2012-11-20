<div class="criteriaValuesProducts form">
<?php echo $this->Form->create('CriteriaValuesProduct'); ?>
	<fieldset>
		<legend><?php echo __('Add Criteria Values Product'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('criteria_value_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Criteria Values Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Criteria Values'), array('controller' => 'criteria_values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products Order Items'), array('controller' => 'products_order_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products Order Item'), array('controller' => 'products_order_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
