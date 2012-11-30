<?php
    echo $this->extend('/Common/visitors');
    $content_override = array('title'=>'SK Kitchens Product','css'=>array('dropdown-checklist','visitors/testimonial','visitors/product'),'js'=>array('jquery-ui','dropdown-checklist','visitors/filter','visitors/cart_add'));
    echo $this->element('override',array("content_override"=>$content_override));
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid">
<?php echo $this->element('side_bar',array('visitor_action'=>'products')); ?>
<div class="row-fluid span7 main_content no-padding">
    <?php
        $count = 0;
        foreach ($info as $key_a => $val_a) { ?> 
        <div class='row-fluid product_frame'>
            <?php $product_name = $val_a['Product']['name']; ?>
            <div class="span4 image_frame">
                    <?php $item_name = str_replace(' ', '_', $product_name) ?>
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
            <div class="span8 cart_frame">
                <h4><?php echo $product_name;?></h4>
                <p><?php echo $val_a['Product']['description'] ?></p>
            </div>

            <!-- modal starts here -->
            <?php 
            echo $this->element('gallery_modal',array('item'=>$val_a,'type'=>'Product')); 
            ?>
            <!-- modal ends here -->
            
        </div>
        <?php } ?>
        <?php echo $this->element('pagination',array('pagination'=>$paginate_data)); ?>
</div>
