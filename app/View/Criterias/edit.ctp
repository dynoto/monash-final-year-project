<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'Manage Criteria', 'css' => 'admins/common');
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
    <div class="span2">
        <div class="offset1">
            <h4><?php echo __('Actions'); ?></h4>
            <ul class="nav nav-tabs nav-stacked">
                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Criteria.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Criteria.id'))); ?></li>
                <li><?php echo $this->Html->link(__('List Criterias'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
    <div class="span8">
        <?php echo $this->Form->create('Criteria'); ?>
        <h4><?php echo __('Edit Criteria'); ?></h4>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('name',array('required'=>'true'));
        echo $this->Form->input('type');
        ?>
        <div class="span3" style="margin-left: 0px">
            <?php
            echo $this->Html->link(__('Back'), array('action' => 'index'), array('class' => 'btn btn-large ', 'style' => 'display:inline'));
            echo $this->Form->button('Submit', array('type' => 'submit', 'class' => 'btn btn-large btn-primary offset1'));
            ?>
        </div>
        <?php
        echo $this->Form->end();
        ?>
    </div>

</div>