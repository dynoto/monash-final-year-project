<?php
echo $this->extend('/common/admins');
$content_override = array('title' => '', 'css' => array('admins/common'), 'js' => array(null));
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
	<div class="span2">
		<div class="offset1">
			<h4><?php echo __('Actions'); ?></h4>
			<ul class="nav nav-tabs nav-stacked">
				<li><?php echo $this->Html->link('Back',array('controller'=>'kitchens','action'=>'view',$kitchen_id)); ?></li>	
			</ul>
		</div>
	</div>
	<div class="span8">
		<?php echo $this->Form->create('Testimonial'); ?>
			<h4><?php echo __('Add Testimonial'); ?></h4>
			<?php
			echo $this->Form->input('description');
			echo $this->Form->input('kitchen_id');
			?>
		<?php echo $this->Form->end(array('class'=>'btn btn-primary btn-large')); ?>
	</div>
</div>