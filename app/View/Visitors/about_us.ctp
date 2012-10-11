<?php
    echo $this->extend('/Common/visitors');
    $content_override = array('title'=>'About Us','css'=>array('visitors/about_us'),'js'=>array(Null));
    echo $this->element('override',array("content_override"=>$content_override));
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid">
    <div class="span8 offset2">
	<?php //echo $this->Html->image('common/under_construction.jpg',array('id'=>'under_construction')); ?>
	<!-- ADITHYA START WRITING YOUR CODE BELOW-->
	<iframe width="420" height="315" src="https://www.youtube.com/embed/NK8zYHyKWb4" frameborder="0" allowfullscreen></iframe>





	<!-- ADITHYA STOP WRITING CODE FROM HERE-->
    </div>
</div>