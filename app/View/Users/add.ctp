<?php
echo $this->extend('/Common/admins');
$override = array('title'=>'Admin HomePage','css'=>array('admins/common'),'js'=>null);
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
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<h4><?php echo __('Add User'); ?></h4>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('password');
		echo $this->Form->input('group_id');
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
</div.