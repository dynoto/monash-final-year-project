<?php
echo $this->extend('/Common/admins');
$content_override = array(  'title' => 'Manage Range Type', 
                            'css' => array('admins/common'),
                            'js'=>NULL);
echo $this->element('override', array("content_override" => $content_override));

$delete_logo = $this->Html->image('common/delete.png');
$edit_logo = $this->Html->image('common/edit.png');
$view_logo = $this->Html->image('common/view.png');
?>
<div class="row-fluid">
    <div class="span2">
        <div class="offset1">
            <h4><?php echo __('Actions'); ?></h4>
            <ul class="nav nav-tabs nav-stacked">
                <li><?php echo $this->Html->link(__('List Range Types'), array('action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('Edit Range Type'), array('action' => 'edit', $rangeType['RangeType']['id'])); ?> </li>
                <li><?php echo $this->Form->postLink(__('Delete Range Type'), array('action' => 'delete', $rangeType['RangeType']['id']), null, __('Deleting Range Types will REMOVE association from PRODUCTS.\nare you sure you want to do this?', $rangeType['RangeType']['id'])); ?> </li>
            </ul>
        </div>
    </div>
    <div class="span8">
        <div class="row-fluid">
            <h4><?php echo __('Range Type'); ?></h4>
            <dl>
                <dt><?php echo __('Id').' : '; ?></dt>
                <dd>
                    <?php echo h($rangeType['RangeType']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Name'); ?></dt>
                <dd>
                    <?php echo h($rangeType['RangeType']['name']); ?>
                    &nbsp;
                </dd>
            </dl>
        </div>
        <div class="row-fluid">
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
    </div>
</div>
