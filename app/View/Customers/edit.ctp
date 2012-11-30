<?php
$this->extend('/Common/admins');
$override = array('title'=>'Edit Customer','css'=>array('admins/common'),'js'=>Null);
$this->element('override',array("content_override"=>$override));
?>
<div class="row-fluid">
	<div class="span2">
		<div class="offset1">
			<h4><?php echo __('Actions'); ?></h4>
			<ul class="nav nav-tabs nav-stacked">
				<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Customer.id')), null, __('Are you sure you want to delete this customer?')); ?></li>
			</ul>
<!-- 			<ul class="nav nav-tabs nav-stacked">
				<li><?php echo $this->Html->link(__('List Customer Types'), array('controller' => 'customer_types', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Customer Type'), array('controller' => 'customer_types', 'action' => 'add')); ?> </li>
			</ul> -->
<!-- 			<ul class="nav nav-tabs nav-stacked">
				<li><?php echo $this->Html->link(__('List Discounts'), array('controller' => 'discounts', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Discounts'), array('controller' => 'discounts', 'action' => 'add')); ?> </li>
			</ul> -->
		</div>
	</div>
	<div class="span8">
		<?php echo $this->Form->create('Customer'); ?>
		<fieldset>
			<h4><?php echo __('Edit Customer'); ?></h4>
			<?php
			echo $this->Form->input('id');
			echo $this->Form->input('name');
			echo $this->Form->input('email');
			echo $this->Form->input('address');
			echo $this->Form->input('phone');
			echo $this->Form->input('customer_type_id');
			?>
			<div class="input-append">
				<label for="DiscountValue">Discount</label>
				<?php echo $this->Form->input('discount_id',array('label'=>false,'options'=>$discounts,'div'=>false,'empty'=>'-')); ?>
				<span class="add-on">%</span>
			</div>
		</fieldset>
		<?php echo $this->Form->end(array('class'=>'btn btn-large btn-primary')); ?>
	</div>
</div>