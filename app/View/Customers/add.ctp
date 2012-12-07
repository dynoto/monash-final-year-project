<?php 
echo $this->extend('/Common/visitors');
$content_override = array('title'=>'Register','js'=>array(null),'css'=>array('visitors/common'),'js'=>array('visitors/register'));
echo $this->element('override',array('content_override'=>$content_override));
$session 
?>
<div class="row-fluid">
<div class="row-fluid span2">
	<div class="offset1">
	<h4><?php echo __('Actions'); ?></h4>
	<ul class="nav nav-tabs nav-stacked">
		<?php $group_id = $this->Session->read('Auth.User.Group.id');
		if($group_id == 1): ?>
		<li><?php echo $this->Html->link(__('Back'), array('action'=>'index')); ?></li>
		<?php else: ?>
		<li><?php echo $this->Html->link(__('Back'), array('controller' => 'visitors')); ?></li>
		<?php endif; ?>
	</ul>
</div>
</div>

<div class="row-fluid span8">
<?php echo $this->Form->create('Customer',array('onSubmit'=>'return validate_register()')); ?>
		<h4><?php echo __('Register Account'); ?></h4>
		<p class="alert alert-error"><b>Note : </b> all registered account have to be approved by Administrator before login is allowed</p>
	<?php
		echo $this->Form->input('User.name',array('label'=>'Username','required'=>true,'id'=>'username'));
		echo $this->Form->input('User.password',array('required'=>true,'id'=>'password'));
		echo $this->Form->input('',array('label'=>'Confirm Password','required'=>true,'id'=>'confirm_password','type'=>'password'));
		echo $this->Form->input('name',array('label'=>'Full Name','required'=>true,'id'=>'name'));
		echo $this->Form->input('email',array('id'=>'email','required'=>true));
		echo $this->Form->input('phone',array('id'=>'phone'));
		echo $this->Form->input('address',array('id'=>'address','required'=>true));
	?>
<?php echo $this->Form->end(array('class'=>'btn btn-primary btn-large')); ?>
</div>
</div>