<div class="ecSettings view">
<h2><?php  echo __('Ec Setting'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ecSetting['EcSetting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($ecSetting['EcSetting']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($ecSetting['EcSetting']['value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ec Setting'), array('action' => 'edit', $ecSetting['EcSetting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ec Setting'), array('action' => 'delete', $ecSetting['EcSetting']['id']), null, __('Are you sure you want to delete # %s?', $ecSetting['EcSetting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ec Settings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ec Setting'), array('action' => 'add')); ?> </li>
	</ul>
</div>
