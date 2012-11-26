<div class="row-fluid header">
        <div class="row-fluid">
            <div class="span10 offset1" id="div_header">
                <div class="span6">
                    <?php echo $this->Html->image('common/Softkitchens-logo-whiteBG.jpg',array('id'=>'logo','alt'=>'SK logo'));?>
                </div>
                <?php echo $this->element('login_bar'); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10 offset1">
                <ul class="nav nav-tabs">
                    <?php 
                    $current_action = $this->params['controller'];
                    $links = array( 'Home'=>'administrators',
                        'Criterias'=>'criterias',
                        'Kitchens'=>'kitchens',
                        'Products'=>'products',
                        'Customers'=>'customers',
                        'Orders'=>'orders'); 
                    foreach($links as $name => $href){
                        if ($current_action === $href){ $params = "active span2";}
                        else{ $params = "span2"; }
                        ?>
                        <li class="<?php echo $params; ?>">
                            <?php echo $this->Html->link($name,array('controller'=>$href,'action'=>'index')); ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
</div>
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>