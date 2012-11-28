<?php
echo $this->extend('/Common/visitors');
$content_override = array('title'=>'SK Kitchens Index','css'=>'visitors/index','js'=>'visitors/index');
echo $this->element('override',array("content_override"=>$content_override));
?>

<!--START OF BODY CONTENT -->
<div class="row-fluid margin-center main_content">
        <div class="carousel slide carousel-fade row-fluid " id="index_carousel">
            <div class="span1">
                <a class="carousel-control left" href="#index_carousel" data-slide="prev">&lsaquo;</a>
            </div>
            <div class="carousel-inner span10">                
                <?php 
                $count  = 0;
                $class  = 'active item';
                foreach($image_ids as $id){
                ?>
                <div class="image_wrapper <?php echo $class; ?>">
                    <?php
                    echo $this->Html->image('kitchen/'.$image_list[$id],array('class'=>$class,'alt'=>'Carousel Image'));
                    if($count == 0){ $class = 'item'; }
                    ?>
                </div>
                <?php
                }
                ?>  
            </div>
            <div class="span1">
                <a class="carousel-control right" href="#index_carousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
</div>
<!--END OF BODY CONTENT-->