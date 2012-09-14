<div class="criteriaValuesKitchens view">
<h2><?php  echo __('Criteria Values Kitchen'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($criteriaValuesKitchen['CriteriaValuesKitchen']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Criteria Value'); ?></dt>
		<dd>
			<?php echo $this->Html->link($criteriaValuesKitchen['CriteriaValue']['name'], array('controller' => 'criteria_values', 'action' => 'view', $criteriaValuesKitchen['CriteriaValue']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kitchen'); ?></dt>
		<dd>
			<?php echo $this->Html->link($criteriaValuesKitchen['Kitchen']['name'], array('controller' => 'kitchens', 'action' => 'view', $criteriaValuesKitchen['Kitchen']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Criteria Values Kitchen'), array('action' => 'edit', $criteriaValuesKitchen['CriteriaValuesKitchen']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Criteria Values Kitchen'), array('action' => 'delete', $criteriaValuesKitchen['CriteriaValuesKitchen']['id']), null, __('Are you sure you want to delete # %s?', $criteriaValuesKitchen['CriteriaValuesKitchen']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Criteria Values Kitchens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criteria Values Kitchen'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Criteria Values'), array('controller' => 'criteria_values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kitchens'), array('controller' => 'kitchens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitchen'), array('controller' => 'kitchens', 'action' => 'add')); ?> </li>
	</ul>
</div>
