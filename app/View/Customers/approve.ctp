<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'Customers List', 'css' => array('admins/common','admins/customer_approve'), 'js' => array('admins/customer_approve'));
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
	<div class="span2">
		<div class="offset1">
			<h4><?php echo __('Actions'); ?></h4>
			<ul class="nav nav-tabs nav-stacked">
					<li><?php echo $this->Html->link('List Customers', array('action' => 'index')); ?></li>
			</ul>
				<!--
		<ul class="nav nav-tabs nav-stacked">
		<li><?php echo $this->Html->link('List Customer Types', array('controller' => 'customer_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('New Customer Type', array('controller' => 'customer_types', 'action' => 'add')); ?> </li>
	</ul>-->
</div>
</div>

<div class="span9">
	<h4 class="ib"><?php echo __('Customers'); ?></h4>
	<?php echo $this->Html->link('New Customer', array('action' => 'add'),array('class'=>'pull-right btn')); ?>
	<?php echo $this->Form->create('Customer'); ?>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
		<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th>Username</th>
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
			<td><?php echo h($customer['Customer']['id']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['name']); ?>&nbsp;</td>
			<td><?php echo h($customer['User']['name']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['email']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['address']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['phone']); ?>&nbsp;</td>
			<td>
				<?php 
				$customer_id = $customer['Customer']['id'];
				echo $this->Form->input('Customer.'.$customer_id.'.customer_type_id',array('label'=>false,'options'=>$customerTypes,'empty'=>''));
				?>	
			</td>
			<!-- <td><?php echo h($customer['Customer']['discount']); ?>&nbsp;</td> -->
			<td class="actions">
				<?php
				echo $this->Form->input('Checked.',array('label'=>false,'type'=>'checkbox','hiddenField'=>false,'div'=>false,'class'=>'ib checkboxes','value'=>$customer_id));
				?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
<?php 
echo $this->Form->input('Approve Selected',array('label'=>false,'type'=>'submit','class'=>'btn btn-primary btn-large inline pull-right','value'=>'1','name'=>'data[approve]','onclick'=>'return validateConfirm(1)','required'=>true));
echo $this->Form->input('Deny Selected',array('label'=>false,'type'=>'submit','class'=>'btn btn-danger inline btn-large pull-right','value'=>'0','name'=>'data[approve]','onclick'=>'return validateConfirm(-1)'));
echo $this->Form->hidden('approve_boolean');
echo $this->Form->end();
?>
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