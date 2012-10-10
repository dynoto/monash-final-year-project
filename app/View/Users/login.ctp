<?php
echo $this->Form->create('User',array('action'=>'login'));
echo $this->Form->inputs(array('name','password'));
echo $this->Form->end('login');


?>