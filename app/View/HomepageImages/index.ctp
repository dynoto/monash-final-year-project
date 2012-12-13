<?php
echo $this->extend('/Common/admins');
$content_override = array('title'=>'Home Page Management','css'=>array('admins/common','admins/homepage_manage'),'js'=>array('admins/homepage_manage'));
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid margin-center main_content">
	<div class="span10 offset1">
		<div class="row-fluid">
			<h4 style="display:inline">Homepage Carousel Management</h4>
			<?php echo $this->Html->link('Pick Images',array('action'=>'add'),array('class'=>'pull-right btn')); ?>
		</div>
		<div class="row-fluid">
			<?php echo $this->Form->create('HomepageImage')?>
			<table class="table table-striped table-bordered">
				<tr>
					<th>Image</th>
					<th>Kitchen Name</th>
					<th>Position</th>
					<th>Remove from Homepage</th>
				</tr>
				<?php $c = 0; ?>
				<?php foreach ($homepageImages as $k => $w) {
					$v = $w['HomepageImage'];?>
					<tr>
						<td><?php echo $this->Html->Image('kitchen/'.$w['Image']['name'],array('class'=>'thumbnail')); ?></td>
						<td><?php echo $kitchens[$w['Image']['kitchen_id']] ?></td>
						<td><?php
							echo $this->Form->input('HomepageImage.'.$c.'.id',array('type'=>'hidden','id'=>'hidden_'.$v['id'],'value'=>$v['id']));
							echo $this->Form->input('HomepageImage.'.$c.'.position',array('type'=>'select','options'=>$count,'selected'=>$v['position'],'id'=>'image_'.$v['id'],'label'=>false,'hiddenField'=>false));
						?></td>
						<td><?php echo $this->Form->input('Homepage.delete.',array('type'=>'checkbox','class'=>'delete_checkbox','label'=>false,'value'=>$v['id'],'hiddenField'=>false,'checked'=>false)); ?></td>
					</tr>
					<?php $c +=1 ?>
				<?php } ?>
			</table>
			<?php echo $this->Form->end(array('class'=>'btn btn-primary pull-right btn-large','label'=>'Update'))?>
		</div>
	</div>
</div>