<div class="enquiries form">
<?php echo $this->Form->create('Enquiry'); ?>
	<fieldset>
		<legend><?php echo __('Add Enquiry'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('telephone');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Enquiries'), array('action' => 'index')); ?></li>
	</ul>
</div>
