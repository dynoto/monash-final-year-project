<?php
echo $this->extend('/Common/admins');
$override = array('css' => 'admins/common', 'js' => NULL, 'title' => 'New Gallery');
echo $this->element('override', array('content_override' => $override));
?>
<div class="row-fluid">
    <div class="span2">
        <div class="row-fluid offset1">
            <h4><?php echo __('Actions'); ?></h4>
            <ul class="nav nav-tabs nav-stacked">
                <li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?></li>
            </ul>
        </div>
    </div>
    <div class="row-fluid span8">
        <?php echo $this->Form->create('Kitchen'); ?>
        <h4 class=""><?php echo __('Add Gallery'); ?></h4>
        <div class="row-fluid well">
            <div class="row-fluid">
                <ul class="span8 nav nav-pills">
                    <li class="active"><a>Step 1 : Create Gallery</a></li>
                    <li class="disabled"><a>Step 2 : Add Images</a></li>
                </ul>
            </div>
            <div class="span6">
                <?php
                echo $this->Form->input('name',array('required'=>true));
                echo $this->Form->input('description', array('class' => 'span10'));
                echo $this->Form->input('Testimonial.description', array('label' => 'Testimonial', 'class' => 'span10'));
                echo $this->Form->submit('Submit', array('class' => 'btn btn-primary btn-large'));
                ?>
            </div>
            <div class="span5">
                <fieldset>
                    <legend>Criteria</legend>
                    <?php foreach ($criteria_data as $key_a => $val_a) { ?>
                        <div class="row-fluid">
                            <?php
                            $temp_array = array();
                            foreach ($val_a['CriteriaValue'] as $key_aa => $val_aa) {
                                $temp_array[$val_aa['id']] = $val_aa['name'];
                            }
                            echo $this->Form->input('CriteriaValuesKitchen.CriteriaValue_id', array(
                                'options' => $temp_array,
                                'multiple' => '',
                                'name' => 'data[CriteriaValuesKitchen][CriteriaValue_id][]',
                                'label' => $val_a['Criteria']['name']
                            ));
                            ?>
                        </div>
                    <?php } ?>
                </fieldset>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
