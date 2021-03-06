<div class="row-fluid header">
    <div class="span10 offset1">
    <div class="row-fluid ">
        <div class="span6">
        <?php   echo $this->Html->image('common/website-logo.png',array('id'=>'logo','alt'=>'SK logo'));
                //echo $this->Html->link('Login',array('controller'=>'users','action'=>'login'),array('class'=>'login_switch')); 
        ?>
        </div>
        <?php      
        echo $this->element('login_bar',array('visitor'=>true));
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
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>