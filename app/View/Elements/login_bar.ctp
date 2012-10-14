<div id="login_bar" class="offset1 span5">
	<div id="login_bar_content" style="display:none">
		<?php
		if (!$authUser){
			echo $this->Html->link('Log In',array('controller'=>'users','action'=>'login'));
		}else{ 
			?>
			<p style="white-space:nowrap;">Welcome <?php echo $authUser['name']?><br>
			<?php
			$groupName = $authUser['Group']['name'];
			if($groupName == 'Administrators' && isset($visitor)){
				echo $this->Html->link('Admin Site',array('controller'=>'administrators'));
			}elseif($groupName == 'Administrators'){
				echo $this->Html->link('Visitor Site',array('controller'=>'visitors'));
			}
			echo $this->Html->link('Log Out',array('controller'=>'users','action'=>'logout'));} 
			?>
			</p>
	</div>
	<div id="login_bar_toggle">
		<a id="login_bar_toggle_button" onclick="toggle_login()">
			<?php echo $this->html->image('common/arrow_down.png') ?>
		</a>
	</div>
</div>