<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'Manage Criteria', 'css' => 'admins/common');
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
    <div class="span2">
        <div class="offset1">
            <h3><?php echo __('Actions'); ?></h3>
            <ul class="nav nav-tabs nav-stacked">
                <li><?php echo $this->Html->link(__('Edit Criteria Value'), array('action' => 'edit', $criteriaValue['CriteriaValue']['id'])); ?> </li>
                <li><?php echo $this->Form->postLink(__('Delete Criteria Value'), array('action' => 'delete', $criteriaValue['CriteriaValue']['id']), null, __('Are you sure you want to delete # %s?', $criteriaValue['CriteriaValue']['id'])); ?> </li>
                <li><?php echo $this->Html->link(__('List Criteria Values'), array('action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Criteria Value'), array('action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Criterias'), array('controller' => 'criterias', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Criteria'), array('controller' => 'criterias', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Kitchens'), array('controller' => 'kitchens', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Kitchen'), array('controller' => 'kitchens', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
    <div class="span2">
        <h2><?php echo __('Criteria Value'); ?></h2>
        <dl>
            <dt><?php echo __('Criteria'); ?></dt>
            <dd>
                <?php echo $this->Html->link($criteriaValue['Criteria']['name'], array('controller' => 'criterias', 'action' => 'view', $criteriaValue['Criteria']['id'])); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Id'); ?></dt>
            <dd>
                <?php echo h($criteriaValue['CriteriaValue']['id']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Name'); ?></dt>
            <dd>
                <?php echo h($criteriaValue['CriteriaValue']['name']); ?>
                &nbsp;
            </dd>
        </dl>
    </div>

    <div class="related">
        <h3><?php echo __('Related Kitchens'); ?></h3>
        <?php if (!empty($criteriaValue['Kitchen'])): ?>
            <table cellpadding = "0" cellspacing = "0">
                <tr>
                    <th><?php echo __('Id'); ?></th>
                    <th><?php echo __('Name'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php
                $i = 0;
                foreach ($criteriaValue['Kitchen'] as $kitchen):
                    ?>
                    <tr>
                        <td><?php echo $kitchen['id']; ?></td>
                        <td><?php echo $kitchen['name']; ?></td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'), array('controller' => 'kitchens', 'action' => 'view', $kitchen['id'])); ?>
                            <?php echo $this->Html->link(__('Edit'), array('controller' => 'kitchens', 'action' => 'edit', $kitchen['id'])); ?>
        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'kitchens', 'action' => 'delete', $kitchen['id']), null, __('Are you sure you want to delete # %s?', $kitchen['id'])); ?>
                        </td>
                    </tr>
            <?php endforeach; ?>
            </table>
<?php endif; ?>

        <div class="actions">
            <ul>
                <li><?php echo $this->Html->link(__('New Kitchen'), array('controller' => 'kitchens', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
</div>
