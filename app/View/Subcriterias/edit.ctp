<div class="subcriterias form">
<?php echo $this->Form->create('Subcriteria'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subcriteria'); ?></legend>
	<?php
		echo $this->Form->input('subcriteria_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subcriteria.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Subcriteria.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subcriterias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Subcriterias'), array('controller' => 'subcriterias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcriteria'), array('controller' => 'subcriterias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kitchens'), array('controller' => 'kitchens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitchen'), array('controller' => 'kitchens', 'action' => 'add')); ?> </li>
	</ul>
</div>
