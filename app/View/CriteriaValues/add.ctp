<?php
echo $this->extend('/common/admins');
$content_override = array('css' => 'admins/common', 'title' => 'Add Criteria Value');
echo $this->element('override', array('content_override' => $content_override));
?>
<div class="row-fluid span10">
    <div class="span2">
        <h4><?php echo __('Actions'); ?></h4>
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link(__('List Criterias'), array('controller' => 'criterias', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Criteria'), array('controller' => 'criterias', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Kitchens'), array('controller' => 'kitchens', 'action' => 'index')); ?> </li>
        </ul>
    </div>
    <div class="span8">
        <?php echo $this->Form->create('CriteriaValue'); ?>
        <fieldset>
            <h4>Add Criteria Value</h4>
            <?php
            echo $this->Form->input('criteria_id');
            echo $this->Form->input('name');
            ?>
        </fieldset>

        <?php
        $submit = array('label' => 'Submit', 'class' => 'btn btn-primary');
        echo $this->Form->end($submit);
        ?>
    </div>
</div>
