<?php echo $this->Html->docType('html4-trans'); ?>
<html>
<head>
    <title><?php echo $this->fetch('view_title'); ?></title>
    <?php
        echo $this->Html->css(array('twitter_bootstrap/bootstrap.min',
                        'http://fonts.googleapis.com/css?family=Raleway:400,700',
                        'http://fonts.googleapis.com/css?family=Advent+Pro:400,700',
                        'layout'
                        ));
        echo $this->fetch('view_css');
        echo $this->Html->meta('icon',$this->webroot.'webroot/img/glyphicons-halflings.png');
        echo $this->Html->meta('icon',$this->webroot.'webroot/img/glyphicons-halflings.png');
    ?>
</head>
<body>
    <!-- Content Starts Here -->
        <?php echo $this->fetch('content');    ?>
    <!-- Content Ends Here -->
</body>
    <?php 
        echo $this->Html->script(array('http://code.jquery.com/jquery-1.8.3.min.js',
                            'twitter_bootstrap/bootstrap.min','layout'));
        echo $this->fetch('view_js');
        echo $this->fetch('etc_script');
    ?>
</html>