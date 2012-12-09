<?php
    echo $this->extend('/Common/visitors');
    $content_override = array('title'=>'SK Kitchens Product','css'=>array('dropdown-checklist','visitors/testimonial','visitors/product'),'js'=>array('jquery-ui','dropdown-checklist','visitors/filter','visitors/product','visitors/modal'));
    echo $this->element('override',array("content_override"=>$content_override));
?>

<!-- CONTENT STARTS HERE -->
<div class="alert add_cart_success margin-center hide_div">
  <button type="button" class="close_cart_success close" data>×</button>
  <strong>Success!</strong> the item has been added to the cart.
</div>
<div class="row-fluid">
<?php echo $this->element('side_bar',array('visitor_action'=>'products','table'=>'Product')); ?>
<div class="row-fluid span7 main_content no-padding">
    <?php
        $count = 0;
        foreach ($info as $key_a => $val_a) {
        echo $this->element('gallery_modal',array('item'=>$val_a,'type'=>'Product','image'=>$val_a['Image'])); 
        ?>
        <div class='row-fluid product_frame'>
            <?php
            $product_name = $val_a['Product']['name']; 
            $p_id = $val_a['Product']['id'];
            ?>
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
            <div class="cart_frame span8" id="<?php echo 'product_'.$p_id; ?>">
                <?php 
                echo $this->Form->create('OrderItem_'.$p_id,array('id'=>'product_'.$p_id));
                echo $this->Form->input('OrderItem.product_id',array('type'=>'hidden','value'=>$p_id));
                echo $this->Form->input('OrderItem.product_name',array('type'=>'hidden','value'=>$val_a['Product']['name']));
                ?>
                <table class="table table-striped table-bordered">
                    <tr>
                        <td class="title_cell no-padding-vertical">
                            <h4><?php echo $product_name;?></h4>
                        </td >
                        <td class="quantity_cell no-padding-vertical" >
                            <label>Qty.
                            <?php
                            echo $this->Form->input("OrderItem.quantity",array('type'=>'text','class'=>'quantity_input no-margin-vertical product_'.$p_id,'input-type'=>'quantity','required'=>true,'label'=>false,'data-v'=>'int','div'=>false,'data-tooltip'=>'number')); ?></label>
                            <?php
                            echo $this->Form->button('<i class="icon-shopping-cart"></i> Add to Quote',array('type'=>'button','name'=>false,'class'=>"btn btn-primary",'label'=>false,'div'=>false,'onClick'=>'add_to_cart('.$p_id.')'));
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p><?php echo $val_a['Product']['description'] ?></p>
                        </td>
                    </tr>
                    <!---------------------------- DIMENSIONS -------------------------------->
                    <tr class="dimension-row">
                        <td><h5 class="ib">Dimension : </h5></td>
                        <td class="dimension-value">
                            <?php if (!empty($val_a['Dimension'])):
                                    foreach($val_a['Dimension'] as $d_array): ?>
                                        <label class="ib no-margin-vertical">
                                        <?php 
                                        if($d_array['max'] != '' && $d_array['min'] != ''):
                                            echo $dimension_types[$d_array['dimension_type_id']][0].': ';
                                            echo $this->Form->input('OrderItem.'.strtolower($dimension_types[$d_array['dimension_type_id']]),array('class'=>'dimension_input ib no-margin-vertical','dimension-min'=>$d_array['min'],'dimension-max'=>$d_array['max'],'dimension-increment'=>$d_array['increment'],'dimension-default'=>$d_array['default'],'data-rel'=>'tooltip','dimension-type'=> $dimension_types[$d_array['dimension_type_id']],'data-v'=>'int','label'=>false,'div'=>false,'required'=>true,'value'=>$d_array['default']));
                                        elseif($d_array['default'] != ''):
                                            echo $dimension_types[$d_array['dimension_type_id']][0].': ';
                                            echo $this->Form->input('',array('disabled'=>'disabled','class'=>'ib no-margin-vertical','value'=>$d_array['default'],'style'=>"width:30px",'div'=>false,'label'=>false));
                                            echo $this->Form->input('OrderItem.'.strtolower($dimension_types[$d_array['dimension_type_id']]),array('type'=>'hidden','value'=>$d_array['default']));
                                        ?>
                                        </label>
                                        <?php 
                                        endif;
                                    endforeach;
                                elseif(!empty($val_a['StandardDimension'])): ?>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <!---------------------------- RANGE TYPES -------------------------------->
                    <?php 
                    $range_array = array();
                    foreach ($val_a['RangeValue'] as $rv_array):
                        $rt_name = $rv_array['RangeType']['name'];
                        $rv_id = $rv_array['id'];
                        $rv_name = $rv_array['name'];
                        $range_array[$rt_name][$rv_id] = $rv_name;
                    endforeach;
                    $count = 0;
                    foreach ($range_array as $rt_name => $rv_options): ?>
                    <tr>
                    <td><h5 class="ib"><?php echo $rt_name; ?></h5></td>
                    <td>
                    <?php
                        echo $this->Form->input('RangeValue.'.$count.'.type',array('type'=>'hidden','value'=>$rt_name));
                        echo $this->Form->input('RangeValue.'.$count.'.id',array('type'=>'select','class'=>'RangeValueSelect','options'=>$rv_options,'hiddenField'=>false,'class'=>'ib','label'=>false,'div'=>false));
                    ?>
                    </td>
                    </tr>
                    <?php
                    $count += 1;
                    endforeach;
                    ?>
                </table>
                <?php echo $this->Form->end(); ?>
            </div>
            <!-- modal starts here -->
            <!-- modal ends here -->
        </div>
        <?php } ?>
        <?php echo $this->element('pagination',array('pagination'=>$paginate_data)); ?>
</div>
