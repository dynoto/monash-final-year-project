<div class="criterias form">
<?php echo $this->Form->create('Criteria'); ?>
	<fieldset>
		<legend><?php echo __('Add Criteria'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Criterias'), array('action' => 'index')); ?></li>
	</ul>
</div>
