<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'Customers List', 'css' => 'admins/common', 'js' => NULL);
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
<div class="span2">
	<div class="offset1">
	<!-- <h4><?php echo __('Actions'); ?></h4> -->
	<ul class="nav nav-tabs nav-stacked">
		<?php if(isset($user_count)){ ?>
			<li><?php 
				echo $this->Html->link('Pending Approval : '.$user_count, 
					array('action'=>'approve'),
					array('class'=>'alert alert-error no-margin-bottom')
				);
			?></li>
		<?php } ?>
		<li></li>
	</ul>
				<!--
		<ul class="nav nav-tabs nav-stacked">
		<li><?php echo $this->Html->link('List Customer Types', array('controller' => 'customer_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('New Customer Type', array('controller' => 'customer_types', 'action' => 'add')); ?> </li>
	</ul>-->
</div>
</div>

<div class="span9">
	<h4 class="ib">Customers</h4>
	<?php echo $this->Html->link('New Customer', array('action' => 'add'),array('class'=>'pull-right btn')); ?>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
	<tr>
			<!-- <th><?php echo $this->Paginator->sort('id'); ?></th> -->
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_type_id'); ?></th>
			<!-- <th><?php echo $this->Paginator->sort('discount'); ?></th> -->
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($customers as $customer): ?>
	<tr>
		<!-- <td><?php echo h($customer['Customer']['id']); ?>&nbsp;</td> -->
		<td><?php echo h($customer['Customer']['name']); ?>&nbsp;</td>
		<td><?php echo h($customer['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['email']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['address']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['phone']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customer['CustomerType']['name'], array('controller' => 'customer_types', 'action' => 'view', $customer['CustomerType']['id'])); ?>
		</td>
<!-- 		<td><?php 
		if(isset($customer['Customer']['discount'])){
			echo h($customer['Customer']['discount']).'%'; 
		} else {
			echo '-';
		}
		?>&nbsp;</td> -->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $customer['Customer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customer['Customer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customer['Customer']['id']), null, __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?>
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