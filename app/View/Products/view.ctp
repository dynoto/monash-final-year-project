<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'View Product', 'css' => array('admins/common','admins/kitchen_product_view'), 'js' => array('admins/kitchen_product_view'));
echo $this->element('override', array("content_override" => $content_override));
pr($products);
?>
<div class="row-fluid">
    <div class="span2">
        <div class="offset1">
            <h4><?php echo __('Actions'); ?></h4>
            <ul class="nav nav-tabs nav-stacked">
                <li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $products['Product']['id'])); ?> </li>
                <li><?php echo $this->Form->postLink(__('Delete product'), array('action' => 'delete', $products['Product']['id']), null, __('Are you sure you want to delete %s?', $products['Product']['name'])); ?> </li>
            </ul>
        </div>
    </div>
    <div class="span8">
        <div class="products view">
            <h4><?php echo __('Product'); ?></h4>
            <dl>
                <dt><?php echo __('Id'); ?></dt>
                <dd>
                    <?php echo h($products['Product']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Name'); ?></dt>
                <dd>
                    <?php echo h($products['Product']['name']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Price'); ?></dt>
                <dd>
                    <?php echo '$ '.h($products['Product']['price']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Discount'); ?></dt>
                <dd>
                    <?php echo h($products['Product']['discount']).'%'; ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Description'); ?></dt>
                <dd>
                    <?php echo h($products['Product']['description']); ?>
                    &nbsp;
                </dd>
            </dl>
        </div>

        <!-- IMAGES -->
        <div class="related">
            <h4><?php echo __(' Images'); ?></h4>
            <?php if (!empty($products['Image'])): ?>
            <table class="table table-striped">
                <tr>
                    <th><?php echo __('Id'); ?></th>
                    <th><?php echo __('Name'); ?></th>

                </tr>
                <?php foreach ($products['Image'] as $image): ?>
                <tr>
                    <td><?php echo $image['id']; ?></td>
                    <td>
                        <?php 
                    echo $this->Html->image('product/'.$image['name'],array('class'=>'view_image_thumbnail','onclick'=>'return show_hide_image('.$image['id'].')'));
                    echo $image['name']; ?>
                    </td>
                </tr>
                <tr class="image_column" id="<?php echo $image['id']; ?>"style="display">
                    <td colspan="3">
                        <?php echo $this->Html->image('product/'.$image['name']); ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <hr>

        <!-- FINISHES -->
        <div class="finishes">
            <h4>Finishes</h4>
            <table class="table table-striped table-bordered">
                <tr>
                    <td>Finish</td>
                    <td>Finish Types</td>
                </tr>
                <?php foreach ($finishes as $finish_name => $finish_array): ?>
                    <tr>
                        <td>
                            <?php echo $finish_name ?>
                        </td>
                        <td>
                            <ul>
                            <?php foreach ($finish_array as $k => $finish_type_name): ?>
                                <li><?php echo $finish_type_name; ?></li>
                            <?php endforeach; ?>
                            <ul>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <hr>

        <!-- DIMENSIONS -->
        <div class="dimensions">
            <!-- STANDARD DIMENSION -->
            <h4>Standard Dimension</h4>
            <p>
            <?php   if(isset($products['StandardDimension'][0]['description'])):
                        echo $products['StandardDimension'][0]['description'];
                    else:
                        echo 'no standard dimension available';
                    endif;
            ?>
            </p>
            <hr>

            <!-- VARIABLE DIMENSION -->
            <h4>Variable Dimension</h4>
            <?php if(isset($products['Dimension'])): ?>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Type</th>
                            <th>Min</th>
                            <th>Max</th>
                            <th>Increment</th>
                            <th>Default</th>
                        </tr>
                    <?php foreach($products['Dimension'] as $k => $dimension_array): ?>
                        <tr>
                            <td><?php echo $dimension_types[$dimension_array['dimension_type_id']] ?></td>
                            <td><?php echo $dimension_array['min']; ?></td>
                            <td><?php echo $dimension_array['max']; ?></td>
                            <td><?php echo $dimension_array['increment']; ?></td>
                            <td><?php echo $dimension_array['default']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
            <?php endif; ?>

        </div>
        <hr>


        <!-- CRITERIA VALUES -->
        <div class="inline-criteria-values">
            <h4>Criteria Values</h4>
            <?php 
            if (!empty($products['CriteriaValue'])):
                foreach ($criteria_names as $id => $name):
                ?>
                <div>
                    <h5><?php echo $name ?></h5>
                    <?php
                    foreach ($products['CriteriaValue'] as $criteriaValue):
                        if($criteriaValue['criteria_id'] == $id):
                            echo $this->Form->input('',array('label'=>$criteriaValue['name'],'type'=>'checkbox','multiple'=>'checkbox','checked','disabled'=>'disabled'));
                        endif;
                    endforeach;
                    ?>
                    <br>
                </div>
                <?php 
                endforeach;
            endif;
            ?>
        </div>
</div>
</div>