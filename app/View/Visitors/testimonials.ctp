<?php
echo $this->extend('/Common/visitors');
$content_override = array('title' => 'SK Kitchens Gallery', 'css' => array('dropdown-checklist', 'visitors/testimonial'), 'js' => array('jquery-ui', 'dropdown-checklist', 'visitors/filter'));
echo $this->element('override', array("content_override" => $content_override));
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid">
    <?php echo $this->element('side_bar',array('visitor_action'=>'testimonials')); ?>
    <div class="row-fluid span7 main_content">
        <?php foreach ($info as $key_a => $val_a) { ?>
            <div class="row-fluid testimonial_frame ">
                <div class="span4 image_frame">
                    <?php 
                    $kitchen_name = $val_a['Kitchen']['name'];
                    $kitchen_code = str_replace(' ', '_', $kitchen_name);
                    ?>
                    <a href="#<?php echo $kitchen_code; ?>" role="button" data-toggle="modal" class="modal_toggle">
                        <?php
                        if(isset($val_a['Image'][0]['name'])){
                        echo $this->Html->image('kitchen/'.$val_a['Image'][0]['name'],array('class'=>'img_thumbnail')); 
                        } else {
                            echo $this->Html->image('common/image_error.jpg',array('class'=>''));
                        }
                        ?>
                    </a>
                </div>
                <div class="span8 ">
                    <h4><?php echo $kitchen_name; ?></h4>
                    <p class="testimonial_description hspn9"><?php echo $val_a['Testimonial'][0]['description'] ?></p>
                </div>
            </div>
            <?php echo $this->element('gallery_modal',array('item'=>$val_a,'type'=>'Kitchen'));
            }
        echo $this->element('pagination'); ?>
    </div>
</div>