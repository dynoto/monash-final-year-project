<?php
$kitchen_name       = $item['Kitchen']['name'];
$kitchen_code       = str_replace(' ', '_', $kitchen_name);
$kitchen_description= $item['Kitchen']['description'];
?>
<div class="modal hide fade hspn10" id="<?php echo $kitchen_code; ?>">
    <div class="modal-header row-fluid hspn2">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="span11">
        <h3><?php echo $kitchen_name; ?></h3>
        <p><?php echo $kitchen_description; ?></p>
        </div>
        <!--
        <div class="span3">
            <ol>
            
            <?php foreach ($item['CriteriaValue'] as $criteria_value) {
                if(isset($criteria_value['criteria_name'])){
            ?>
                <li><?php echo $criteria_value['criteria_name'] . ' : ' . $criteria_value['name']; ?></li>
            <?php }} ?>
        </ul>
        </div>
        -->
    </div>
    <div class="modal-body row-fluid hspn9">
        <?php if(isset($item['Image'][0])){ ?>
        <div class="carousel slide hspn12" id="carousel_<?php echo $kitchen_code; ?>">
            <div class="carousel-inner hspn12">
                <?php
                $carousel_class = "item active";
                foreach ($item['Image'] as $image) { ?>
                    <div class="<?php echo $carousel_class.' hspn12'; ?>"><?php echo $this->Html->image('kitchen/' . $image['name'], array('class'=>'modal_carousel_image hspn12' ,'alt' => 'gallery image')); ?></div>
                    <?php $carousel_class = "item";
                } ?>
            </div>
            <a class="carousel-control left" href="#carousel_<?php echo $kitchen_code; ?>" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#carousel_<?php echo $kitchen_code; ?>" data-slide="next">&rsaquo;</a>
        </div>
        <?php } else { ?>
        <div class="hspn12">
            <?php echo $this->Html->image('common/image_error.jpg',array('class'=>'hspn12')); ?>
        </div>
        <?php }?>
    </div>
</div>