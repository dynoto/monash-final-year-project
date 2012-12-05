<?php
echo $this->extend('/Common/admins');
$content_override = array('css' => 'admins/common', 'title' => 'Add Criteria Value');
echo $this->element('override', array('content_override' => $content_override));
?>
<div class="row-fluid">
    <div class="span2">
        <div class="offset1">
        <h4><?php echo __('Actions'); ?></h4>
        <ul class="nav nav-tabs nav-stacked">
            <li>
                <?php echo $this->Html->link('Back',array('controller'=>'RangeTypes','action'=>'view',$rangeType_id)); ?>
            </li>
            <li><?php echo $this->Html->link(__('List RangeTypes'), array('controller' => 'RangeTypes', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('List Kitchens'), array('controller' => 'kitchens', 'action' => 'index')); ?> </li>
        </ul>
    </div>
    </div>
    <div class="span8">
        <?php echo $this->Form->create('RangeValue'); ?>
        <fieldset>
            <h4>Add Criteria Value</h4>
            <?php
            echo $this->Form->input('range_type_id',array('selected'=>$rangeType_id));
            echo $this->Form->input('name',array('required'=>true));
            ?>
        </fieldset>

        <?php
        $submit = array('class' => 'btn btn-primary btn-large');
        echo $this->Form->end($submit);
        ?>
    </div>
</div>
