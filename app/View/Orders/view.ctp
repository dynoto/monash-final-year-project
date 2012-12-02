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
			<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?> </li>
			<!-- <li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?> </li> -->
			<!-- <li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Customers'), array('controller' => 'customers', 'action' => 'add')); ?> </li> -->
		</ul>
		</div>
	</div>
	<div class="span8">
		<div class="orders view">
		<h4><?php  echo __('Order'); ?></h4>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($order['Order']['id']); ?>
				</dd>
			<dt><?php echo __('By Customer'); ?></dt>
				<dd>
					<?php 
					if(isset($order['Customer']['name'])):
						echo $this->Html->link($order['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['id'])); 
					else:
						echo 'ADMINISTRATOR';
					endif;
					?>
				</dd>
			<dt><?php echo __('Date'); ?></dt>
				<dd>
					<?php echo h($this->Time->niceShort($order['Order']['date'])); ?>
				</dd>
		</dl>
		</div>

		<div>
			<h4>Order Items</h4>
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
<?php pr($order) ?>
