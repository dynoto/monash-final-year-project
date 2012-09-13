<?php
    echo $this->extend('/Common/users');
    $content_override = array('title'=>'SK Kitchens Gallery','css'=>'kitchens','js'=>NULL);
    echo $this->element('override',array("content_override"=>$content_override));
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid">
<?php
$data_output = array(
    'Color'=>array('Red','Blue','Green','Black'),
    'Style'=>array('Modern','ConTemporary','Vintage','Italian'),
    'Material'=>array('Wood','Iron','Aluminium','Plastic'));

echo $this->element('side_bar',array("data_output"=>$data_output));
?>

<div class="span7">
    <?php
        $count = 0;
        $image_output = array(  '1'=> array(  "Kitchen_One" => array("11.jpg","12.jpg"), 
                                "Two_Kitchen" => array("21.jpg"),
                                "ThreeK"   => array("31.jpg","32.jpg"),
                                "QuadKitchen" => array("41.jpg","42.jpg","42.jpg")),
                                '2'=> array(  "Fifth_Kitchen" => array("41.jpg","42.jpg","42.jpg"), 
                                "Sixth_Kits" => array("12.jpg","11.jpg"),
                                "Lucky_Kitch7n"   => array("21.jpg"),
                                "Octo_chen" => array("31.jpg","32.jpg"))            
                             );
        foreach ($image_output[$page] as $name=>$images) {
            if($count==0 or $count==2){ echo "<div class='row-fluid' id='gallery_row'>"; } ?>
            <div class="span6" id="image_frame">
                    <a href="#<?php echo $name; ?>" role="button" data-toggle="modal" class="modal_toggle">
                        <?php echo $this->Html->image('kitchens/'.$images[0],array('tag'=>'kitchen images')) ?>
                    </a>
                    <p><?php echo $name;?></p>
            </div>

            <!-- modal starts here -->
            <div class="modal hide fade" id="<?php echo $name; ?>">
                <div class="modal-header">
                    <h3><?php echo $name ?></h3>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
                <div class="modal-body">
                    <div class="carousel slide" id="carousel_<?php echo $name; ?>">
                        <div class="carousel-inner">
                            <?php foreach($images as $image){ ?>
                                <div class="item"><img src="images/kitchens/<?php echo $image;?>"/></div>
                            <?php } ?>
                        </div>
                        <a class="carousel-control left" href="#carousel_<?php echo $name; ?>" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#carousel_<?php echo $name; ?>" data-slide="next">&rsaquo;</a>
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
                <?php   if($page == 1){ echo "<li class='disabled'>";
                            echo $this->Html->link('Prev','/#');
                        }else{
                            echo $this->Html->link('Prev',array('controller'=>'users','action'=>'gallery',$page-1));}
                        echo "</li>";
                ?>
                <li><?php echo $this->Html->link('1',array('controller'=>'users','action'=>'gallery',1)) ?></li>
                <li><?php echo $this->Html->link('2',array('controller'=>'users','action'=>'gallery',2)) ?></li>
                <?php   if($page == 2){ echo "<li class='disabled'>";
                            echo $this->Html->link('Next','');
                        }else{
                            echo $this->Html->link('Next',array('controller'=>'users','action'=>'gallery',$page+1));}
                        echo "</li>";
                ?>
            </ul>
        </div>
    </div>
</div>    
    
    
    
    

</div>


