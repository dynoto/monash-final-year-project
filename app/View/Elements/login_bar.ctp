<div class="pull-right">
		<!-- <div style="display:none" class="row-fluid" id="login_bar_content"> -->
		<div class="row-fluid" id="login_bar_content">
		<?php if (!$authUser){ ?>
		<p class="no-padding-horizontal"><?php
			echo $this->Html->link('Register',array('controller'=>'customers','action'=>'add'));
			echo $this->Html->link('Log In',array('controller'=>'users','action'=>'login'));
		?></p>
		<?php 
		}else{ 
			?>
			<p class="no-padding-horizontal">Welcome <b><i><?php echo $authUser['name']?></i></b><?php echo ' ,'?>
			<?php
			$groupName = $authUser['Group']['name'];
			if($groupName == 'Administrators' && isset($visitor)){
				echo $this->Html->link('Admin Site',array('controller'=>'administrators'));
			}elseif($groupName == 'Administrators'){
				echo $this->Html->link('Visitor Site',array('controller'=>'visitors'));
			}
			echo $this->Html->link('View Quote',array('controller'=>'visitors','action'=>'cart_list'));
			echo $this->Html->link('Log Out',array('controller'=>'users','action'=>'logout'));?>
			</p><?php } ?>
		</div>
<!-- 		<div id="login_bar_toggle" class="row-fluid">
		<a id="login_bar_toggle_button" class="disableprompt" onclick="toggle_login()">
			<?php echo $this->html->image('common/arrow_down.png') ?>
		</a>
		</div> -->
</div>