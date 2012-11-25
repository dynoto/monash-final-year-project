<?php
echo $this->extend('/common/admins');
$override = array('title' => 'Edit Product', 'css' => array('admins/common','admins/uploadify','admins/kitchen_product_view'), 'js' => array('admins/jquery.uploadify-3.1.min','admins/kitchen_product_edit'));
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
		<?php echo $this->Form->create('Product'); ?>
		<fieldset>
			<h4><?php echo __('Edit Product'); ?></h4>
			<?php
			echo $this->Form->input('id');
			echo $this->Form->input('name',array('required'=>true)); ?>
			<div class="input-prepend">
				<label for="ProductPrice">Price</label>
				<span class="add-on">$</span>
				<?php
				echo $this->Form->input('price',array('required'=>true,'label'=>false,'div'=>false));
				?>
			</div>
			<div class="input-append">
				<label for="DiscountValue">Discount</label>
				<?php echo $this->Form->input('discount_id',array('label'=>false,'options'=>$discounts,'div'=>false,'empty'=>'-')); ?>
				<span class="add-on">%</span>
			</div>
			<?php
			echo $this->Form->input('description',array('class'=>'span8')); ?>

			<!--ADD IMAGE SECTION -->
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

			<!--EDIT CRITERIA VALUES SECTION-->
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
					echo $this->Form->input('CriteriaValuesProduct.criteria_value_id',array('label'=>false,'type'=>'select','multiple'=>'checkbox','options'=>$temp,'selected'=>$checked,'hiddenField'=>null)); ?>
					<br>
				</div>
				<?php } ?>
			</div>
		</fieldset>
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