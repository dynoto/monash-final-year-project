$(document).ready(function(){
        $('#ImageUpload').uploadify({
            'swf'           : "<?php echo $this->html->url('/app/webroot/uploadify/uploadify.swf');?>",
            'uploader'      : "<?php echo $this->html->url('/images/add_ajax/'.$item_id.'/'.$item_type.'/');?>",
        });
    });