<?php
echo $this->extend('/Common/admins');
$override = array('title' => 'Add Product', 'css' => array('admins/common','admins/uploadify','admins/product_add'), 'js' => array('admins/jquery.uploadify-3.1.min','admins/kitchen_product_edit'));
echo $this->element('override', array('content_override' => $override));
?>
<div class="row-fluid offset2">
    <div class="span2">
        <div class="offset1">
            <h4><?php echo __('Actions'); ?></h4>
            <ul class='nav nav-tabs nav-stacked'>
                <li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
            </ul>
        </div>
    </div>
    <div class="span6">
        <?php echo $this->Form->create('Product',array('onsubmit'=>'return validate_fields()')); ?>
            <h4><?php echo __('Step 1 : New Product'); ?></h4>
            <?php
            echo $this->Form->input('name',array('required'=>true,'class'=>'span3 name_input'));
            echo $this->Form->input('description',array('class'=>'span8','type'=>'textarea'));
            ?>
<!--             <div class="input-prepend">
                <label for="ProductPrice">Price</label>
                <span class="add-on">$</span>
                <?php
                echo $this->Form->input('price',array('required'=>true,'label'=>false,'div'=>false));
                ?>
            </div> -->
            <hr>

            <!--INPUT RANGE VALUES SECTION-->
            <h4>Range Values</h4>
            <div class="inline-criteria-values">
                <?php
                foreach ($range_types as $key_a => $val_a) { ?>
                <div>
                <h5><?php echo $val_a['RangeType']['name']; ?></h5>
                <?php
                    $temp = null;
                    foreach ($val_a['RangeValue'] as $key_aa => $val_aa) {
                        $temp[$val_aa['id']] = $val_aa['name'];
                    }
                    echo $this->Form->input('ProductsRangeValue.range_value_id',array('label'=>false,'type'=>'select','multiple'=>'checkbox','options'=>$temp,'hiddenField'=>false)); ?>
                    <br>
                </div>
                <?php } ?>
            </div>

            <!--INPUT CRITERIA VALUES SECTION-->
            <hr>
            <h4>Criteria Values</h4>
            <div class="inline-criteria-values">
                <?php
                foreach ($criterias as $key_a => $val_a) { ?>
                <div>
                <h5><?php echo $val_a['Criteria']['name']; ?></h5>
                <?php
                    $temp = null;
                    foreach ($val_a['CriteriaValue'] as $key_aa => $val_aa) {
                        $temp[$val_aa['id']] = $val_aa['name'];
                    }
                    echo $this->Form->input('CriteriaValuesProduct.criteria_value_id',array('label'=>false,'type'=>'select','multiple'=>'checkbox','options'=>$temp,'hiddenField'=>false)); ?>
                    <br>
                </div>
                <?php } ?>
            </div>

            <!-- INPUT DIMENSIONS -->
            <h4>Dimension</h4>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Type</th>
                    <th>Minimum</th>
                    <th>Maximum </th>
                    <th>Increment</th>
                    <th>Default</th>
                </tr>
                <?php foreach ($dimension_types as $type_id => $type_value) { ?>
                    <tr>
                        <td><?php 
                            echo $type_value;
                            echo $this->Form->input('Dimension.'.$type_id.'.dimension_type_id',array('type'=>'hidden','value'=>$type_id));
                        ?></td>
                        <td><?php echo $this->Form->input('Dimension.'.$type_id.'.min',array('type'=>'text','class'=>'dimension_input min','label'=>false)); ?></td>
                        <td><?php echo $this->Form->input('Dimension.'.$type_id.'.max',array('type'=>'text','class'=>'dimension_input max','label'=>false)); ?></td>
                        <td><?php echo $this->Form->input('Dimension.'.$type_id.'.increment',array('type'=>'text','class'=>'dimension_input increment','label'=>false)); ?></td>
                        <td><?php echo $this->Form->input('Dimension.'.$type_id.'.default',array('type'=>'text','class'=>'dimension_input default','label'=>false)); ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php 
        echo $this->Form->end(array('class'=>'btn btn-primary btn-large')); 
        ?>
    </div>

</div>