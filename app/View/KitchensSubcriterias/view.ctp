<div class="kitchensSubcriterias view">
<h2><?php  echo __('Kitchens Subcriteria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($kitchensSubcriteria['KitchensSubcriteria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subcriteria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($kitchensSubcriteria['Subcriteria']['name'], array('controller' => 'subcriterias', 'action' => 'view', $kitchensSubcriteria['Subcriteria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kitchen'); ?></dt>
		<dd>
			<?php echo $this->Html->link($kitchensSubcriteria['Kitchen']['name'], array('controller' => 'kitchens', 'action' => 'view', $kitchensSubcriteria['Kitchen']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Kitchens Subcriteria'), array('action' => 'edit', $kitchensSubcriteria['KitchensSubcriteria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Kitchens Subcriteria'), array('action' => 'delete', $kitchensSubcriteria['KitchensSubcriteria']['id']), null, __('Are you sure you want to delete # %s?', $kitchensSubcriteria['KitchensSubcriteria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Kitchens Subcriterias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitchens Subcriteria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcriterias'), array('controller' => 'subcriterias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcriteria'), array('controller' => 'subcriterias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kitchens'), array('controller' => 'kitchens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitchen'), array('controller' => 'kitchens', 'action' => 'add')); ?> </li>
	</ul>
</div>
