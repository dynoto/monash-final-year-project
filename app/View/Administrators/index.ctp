<?php
echo $this->extend('/Common/admins');
echo $this->Html->link(array('controller'=>'administrators','action'=>'homepage_manage'));
echo $this->element('under_construction');

?>