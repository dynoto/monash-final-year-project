<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'Manage Range Value', 'css' => 'admins/common');
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
    <div class="span2">
        <div class="offset1">
            <h4><?php echo __('Actions'); ?></h4>
            <ul class="nav nav-tabs nav-stacked">

                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CriteriaValue.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RangeValue.id'))); ?></li>
                <li><?php echo $this->Html->link(__('List Range Types'), array('controller' => 'criterias', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Range Type'), array('controller' => 'criterias', 'action' => 'add')); ?> </li>
<!--                 <li><?php echo $this->Html->link(__('List Gallery'), array('controller' => 'kitchens', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Kitchen'), array('controller' => 'kitchens', 'action' => 'add')); ?> </li> -->
            </ul>
        </div>
    </div>
    <div class="span8">
        <?php echo $this->Form->create('RangeValue'); ?>
        <fieldset>
            <h4><?php echo __('Edit Range Value'); ?></h4>
            <?php
            echo $this->Form->input('range_type_id');
            echo $this->Form->input('id');
            echo $this->Form->input('name',array('required'=>true));
            ?>
        </fieldset>
        <?php
        $submit = array('label' => 'Submit', 'class' => 'btn btn-primary');
        echo $this->Form->end($submit);
        ?>
    </div>
</div>
