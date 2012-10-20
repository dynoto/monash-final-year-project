<?php
echo $this->extend('/Common/admins');
$content_override = array(  'title' => 'Edit Testimonial', 
	'css' => array('admins/common'),
	'js'=>NULL);
echo $this->element('override', array("content_override" => $content_override));

?>
<div class="row-fluid">
	<div class=" span2">
		<div class="offset1">
			<h4><?php echo __('Actions'); ?></h4>
			<ul class="nav nav-tabs nav-stacked">
				<li><?php echo $this->Html->link('Back',array('controller'=>'kitchens','action'=>'view',$kitchen_id)); ?></li>
				<li><?php echo $this->Form->postLink(__('Delete Testimonial'), array('action' => 'delete', $this->Form->value('Testimonial.id')), null, __('Are you sure you want to delete this testimonial?', $this->Form->value('Testimonial.id'))); ?></li>
			</ul>
		</div>
	</div>
	<div class=" span8">
		<?php echo $this->Form->create('Testimonial'); ?>
		<h4><?php echo __('Edit Testimonial'); ?></h4>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('kitchen_id',array('selected'=>$kitchen_id));
		echo $this->Form->input('description',array('class'=>'span8'));
		echo $this->Form->end(array('class'=>'btn btn-primary btn-large')); 
		?>
	</div>
</div>