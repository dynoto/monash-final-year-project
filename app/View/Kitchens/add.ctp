<?php
echo $this->extend('/Common/admins');
$override = array('css' => 'admins/common', 'js' => NULL, 'title' => 'New Gallery');
echo $this->element('override', array('content_override' => $override));
?>
<div class="row-fluid">
    <div class="span2">
        <div class="offset1">
            <h4><?php echo __('Actions'); ?></h4>
            <ul class='nav nav-tabs nav-stacked'>
                <li><?php echo $this->Html->link(__('List Gallery'), array('action' => 'index')); ?></li>
            </ul>
        </div>
    </div>
    <div class="span8">
        <?php echo $this->Form->create('Kitchen'); ?>
        <fieldset>
            <h4><?php echo __('Add Gallery'); ?></h4>
            <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name',array('required'=>true));
            echo $this->Form->input('description',array('class'=>'span8','required'=>true)); ?>

            <!--EDIT TESTIMONIAL SECTION-->
            <hr>
            <h4>Testimonial</h4>
            <?php
            if(!empty($data['Testimonial'][0])){
                $testimonial_value = $data['Testimonial'][0]['description'];
            } else {
                $testimonial_value = null;
            }
            echo $this->Form->input('Testimonial.description',array('class'=>'span8','value'=>$testimonial_value));
            ?>
            <!--EDIT CRITERIA VALUES SECTION-->
            <hr>
            <h4>Criteria Values</h4>
            <div class="inline-criteria-values">
            <?php
            foreach ($criterias as $key_a => $val_a) { ?>
            <div>
            <h5><?php echo $val_a['Criteria']['name']; ?></h5>
            <?php
                $temp = null;
                foreach ($val_a['CriteriaValue'] as $key_aa => $val_aa) {
                    $temp[$val_aa['id']] = $val_aa['name'];
                }
                echo $this->Form->input('CriteriaValuesKitchen.criteria_value_id',array('label'=>false,'type'=>'select','multiple'=>'checkbox','options'=>$temp,'hiddenField'=>null)); ?>
                <br>
            </div>
            <?php } ?>
            </div>
        </fieldset>
        <?php 
        echo $this->Form->end(array('class'=>'btn btn-primary btn-large','label'=>'Add Images')); 
        ?>
    </div>
</div>

