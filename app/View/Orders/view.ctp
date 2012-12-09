<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'SK Kitchens Index', 'css' => 'admins/common');
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
	<div class="span2">
		<div class="offset1">
		<h4><?php echo __('Actions'); ?></h4>
		<ul class="nav nav-tabs nav-stacked">
			<!-- <li><?php echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['id'])); ?> </li> -->
			<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?> </li>
			<li><?php echo $this->Html->link('Back to View Customer',array('controller'=>'customers','action'=>'view',$customer_id)); ?></li>
			<!-- <li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?> </li> -->
			<!-- <li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Customers'), array('controller' => 'customers', 'action' => 'add')); ?> </li> -->
		</ul>
		</div>
	</div>
	<div class="span8">
		<div class="span12 row-fluid">
			<div class="orders view span5">
			<h4><?php  echo __('Order'); ?></h4>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
					<dd>
						<?php echo 'ORD'.str_pad(h($order['Order']['id']),7,"0",STR_PAD_LEFT); ?>
					</dd>
<!-- 				<dt><?php echo __('By Customer'); ?></dt>
					<dd>
						<?php
						if(isset($order['Customer']['name'])):
							echo $this->Html->link($order['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['id']));
						else:
							echo 'ADMINISTRATOR';
						endif;
						?>
					</dd> -->
				<dt><?php echo __('Date'); ?></dt>
					<dd>
						<?php echo h($this->Time->niceShort($order['Order']['date'])); ?>
					</dd>
			</dl>
			</div>
			<div class="span6">
			<h4>Customer</h4>
			<?php $customer = $order['Customer'] ?>
			<dl>
				<dt>Id</dt><dd><?php echo $customer['id']; ?></dd>
				<dt>Name</dt>
				<dd><?php
						if(isset($order['Customer']['name'])):
							echo $this->Html->link($order['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['id']));
						else:
							echo 'ADMINISTRATOR';
						endif;
						?>
				</dd>
				<dt>Email</dt>
				<dd><?php if(isset($customer['email'])){echo $customer['email'];} ?></dd>
				<dt>Phone</dt><dd><?php if(isset($customer['phone'])){echo $customer['phone'];} ?></dd>
				<dt>Address</dt><dd><?php if(isset($customer['phone'])){echo $customer['address'];} ?></dd>
			</dl>
		</div>
		<div class="row-fluid span12">
			<div>
			<h4 class="ib">Order Items</h4>
			<button class="btn btn-primary btn-large pull-right ib" onClick="window.print()">Print</button>
			</div>
			<table class="table table-bordered table-striped">
				<tr>
					<td>Product Name</td>
					<td>Dimension</td>
					<td>Range Types</td>
					<td>Quantity</td>
				</tr>
			<?php foreach ($order['OrderItem'] as $orderItem): ?>
				<tr>
					<td><?php echo $products[$orderItem['product_id']] ?></td>
					<td><?php 
					echo '<b>Height</b> : '.$orderItem['height'].'<br>';
					echo '<b>Width</b> : '.$orderItem['width'].'<br>';
					echo '<b>Depth</b> : '.$orderItem['depth'].'<br>';
					 ?>
					</td>
					<td>
					<?php 
					foreach ($orderItem['RangeValue'] as $rv):
						echo '<b>'.$range_types[$rv['range_type_id']].'</b>'.' : '.$rv['name'].'<br>';
					endforeach;
					?>
					</td>
					<td><?php echo $orderItem['quantity'] ?></td>

				</tr>
			<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>
<?php //pr($order) ?>
