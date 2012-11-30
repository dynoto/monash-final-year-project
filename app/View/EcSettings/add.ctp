<div class="ecSettings form">
<?php echo $this->Form->create('EcSetting'); ?>
	<fieldset>
		<legend><?php echo __('Add Ec Setting'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ec Settings'), array('action' => 'index')); ?></li>
	</ul>
</div>
