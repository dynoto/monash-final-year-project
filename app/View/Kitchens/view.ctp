<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'View Kitchen', 'css' => array('admins/common','admins/kitchen_product_view'), 'js' => array('admins/kitchen_product_view'));
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
    <div class="span2">
        <div class="offset1">
            <h4><?php echo __('Actions'); ?></h4>
            <ul class="nav nav-tabs nav-stacked">
                <li><?php echo $this->Html->link(__('List Gallery'), array('action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('Edit Gallery'), array('action' => 'edit', $kitchen['Kitchen']['id'])); ?> </li>
                <li><?php echo $this->Form->postLink(__('Delete Gallery'), array('action' => 'delete', $kitchen['Kitchen']['id']), null, __('Are you sure you want to delete %s?', $kitchen['Kitchen']['name'])); ?> </li>
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
                </tr>
                <?php foreach ($kitchen['Image'] as $image): ?>
                <tr>
                    <td><?php echo $image['id']; ?></td>
                    <td>
                        <?php 
                        echo $this->Html->image('kitchen/'.$image['name'],array('class'=>'view_image_thumbnail','onclick'=>'return show_hide_image('.$image['id'].')'));
                        echo $image['name']; 
                        ?>
                    </td>
                </tr>
                <tr class="image_column" id="<?php echo $image['id']; ?>"style="display">
                    <td colspan="3">
                        <?php echo $this->Html->image('kitchen/'.$image['name']); ?>
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
                </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
        </div>
        <div class="inline-criteria-values">
            <h4><?php echo __(' Criteria Values'); ?></h4>
            <?php 
            if (!empty($kitchen['CriteriaValue'])){
                foreach ($criteria_names as $id => $name){
                ?>
                <div>
                    <h5><?php echo $name ?></h5>
                    <?php
                    foreach ($kitchen['CriteriaValue'] as $criteriaValue){
                        if($criteriaValue['criteria_id'] == $id){
                            echo $this->Form->input('',array('label'=>$criteriaValue['name'],'type'=>'checkbox','multiple'=>'checkbox','checked','disabled'=>'disabled'));
                        }
                    }
                    ?>
                    <br>
                </div>
                <?php 
                }
            } 
            ?>
        </div>
</div>
</div>