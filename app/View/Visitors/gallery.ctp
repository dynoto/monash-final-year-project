<?php
    echo $this->extend('/Common/visitors');
    $content_override = array('title'=>'SK Kitchens Gallery','css'=>array('dropdown-checklist','visitors/gallery'),'js'=>array('jquery-ui','dropdown-checklist','visitors/filter'));
    echo $this->element('override',array("content_override"=>$content_override));
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid">
<?php echo $this->element('side_bar',array('visitor_action'=>'gallery','table'=>'Kitchen')); ?>
<div class="row-fluid span7 main_content no-padding">
    <?php
        $count = 0;
        foreach ($info as $key_a => $val_a) {
            if($count==0 or $count==2){ ?> <div class='row-fluid gallery_row'> <?php } ?>
            <?php $kitchen_name = $val_a['Kitchen']['name']; ?>
            <div class="span6 image_frame">
                    <?php $item_name = str_replace(' ', '_', $kitchen_name) ?>
                    <a href="#<?php echo $item_name; ?>" role="button" data-toggle="modal" class="modal_toggle">
                        <?php
                        if(isset($val_a['Image'][0])){
                            echo $this->Html->image('kitchen/'.$val_a['Image'][0]['name'],array('alt'=>'kitchen images','class'=>'img_thumbnail'));
                        } else {
                            echo $this->Html->image('common/image_error.jpg',array('alt'=>'kitchen images','class'=>'thumbnail'));
                        } 
                        ?>
                    </a>
                    <p><?php echo $kitchen_name;?></p>
            </div>

            <!-- modal starts here -->
            <?php 
            echo $this->element('gallery_modal',array('item'=>$val_a,'type'=>'Kitchen')); 
            ?>
            <!-- modal ends here -->
            
            <?php if($count==1 or $count==3){ ?> </div> <?php } ?>
            <?php $count+=1; }?>
        <?php echo $this->element('pagination',array('pagination'=>$paginate_data)); ?>
</div>
