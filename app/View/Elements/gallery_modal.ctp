<?php
$kitchen_name       = $item['Kitchen']['name'];
$kitchen_code       = str_replace(' ', '_', $kitchen_name);
$kitchen_description= $item['Kitchen']['description'];

?>

<div class="modal hide fade" id="<?php echo $kitchen_code; ?>">
    <div class="modal-header">
        <h3><?php echo $kitchen_name; ?></h3>
        <p><?php echo $kitchen_description; ?></p>
        <div class="row-fluid">
            <?php foreach ($item['CriteriaValue'] as $criteria_value) { ?>
                <p class="span3"><?php echo $criteria_value['criteria_name'] . ' : ' . $criteria_value['name']; ?></p>
            <?php } ?>
        </div>
    </div>
    <div class="modal-body">
        <div class="carousel slide" id="carousel_<?php echo $kitchen_code; ?>">
            <div class="carousel-inner">
                <?php
                $carousel_class = "item active";
                foreach ($item['Image'] as $image) { ?>
                    <div class="<?php echo $carousel_class; ?>"><?php echo $this->Html->image('kitchens/' . $image['name'], array('class'=>'modal_carousel_image' ,'alt' => 'gallery image')); ?></div>
                    <?php $carousel_class = "item";
                } ?>
            </div>
            <a class="carousel-control left" href="#carousel_<?php echo $kitchen_code; ?>" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#carousel_<?php echo $kitchen_code; ?>" data-slide="next">&rsaquo;</a>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
</div>