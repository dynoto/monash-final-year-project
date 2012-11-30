<?php
    echo $this->extend('/Common/visitors');
    $content_override = array('title'=>'SK Kitchens Product','css'=>array('dropdown-checklist','visitors/testimonial','visitors/product'),'js'=>array('jquery-ui','dropdown-checklist','visitors/filter','visitors/product'));
    echo $this->element('override',array("content_override"=>$content_override));
    pr($info);
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid">
<?php echo $this->element('side_bar',array('visitor_action'=>'products','table'=>'Product')); ?>
<div class="row-fluid span7 main_content no-padding">
    <?php
        $count = 0;
        foreach ($info as $key_a => $val_a) { ?> 
        <div class='row-fluid product_frame'>
            <?php $product_name = $val_a['Product']['name']; ?>
            <div class="span4 image_frame">
                    <?php $item_name = str_replace(' ', '_', $product_name) ?>
                    <a href="#<?php echo $item_name; ?>" role="button" data-toggle="modal" class="modal_toggle">
                        <?php
                        if(isset($val_a['Image'][0])){
                            echo $this->Html->image('product/'.$val_a['Image'][0]['name'],array('alt'=>'product images','class'=>'img_thumbnail'));
                        } else {
                            echo $this->Html->image('common/image_error.jpg',array('alt'=>'product images','class'=>'img_thumbnail'));
                        } 
                        ?>
                    </a>
            </div>
            <div class="cart_frame span8" id="<?php //echo $item_name; ?>">
                <table class="table table-striped table-bordered">
                    <tr>
                        <td colspan="3" class="title_cell">
                            <h4><?php echo $product_name;?></h4>
                            <p><?php echo $val_a['Product']['description'] ?></p>
                        </td >
                        <td class="quantity_cell" colspan="2">
                            <label>Qty.
                            <?php 
                            echo $this->Form->input("OrderItem.quantity",array('type'=>'text','class'=>'quantity_input no-margin-vertical','label'=>false,'div'=>false)); ?></label>
                            <?php
                            echo $this->Form->input("<i class='icon-shopping-cart'></i> $".$val_a['Product']['price'],array('type'=>'button','class'=>"btn btn-primary",'label'=>false));
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="dimension_cell" colspan="2">
                            <h5>Dimension</h5>
                            <hr class="no-margin-top">
                            <?php if (!empty($val_a['Dimension'])):
                                    foreach($val_a['Dimension'] as $k => $d_array):
                                        echo $this->Form->input('Dimension.'.$dimension_types[$d_array['dimension_type_id']],array('class'=>'dimension_input','dimension-min'=>$d_array['min'],'dimension-max'=>$d_array['max'],'dimension-increment'=>$d_array['increment'],'dimension-default'=>$d_array['default'],'data-rel'=>'tooltip'));
                                    endforeach;
                                elseif(!empty($val_a['StandardDimension'])): ?>
                                <p><?php $val_a['StandardDimension'][0]['description']; ;?></p>
                            <?php endif; ?>
                        </td>
                        <td class="finish_cell" colspan="3">
                            <h5 class="ib">Finish : </h5>
                            <?php $finishList = array();
                            foreach ($val_a['Finish'] as $k => $f_array):
                                $finishList[$f_array['id']] = $f_array['name'];
                            endforeach; 
                            echo $this->Form->input(null,array('options'=>$finishList,'label'=>false,'class'=>'finish_dropdown ib','multiple'=>'select','hiddenField'=>false,'div'=>false));
                            ?>
                            <hr class="no-margin-top">
                            <div class="finish_group">
                            <?php 
                            $hide = '';
                            foreach ($val_a['Finish'] as $k => $f_array):
                                $this->Form->input('Finish.name');
                            ?>
                            <div class="<?php echo 'finish_'.$f_array['id'].' '.$hide;?>">
                                <?php foreach ($f_array['FinishType'] as $k => $ft_array):
                                    echo $this->Form->input('FinishType.id.'.$ft_array['id'],array('label'=>$ft_array['name'],'class'=>'finish_type_select','div'=>false));
                                endforeach; ?>
                            </div>
                            <?php 
                            $hide = 'hide_div';
                            endforeach; ?>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="span12">

            </div>
            <!-- modal starts here -->
            <?php 
            echo $this->element('gallery_modal',array('item'=>$val_a,'type'=>'Product')); 
            ?>
            <!-- modal ends here -->
            
        </div>
        <?php } ?>
        <?php echo $this->element('pagination',array('pagination'=>$paginate_data)); ?>
</div>
