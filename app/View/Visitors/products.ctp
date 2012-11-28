<?php
    echo $this->extend('/Common/visitors');
    $content_override = array('title'=>'SK Kitchens Product','css'=>array('dropdown-checklist','visitors/gallery'),'js'=>array('jquery-ui','dropdown-checklist','visitors/filter'));
    echo $this->element('override',array("content_override"=>$content_override));
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid">
<?php echo $this->element('side_bar',array('visitor_action'=>'products')); ?>
<div class="row-fluid span7 main_content no-padding">
    <?php
        $count = 0;
        foreach ($info as $key_a => $val_a) {
            if($count==0 or $count==2){ ?> <div class='row-fluid gallery_row'> <?php } ?>
            <?php $product_name = $val_a['Product']['name']; ?>
            <div class="span6 image_frame">
                    <?php $item_name = str_replace(' ', '_', $product_name) ?>
                    <div class="imgimgimg">
                    <a href="#<?php echo $item_name; ?>" role="button" data-toggle="modal" class="modal_toggle">
                        <?php
                        if(isset($val_a['Image'][0])){
                            echo $this->Html->image('product/'.$val_a['Image'][0]['name'],array('alt'=>'product images','class'=>'img_thumbnail'));
                        } else {
                            echo $this->Html->image('common/image_error.jpg',array('alt'=>'product images','class'=>'thumbnail'));
                        } 
                        ?>
                    </a>
                    </div>
                    <p><?php echo $product_name;?></p>
            </div>

            <!-- modal starts here -->
            <?php 
            echo $this->element('gallery_modal',array('item'=>$val_a,'type'=>'Product')); 
            ?>
            <!-- modal ends here -->
            
            <?php if($count==1 or $count==3){ ?> </div> <?php } ?>
            <?php $count+=1; }?>
        <?php echo $this->element('pagination',array('pagination'=>$paginate_data)); ?>
</div>
