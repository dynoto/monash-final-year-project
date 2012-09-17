<?php
    echo $this->extend('/Common/users');
    $content_override = array('title'=>'SK Kitchens Gallery','css'=>array('dropdown-checklist','users/gallery'),'js'=>array('jquery-ui','dropdown-checklist','users/gallery'));
    echo $this->element('override',array("content_override"=>$content_override));
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid">
<?php
echo $this->element('side_bar',array("data_output"=>$sidebar_data));
?>

<div class="row-fluid span7">
<div class="row-fluid span12">
    <?php
        $count = 0;
        foreach ($info as $key_a => $datum) {
            if($count==0 or $count==2){ echo "<div class='row-fluid' id='gallery_row'>"; }
            $kitchen_name = $datum['Kitchen']['name']; ?>
            <div class="span6" id="image_frame">
                    <?php $item_name = str_replace(' ', '_', $kitchen_name) ?>
                    <a href="#<?php echo $item_name; ?>" role="button" data-toggle="modal" class="modal_toggle">
                        <?php echo $this->Html->image('kitchens/'.$datum['Image'][0]['name'],array('alt'=>'kitchen images')) ?>
                    </a>
                    <p><?php echo $kitchen_name;?></p>
            </div>

            <!-- modal starts here -->
            <div class="modal hide fade" id="<?php echo $item_name; ?>">
                <div class="modal-header">
                    <h3><?php echo $kitchen_name ?></h3>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus.</p>
                    <div class="row-fluid">
                        <?php foreach($datum['CriteriaValue'] as $criteria_value){ ?>
                        <p class="span3"><?php echo $criteria_value['criteria_name'].' : '.$criteria_value['name'];?></p>
                    <?php } ?>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="carousel slide" id="carousel_<?php echo $item_name; ?>">
                        <div class="carousel-inner">
                            <?php
                            $carousel_class = "item active";
                            foreach($datum['Image'] as $image){ 
                            ?>
                            <div class="<?php echo $carousel_class; ?>"><?php echo $this->Html->image('kitchens/'.$image['name'],array('alt'=>'gallery image')); ?></div>
                            <?php 
                            $carousel_class = "item";    
                            } ?>
                        </div>
                        <a class="carousel-control left" href="#carousel_<?php echo $item_name; ?>" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#carousel_<?php echo $item_name; ?>" data-slide="next">&rsaquo;</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                </div>
            </div>
            <!-- modal ends here -->
            
            <?php if($count==1 or $count==3){ echo "</div>"; }
            $count+=1;
            }?>
</div>
<?php if($pagination != "hide"){ ?>
    <div class="row-fluid span12" id="paginate">
    <div class="pagination pagination-right">
        <ul>
            <?php   if($this_page == 1){ 
                            echo "<li class='disabled'>";
                            echo $this->Html->link('Prev','',array('onclick'=>'return false'));}
                    else{   echo "<li>";
                            echo $this->Html->link('Prev','',array('onclick'=>'return false','id'=>'page_switch')); }
                    echo "</li>";
            ?>
            <?php   if($pagination == 'end'){ 
                        echo "<li class='disabled'>";
                        echo $this->Html->link('Next','',array('onclick'=>'return false'));}
                    else{   echo "<li>";
                            echo $this->Html->link('Next','',array('onclick'=>'return false','id'=>'page_switch')); }
                    echo "</li>";
            ?>
        </ul>
    </div>
    </div>
<?php } ?>
</div>


