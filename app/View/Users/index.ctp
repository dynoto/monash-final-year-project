<?php
echo $this->extend('/Common/admins');
$override = array('title'=>'Admin HomePage','css'=>array('admins/common'),'js'=>null);
echo $this->element('override',array('content_override'=>$override))
?>
<div class="row-fluid">
	<div class="span2 row-fluid">
		<!--
		<div class="offset1">
			<ul class="nav nav-tabs">
				<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
			</ul>
		</div>
		-->
	</div>
	<div class="span8 row-fluid">
		<div class="row-fluid">
			<h4 style="display:inline"><?php echo __('Users'); ?></h4>
			<?php echo $this->Html->link('Add Admin',array('controller'=>'users','action'=>'add'),array('class'=>'pull-right btn'));?>
		</div>
		<div class="row-fluid">
			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
				<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<!--<th><?php echo $this->Paginator->sort('password'); ?></th>-->
					<th><?php echo $this->Paginator->sort('group_id'); ?></th>
					<th><?php echo $this->Paginator->sort('created'); ?></th>
					<th><?php echo $this->Paginator->sort('modified'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php
				foreach ($users as $user): ?>
				<tr>
					<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
					<!--<td><?php echo h($user['User']['password']); ?>&nbsp;</td>-->
					<td><?php echo h($user['Group']['name']); ?>&nbsp;</td>
					<td><?php echo h($this->Time->format('D, d-M-Y',$user['User']['created'])); ?>&nbsp;</td>
					<td><?php echo h($this->Time->format('D, d-M-Y',$user['User']['modified'])); ?>&nbsp;</td>
					<td class="actions">
						<!--<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>-->
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['name'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
	<div>
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
