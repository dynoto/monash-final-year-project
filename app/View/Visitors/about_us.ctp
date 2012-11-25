<?php
echo $this->extend('/Common/visitors');
$content_override = array('title'=>'About Us','css'=>array('visitors/about_us'),'js'=>array(Null));
echo $this->element('override',array("content_override"=>$content_override));
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid main_content">
  <div class="span10 offset1">
    <p class="focal_description well">
     The Focal / Engineering Cabinets was established by  Liam Gonsalvez , in response to the interest to make someone’s dream kitchen in to reality. Engineered Cabinets / Focal is a business that focuses on building kitchens as a central area of functionality and design. 
     This method of production will guarantee that your components are manufactured to the highest standard of quality, in a reasonable amount of time, at a competitive price to suit your budget.
     You can be confident that your job will be completed, without having to put up with the labour content, as well as the dust factor involved.
     We pride ourselves on our vast experience, industry knowledge, quality workmanship and high level of customer service to ensure that your experience with Focal / Engineering Cabinets   is a memorable one.
   </p>
   <div class="youtube_video">
    <iframe width="100%" height="315" src="https://www.youtube.com/embed/NK8zYHyKWb4" frameborder="0" allowfullscreen></iframe>
   </div>

 </div>
</div>