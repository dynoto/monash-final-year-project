<?php
echo $this->extend('/Common/admins');
$content_override = array('title'=>'Home Page Management','css'=>array('admins/common','admins/homepage_manage_add'),'js'=>array('admins/homepage_manage_add'));
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid margin-center main_content">
	<div class="span10 offset1">
		<div class="row-fluid">
			<h4 style="display:inline">Homepage Carousel Management</h4>
		</div>
		<div class="row-fluid">
			<?php echo $this->Form->create('HomepageImageAdd')?>
			<table class="table table-striped table-bordered">
				<tr>
					<th>Kitchen</th>
					<th>Image</th>
				</tr>
				<?php foreach ($kitchens as $k => $v) { ?>
				<tr>
					<td><?php echo $v['Kitchen']['name'] ?></td>
					<td><?php 
					foreach ($v['Image'] as $kk => $vv) { ?>
					<div>
						<?php	
						if(!in_array($vv['id'], $imageIds)){
							echo $this->Form->input('homepage_manage..image_id',array('label'=>false,'type'=>'checkbox','class'=>'select_image_checkbox','hiddenField'=>false,'value'=>$vv['id']));
							echo $this->Html->image('kitchen/'.$vv['name'],array('class'=>'thumbnail'));
						}
						?>
					</div>
					<?php 
					} ?></td>
			</tr>
			<?php } ?>
		</table>
		<?php echo $this->Form->end(array('class'=>'btn btn-primary pull-right btn-large','label'=>'Update'))?>
	</div>
</div>
</div>
<?php echo $this->element('sql_dump'); ?>