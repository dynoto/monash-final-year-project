<?php
    echo $this->extend('/Common/visitors');
    $content_override = array('title'=>'SK Kitchens Product','css'=>array('visitors/cart'),'js'=>array('visitors/cart'));
    echo $this->element('override',array("content_override"=>$content_override));
?>
<div class="row-fluid main_content">
  <div class="span10 offset1">
  	<table class="table table-bordered table-striped">
  		<tr>
  			<th>Product</th>
        <th>Dimension</th>
  			<th>Quantity</th>
  			<th>Delete</th>
  		</tr>
  		<?php foreach ($cart as $item_id => $item): ?>
        <tr>
          <?php $order_item = $item['OrderItem']; ?>
          <td><?php echo $order_item['product_name']; ?></td>
          <td><?php echo 'Height : '.$order_item['height']; ?><br>
          <?php echo 'Width : '.$order_item['width']; ?><br>
          <?php echo 'Depth : '.$order_item['depth']; ?></td>
          <td><?php echo $this->Form->input('OrderItem.quantity.'.$item_id,array('type'=>'text','value'=>$order_item['quantity'],'label'=>false)); ?></td>
          <td><?php echo $this->Form->input('OrderItem.delete.',array('type'=>'checkbox','value'=>$item_id,'label'=>false)); ?></td>
        </tr>
      <?php endforeach; ?>
  	</table>
 </div>
</div>
<?php pr($cart); ?>