<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => 'View Kitchen', 'css' => array('admins/common'), 'js' => null);
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
	<div class="span2">
		<div class="offset1">
			<h4><?php echo __('Actions'); ?></h4>
			<ul class="nav nav-tabs nav-stacked">
				<li><?php echo $this->Html->link(__('List Enquiries'), array('controller'=>'administrators','action' => 'index')); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Enquiry'), array('action' => 'delete', $enquiry['Enquiry']['id']), null, __('Are you sure you want to delete # %s?', $enquiry['Enquiry']['id'])); ?> </li>
			</ul>
		</div>
	</div>
	<div class="span8 enquiries view">
		<h4><?php  echo __('Enquiry'); ?></h4>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($enquiry['Enquiry']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($enquiry['Enquiry']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Email'); ?></dt>
			<dd>
				<?php echo h($enquiry['Enquiry']['email']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Telephone'); ?></dt>
			<dd>
				<?php echo h($enquiry['Enquiry']['telephone']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Message'); ?></dt>
			<dd>
				<?php echo h($enquiry['Enquiry']['message']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
</div>
