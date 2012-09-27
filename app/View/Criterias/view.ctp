<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'Manage Criteria', 'css' => 'admins/common');
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
                <li><?php echo $this->Html->link(__('New Criteria'), array('action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
    <div class="span8 row-fluid">
        <div class="row-fluid">
            <h4><?php echo __('Criteria'); ?></h4>
            <dl>
                <dt><?php echo __('Id'); ?></dt>
                <dd>
                    <?php echo h($criteria['Criteria']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Name'); ?></dt>
                <dd>
                    <?php echo h($criteria['Criteria']['name']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Type'); ?></dt>
                <dd>
                    <?php echo h($criteria['Criteria']['type']); ?>
                    &nbsp;
                </dd>
            </dl>
        </div>
        <div class="row-fluid">
            <h4><?php echo __('Related Criteria Values'); ?></h4>
            <?php if (!empty($criteria['CriteriaValue'])): ?>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th><?php echo __('Criteria Id'); ?></th>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Name'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($criteria['CriteriaValue'] as $criteriaValue):
                        ?>
                        <tr>
                            <td><?php echo $criteriaValue['criteria_id']; ?></td>
                            <td><?php echo $criteriaValue['id']; ?></td>
                            <td><?php echo $criteriaValue['name']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link($edit_logo, array('controller' => 'criteria_values', 'action' => 'edit', $criteriaValue['id']), array('escape' => false)); ?>
                                <?php echo $this->Form->postLink($delete_logo, array('controller' => 'criteria_values', 'action' => 'delete', $criteriaValue['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $criteriaValue['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>

            <div class="actions">
                <ul>
                    <li><?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values', 'action' => 'add')); ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
