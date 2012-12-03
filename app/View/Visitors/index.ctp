<?php
echo $this->extend('/Common/visitors');
$content_override = array('title'=>'SK Kitchens Index','css'=>'visitors/index','js'=>array('visitors/jquery.cycle.lite','visitors/index'));
echo $this->element('override',array("content_override"=>$content_override));
?>
<!--START OF BODY CONTENT -->
<div class="row-fluid margin-center main_content">
    <div class="crsl margin-center">
    <?php 
    foreach($image_ids as $id):
        echo $this->Html->image('kitchen/'.$image_list[$id],array('alt'=>'Carousel Image'));
    endforeach ?>
    </div>
</div>
<!--END OF BODY CONTENT-->