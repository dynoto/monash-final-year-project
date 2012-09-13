<div class="criteriaValuesKitchens form">
<?php echo $this->Form->create('CriteriaValuesKitchen'); ?>
	<fieldset>
		<legend><?php echo __('Edit Criteria Values Kitchen'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('criteria_value_id');
		echo $this->Form->input('kitchen_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CriteriaValuesKitchen.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CriteriaValuesKitchen.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Criteria Values Kitchens'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Criteria Values'), array('controller' => 'criteria_values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kitchens'), array('controller' => 'kitchens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitchen'), array('controller' => 'kitchens', 'action' => 'add')); ?> </li>
	</ul>
</div>
