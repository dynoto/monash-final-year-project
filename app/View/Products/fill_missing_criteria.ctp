<?php
echo $this->extend('/Common/admins');
$content_override = array('title' => '', 'css' => array('admins/common','admins/Products_missing'), 'js' => array(null));
echo $this->element('override', array("content_override" => $content_override));
?>
<div class="row-fluid">
	<div class="row-fluid span8 offset2">
		<?php echo $this->Form->create('criteriaValuesProduct'); ?>
		<div class="row-fluid span12 table_header">
			<h4 class="span1">ID</h4>
			<h4 class="span2">Name</h4>
			<h4 class="span9">Edit Criterias</h4>
		</div>
		<?php foreach ($products as $p_id => $c_array) { ?>
		<div class="row-fluid span12">
				<div class="span1">
				<p><?php echo $p_id; ?></p>
				</div>
				<div class="row-fluid span2">
					<div class="span12"><?php 
						if(isset($images[$p_id])){
							echo $this->Html->Image('product/'.$images[$p_id]); 
						} else {
							echo $this->Html->Image('common/image_error.jpg');
						}
					?></div>
					<p class="span12"><?php echo $products[$p_id]; ?></p>
				</div>
				<div class="product_criteria span9">
					<?php 
						foreach ($criterias as $c_id => $c_array):
							if(count($c_array) > 0):
							echo $this->Form->input('criteriaValuesProduct['+$p_id+']',array('label'=>array('style'=>'font-size:1.1em ; font-weight:bold','text'=>$c_id),'type'=>'select','multiple'=>'checkbox','options'=>$c_array,'hiddenField'=>null,'selected'=>$selected[$p_id]));
							endif;
						endforeach;
					?>
				</div>
		</div>
		<?php } ?>
		<?php echo $this->Form->end(array('class'=>'btn btn-primary btn-large pull-right'));
		?>

	</div>
</div>