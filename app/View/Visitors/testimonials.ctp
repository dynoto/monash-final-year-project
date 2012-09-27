<?php
echo $this->extend('/Common/users');
$content_override = array('title' => 'SK Kitchens Gallery', 'css' => array('dropdown-checklist', 'users/testimonial'), 'js' => array('jquery-ui', 'dropdown-checklist', 'users/filter'));
echo $this->element('override', array("content_override" => $content_override));
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid">
    <?php echo $this->element('side_bar',array('user_action'=>'testimonials')); ?>
    <div class="row-fluid span8">
        <?php foreach ($info as $key_a => $val_a) { ?>
            <div class="row-fluid">
                <div class="span4 image_frame">
                    <?php 
                    $kitchen_name = $val_a['Kitchen']['name'];
                    $kitchen_code = str_replace(' ', '_', $kitchen_name);
                    ?>
                    <a href="#<?php echo $kitchen_code; ?>" role="button" data-toggle="modal" class="modal_toggle">
                        <?php echo $this->Html->image('kitchens/'.$val_a['Image'][0]['name']); ?>
                    </a>
                </div>
                <div class="span7 testimonial_frame">
                    <h4><?php echo $kitchen_name; ?></h4>
                    <p><?php echo $val_a['Testimonial'][0]['description'] ?></p>
                </div>
            </div>
            <?php echo $this->element('gallery_modal',array('item'=>$val_a));
            }
        echo $this->element('pagination'); ?>
    </div>
</div>