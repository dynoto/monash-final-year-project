<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'Manage Range Type', 'css' => 'admins/common');
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid offset2">
    <div class="span8">
        <?php echo $this->Form->create('RangeType'); ?>
        <fieldset>
            <h4>Add Range Type</h4>
            <?php 
            echo $this->Form->input('name',array('required'=>true));
            ?>
        </fieldset>
        <div class="span3 no-margin-left">
        <?php
        echo $this->Html->link(__('Back'), array('controller'=>'criterias','action' => 'index'), array('class' => 'btn btn-large ', 'style' => 'display:inline'));
        echo $this->Form->button('Submit', array('type' => 'submit', 'class' => 'btn btn-large btn-primary offset1'));
        ?>
        </div>
        <?php
        echo $this->Form->end();
        ?>
    </div>
</div>
