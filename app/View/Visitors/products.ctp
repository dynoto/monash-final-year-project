<?php
    echo $this->extend('/Common/users');
    //$content_override = array('title'=>'SK Kitchens Gallery','css'=>array('dropdown-checklist','users/gallery'),'js'=>array('jquery-ui','dropdown-checklist','users/gallery'));
    //echo $this->element('override',array("content_override"=>$content_override));
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid">
    <div class="span8 offset2">
<?php
//echo $this->element('side_bar',array("data_output"=>$sidebar_data));
echo $this->Html->image('common/under_construction.jpg',array('id'=>'under_construction'));
?>
    </div>
</div>