<?php
echo $this->extend('/Common/visitors');
$content_override = array('title' => 'Contact Us', 'css' => array('visitors/contact_us'), 'js' => array(Null));
echo $this->element('override', array("content_override" => $content_override));

$gps = "-38.116322,145.143196";
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid">
    <div class="span8 offset2">
        <!-- EMILY START WRITING YOUR CODE BELOW-->

                <div class="container">
                    <div class="box"><iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?q=<?php echo $gps; ?>&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=<?php echo $gps; ?>&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?q=<?php echo $gps; ?>&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=<?php echo $gps; ?>&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>
                    <div class="box"> <h3>Contact Us Directly</h3>

                        <p>For customer support you can contact <em><b>Engineered Cabinet</b></em> directly by email, phone or mail.</p>

                        <ul>
                            <li>Email: admin@engineeredcabinets.com.au</li>
                            <li>Phone: (03) 9776 8100</li>
                        </ul> 
                    </div>
                </div> 
        <!-- EMILY STOP WRITING CODE FROM HERE-->
    </div>
</div>