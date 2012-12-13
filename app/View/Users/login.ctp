<?php
echo $this->extend('/Common/visitors');
$content_override = array('title'=>'Login');
echo $this->element('override',array('content_override'=>$content_override));
?>
<div class="row-fluid main_content margin-center">
	<div class="span10 offset1">
	<?php
		echo $this->Form->create('User',array('controller'=>'Users','action'=>'login'));
		echo $this->Form->input('User.name',array('required'=>true));
		echo $this->Form->input('User.password',array('required'=>true));
		echo $this->Html->link('Forget Password?',array('controller'=>'visitors','action'=>'forget'));
		echo $this->Form->end(array('label'=>'Log In' ,'class'=>'btn btn-primary btn-large'));
	?>
</div>
</div>