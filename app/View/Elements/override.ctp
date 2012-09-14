<?php
    $this->assign('view_title',$content_override['title']);
    
    $this->start('view_css');
        if(isset($content_override['css'])){
            echo $this->Html->css($content_override['css']);
        }
    $this->end();
    
    $this->start('view_js');
        if(isset($content_override['js'])){
            echo $this->Html->script($content_override['js']);
        }
    $this->end();
?>