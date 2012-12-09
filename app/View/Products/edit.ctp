<?php
echo $this->extend('/Common/admins');
$override = array('title' => 'Edit Product', 'css' => array('admins/common','admins/uploadify','admins/kitchen_product_view','admins/product_add'), 'js' => array('admins/jquery.uploadify-3.1.min','reg_valid','admins/kitchen_product_edit'));
echo $this->element('override', array('content_override' => $override));
$data = $this->request->data;
?>
<div class="row-fluid">
	<div class="span2">
		<div class="offset1">
			<h4><?php echo __('Actions'); ?></h4>
			<ul class='nav nav-tabs nav-stacked'>
				<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Back',array('action'=>'view',$data['Product']['id'])) ?></li>
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Product.id')), array('class'=>'disableprompt'), __('Are you sure you want to delete '.$data['Product']['name'].'?', $this->Form->value('Product.id'))); ?></li>
			</ul>
		</div>
	</div>
	<div class="span8">
		<?php echo $this->Form->create('Product',array('onsubmit'=>'return validate_fields()')); ?>
			<h4><?php echo __('Edit Product'); ?></h4>
			<?php
			echo $this->Form->input('id');
			echo $this->Form->input('name',array('required'=>true,'class'=>'name_input')); ?>

            <!-------------------------------PRICE---------------------------------------- -->
<!-- 			<div class="input-prepend">
				<label for="ProductPrice">Price</label>
				<span class="add-on">$</span>
				<?php
				echo $this->Form->input('price',array('type'=>'text','required'=>true,'label'=>false,'div'=>false));
				?>
			</div> -->
            <!-------------------------------DISCOUNT---------------------------------------- -->
<!-- 			<div class="input-append">
				<label for="ProductDiscount">Discount</label>
				<?php echo $this->Form->input('discount',array('label'=>false,'div'=>false,'empty'=>'-','type'=>'text')); ?>
				<span class="add-on">%</span>
			</div>-->
			<?php
			echo $this->Form->input('description',array('class'=>'span8')); ?>

			<!-------------------------------IMAGES---------------------------------------- -->
			<hr>
			<h4>Images</h4>
			<?php
			echo $this->Form->input('Upload Image',array('type'=>'file','id'=>'ImageUploadImage'));
			if (!empty($images)): ?>
            <table class="table table-striped">
                <tr>
                    <th><?php echo __('Id'); ?></th>
                    <th><?php echo __('Name'); ?></th>
                    <th class="Delete"><?php echo __('Delete'); ?></th>
                </tr>
                <?php foreach ($images as $image_id => $image_name): ?>
                <tr>
                    <td><?php echo $image_id; ?></td>
                    <td>
                        <?php 
                        echo $this->Html->image('product/'.$image_name,array('class'=>'view_image_thumbnail','onclick'=>'return show_hide_image('.$image_id.')'));
                        echo $image_name; 
                        ?>
                    </td>
                    <td class="actions">
                        <?php 
                        echo $this->Form->input('Image.id',array('type'=>'checkbox','value'=>$image_id,'label'=>false,'hiddenField'=>false));
                        ?>
                    </td>
                </tr>
                <tr class="image_column" id="<?php echo $image_id; ?>"style="display">
                    <td colspan="3">
                        <?php echo $this->Html->image('product/'.$image_name); ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
            <hr>

            <!--------------------------CRITERIA VALUES-------------------------------------------- -->
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
                    echo $this->Form->input('CriteriaValuesProduct.criteria_value_id',array('label'=>false,'type'=>'select','multiple'=>'checkbox','options'=>$temp,'selected'=>$criterias_checked,'hiddenField'=>null)); ?>
                    <br>
                </div>
                <?php } ?>
            </div>
            <hr>

            <!--------------------------RANGE VALUES-------------------------------------------- -->
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
                    echo $this->Form->input('ProductsRangeValue.range_value_id',array('label'=>false,'type'=>'select','multiple'=>'checkbox','options'=>$temp,'selected'=>$rangeVal_checked,'hiddenField'=>null)); ?>
                    <br>
                </div>
                <?php } ?>
            </div>
            <hr>

			<!------------------------------INPUT DIMENSIONS---------------------------------------- -->
            <h4>Variable Dimension</h4>
            <p class="alertmsg alert"></p>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Type</th>
                    <th>Minimum</th>
                    <th>Maximum </th>
                    <th>Increment</th>
                    <th>Default</th>
                </tr>
                <?php foreach ($data['Dimension'] as $kk => $dimension_array) { ?>
                    <tr class="dimension_row">
                        <td><?php 
                            echo $dimension_types[$dimension_array['dimension_type_id']];
                            echo $this->Form->input('Dimension.'.$kk.'.id');
                            echo $this->Form->input('Dimension.'.$kk.'.dimension_type_id',array('type'=>'hidden'));
                        ?></td>
                        <td><?php echo $this->Form->input('Dimension.'.$kk.'.min',array('type'=>'text','class'=>'dimension_input min','label'=>false)); ?></td>
                        <td><?php echo $this->Form->input('Dimension.'.$kk.'.max',array('type'=>'text','class'=>'dimension_input max','label'=>false)); ?></td>
                        <td><?php echo $this->Form->input('Dimension.'.$kk.'.increment',array('type'=>'text','class'=>'dimension_input increment','label'=>false,'disabled'=>'disabled')); ?></td>
                        <td><?php echo $this->Form->input('Dimension.'.$kk.'.default',array('type'=>'text','class'=>'dimension_input default','label'=>false)); ?></td>
                    </tr>
                <?php } ?>
            </table>
            <hr>

		<?php 
		echo $this->Form->end(array('class'=>'btn btn-primary btn-large')); 
		?>
	</div>
</div>


<?php $this->start('etc_script'); ?>
<script type="text/javascript">
$(document).ready(function(){
	$('#ImageUploadImage').uploadify({
		'swf'           : "<?php echo $this->html->url('/app/webroot/uploadify/uploadify.swf');?>",
		'uploader'      : "<?php echo $this->html->url('/images/add_ajax/'.$data['Product']['id'].'/product/');?>",
	});
});
</script>
<?php $this->end(); ?>