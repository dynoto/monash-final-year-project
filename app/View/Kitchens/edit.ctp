<?php
echo $this->extend('/common/admins');
$override = array('title' => 'Edit Kitchen', 'css' => array('admins/common','admins/uploadify'), 'js' => array('admins/jquery.uploadify-3.1.min'));
echo $this->element('override', array('content_override' => $override));
$data = $this->request->data;
?>
<script type="text/javascript">
$(document).ready(function(){
        $('#ImageUploadImage').uploadify({
            'swf'           : "<?php echo $this->html->url('/app/webroot/uploadify/uploadify.swf');?>",
            'uploader'      : "<?php echo $this->html->url('/images/add_ajax/'.$data['Kitchen']['id'].'/Kitchen/');?>",
        });
    });
</script>
<div class="row-fluid">
    <div class="span2">
        <div class="offset1">
            <h4><?php echo __('Actions'); ?></h4>
            <ul class='nav nav-tabs nav-stacked'>
                <li><?php echo $this->Html->link('Back',array('action'=>'view',$data['Kitchen']['id'])) ?></li>
                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Kitchen.id')), null, __('Are you sure you want to delete '.$data['Kitchen']['name'].'?', $this->Form->value('Kitchen.id'))); ?></li>
                <li><?php echo $this->Html->link(__('List Kitchens'), array('action' => 'index')); ?></li>
            </ul>
        </div>
    </div>
    <div class="span8">
        <?php echo $this->Form->create('Kitchen'); ?>
        <fieldset>
            <h4><?php echo __('Edit Kitchen'); ?></h4>
            <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name',array('required'=>true));
            echo $this->Form->input('description',array('class'=>'span8')); ?>

            <!--EDIT TESTIMONIAL SECTION-->
            <hr>
            <h4>Testimonial</h4>
            <?php
            if(!empty($data['Testimonial'][0])){
                $testimonial_value = $data['Testimonial'][0]['description'];
            } else {
                $testimonial_value = null;
            }
            echo $this->Form->input('Testimonial.description',array('class'=>'span8','value'=>$testimonial_value));
            ?>
            <!--ADD IMAGE SECTION -->
            <hr>
            <h4>Add Image</h4>
            <?php
            echo $this->Form->input('Upload Image',array('type'=>'file','id'=>'ImageUploadImage'));
            ?>

            <!--EDIT CRITERIA VALUES SECTION-->
            <hr>
            <h4>Criteria Values</h4>
            <?php
            foreach ($criterias as $key_a => $val_a) { ?>
            <h5><?php echo $val_a['Criteria']['name']; ?></h5>
            <?php
                $temp = null;
                foreach ($val_a['CriteriaValue'] as $key_aa => $val_aa) {
                    $temp[$val_aa['id']] = $val_aa['name'];
                }
                echo $this->Form->input('CriteriaValuesKitchen.criteria_value_id',array('label'=>false,'type'=>'select','multiple'=>'checkbox','options'=>$temp,'selected'=>$checked,'hiddenField'=>null)); ?>
                <br>
            <?php } ?>
        </fieldset>
        <?php 
        echo $this->Form->end(array('class'=>'btn btn-primary btn-large')); 
        ?>
    </div>

</div>