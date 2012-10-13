<?php
echo $this->extend('/common/visitors');
$content_override = array('title'=>'Login','css'=>NULL,'js'=>NULL);
echo $this->element('override',array('content_override'=>$content_override));
?>
<div class="row-fluid">
	<div class="span8 offset2">
	<?php
		echo $this->Form->create('User',array('controller'=>'Users','action'=>'login'));
		echo $this->Form->input('User.name');
		echo $this->Form->input('User.password');
		echo $this->Form->end('login');

	?>
</div>
</div>