<?php
echo $this->extend('/Common/admins');
$override = array('title'=>'Admin HomePage','css'=>array('admins/common'),'js'=>('reg_valid'));
echo $this->element('override',array('content_override'=>$override))
?>
<div class="row-fluid">
<div class="span2 row-fluid">
	<div class="offset1">
	<h4><?php echo __('Actions'); ?></h4>
	<ul class="nav nav-stacked nav-tabs">
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
	</div>
</div>
<div class="span8 row-fluid">
<?php echo $this->Form->create('User',array('onsubmit'=>'return verify()')); ?>
	<fieldset>
		<h4><?php echo __('Edit User'); ?></h4>
	<?php
		echo $this->Form->input('id',array('required'=>true));
		echo $this->Form->input('name',array('required'=>true));
		echo $this->Form->input('password',array('required'=>true,'value'=>false));
		echo $this->Form->input('',array('label'=>'Confirm Password','class'=>'password','id'=>'UserPasswordConfirm','required'=>true,'value'=>false));
		echo $this->Form->input('group_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit',array('class'=>'btn btn-primary btn-large'))); ?>
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