<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'Manage Criteria', 'css' => 'admins/common');
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
    <div class="span2 row-fluid">
        <div class="offset1">
            <h4><?php echo __('Actions'); ?></h4>
            <ul class="nav nav-tabs nav-stacked">
                <li><?php echo $this->Html->link(__('List Range Types'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?> </li>
                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RangeType.id')), null, __('Are you sure you want to delete this range type?', $this->Form->value('RangeType.id'))); ?></li>
            </ul>
        </div>
    </div>
    <div class="span3 row-fluid">
        <?php echo $this->Form->create('RangeType'); ?>
        <div class="row-fluid span12">
            <div class="span6 row-fluid">
                <h4><?php echo __('Edit Range Type'); ?></h4>
                <?php
                echo $this->Form->input('id');
                echo $this->Form->input('name',array('required'=>true));
                ?>
            </div>
            <div class="span6 row-fluid">
            </div>
        </div>
        <div class="row-fluid span8">
            <?php
            echo $this->Html->link(__('Back'), array('action' => 'index'), array('class' => 'btn btn-large ', 'style' => 'display:inline-block; margin-right:10px;'));
            echo $this->Form->button('Submit', array('type' => 'submit', 'class' => 'btn btn-large btn-primary'));
            ?>
            
            <?php
            echo $this->Form->end();
            ?>
        </div>
    </div>
    <div class="row-fluid span5">
        <div class="row-fluid">
            <h4 class="ib"><?php echo __('Range Values'); ?></h4>
            <?php echo $this->Html->link(__('New Range Value'), array('controller' => 'RangeValues', 'action' => 'add', $rangeType['RangeType']['id']),array('class'=>'btn' ,'style'=>'float:right')); ?>
        </div>
        <?php if (!empty($rangeType['RangeValue'])): ?>
        <table class="table table-bordered table-striped">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Value'); ?></th>
                <th>Actions</th>
            </tr>
            <?php
            $i = 0;
            foreach ($rangeType['RangeValue'] as $rangeTypeValue):
                ?>
            <tr>
                <td><?php echo $rangeTypeValue['id']; ?></td>
                <td><?php echo $rangeTypeValue['name']; ?></td>
                <td>
                    <?php 
                    echo $this->Html->link('Edit',array('controller'=>'RangeValues','action'=>'edit',$rangeTypeValue['id']));
                    echo '  ';
                    echo $this->Form->postLink(__('Delete'), array('controller'=>'RangeValues','action' => 'delete',$rangeTypeValue['id'],$rangeType['RangeType']['id']), null, __('Deleting this Range Types value will REMOVE association from PRODUCTS.\nare you sure you want to do this?')); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
</div>