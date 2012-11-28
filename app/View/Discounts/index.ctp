<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'SK Kitchens Index', 'css' => array('admins/common','admins/discounts'), 'js' => NULL);
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
	<div class="span8 offset2">
		<div class="row-fluid">
			<h4 style="display:inline">Discounts</h4>
			<?php //echo $this->Html->link(__('New Discount'), array('action' => 'add'), array('class' => 'pull-right btn')); ?>
		</div>
		<div class="row-fluid">
		<table class="table table-bordered table-striped">
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('discount'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($discounts as $discount): ?>
			<tr>
				<td><?php echo h($discount['Discount']['id']); ?>&nbsp;</td>
				<td><?php echo h($discount['Discount']['value']).'%'; ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $discount['Discount']['id']), null, __('Deleting discount value will cause all products, customers and orders to lose the association, are you sure?', $discount['Discount']['id'])); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
		<p class="alert alert-error">No non-digit characters. No Decimals. Only first TWO DIGITS will be counted.</p>
		<?php 
		echo $this->Form->create('Discount');
		echo $this->Form->input('Discount.value',array('label'=>'New Discount Percentage','required'=>true));
		echo $this->Form->end(array('class'=>'btn btn-primary ib','label'=>'Save Discount'));
		?>
		</div>
		<div class="row-fluid">
			<p>
			<?php
			echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
			?>	
			</p>
			<div class="paging">
				<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
				?>
			</div>
		</div>
	</div>
</div>