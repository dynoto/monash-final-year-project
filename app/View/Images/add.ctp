<?php
echo $this->extend('/Common/admins');
$override = array('title' => 'Add Image for Item', 'css' => array('admins/common','admins/uploadify'), 'js' => array('admins/jquery.uploadify-3.1.min'));
echo $this->element('override',array('content_override'=>$override));
?>
<div class="row-fluid">
    <div class="span2">
        <div class="offset1">
        <h4><?php echo __('Actions'); ?></h4>
        </div>
    </div>
    <div class="span8">
        <h4><?php echo __('Add Image'); ?></h4>
        <div class="row-fluid well">
            <?php if($item_new){ ?>
            <div class="row-fluid">
                <ul class="span8 nav nav-pills">
                    <li class="disabled"><a>Step 1 : Create <?php echo $item_type; ?></a></li>
                    <li class="active"><a>Step 2 : Add Images</a></li>
                </ul>
            </div>
            <?php } ?>
            <div class="row-fluid span8">
                <div class="row-fluid">
            <?php
            echo $this->Form->create('Image', array('type'=>'file','url'=>array('action'=>'add',$item_type,$item_id)));
            echo $this->Form->input('Item Name',array('type'=>'text','value'=>$item_name,'disabled'));
            echo $this->Form->input('Upload Image',array('type'=>'file','id'=>'ImageUploadImage'));
            ?>
                </div>
            <?php
            echo $this->Html->link('Finish Uploading', array('controller' => $item_type . 's', 'action' => 'view', $item_id), array('class' => 'btn btn-primary'));
            echo $this->Form->end();
            ?>
            </div>
        </div>
    </div>
</div>
<?php $this->start('etc_script'); ?>
<script type="text/javascript">
$(document).ready(function(){
        $('#ImageUploadImage').uploadify({
            'buttontext'    : "Select Images ...",
            'swf'           : "<?php echo $this->html->url('/app/webroot/uploadify/uploadify.swf');?>",
            'uploader'      : "<?php echo $this->html->url('/images/add_ajax/'.$item_id.'/'.$item_type.'/');?>",
        });
    });
</script>
<?php $this->end(); ?>