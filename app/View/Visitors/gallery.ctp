<?php
    echo $this->extend('/Common/users');
    $content_override = array('title'=>'SK Kitchens Gallery','css'=>array('dropdown-checklist','users/gallery'),'js'=>array('jquery-ui','dropdown-checklist','users/filter'));
    echo $this->element('override',array("content_override"=>$content_override));
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid">
<?php echo $this->element('side_bar',array('user_action'=>'gallery')); ?>
<div class="row-fluid span7">
<div class="row-fluid span12">
    <?php
        $count = 0;
        foreach ($info as $key_a => $val_a) {
            if($count==0 or $count==2){ ?> <div class='row-fluid' id='gallery_row'> <?php } ?>
            <?php $kitchen_name = $val_a['Kitchen']['name']; ?>
            <div class="span6 image_frame">
                    <?php $item_name = str_replace(' ', '_', $kitchen_name) ?>
                    <a href="#<?php echo $item_name; ?>" role="button" data-toggle="modal" class="modal_toggle">
                        <?php echo $this->Html->image('kitchens/'.$val_a['Image'][0]['name'],array('alt'=>'kitchen images')) ?>
                    </a>
                    <p><?php echo $kitchen_name;?></p>
            </div>

            <!-- modal starts here -->
            <?php echo $this->element('gallery_modal',array('item'=>$val_a)); ?>
            <!-- modal ends here -->
            
            <?php if($count==1 or $count==3){ ?> </div> <?php } ?>
            <?php $count+=1; }?>
</div>
<?php echo $this->element('pagination'); ?>
</div>
