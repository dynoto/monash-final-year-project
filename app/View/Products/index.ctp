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
			<li><?php echo $this->Html->link('Edit Product(s) Criteria',array('action'=>'fill_missing_criteria')); ?></li>
		</ul>
	</div>
	</div>
	<div class="span8">
		<div class="row-fluid">
            <h4 class="ib"><?php echo __('Products'); ?></h4>
            <?php echo $this->Html->link(__('New Product'), array('action' => 'add'), array('class' => 'pull-right btn')); ?>
        </div>
		<div class="row-fluid">
			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
				<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
<!-- 					<th><?php echo $this->Paginator->sort('price'); ?></th>
					<th><?php echo $this->Paginator->sort('discount'); ?></th> -->
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php
				foreach ($products as $product): ?>
				<tr>
					<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
					<td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
					<!-- <td><?php echo '$ '.h($product['Product']['price']); ?>&nbsp;</td>
					<td>
						<?php 
						if(isset($product['Product']['discount'])){
							echo h($product['Product']['discount']).'%';
						}else{
							echo '-';
						}
						?>
					</td> -->
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
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
</div>
