<?php
echo $this->extend('/Common/visitors');
$content_override = array('title'=>'Forget Password');
echo $this->element('override',array('content_override'=>$content_override));
?>
<div class="row-fluid main_content margin-center">
	<div class="span10 offset1">
	<?php
		echo $this->Form->create('Customer');
		echo $this->Form->input('Customer.email',array('required'=>true,'type'=>'email'));
		echo $this->Form->end(array('label'=>'Retrieve Password' ,'class'=>'btn btn-primary btn-large'));
	?>
</div>
</div>