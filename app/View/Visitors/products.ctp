<?php
echo $this->extend('/Common/visitors');
$content_override = array('title' => 'SK Kitchens Products', 'css' => array('dropdown-checklist', 'visitors/products'), 'js' => array('jquery-ui', 'dropdown-checklist', 'visitors/filter'));
echo $this->element('override', array("content_override" => $content_override));
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid">
    <div class="span8 offset2">

        <?php echo $this->element('side_bar', array('visitor_action' => 'products')); ?>
        <div class="row-fluid span7 hspn12">
            <?php
            $count = 0;
            foreach ($info as $key_a => $val_a) {
                if ($count == 0 or $count == 2) {
                    ?> <div class='row-fluid gallery_row hspn6'> <?php } ?>
                        <?php $products_name = $val_a['Product']['name']; ?>
                    <div class="span6 hspn11 image_frame">
                            <?php $item_name = str_replace(' ', '_', $products_name) ?>
                        <a href="#<?php echo $item_name; ?>" role="button" data-toggle="modal" class="modal_toggle">
    <?php echo $this->Html->image('kitchens/' . $val_a['Image'][0]['name'], array('alt' => 'kitchen images', 'class' => 'kitchen_thumbnail hspn10')) ?>
                        </a>
                        <p><?php echo $products_name; ?></p>
                    </div>

                    <!-- modal starts here -->
    <?php echo $this->element('products_modal', array('item' => $val_a)); ?>
                    <!-- modal ends here -->

                <?php if ($count == 1 or $count == 3) { ?> </div> <?php } ?>
                <?php $count+=1;
            } ?>

        </div>
    </div>