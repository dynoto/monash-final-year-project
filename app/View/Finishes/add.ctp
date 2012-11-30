<div class="finishes form">
<?php echo $this->Form->create('Finish'); ?>
	<fieldset>
		<legend><?php echo __('Add Finish'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Product');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Finishes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Finish Types'), array('controller' => 'finish_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Finish Type'), array('controller' => 'finish_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
