<?php
echo $this->extend('/common/admins');
$override = array('title' => 'Add Product', 'css' => array('admins/common','admins/uploadify'), 'js' => array('admins/jquery.uploadify-3.1.min'));
echo $this->element('override', array('content_override' => $override));
?>
<div class="row-fluid">
    <div class="span2">
        <div class="offset1">
            <h4><?php echo __('Actions'); ?></h4>
            <ul class='nav nav-tabs nav-stacked'>
                <li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
            </ul>
        </div>
    </div>
    <div class="span8">
        <?php echo $this->Form->create('Product'); ?>
            <h4><?php echo __('Step 1 : New Product'); ?></h4>
            <?php
            echo $this->Form->input('name',array('required'=>true,'class'=>'span3'));
            echo $this->Form->input('description',array('class'=>'span8','type'=>'textarea'));
            ?>
            <div class="input-prepend">
                <label for="ProductPrice">Price</label>
                <span class="add-on">$</span>
                <?php
                echo $this->Form->input('price',array('required'=>true,'label'=>false,'div'=>false));
                ?>
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
        <?php 
        echo $this->Form->end(array('class'=>'btn btn-primary btn-large')); 
        ?>
    </div>

</div>