<?php
echo $this->extend('/Common/admins');
$override = array('title'=>'Admin HomePage','css'=>array('admins/common'));
echo $this->element('override',array('content_override'=>$override));
pr($this->Session->read());
?>
<div class="row-fluid">
<div class="span2">
	<div class="offset1">
				<h4>Actions</h4>
		<ul class="nav nav-tabs nav-stacked">
		<li><?php echo $this->Html->link('Manage Homepage Carousel',array('controller'=>'homepageimages','action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Manage Users',array('controller'=>'users')); ?></li>
	</ul>
	</div>
</div>
<div class="span9">
</div>
</div>