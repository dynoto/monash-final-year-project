<?php
echo $this->extend('/common/admins');
$content_override = array('title' => '', 'css' => array('admins/common','admins/kitchens_view'), 'js' => array('admins/kitchens_view'));
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
    <div class="span2">
        <div class="offset1">
            <h4><?php echo __('Actions'); ?></h4>
            <ul class="nav nav-tabs nav-stacked">
                <li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('Edit Kitchen'), array('action' => 'edit', $kitchen['Kitchen']['id'])); ?> </li>
                <li><?php echo $this->Form->postLink(__('Delete Kitchen'), array('action' => 'delete', $kitchen['Kitchen']['id']), null, __('Are you sure you want to delete %s?', $kitchen['Kitchen']['name'])); ?> </li>
            </ul>
            <ul class="nav nav-tabs nav-stacked">
                <li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add','Kitchen',$kitchen['Kitchen']['id'])); ?> </li>
                <li>
                    <?php 
                    if(empty($kitchen['Testimonial'])){
                        echo $this->Html->link(__('New Testimonial'), array('controller' => 'testimonials', 'action' => 'add',$kitchen['Kitchen']['id'])); 
                    }
                    ?> 
                </li>
                <li><?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values_kitchens', 'action' => 'add',$kitchen['Kitchen']['id'])); ?> </li>
            </ul>
        </div>
    </div>
    <div class="span8">
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
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php
                foreach ($kitchen['Image'] as $image):
                    ?>
                <tr>
                    <td><?php echo $image['id']; ?></td>
                    <td><?php echo $image['name']; ?></td>
                    <td class="actions">
                        <?php 
                        echo $this->Html->link('View ',array(),array('class'=>'image_action','onclick'=>'return show_hide_image('.$image['id'].')'));
                        echo $this->Form->postLink(__('Delete'), array('controller' => 'images', 'action' => 'delete', $image['id'],$kitchen['Kitchen']['id']), null, __('Are you sure you want to delete # %s?', $image['name'])); 
                        ?>
                    </td>
                </tr>
                <tr class="image_column" id="<?php echo $image['id']; ?>"style="display">
                    <td colspan="3">
                        <?php echo $this->Html->image('kitchens/'.$image['name']); ?>
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
        <?php foreach ($kitchen['Testimonial'] as $testimonial): ?>
        <tr>
            <td><?php echo $testimonial['description']; ?></td>
            <td class="actions">
                <?php echo $this->Html->link(__('Edit'), array('controller' => 'testimonials', 'action' => 'edit', $testimonial['id'],$kitchen['Kitchen']['id'])); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'testimonials', 'action' => 'delete', $testimonial['id'], $kitchen['Kitchen']['id']), null, __('Are you sure you want to delete the testimonial?', $testimonial['id'])); ?>
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
        <?php foreach ($kitchen['CriteriaValue'] as $criteriaValue): ?>
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