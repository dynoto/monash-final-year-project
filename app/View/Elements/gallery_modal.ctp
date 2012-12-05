<?php
$stype = strtolower($type); //lowercase the type, eg Kitchen becomes kitchen
$item_name       = $item[$type]['name'];
$item_code       = str_replace(' ', '_', $item_name);
$item_description= $item[$type]['description'];
?>
<div class="modal hide" id="<?php echo $item_code; ?>">
    <div class="modal-header row-fluid hspn2">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="span11">
        <h3><?php echo $item_name; ?></h3>
        <p><?php echo $item_description; ?></p>
        </div>
        <div class="span3 item_criteria_value">
            <ul class="no-dots">   
            <?php foreach ($item['CriteriaValue'] as $criteria_value) {
                if(isset($criteria_value['criteria_name'])){
            ?>
                <li><h5><?php echo $criteria_value['criteria_name']?></h5><?php echo $criteria_value['name']?><hr></li>
            <?php }} ?>
        </ul>
        </div>
        
    </div>
    <div class="modal-body row-fluid hspn9">
        <?php if(isset($item['Image'][0])){ ?>
        <div class="" id="carousel_<?php echo $item_code; ?>">
            <div class="crsl" id="crsl_<?php echo $item_code;?>">
                <?php
                foreach ($item['Image'] as $image) {
                    echo $this->Html->image($stype.'/' . $image['name'], array('class'=>'modal_carousel_image hspn12' ,'alt' => 'gallery image'));
                } ?>
            </div>
        </div>
        <?php } else { ?>
        <div class="hspn12">
            <?php echo $this->Html->image('common/image_error.jpg',array('class'=>'hspn12')); ?>
        </div>
        <?php }?>
    </div>
</div>