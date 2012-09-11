<div class="subcriterias form">
<?php echo $this->Form->create('Subcriteria'); ?>
	<fieldset>
		<legend><?php echo __('Add Subcriteria'); ?></legend>
	<?php
		echo $this->Form->input('subcriteria_id');
		echo $this->Form->input('name');
		echo $this->Form->input('Kitchen');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Subcriterias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Subcriterias'), array('controller' => 'subcriterias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcriteria'), array('controller' => 'subcriterias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kitchens'), array('controller' => 'kitchens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitchen'), array('controller' => 'kitchens', 'action' => 'add')); ?> </li>
	</ul>
</div>
