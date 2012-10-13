<div class="login_bar">
<?php
if (!$authUser){
	echo $this->Html->link('Log In',array('controller'=>'users','action'=>'login'));
}else{ 
?>
	<p>Welcome : <?php echo $authUser['name']?></p>			
<?php
	$groupName = $authUser['Group']['name'];
	if($groupName == 'Admins' && isset($visitor)){
		echo $this->Html->link('Admin Site',array('controller'=>'administrators'));
	}elseif($groupName == 'Admins'){
		echo $this->Html->link('Visitor Site',array('controller'=>'visitors'));
	}
	echo $this->Html->link('Log Out',array('controller'=>'users','action'=>'logout'));
}
?>
</div>