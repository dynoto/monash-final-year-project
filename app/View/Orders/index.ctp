<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'SK Kitchens Index', 'css' => 'admins/common', 'js' => NULL);
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
<div class="span2">
	<div class="offset1">
	<h4><?php echo __('Actions'); ?></h4>
	<ul class="nav nav-tabs nav-stacked">
		<li><?php echo $this->Html->link(__('Customers List'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Products List'), array('controller' => 'products', 'action' => 'index')); ?> </li>
	</ul>
</div>
</div>
<div class="span8">
	<h4 class='ib'><?php echo __('Orders'); ?></h4>
	<?php echo $this->Html->link(__('New Order'), array('action' => 'add'),array('class'=>'btn pull-right')); ?>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('customers_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th>Total Price</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($orders as $order): ?>
	<tr>
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($order['Customers']['name'], array('controller' => 'customers', 'action' => 'view', $order['Customers']['id'])); ?>
		</td>
		<td><?php echo h($order['Order']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
</div>
