<?php
$this->extend('/common/admins');
$override = array('title' => 'Edit Kitchen', 'css' => 'admins/common', 'js' => NULL);
$this->element('override', array('content_override' => $override));
?>
<div class="row-fluid">
    <div class="span2">
        <div class="offset1">
            <h4><?php echo __('Actions'); ?></h4>
            <ul class='nav nav-tabs nav-stacked'>
                <li><?php echo $this->Html->link('Back',array('action'=>'view',$kitchen_id)) ?></li>
                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Kitchen.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Kitchen.id'))); ?></li>
                <li><?php echo $this->Html->link(__('List Kitchens'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Testimonial'), array('controller' => 'testimonials', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
    <div class="span8">
        <?php echo $this->Form->create('Kitchen'); ?>
        <fieldset>
            <h4><?php echo __('Edit Kitchen'); ?></h4>
            <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
            echo $this->Form->input('description',array('class'=>'span8'));
            ?>
        </fieldset>
        <?php 
        echo $this->Form->button('Submit',array('class'=>'btn btn-primary'));
        echo $this->Form->end(); 
        ?>
    </div>

</div>