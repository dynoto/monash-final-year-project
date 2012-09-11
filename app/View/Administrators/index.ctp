<?php $links = array('Kitchens','Criterias','CriteriaValues','Images','Testimonials'); ?>
<ul>
<?php
    foreach ($links as $link){
            ?><li><?php
            echo $this->Html->link($link,array('controller'=>$link));
            ?></li><?php
    }
?>
</ul>