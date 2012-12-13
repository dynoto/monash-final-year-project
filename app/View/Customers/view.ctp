<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'Customers List', 'css' => 'admins/common', 'js' => NULL);
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
	<div class="span2">
		<div class="offset1">
			<h4><?php echo __('Actions'); ?></h4>
			<ul class="nav nav-tabs nav-stacked">
				<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['id']), null, __('Are you sure you want to delete this customer?')); ?> </li>
			</ul>
		</div>
	</div>
	<div class="span8">
		<h4>Customer</h4>
		<table class="table table-striped">
			<tr>
				<td><?php echo __('Username'); ?></td>
				<td>
					<?php echo h($customer['User']['name']); ?>
					&nbsp;
				</td>
			<tr>
			<tr>
				<td><?php echo __('Name'); ?></td>
				<td>
					<?php echo h($customer['Customer']['name']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><?php echo __('Email'); ?></td>
				<td>
					<?php echo h($customer['Customer']['email']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><?php echo __('Address'); ?></td>
				<td>
					<?php echo h($customer['Customer']['address']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><?php echo __('Phone'); ?></td>
				<td>
					<?php echo h($customer['Customer']['phone']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><?php echo __('Customer Type'); ?></td>
				<td>
					<?php echo $this->Html->link($customer['CustomerType']['name'], array('controller' => 'customer_types', 'action' => 'view', $customer['CustomerType']['id'])); ?>
					&nbsp;
				</td>
			</tr>
<!-- 			<tr>
				<td><?php echo __('Discount'); ?></td>
				<td>
					<?php echo h($customer['Discount']['value']); ?>
					&nbsp;
				</td>
			</tr> -->
		</table>
		<h4>Orders</h4>
		<table class="table table-striped table-bordered">
			<tr>
				<th>Order Number</th>
				<th>Date</th>
				<th>Actions</th>
			</tr>
			<?php foreach ($orders as $order):?>
				<tr>
					<td><?php echo 'ORD'.str_pad(h($order['Order']['id']),7,"0",STR_PAD_LEFT); ?>&nbsp;</td>
					<td><?php echo $order['Order']['date']; ?></td>
					<td>
						<?php 
						echo $this->Html->link('View',array('controller'=>'orders','action'=>'view',$order['Order']['id'],$customer['Customer']['id']));
						?>&nbsp; 
						<?php 
						echo $this->Form->postLink(__('Delete'), array('controller'=>'orders','action' => 'delete', $order['Order']['id'],$customer['Customer']['id']), null, __('Are you sure you want to delete this order?', $order['Order']['id'])); 
						?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>
