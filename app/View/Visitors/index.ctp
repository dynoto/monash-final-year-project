<?php
echo $this->extend('/Common/visitors');
$content_override = array('title'=>'SK Kitchens Index','css'=>'visitors/index','js'=>NULL);
echo $this->element('override',array("content_override"=>$content_override));
?>

<!--START OF BODY CONTENT -->
<div id="background-color"></div>
<div class="row-fluid hspn10">
    <div class="span8 offset2 hspn">
        <div class="carousel slide carousel-fade row-fluid " id="index_carousel">
            <div class="span1">
                <a class="carousel-control left" href="#index_carousel" data-slide="prev">&lsaquo;</a>
            </div>
            <div class="carousel-inner span10">                
                <?php 
                $images = array('cover1.jpg','cover2.jpg','cover3.jpg','cover4.jpg');
                $count  = 0;
                $class  = 'active item';
                foreach($images as $image){
                    if($count != 0){
                        $class = 'item';
                    }
                    echo $this->Html->image('index/'.$image,array('class'=>$class,'alt'=>'Carousel Image'));
                    $count += 1;
                }
                ?>  
            </div>
            <div class="span1">
                <a class="carousel-control right" href="#index_carousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
    </div>
</div>
<!--END OF BODY CONTENT-->