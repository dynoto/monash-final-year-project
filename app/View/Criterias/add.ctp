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
            echo $this->Form->input('name');
            echo $this->Form->input('kitchen',array('selected'=>true));
            echo $this->Form->input('product',array('selected'=>true));
            ?>
        </fieldset>
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
