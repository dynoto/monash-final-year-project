<?php
echo $this->extend('/common/admins');
$override = array('title' => 'Edit Product', 'css' => array('admins/common','admins/uploadify'), 'js' => array('admins/jquery.uploadify-3.1.min'));
echo $this->element('override', array('content_override' => $override));
$data = $this->request->data;
?>
<script type="text/javascript">
$(document).ready(function(){
	$('#ImageUploadImage').uploadify({
		'swf'           : "<?php echo $this->html->url('/app/webroot/uploadify/uploadify.swf');?>",
		'uploader'      : "<?php echo $this->html->url('/images/add_ajax/'.$data['Product']['id'].'/product/');?>",
	});
});
</script>
<div class="row-fluid">
	<div class="span2">
		<div class="offset1">
			<h4><?php echo __('Actions'); ?></h4>
			<ul class='nav nav-tabs nav-stacked'>
				<li><?php echo $this->Html->link('Back',array('action'=>'view',$data['Product']['id'])) ?></li>
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Product.id')), null, __('Are you sure you want to delete '.$data['Product']['name'].'?', $this->Form->value('Product.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
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
			<h4>Add Image</h4>
			<?php
			echo $this->Form->input('Upload Image',array('type'=>'file','id'=>'ImageUploadImage'));
			?>

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