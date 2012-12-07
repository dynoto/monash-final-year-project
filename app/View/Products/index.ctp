<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'SK Kitchens Index', 'css' => 'admins/common', 'js' => 'admins/gallery_product_index');
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
	<div class="span2">
		<div class="offset1">
			<!-- <h4><?php echo __('Actions'); ?></h4> -->
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
			<?php echo $this->Form->create('Product'); ?>
			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered datatables">
				<thead>
				<tr>
					<!-- <th><?php echo $this->Paginator->sort('id'); ?></th> -->
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th><?php echo $this->Paginator->sort('priority'); ?></th>
<!-- 					<th><?php echo $this->Paginator->sort('price'); ?></th>
					<th><?php echo $this->Paginator->sort('discount'); ?></th> -->
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($products as $product): ?>
				<tr>
					<!-- <td><?php echo h($product['Product']['id']); ?>&nbsp;</td> -->
					<td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
					<td>
                            <div class="priority-view ib">
                            <?php echo h($product['Product']['priority']); ?>&nbsp;
                            </div>
                            <div class="invisible priority-edit ib">
                            <?php 
                            echo $this->Form->input($product['Product']['id'].'.id',array('value'=>$product['Product']['id']));
                            echo $this->Form->input($product['Product']['id'].'.priority',array('value'=>$product['Product']['priority'],'label'=>false,'div'=>false,'class'=>'no-margin')); 
                            ?>
                            </div>
					</td>
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
			</tbody>
		</table>
		<div class="pull-right">
			<?php 
			echo $this->Form->submit('Update Priority',array('class'=>'ib btn btn-submit-priority invisible btn-large btn-primary','div'=>false));
			echo $this->Form->button('Edit Priority',array('class'=>'ib btn btn-large btn-edit-priority','type'=>'button'));
			?>
		</div>
		<?php echo $this->Form->end(); ?>
<!-- 		<p>
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
</div>
