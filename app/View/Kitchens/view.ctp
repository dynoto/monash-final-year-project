<?php
echo $this->extend('/common/admins');
$content_override = array('title' => '', 'css' => 'admins/common', 'js' => NULL);
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
    <div class="span2" style="position: fixed">
        <div class="offset1">
            <h4><?php echo __('Actions'); ?></h4>
            <ul class="nav nav-tabs nav-stacked">
                <li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('Edit Kitchen'), array('action' => 'edit', $kitchen['Kitchen']['id'])); ?> </li>
                <li><?php echo $this->Form->postLink(__('Delete Kitchen'), array('action' => 'delete', $kitchen['Kitchen']['id']), null, __('Are you sure you want to delete # %s?', $kitchen['Kitchen']['id'])); ?> </li>
            </ul>
            <ul class="nav nav-tabs nav-stacked">
                <li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add','Kitchen',$kitchen['Kitchen']['id'])); ?> </li>
                <li><?php echo $this->Html->link(__('New Testimonial'), array('controller' => 'testimonials', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values_kitchens', 'action' => 'add',$kitchen['Kitchen']['id'])); ?> </li>
            </ul>
        </div>
    </div>
    <div class="span8 offset2">
        <div class="kitchens view">
            <h4><?php echo __('Kitchen'); ?></h4>
            <dl>
                <dt><?php echo __('Id'); ?></dt>
                <dd>
                    <?php echo h($kitchen['Kitchen']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Name'); ?></dt>
                <dd>
                    <?php echo h($kitchen['Kitchen']['name']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Description'); ?></dt>
                <dd>
                    <?php echo h($kitchen['Kitchen']['description']); ?>
                    &nbsp;
                </dd>
            </dl>
        </div>
        <div class="related">
            <h4><?php echo __(' Images'); ?></h4>
            <?php if (!empty($kitchen['Image'])): ?>
                <table class="table table-striped">
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Name'); ?></th>
                        <th><?php echo __('Kitchen Id'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($kitchen['Image'] as $image):
                        ?>
                        <tr>
                            <td><?php echo $image['id']; ?></td>
                            <td><?php echo $image['name']; ?></td>
                            <td><?php echo $image['kitchen_id']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('controller' => 'images', 'action' => 'view', $image['id'])); ?>
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'images', 'action' => 'edit', $image['id'])); ?>
                                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'images', 'action' => 'delete', $image['id']), null, __('Are you sure you want to delete # %s?', $image['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?php echo __(' Testimonials'); ?></h4>
            <?php if (!empty($kitchen['Testimonial'])): ?>
                <table class="table table-striped">
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Description'); ?></th>
                        <th><?php echo __('Kitchen Id'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($kitchen['Testimonial'] as $testimonial):
                        ?>
                        <tr>
                            <td><?php echo $testimonial['id']; ?></td>
                            <td><?php echo $testimonial['description']; ?></td>
                            <td><?php echo $testimonial['kitchen_id']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'testimonials', 'action' => 'edit', $testimonial['id'])); ?>
                                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'testimonials', 'action' => 'delete', $testimonial['id']), null, __('Are you sure you want to delete # %s?', $testimonial['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?php echo __(' Criteria Values'); ?></h4>
            <?php if (!empty($kitchen['CriteriaValue'])): ?>
                <table class="table table-striped">
                    <tr>
                        <th><?php echo __('Criteria Name'); ?></th>
                        <th><?php echo __('Name'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($kitchen['CriteriaValue'] as $criteriaValue):
                        ?>
                        <tr>
                            <td><?php echo $criteria_names[$criteriaValue['criteria_id']]; ?></td>
                            <td><?php echo $criteriaValue['name']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'criteria_values_kitchens', 'action' => 'add', $kitchen['Kitchen']['id'])); ?>
                                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'criteria_values_kitchens', 'action' => 'delete', $criteriaValue['CriteriaValuesKitchen']['id'], $kitchen['Kitchen']['id']), null, __('Are you sure you want to delete " %s " ?', $criteriaValue['name'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div>