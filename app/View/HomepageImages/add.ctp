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
			<?php echo $this->Form->create('HomepageImage')?>
			<table class="table table-striped table-bordered">
				<tr>
					<th>Kitchen</th>
					<th>Image</th>
				</tr>
				<tr>
					<td>
						<?php echo $this->Form->input('',array('type'=>'select','options'=>$kitchens_list,'label'=>false,'class'=>'kitchen_list')); ?>
					</td>
					<td class="unchecked_td">
					<?php 
					foreach ($kitchens as $k => $v) {
						foreach ($v['Image'] as $kk => $vv) { ?>
							<?php	
							if(!in_array($vv['id'], $imageIds)){
							?>
								<label class="item kitchen_<?php echo $v['Kitchen']['id']; ?>">
								<?php 
								echo $this->Form->input('position.',array('label'=>false,'type'=>'checkbox','class'=>'select_image_checkbox','hiddenField'=>false,'value'=>$vv['id']));
								echo $this->Html->image('kitchen/'.$vv['name'],array('class'=>'thumbnail kitchen_'.$v['Kitchen']['id']));
								?>
								</label>
							<?php 
							}
						}
					} 
					?>
			</td>
				</tr>
				<tr>
					<td>Selected</td>
					<td class="checked_td"></td>
				</tr>
		</table>
		<?php echo $this->Form->end(array('class'=>'btn btn-primary pull-right btn-large','label'=>'Update'))?>
	</div>
</div>
</div>
<?php echo $this->element('sql_dump'); ?>