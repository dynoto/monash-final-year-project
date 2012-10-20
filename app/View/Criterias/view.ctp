<?php
echo $this->extend('/Common/admins');
$content_override = array(  'title' => 'Manage Criteria', 
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
                <li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('Edit Criteria'), array('action' => 'edit', $criteria['Criteria']['id'])); ?> </li>
                <li><?php echo $this->Form->postLink(__('Delete Criteria'), array('action' => 'delete', $criteria['Criteria']['id']), null, __('Are you sure you want to delete # %s?', $criteria['Criteria']['id'])); ?> </li>
                <li><?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values', 'action' => 'add', $criteria['Criteria']['id'])); ?> </li>
            </ul>
        </div>
    </div>
    <div class="span8">
        <div class="row-fluid">
            <h4><?php echo __('Criteria'); ?></h4>
            <dl>
                <dt><?php echo __('Id').' : '; ?></dt>
                <dd>
                    <?php echo h($criteria['Criteria']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Name'); ?></dt>
                <dd>
                    <?php echo h($criteria['Criteria']['name']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Gallery'); ?></dt>
                <dd>
                    <?php
                    switch ($criteria['Criteria']['kitchen']) {
                        case 0:
                            echo 'No';
                            break;
                        case 1:
                            echo 'Yes';
                            break;
                    }
                    ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Product'); ?></dt>
                <dd>
                    <?php
                    switch ($criteria['Criteria']['product']) {
                        case 0:
                            echo 'No';
                            break;
                        case 1:
                            echo 'Yes';
                            break;
                    }
                    ?>
                    &nbsp;
                </dd>
            </dl>
        </div>
        <div class="row-fluid">
            <h4><?php echo __('Criteria Values'); ?></h4>
            <?php if (!empty($criteria['CriteriaValue'])): ?>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Name'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($criteria['CriteriaValue'] as $criteriaValue):
                        ?>
                        <tr>
                            <td><?php echo $criteriaValue['id']; ?></td>
                            <td><?php echo $criteriaValue['name']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link('Edit', array('controller' => 'criteria_values', 'action' => 'edit', $criteriaValue['id']), array('escape' => false)); ?>
                                <?php echo $this->Form->postLink('Delete', array('controller' => 'criteria_values', 'action' => 'delete', $criteriaValue['id'],$criteria['Criteria']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $criteriaValue['name'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div>
