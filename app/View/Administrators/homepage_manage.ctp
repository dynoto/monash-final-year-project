<?php
echo $this->extend('/Common/admins');
$content_override = array('title'=>'Home Page Management','js'=>array('admins/homepage_manage'),'css'=>array('admins/homepage_manage'));
?>