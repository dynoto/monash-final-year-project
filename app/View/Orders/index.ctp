<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'SK Kitchens Index', 'css' => 'admins/common');
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
	<div class="span2">
		<div class="offset1">
			<!-- <h4><?php echo __('Actions'); ?></h4> -->
			<ul class="nav nav-tabs nav-stacked">
				<li><?php echo $this->Html->link(__('Customers List'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Products List'), array('controller' => 'products', 'action' => 'index')); ?> </li>
			</ul>
		</div>
	</div>
	<div class="span8">
		<h4 class='ib'><?php echo __('Quotes'); ?></h4>
		<?php //echo $this->Html->link(__('New Order'), array('action' => 'add'),array('class'=>'btn pull-right')); ?>
		<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered datatables">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('id','Quote Number'); ?></th>
					<th><?php echo $this->Paginator->sort('customers_id','Customer'); ?></th>
					<th><?php echo $this->Paginator->sort('date'); ?></th>
					<!-- <th>Total Price</th> -->
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($orders as $order): ?>
				<tr>
					<td><?php echo 'ORD'.str_pad(h($order['Order']['id']),7,"0",STR_PAD_LEFT); ?>&nbsp;</td>
					<td>
						<?php
						if(isset($order['Customer']['id'])):
							echo $this->Html->link($order['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['id']));
						else:
							echo 'Admin Order';
						endif;
						?>

					</td>
					<td><?php echo h($this->Time->format('D, d-M-Y',$order['Order']['date'])); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id'])); ?>
						<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), null, __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
<!-- 	<p>
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
</div> -->
	</div>
</div>
