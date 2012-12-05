<?php
echo $this->extend('/Common/admins');
$override = array('title'=>'Admin HomePage','css'=>array('admins/common'),'js'=>array('reg_valid'));
echo $this->element('override',array('content_override'=>$override))
?>
<div class="row-fluid">
<div class="span2">
	<!--
	<h4><?php echo __('Actions'); ?></h4>
	<ul class="nav nav-tabs nav-stacked">
		<li></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
	-->
</div>
<div class="span8 row-fluid">
<?php echo $this->Form->create('User',array('onsubmit'=>'return verify()')); ?>
	<fieldset>
		<h4><?php echo __('Add Admin'); ?></h4>
	<?php
		echo $this->Form->input('name',array('required'=>true));
		echo $this->Form->input('password',array('required'=>true));
		echo $this->Form->input('',array('label'=>'Confirm Password','class'=>'password','id'=>'UserPasswordConfirm','required'=>true,'value'=>false));
		//echo $this->Form->input('group_id');
	?>
	</fieldset>
	<div class="span3 no-margin-left">
	<?php
	echo $this->Html->link(__('Back'), array('action' => 'index'),array('style'=>'inline','class'=>'btn btn-large'));
	echo $this->Form->button('Submit', array('type' => 'submit', 'class' => 'btn btn-large btn-primary offset1'));
	?>
	</div>
<?php echo $this->Form->end(); ?>
</div>
</div>
<?php $this->start('etc_script') ?>
<script type="text/javascript">
function verify(){
submit = true;
confirm_password = reg_compare($('#UserPassword'),$('#UserPasswordConfirm'));
if(confirm_password == false){
	submit = false;
}

if(submit){
	return true;
}else{
	return false;
}

}


</script>
<?php $this->end(); ?>