<?php
echo $this->extend('/Common/visitors');
$content_override = array('title' => 'Contact Us', 'css' => array('visitors/contact_us'), 'js' => 'visitors/contact_us');
echo $this->element('override', array("content_override" => $content_override));
$gps = "-38.116322,145.143196";
?>

<!-- CONTENT STARTS HERE -->
<div class="row-fluid main_content">
    <div class="span10 offset1">
        <div class="span6">
            <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Engineered+Cabinets,+Sir+Laurence+Drive,+Seaford,+Victoria&amp;aq=0&amp;oq=Engineered+Cabinets&amp;sll=-37.860283,145.079616&amp;sspn=2.02531,4.22699&amp;ie=UTF8&amp;hq=Engineered+Cabinets,&amp;hnear=Sir+Laurence+Dr,+Seaford+Victoria+3198&amp;ll=-38.116089,145.143236&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed"></iframe><br />
        </div>
            <div class="span6"> 
                <h3>Contact Us Directly</h3>
                <ul class="well no-margin-horizontal">
                    <li><p>For customer support you can contact <em><b>Engineered Cabinets</b></em> by</p></li>
                    <li><b>Email</b>  <br><a href="maito:admin@engineeredcabinets.com.au">admin@engineeredcabinets.com.au</a></li><br>
                    <li><b>Phone</b>  <br><a href="phone:(03) 9776 8100">(03) 9776 8100</a></li><br>
                    <li><b>Address</b><br><a href="http://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Engineered+Cabinets,+Sir+Laurence+Drive,+Seaford,+Victoria&amp;aq=0&amp;oq=Engineered+Cabinets&amp;sll=-37.860283,145.079616&amp;sspn=2.02531,4.22699&amp;ie=UTF8&amp;hq=Engineered+Cabinets,&amp;hnear=Sir+Laurence+Dr,+Seaford+Victoria+3198&amp;ll=-38.116089,145.143236&amp;spn=0.006295,0.006295&amp;t=m" style="color:#0000FF;text-align:left">27 Sir Laurence Drive<br> Seaford VIC 3198</a>

                    </li>
                </ul>

                <?php 
                echo $this->Form->Create('Enquiry',array('class'=>'well','onSubmit'=>'return verify();'));?>
                <h4>Enquiry Form</h4>
                <?php
                echo $this->Form->input('name',array('required'=>true));
                echo $this->Form->input('telephone');
                echo $this->Form->input('email');
                echo $this->Form->input('message',array('required'=>true));

                echo $this->Form->End(array('class'=>'btn btn-primary btn-large'))?>
            </div>
            <!-- EMILY STOP WRITING CODE FROM HERE-->
        </div>
    </div>