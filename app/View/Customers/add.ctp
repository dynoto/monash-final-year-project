<?php 
echo $this->extend('/Common/visitors');
$content_override = array('title'=>'Register','js'=>array(null),'css'=>array('visitors/common'),'js'=>array('visitors/register'));
echo $this->element('override',array('content_override'=>$content_override));

?>
<div class="row-fluid">
<div class="row-fluid span2">
	<div class="offset1">
	<h4><?php echo __('Actions'); ?></h4>
	<ul class="nav nav-tabs nav-stacked">
		<li><?php echo $this->Html->link(__('Back'), array('controller' => 'visitors')); ?></li>
	</ul>
</div>
</div>

<div class="row-fluid span8">
<?php echo $this->Form->create('Customer'); ?>
		<h4><?php echo __('Register Account'); ?></h4>
		<p class="alert alert-error"><b>Note : </b> all registered account have to be approved by Administrator before login is allowed</p>
	<?php
		echo $this->Form->input('User.name',array('label'=>'Username','required'=>true));
		echo $this->Form->input('User.password',array('required'=>true));
		echo $this->Form->input('name',array('label'=>'Full Name','required'=>true));
		echo $this->Form->input('email');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
	?>
<?php echo $this->Form->end(array('class'=>'btn btn-primary btn-large')); ?>
</div>
</div>