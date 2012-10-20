<div id="login_bar" class="offset3 span3">
	<div id="login_bar_content" style="display:none row-fluid">
		<?php if (!$authUser){ ?>
		<p><?php
			//echo $this->Html->link('Register',array('controller'=>'customers','action'=>'add'));
			echo $this->Html->link('Log In',array('controller'=>'users','action'=>'login'));
		?></p>
		<?php 
		}else{ 
			?>
			<p>Welcome <b><i><?php echo $authUser['name']?></i></b><br>
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