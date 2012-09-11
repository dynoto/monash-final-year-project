<div class="discounts form">
<?php echo $this->Form->create('Discount'); ?>
	<fieldset>
		<legend><?php echo __('Add Discount'); ?></legend>
	<?php
		echo $this->Form->input('discount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Discounts'), array('action' => 'index')); ?></li>
	</ul>
</div>
