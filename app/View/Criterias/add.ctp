<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'Manage Criteria', 'css' => 'admins/common');
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid offset2">
    <div class="span8">
        <?php echo $this->Form->create('Criteria'); ?>
        <fieldset>
            <h4>Add Criteria</h4>
            <?php 
            echo $this->Form->input('name',array('required'=>true));
            echo $this->Form->input('for',array('label'=>'Appears in','options'=>array('kitchen'=>'Kitchen','product'=>'Product')));
            ?>
        </fieldset>
        <div class="span3 no-margin-left">
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
