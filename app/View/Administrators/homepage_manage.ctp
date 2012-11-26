<?php
echo $this->extend('/Common/admins');
$content_override = array('title'=>'Home Page Management','css'=>array('admins/common','admins/homepage_manage'),'js'=>array('admins/homepage_manage'));
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid margin-center main_content">
	<div class="span10 offset1">
		<div class="row-fluid">
			<h4 style="display:inline">Homepage Carousel Management</h4>
			<?php echo $this->Html->link('Add Images',array('action'=>'homepage_manage_add'),array('class'=>'pull-right btn')); ?>
		</div>
		<div class="row-fluid">
			<?php echo $this->Form->create('HomepageImage')?>
			<table class="table table-striped table-bordered">
				<tr>
					<th>Id</th>
					<th>Image</th>
					<th>Kitchen Name</th>
					<th>Position</th>
					<th>Delete</th>
				</tr>
				<?php foreach ($homepageImages as $k => $w) {
					$v = $w['HomepageImage'];?>
					<tr>
						<td><?php echo $v['id'] ?></td>
						<td><?php echo $this->Html->Image('kitchen/'.$w['Image']['name'],array('class'=>'thumbnail')); ?></td>
						<td><?php echo $kitchens[$w['Image']['kitchen_id']] ?></td>
						<td><?php 
							echo $this->Form->input('HomepageImage.position.'.$v['id'],array('value'=>$v['position'],'label'=>false,'class'=>'span4','required'=>true,'id'=>'image_'.$v['id'],'hiddenField'=>false));
						?></td>
						<td><?php echo $this->Form->input('Homepage.delete.',array('type'=>'checkbox','class'=>'delete_checkbox','label'=>false,'value'=>$v['id'],'hiddenField'=>false,'checked'=>false)); ?></td>
					</tr>
				<?php } ?>
			</table>
			<?php echo $this->Form->end(array('class'=>'btn btn-primary pull-right btn-large','label'=>'Update'))?>
		</div>
	</div>
</div>