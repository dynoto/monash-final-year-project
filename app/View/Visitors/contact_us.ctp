<?php
    echo $this->extend('/Common/visitors');
    $content_override = array('title'=>'About Us','css'=>array('visitors/contact_us'),'js'=>array(Null));
    echo $this->element('override',array("content_override"=>$content_override));
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid">
    <div class="span8 offset2">
	<?php //echo $this->Html->image('common/under_construction.jpg',array('id'=>'under_construction')); ?>
	<!-- EMILY START WRITING YOUR CODE BELOW-->
	<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/?ie=UTF8&amp;ll=-37.809241,144.973354&amp;spn=0.072558,0.154324&amp;t=m&amp;z=13&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/?ie=UTF8&amp;ll=-37.809241,144.973354&amp;spn=0.072558,0.154324&amp;t=m&amp;z=13&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>





	<!-- EMILY STOP WRITING CODE FROM HERE-->
    </div>
</div>