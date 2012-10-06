
<div class="row-fluid header">
    <div class="span8 offset2">
    <div class="row-fluid ">
        <?php 
        echo $this->Html->image('common/Softkitchens-logo-whiteBG.jpg',array('id'=>'logo','alt'=>'SK logo'));
        echo $this->Html->link('Administrator? Click Here',array('controller'=>'administrators'),array('class'=>'login_switch'));
        ?>
    </div>
    <div class="row-fluid ">
        <ul class="nav nav-tabs">
            <?php 
            $current_action = $this->params['action'];
            $links = array( 'Home'=>'index',
                'About Us'=>'about_us',
                'Gallery'=>'gallery',
                'Products'=>'products',
                'Testimonials'=>'testimonials',
                'Contact Us'=>'contact_us'); 
            foreach($links as $name => $href){
                if ($current_action === $href){ 
                    $params = "active span2";
                } else{ $params = "span2"; }
                ?>
                <li class="<?php echo $params; ?>">
                    <?php echo $this->Html->link($name,array('controller'=>'visitors','action'=>$href)); ?>
                </li>
                <?php } ?>
            </ul>
    </div>
</div>
</div>
    <?php echo $this->fetch('content'); ?>