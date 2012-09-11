<div class="kitchens form">
<?php echo $this->Form->create('Kitchen'); ?>
	<fieldset>
		<legend><?php echo __('Add Kitchen'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Subcriteria');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Kitchens'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Testimonials'), array('controller' => 'testimonials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Testimonial'), array('controller' => 'testimonials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcriterias'), array('controller' => 'subcriterias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcriteria'), array('controller' => 'subcriterias', 'action' => 'add')); ?> </li>
	</ul>
</div>
