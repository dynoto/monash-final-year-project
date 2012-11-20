<?php
echo $this->extend('/Common/admins');
$override = array('title'=>'Admin HomePage','css'=>array('admins/common'),'js'=>null);
echo $this->element('override',array('content_override'=>$override))
?>
<div class="row-fluid">
<div class="span2">
	<div class="offset1">
		<ul class="nav nav-tabs nav-stacked">
		<li><?php echo $this->Html->link('Manage Homepage Carousel',array('controller'=>'administrators','action'=>'homepage_manage')); ?></li>
		<li><?php echo $this->Html->link('Manage Users',array('controller'=>'users')); ?></li>
	</ul>
	</div>
</div>
<div class="span9">
	<?php echo $this->element('under_construction'); ?>
</div>
</div>