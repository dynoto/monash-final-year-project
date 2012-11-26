<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => '', 'css' => array('admins/common','admins/kitchens_missing'), 'js' => array(null));
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
	<div class="row-fluid span8 offset2">
		<?php echo $this->Form->create('criteriaValuesKitchen'); ?>
		<div class="row-fluid span12 table_header">
			<h4 class="span1">ID</h4>
			<h4 class="span2">Name</h4>
			<h4 class="span9">Missing Criterias</h4>
		</div>
		<?php foreach ($missing as $k_id => $c_array) { ?>
		<div class="row-fluid span12">
				<div class="span1">
				<p><?php echo $k_id; ?></p>
				</div>
				<div class="row-fluid span2">
					<div class="span12"><?php 
						if(isset($images[$k_id])){
							echo $this->Html->Image('kitchen/'.$images[$k_id]); 
						} else {
							echo $this->Html->Image('common/image_error.jpg');
						}
					?></div>
					<p class="span12"><?php echo $kitchens[$k_id]; ?></p>
				</div>
				<div class="kitchen_criteria span9">
					<?php 
						foreach ($c_array as $c_id => $c_name) {
							echo $this->Form->input('criteriaValuesKitchen['+$k_id+']',array('label'=>array('style'=>'font-size:1.1em ; font-weight:bold','text'=>$c_name),'type'=>'select','multiple'=>'checkbox','options'=>$criterias[$c_id],'hiddenField'=>null));
						}
					?>
				</div>
		</div>
		<?php } ?>
		<?php echo $this->Form->end(array('class'=>'btn btn-primary btn-large pull-right'));
		?>

	</div>
</div>