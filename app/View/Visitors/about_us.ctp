<?php
    echo $this->extend('/Common/visitors');
    $content_override = array('title'=>'About Us','css'=>array('visitors/about_us'),'js'=>array(Null));
    echo $this->element('override',array("content_override"=>$content_override));
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid">
    <div class="span8 offset2">
	<?php //echo $this->Html->image('common/under_construction.jpg',array('id'=>'under_construction')); ?>
        <p>
           The Focal / Engineering Cabinets was established by  Liam Gonsalvez , in response to the interest to make someone’s dream kitchen in to reality. Engineered Cabinets / Focal is a business that focuses on building kitchens as a central area of functionality and design. 
           This method of production will guarantee that your components are manufactured to the highest standard of quality, in a reasonable amount of time, at a competitive price to suit your budget.
           You can be confident that your job will be completed, without having to put up with the labour content, as well as the dust factor involved.
           We pride ourselves on our vast experience, industry knowledge, quality workmanship and high level of customer service to ensure that your experience with Focal / Engineering Cabinets   is a memorable one.
        </p>

	<iframe width="420" height="315" src="https://www.youtube.com/embed/NK8zYHyKWb4" frameborder="0" allowfullscreen></iframe>

    </div>
</div>