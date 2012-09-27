<header>
<div class="row-fluid">
    <div class="span8 offset2" id="div_header">
        <?php 
        echo $this->Html->image('common/Softkitchens-logo-whiteBG.jpg',array('id'=>'logo','alt'=>'SK logo'));
        echo $this->Html->link('Visitor? Click Here',array('controller'=>'visitors'),array('class'=>'login_switch'));
        ?>
    </div>
    <div class="row-fluid"><div class="span8 offset2">
        <ul class="nav nav-tabs">
            <?php 
            $current_action = $this->params['controller'];
            $links = array( 'Home'=>'administrators',
                            'Criteria'=>'criterias',
                            'Gallery'=>'kitchens',
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
    </div></div>
</div>
</header>
<?php echo $this->fetch('content'); ?>