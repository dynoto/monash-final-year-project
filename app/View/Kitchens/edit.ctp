<?php
echo $this->extend('/Common/admins');
$override = array('title' => 'Edit Kitchen', 'css' => array('admins/common','admins/uploadify','admins/kitchen_product_view'), 'js' => array('admins/jquery.uploadify-3.1.min','admins/kitchen_product_edit'));
echo $this->element('override', array('content_override' => $override));
$data = $this->request->data;
?>
<div class="row-fluid">
    <div class="span2">
        <div class="offset1">
            <h4><?php echo __('Actions'); ?></h4>
            <ul class='nav nav-tabs nav-stacked'>
                <li><?php echo $this->Html->link(__('List Gallery'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Back to Gallery',array('action'=>'view',$data['Kitchen']['id'])) ?></li>
                <li><?php echo $this->Form->postLink(__('Delete Gallery'), array('action' => 'delete', $this->Form->value('Kitchen.id')), array('class'=>'disableprompt'), __('Are you sure you want to delete '.$data['Kitchen']['name'].'?', $this->Form->value('Kitchen.id'))); ?></li>
            </ul>
        </div>
    </div>
    <div class="span8">
        <?php echo $this->Form->create('Kitchen'); ?>
        <fieldset>
            <h4><?php echo __('Edit Gallery'); ?></h4>
            <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name',array('required'=>true));
            echo $this->Form->input('description',array('class'=>'span8','required'=>true)); ?>

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
            if (!empty($data['Image'])): ?>
            <table class="table table-striped">
                <tr>
                    <th><?php echo __('Id'); ?></th>
                    <th><?php echo __('Name'); ?></th>
                    <th class="Delete"><?php echo __('Delete'); ?></th>
                </tr>
                <?php foreach ($images as $key => $value): 
                    $image['id'] = $key;
                    $image['name'] = $value
                ?>
                <tr>
                    <td><?php echo $image['id']; ?></td>
                    <td>
                        <?php 
                        echo $this->Html->image('kitchen/'.$image['name'],array('class'=>'view_image_thumbnail','onclick'=>'return show_hide_image('.$image['id'].')'));
                        echo $image['name']; 
                        ?>
                    </td>
                    <td class="actions">
                        <?php 
                        echo $this->Form->input('Image.id.',array('type'=>'checkbox','value'=>$image['id'],'label'=>false,'hiddenField'=>false));
                        ?>
                    </td>
                </tr>
                <tr class="image_column" id="<?php echo $image['id']; ?>"style="display">
                    <td colspan="3">
                        <?php echo $this->Html->image('kitchen/'.$image['name']); ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>

            <!--EDIT CRITERIA VALUES SECTION-->
            <hr>
            <h4>Criteria Values</h4>
            <div class="inline-criteria-values">
            <?php
            foreach ($criterias as $key_a => $val_a) { ?>
            <div>
            <h5><?php echo $val_a['Criteria']['name']; ?></h5>
            <?php
                $temp = null;
                foreach ($val_a['CriteriaValue'] as $key_aa => $val_aa) {
                    $temp[$val_aa['id']] = $val_aa['name'];
                }
                echo $this->Form->input('CriteriaValuesKitchen.criteria_value_id',array('label'=>false,'type'=>'select','multiple'=>'checkbox','options'=>$temp,'selected'=>$checked,'hiddenField'=>null)); ?>
                <br>
            </div>
            <?php } ?>
            </div>
        </fieldset>
        <?php 
        echo $this->Form->end(array('class'=>'btn btn-primary btn-large')); 
        ?>
    </div>
</div>

<?php $this->start('etc_script'); ?>
<script type="text/javascript">
$(document).ready(function(){
        $('#ImageUploadImage').uploadify({
            'buttontext'    : "Select Images ...",
            'swf'           : "<?php echo $this->html->url('/app/webroot/uploadify/uploadify.swf');?>",
            'uploader'      : "<?php echo $this->html->url('/images/add_ajax/'.$data['Kitchen']['id'].'/kitchen/');?>",
        });
    });
</script>
<?php $this->end(); ?>