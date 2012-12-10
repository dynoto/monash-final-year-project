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
                <li><?php echo $this->Html->link(__('List Criterias'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?> </li>
                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Criteria.id')), null, __('Are you sure you want to delete this criteria?', $this->Form->value('Criteria.id'))); ?></li>
            </ul>
        </div>
    </div>
    <div class="span3 row-fluid">
        <?php echo $this->Form->create('Criteria'); ?>
        <div class="row-fluid span12">
            <div class="span6 row-fluid">
                <h4><?php echo __('Edit Criteria'); ?></h4>
                <?php
                echo $this->Form->input('id');
                echo $this->Form->input('name',array('required'=>true));
                echo $this->Form->input('for',array('label'=>'Appears in','options'=>array('kitchen'=>'Kitchen','product'=>'Product')));
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
            <h4 class="ib"><?php echo __('Criteria Values'); ?></h4>
            <?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values', 'action' => 'add', $criteria['Criteria']['id']),array('class'=>'btn' ,'style'=>'float:right')); ?>
            </div>
            <?php if (!empty($criteria['CriteriaValue'])): ?>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Value'); ?></th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($criteria['CriteriaValue'] as $criteriaValue):
                        ?>
                        <tr>
                            <td><?php echo $criteriaValue['id']; ?></td>
                            <td><?php echo $criteriaValue['name']; ?></td>
                            <td>
                                <?php 
                                echo $this->Html->link('Edit',array('controller'=>'criteriavalues','action'=>'edit',$criteriaValue['id']));
                                echo '  ';
                                echo $this->Form->postLink(__('Delete'), array('controller'=>'criteriavalues','action' => 'delete',$criteriaValue['id'],$criteria['Criteria']['id']), null, __('Deleting this criterias value will REMOVE association from both KITCHENS and PRODUCTS.\nare you sure you want to do this?')); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>