<?php
echo $this->extend('/Common/visitors');
$content_override = array('title' => 'Contact Us', 'css' => array('visitors/contact_us'), 'js' => array(Null));
echo $this->element('override', array("content_override" => $content_override));
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid">
    <div class="span8 offset2">
        <?php //echo $this->Html->image('common/under_construction.jpg',array('id'=>'under_construction')); ?>
        <!-- EMILY START WRITING YOUR CODE BELOW-->

        <!DOCTYPE html>
        <html>
            <body> 

                <div class="container">
                    <div class="box"><iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/?ie=UTF8&amp;ll=-37.809241,144.973354&amp;spn=0.072558,0.154324&amp;t=m&amp;z=13&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/?ie=UTF8&amp;ll=-37.809241,144.973354&amp;spn=0.072558,0.154324&amp;t=m&amp;z=13&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>
                    <div class="box"> <h3>Contact Us Directly</h3>

                        <p>Couldn't find the answer you were looking for? For customer support you can contact <em><b>Engineered Cabinet</b></em> directly by email, phone or mail.</p>

                        <ul>
                            <li>Email: admin@engineeredcabinets.com.au</li>
                            <li>Phone: (03) 9776 8100</li>
                        </ul> 
                    </div>
                </div> 


            </body>
        </html>

        <!-- EMILY STOP WRITING CODE FROM HERE-->
    </div>
</div>