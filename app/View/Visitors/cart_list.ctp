<?php
    echo $this->extend('/Common/visitors');
    $content_override = array('title'=>'SK Kitchens Product','css'=>array('visitors/cart'),'js'=>array('visitors/cart'));
    echo $this->element('override',array("content_override"=>$content_override));
?>
<div class="row-fluid main_content">
  <div class="span10 offset1">
    <?php echo $this->Form->create('Cart'); ?>
  	<table class="table table-bordered table-striped">
  		<tr>
  			<th>Product</th>
        <th>Dimension</th>
        <th>Range Types</th>
  			<th>Quantity</th>
  			<th>Delete</th>
  		</tr>
  		<?php 
      if(isset($cart)):
      foreach ($cart as $item_id => $item): ?>
        <tr>
          <?php $order_item = $item['OrderItem']; ?>
          <td><?php echo $order_item['product_name']; ?></td>
          <td><?php echo 'Height : '.$order_item['height']; ?><br>
          <?php echo 'Width : '.$order_item['width']; ?><br>
          <?php echo 'Depth : '.$order_item['depth']; ?></td>
          <td>
            <?php foreach ($item['RangeValue'] as $rv):
              echo $rv['type'].' : '.$rv['name'].'<br>';
            endforeach; ?>
          </td>
          <td><?php echo $this->Form->input('OrderItem.quantity.'.$item_id,array('type'=>'text','class'=>'quantity_input','value'=>$order_item['quantity'],'label'=>false)); ?></td>
          <td><?php echo $this->Form->input('OrderItem.delete.',array('type'=>'checkbox','value'=>'cart_'.$item_id,'label'=>false,'hiddenField'=>false)); ?></td>
        </tr>
      <?php 
      endforeach; 
      endif;
      ?>

  	</table>
    <div class="action_buttons">
    <?php 
    echo $this->Form->input('Update List',array('type'=>'submit','value'=>'update','div'=>false,'label'=>false,'name'=>'data[submit]','class'=>'ib btn btn-large'));
    echo $this->Form->input('Request Quote',array('type'=>'submit','value'=>'order','div'=>false,'label'=>false,'name'=>'data[submit]','class'=>'ib btn btn-large btn-primary'));
    echo $this->Form->end(); ?>
  </div>
 </div>
</div>