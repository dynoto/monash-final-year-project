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
        echo $this->Html->script(array('http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js',
                            'twitter_bootstrap/bootstrap.min','layout'));
        echo $this->fetch('view_js');
    ?>
</head>
<body>
    <!-- Content Starts Here -->
        <?php echo $this->fetch('content');    ?>
    <!-- Content Ends Here -->
</body>
    <?php //echo $this->element('sql_dump') ?>
</html>