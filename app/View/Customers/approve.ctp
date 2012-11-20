<?php
echo $this->extend('/common/admins');
$content_override = array('title' => 'Customers List', 'css' => ['admins/common','admins/customer_approve'], 'js' => ['admins/customer_approve']);
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
	<div class="span2">
		<div class="offset1">
			<h4><?php echo __('Actions'); ?></h4>
			<ul class="nav nav-tabs nav-stacked">
				<?php if(isset($user_count)){ ?>
				<li><?php 
				echo $this->Html->link('Pending Approval : '.$user_count, 
					array('action'=>'approve'),
					array('class'=>'alert alert-error')
					);
					?></li>
					<?php } ?>
					<li><?php echo $this->Html->link('New Customer', array('action' => 'add')); ?></li>
				</ul>
				<!--
		<ul class="nav nav-tabs nav-stacked">
		<li><?php echo $this->Html->link('List Customer Types', array('controller' => 'customer_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('New Customer Type', array('controller' => 'customer_types', 'action' => 'add')); ?> </li>
	</ul>-->
	<ul class="nav nav-tabs nav-stacked">
		<li><?php echo $this->Html->link('List Discounts', array('controller' => 'discounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('New Discounts', array('controller' => 'discounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>

<div class="span9">
	<h4><?php echo __('Customers'); ?></h4>
	<?php echo $this->Form->create('Customer'); ?>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th>Username</th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('discount_id'); ?></th>
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
			<td class="nowrap"><?php echo $this->Form->input('Customer.'.$customer_id.'.discount_id',array('label'=>false,'options'=>$discounts,'empty'=>''));?> %</td>
			<td class="actions">
				<?php
				echo $this->Form->input('Checked.',array('label'=>false,'type'=>'checkbox','hiddenField'=>false,'value'=>$customer_id));
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