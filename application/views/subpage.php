<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>free css template for real estate websites</title>
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/gallery_style.css" />
</head>
<body>
<div id="container">
<div id="top_panel">
	<div id="header_section">
		<div id="header">
        	Real Estate
        </div>
    </div> <!-- end of header section -->
    
    <div id="menu_login_section">
    	<div id="menu_section">
        	<div id="menu_panel">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="subpage.html" class="current">Buy</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="#">Mortgage</a></li>  
                    <li><a href="#">About</a></li> 
                    <li><a href="#">Contact</a></li>                     
                </ul> 
            </div> <!-- end of menu -->
        </div>
        <div id="login_section">
        	<form method="get" action="#">
            	<label>Email Address:</label><input type="text" name="email" class="input_field" /><label>Password:</label><input type="password" name="password" class="input_field" /><input type="submit" value="" name="submit" class="submit_btn" />
            </form>
        </div>
    </div> <!-- end of menu login section -->
</div> <!-- end of top panel -->

<div id="gallery_panel">
<div id="gallery">
  <div id="imagearea">
    <div id="image">
      <a href="javascript:slideShow.nav(-1)" class="imgnav " id="previmg"></a>
      <a href="javascript:slideShow.nav(1)" class="imgnav " id="nextimg"></a>
    </div>
  </div>
  <div id="thumbwrapper">
    <div id="thumbarea">
      <ul id="thumbs">
        <li value="1"><img src="<?php echo base_url();?>images/thumbs/1.jpg" width="179" height="100" alt="image 1" /></li>
        <li value="2"><img src="<?php echo base_url();?>images/thumbs/2.jpg" width="179" height="100" alt="image 2" /></li>
        <li value="3"><img src="<?php echo base_url();?>images/thumbs/3.jpg" width="179" height="100" alt="image 3" /></li>
        <li value="4"><img src="<?php echo base_url();?>images/thumbs/4.jpg" width="179" height="100" alt="image 4" /></li>
        <li value="5"><img src="<?php echo base_url();?>images/thumbs/5.jpg" width="179" height="100" alt="image 5" /></li>
        <li value="3"><img src="<?php echo base_url();?>images/thumbs/3.jpg" width="179" height="100" alt="image 6" /></li>
        <li value="4"><img src="<?php echo base_url();?>images/thumbs/4.jpg" width="179" height="100" alt="image 7" /></li>
        <li value="5"><img src="<?php echo base_url();?>images/thumbs/5.jpg" width="179" height="100" alt="image 8" /></li>
      </ul>
    </div>
  </div>
</div>

<script type="text/javascript">
var imgid = 'image';
var imgdir = 'images/fullsize';
var imgext = '.jpg';
var thumbid = 'thumbs';
var auto = true;
var autodelay = 5;
</script>
<script type="text/javascript" src="<?php echo base_url();?>/js/slide.js"></script>

</div>

<div id="content_panel_1">

	<div id="news_section">
    	<h1>Site's News</h1>
        <div class="news_box">
        	<h3>Free CSS Template</h3>
            <p>This <a href="http://www.templatemo.com" target="_parent">CSS template</a> is provided by <a href="http://www.templatemo.com/page/1" target="_parent">templatemo.com</a> for free. You may download, modify and apply this CSS template layout for your websites. Credit goes to <a href="http://publicdomainpictures.net/" target="_blank">PublicDomainPictures.net</a> for photos. <a href="#">more</a></p>
      </div>
    </div><!-- end of news section -->
    
    <div id="section_1_2">
    	<h1>About Us</h1>
        <img src="<?php echo base_url();?>images/image_04.jpg" alt="image" />
        <p>Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Maecenas venenatis metus eu est. In sed risus ac felis varius bibendum. </p>
        <p>Nulla imperdiet congue metus. Vestibulum dapibus tortor vel orci. Maecenas vulputate, arcu id fermentum eleifend, tortor enim tincidunt mauris, fringilla tincidunt purus urna vel risus.</p>
      <p>Nulla enim nibh, consectetuer sed, vestibulum elementum, sagittis nec, diam. Mauris blandit vehicula neque. </p>
      <p>Proin consectetuer. Donec venenatis. Cras urna metus, feugiat non, consectetuer quis, pretium quis, nunc. Nullam pede purus, tempor a, imperdiet in, porttitor at, nulla. <a href="#">more...</a>
      </p>
    </div><!-- end of section 1 -->
    <div class="cleaner_with_height">&nbsp;</div>
</div>

<div id="content_panel_2">
	<div class="section_2">
    
    	
        <img src="<?php echo base_url();?>images/image_01.jpg" alt="image" />
        <h4>Mauris quis nulla</h4>
        <p>Suspendisse potenti. Ut sed pede. Nullam vitae tellus. Sed ultrices. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur velit tellus,</p>
        <div class="price">PRICE:<span> $1,234,000</span></div>    
        <div class="readmore"><a href="subpage.html">Read more</a></div>                       
    </div>
    <div class="section_2">
        <img src="<?php echo base_url();?>images/image_02.jpg" alt="image" />
        <h4>Mauris quis nulla</h4>
        <p>Nulla enim nibh, consectetuer sed, vestibulum elementum, sagittis nec, diam. Mauris blandit vehicula neque. Proin consectetuer.</p>
        <div class="price">PRICE:<span> $876,000</span></div>                           
        <div class="readmore"><a href="subpage.html">Read more</a></div>
    </div>
    <div class="section_2">

        <img src="<?php echo base_url();?>images/image_03.jpg" alt="image" />
        <h4>Mauris quis nulla</h4>
        <p>Donec venenatis. Cras urna metus, feugiat non, consectetuer quis, pretium quis. Mauris blandit vehicula neque. </p>
        <div class="price">PRICE:<span> $2,468,000</span></div>                           
      <div class="readmore"><a href="subpage.html">Read more</a></div>
    </div>
    
    <div class="cleaner_with_height">&nbsp;</div>
</div> <!-- end of content panel 2 -->

<div id="content_panel_3">

	<div class="quick_contact">
    	<h1>Quick Contact</h1>
        <p>
            Tel: 010-100-1000<br />
            Fax: 020-200-2000<br />
            Email: info {at} templatemo.com
        </p>
        <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a> 
    </div><!-- end of news section 3-->
    
    <div class="section_3">
    	<h1>Helpful Links</h1>
        	<ul class="list_section">
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Terms of us</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
    </div>
    <div class="section_3">
    	<h1>Partner Links</h1>
        	<ul class="list_section">
                <li><a href="http://www.flashmo.com" target="_blank">Free Flash</a></li>
                <li><a href="http://www.templatemo.com" target="_blank">Free CSS</a></li>
                <li><a href="http://www.webdesignmo.com" target="_blank">Web Design</a></li>
                <li><a href="http://www.photovaco.com" target="_blank">Free Photos</a></li>
            </ul>
    </div>
  
<div class="cleaner_with_height">&nbsp;</div>
</div><!-- end of content panel 3 -->

<div id="footer_panel">
    Copyright © 2048 <a href="index.html">Your Company Name</a> | <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_blank">Free CSS Templates</a></div>

</div> <!-- end of container -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>