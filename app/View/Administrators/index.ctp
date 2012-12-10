<?php
echo $this->extend('/Common/admins');
$override = array('title'=>'Admin HomePage','css'=>array('admins/common'));
echo $this->element('override',array('content_override'=>$override));
?>
<div class="row-fluid">
<div class="span2">
	<div class="offset1">
				<!-- <h4>Actions</h4> -->
		<ul class="nav nav-tabs nav-stacked">
		<li><?php echo $this->Html->link('Manage Homepage Carousel',array('controller'=>'Homepageimages','action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Manage Users',array('controller'=>'users')); ?></li>
		</ul>
	</div>
</div>
	<div class="span8">
        <div class="row-fluid">
            <h4 class="ib">Visitor Enquiries</h4>
        </div>
        <div class="row-fluid">
		<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped datatables">
			<thead>
			<tr>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th><?php echo $this->Paginator->sort('email'); ?></th>
					<th><?php echo $this->Paginator->sort('telephone'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			</thead>
			</tbody>
			<?php
			foreach ($enquiries as $enquiry): ?>
			<tr>
				<td><?php echo h($enquiry['Enquiry']['name']); ?>&nbsp;</td>
				<td><?php echo h($enquiry['Enquiry']['email']); ?>&nbsp;</td>
				<td><?php echo h($enquiry['Enquiry']['telephone']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller'=>'enquiries','action' => 'view', $enquiry['Enquiry']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller'=>'enquiries','action' => 'delete', $enquiry['Enquiry']['id']), null, __('Are you sure you want to delete # %s?', $enquiry['Enquiry']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
			</table>
		</div>
	</div>
</div>