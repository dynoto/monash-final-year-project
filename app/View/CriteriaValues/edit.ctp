<div class="criteriaValues form">
<?php echo $this->Form->create('CriteriaValue'); ?>
	<fieldset>
		<legend><?php echo __('Edit Criteria Value'); ?></legend>
	<?php
		echo $this->Form->input('criteria_id');
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Kitchen');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CriteriaValue.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CriteriaValue.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Criteria Values'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Criterias'), array('controller' => 'criterias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criteria'), array('controller' => 'criterias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kitchens'), array('controller' => 'kitchens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitchen'), array('controller' => 'kitchens', 'action' => 'add')); ?> </li>
	</ul>
</div>
