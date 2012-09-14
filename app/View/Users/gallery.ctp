<?php
    echo $this->extend('/Common/users');
    $content_override = array('title'=>'SK Kitchens Gallery','css'=>['dropdown-checklist','users/gallery'],'js'=>['jquery-ui','dropdown-checklist','users/gallery']);
    echo $this->element('override',array("content_override"=>$content_override));
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid">
<?php
echo $this->element('side_bar',array("data_output"=>$sidebar_data));
?>

<div class="span7">
    <?php
        $count = 0;
        $info = array_splice($info, ($page-1) * 4,4);
        foreach ($info as $id => $datum) {
            if($count==0 or $count==2){ echo "<div class='row-fluid' id='gallery_row'>"; } ?>
            <div class="span6" id="image_frame">
                    <?php $item_name = str_replace(' ', '_', $datum['name']) ?>
                    <a href="#<?php echo $item_name; ?>" role="button" data-toggle="modal" class="modal_toggle">
                        <?php echo $this->Html->image('kitchens/'.$datum['images'][0],array('alt'=>'kitchen images')) ?>
                    </a>
                    <p><?php echo $datum['name'];?></p>
            </div>

            <!-- modal starts here -->
            <div class="modal hide fade" id="<?php echo $item_name; ?>">
                <div class="modal-header">
                    <h3><?php echo $datum['name'] ?></h3>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
                <div class="modal-body">
                    <div class="carousel slide" id="carousel_<?php echo $datum['name']; ?>">
                        <div class="carousel-inner">
                            <?php
                            $carousel_class = "item active";
                            foreach($datum['images'] as $image){ 
                            ?>
                            <div class="<?php echo $carousel_class; ?>"><?php echo $this->Html->image('kitchens/'.$image,array('alt'=>'gallery image')); ?></div>
                            <?php 
                            $carousel_class = "item";    
                            } ?>
                        </div>
                        <a class="carousel-control left" href="#carousel_<?php echo $datum['name']; ?>" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#carousel_<?php echo $datum['name']; ?>" data-slide="next">&rsaquo;</a>
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
    <div class="row-fluid" id="paginate">
        <div class="pagination pagination-right">
            <ul>
                <?php   if($page == 1){ 
                            echo "<li class='disabled'>";
                            echo $this->Html->link('Prev','',array('onclick'=>'return false'));}
                        else{ echo $this->Html->link('Prev',array('controller'=>'users','action'=>'gallery',$page-1)); }
                        echo "</li>";
                ?>
                <li><?php echo $this->Html->link('1',array('controller'=>'users','action'=>'gallery',1)) ?></li>
                <li><?php echo $this->Html->link('2',array('controller'=>'users','action'=>'gallery',2)) ?></li>
                <?php   if($page == 2){ 
                            echo "<li class='disabled'>";
                            echo $this->Html->link('Next','',array('onclick'=>'return false'));}
                        else{ echo $this->Html->link('Next',array('controller'=>'users','action'=>'gallery',$page+1)); }
                        echo "</li>";
                ?>
            </ul>
        </div>
    </div>
</div>    
    
    
    
    

</div>


