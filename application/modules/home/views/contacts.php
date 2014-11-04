<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
<link rel="<?php echo base_url() .'assets/css/icons/icon.css'?>" href="<?php echo base_url() .'assets/images/favicon.ico'?>">
<link rel="shortcut icon" href="<?php echo base_url() .'assets/images/favicon.ico'?>" />
<link rel="stylesheet" href="<?php echo base_url() .'assets/font-awesome/css/font-awesome.css'?>">
<link rel="stylesheet" href="<?php echo base_url() .'assets/css/home.css'?>">


<script src="<?php echo base_url() .'assets/js/jquery.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/jquery-migrate-1.1.1.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/jquery.easing.1.3.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/home.js'?>"></script> 
<script src="<?php echo base_url() .'assets/js/superfish.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/jquery.equalheights.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/jquery.mobilemenu.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/tmStickUp.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/jquery.ui.totop.js'?>"></script>
<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});  
 }); 
</script>
<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<!--==============================
              header
=================================-->
<header>
  <div class="container">
    <div class="row">
      <div class="grid_12 rel">
        <h1>
          <a href="index.html">
            <img src="images/logo.png" alt="Logo alt">
          </a>
        </h1>
      </div>
    </div>
  </div>
  <section id="stuck_container">
  <!--==============================
              Stuck menu
  =================================-->
    <div class="container">
      <div class="row">
        <div class="grid_12 ">
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li><a href="<?php echo base_url(). 'home/index'?>">Home</a></li>
               <li><a href="<?php echo base_url(). 'home/about'?>">About</a></li>
               <li><a href="<?php echo base_url(). 'home/services'?>">Services</a></li>
               
               <li class="current"><a href="#">Contacts</a></li>
               <li><a href="<?php echo base_url(). 'announcements/announce'?>">Announcements</a></li>
             </ul>
            </nav>
            <div class="clear"></div>
          </div>       
         <div class="clear"></div>  
        </div>
     </div> 
    </div> 
  </section>
</header>
<!--=====================
          Content
======================-->
<section id="content"><div class="ic">Southern Cross @ southerncrossinstitute@gmail.com - July 28, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h3>Contacts</h3>
        <div class="map">
          <figure class="">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
          </figure>
        </div>
      </div>
      <div class="grid_5">
        <h3 class="head__1">Address:</h3>
        <address class="text3">
          P.O. Box 1280-40100 <br>Kisumu, Kenya 
        </address>
      </div>
      <div class="grid_4">
        <h3 class="head__1">Facebook:</h3>
        <div class="text3">
          Southern Cross Institute of Tropical Medicine 
        </div>
      </div>
      <div class="grid_3">
        <h3 class="head__1">Site:</h3>
        <div class="text3">
          <a href="#">www.southercrossintitute.edu.co.ke</a>
        </div>
      </div>
      <div class="grid_12">
        <h3 class="head__1">Email to us:</h3>
        
              <form id="contact-form">
                  <div class="contact-form-loader"></div>
                  <fieldset>
                    <label class="name">
                      <input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"  />
                      <span class="empty-message">*This field is required.</span>
                      <span class="error-message">*This is not a valid name.</span>
                    </label>
                  
                    <label class="email">
                     <br>
                      <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
                      <span class="empty-message">*This field is required.</span>
                      <span class="error-message">*This is not a valid email.</span>
                    </label>

                    <label class="phone">
                     <br>
                      <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@Required @JustNumbers" />
                      <span class="empty-message">*This field is required.</span>
                      <span class="error-message">*This is not a valid phone.</span>
                    </label>
                   
                    <label class="message">
                     <br>
                      <textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                      <span class="empty-message">*This field is required.</span>
                      <span class="error-message">*The message is too short.</span>
                    </label>
                    
                    <div class="clear"></div>
                    <div>
                      <a href="#" class="btn" data-type="submit">Send e-mail</a>
                    </div>
                  </fieldset> 
                  <div class="modal fade response-message">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                          Your message has been sent! We will be in touch soon.
                        </div>      
                      </div>
                    </div>
                  </div>
                </form>   
      </div>
    </div>
  </div>
</section>
<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12"> 
        <div class="copyright"><span class="brand">SouthernCross</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
          <div class="sub-copy">www.southerncrossinstitute.edu</div>
        </div>
      </div>
    </div>
  </div>  
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>