<div class="kitchens view">
<h2><?php  echo __('Kitchen'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($kitchen['Kitchen']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($kitchen['Kitchen']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Kitchen'), array('action' => 'edit', $kitchen['Kitchen']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Kitchen'), array('action' => 'delete', $kitchen['Kitchen']['id']), null, __('Are you sure you want to delete # %s?', $kitchen['Kitchen']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Kitchens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitchen'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Testimonials'), array('controller' => 'testimonials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Testimonial'), array('controller' => 'testimonials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Criteria Values'), array('controller' => 'criteria_values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Images'); ?></h3>
	<?php if (!empty($kitchen['Image'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Kitchen Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($kitchen['Image'] as $image): ?>
		<tr>
			<td><?php echo $image['id']; ?></td>
			<td><?php echo $image['name']; ?></td>
			<td><?php echo $image['kitchen_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'images', 'action' => 'view', $image['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'images', 'action' => 'edit', $image['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'images', 'action' => 'delete', $image['id']), null, __('Are you sure you want to delete # %s?', $image['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Testimonials'); ?></h3>
	<?php if (!empty($kitchen['Testimonial'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Kitchen Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($kitchen['Testimonial'] as $testimonial): ?>
		<tr>
			<td><?php echo $testimonial['id']; ?></td>
			<td><?php echo $testimonial['description']; ?></td>
			<td><?php echo $testimonial['kitchen_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'testimonials', 'action' => 'view', $testimonial['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'testimonials', 'action' => 'edit', $testimonial['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'testimonials', 'action' => 'delete', $testimonial['id']), null, __('Are you sure you want to delete # %s?', $testimonial['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Testimonial'), array('controller' => 'testimonials', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Criteria Values'); ?></h3>
	<?php if (!empty($kitchen['CriteriaValue'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Criteria Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($kitchen['CriteriaValue'] as $criteriaValue): ?>
		<tr>
			<td><?php echo $criteriaValue['criteria_id']; ?></td>
			<td><?php echo $criteriaValue['id']; ?></td>
			<td><?php echo $criteriaValue['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'criteria_values', 'action' => 'view', $criteriaValue['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'criteria_values', 'action' => 'edit', $criteriaValue['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'criteria_values', 'action' => 'delete', $criteriaValue['id']), null, __('Are you sure you want to delete # %s?', $criteriaValue['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Criteria Value'), array('controller' => 'criteria_values', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
