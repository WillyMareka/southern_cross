<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
<link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/flat-ui/bootstrap/css/bootstrap.css'?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/flat-ui/css/flat-ui.css'?>" />
<link rel="<?php echo base_url() .'assets/css/icons/icon.css'?>" href="<?php echo base_url() .'assets/images/favicon.ico'?>">
<link rel="shortcut icon" href="<?php echo base_url() .'assets/images/favicon.ico'?>" />
<link rel="stylesheet" href="<?php echo base_url() .'assets/font-awesome/css/font-awesome.css'?>">
<link rel="stylesheet" href="<?php echo base_url() .'assets/stylesheets/style.css'?>">
<link rel="stylesheet" href="<?php echo base_url() .'assets/css/home.css'?>">



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
          
        </h1>
      </div>
    </div>
  </div>
  <section id="stuck_container">
  <!--==============================
              Stuck menu
  =================================-->
    <div class="container" class="not_home">
      <div class="row">
        <div class="grid_12 ">
          <div class="navigation">
            <nav>
              <ul class="sf-menu">
               <li><a href="<?php echo base_url(). 'home/index'?>">Home</a></li>
               
               <li><a href="<?php echo base_url(). 'home/about'?>">Preamble</a></li>
               
               <!-- <li class="current"><a href="#">Contacts</a></li> -->
               <li><a href="<?php echo base_url(). 'announcements/announce'?>">Programs</a></li>
               <li><a href="<?php echo base_url(). 'home/services'?>">About</a></li>
               <li class="white-text"><a href="#" class="" data-toggle="modal" data-target="#login_modal">Login</a></li>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3989.813079732551!2d34.768328!3d-0.092865!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1415209241149" width="600" height="450" frameborder="0" style="border:0"></iframe>
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
                      <!-- <span class="error-message">*This is not a valid name.</span> -->
                      
                    </label>
                  <br>
                    <label class="email">
                     <br>
                      <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
                      <span class="empty-message">*This field is required.</span>
                      <!-- <span class="error-message">*This is not a valid email.</span> -->
                      
                    </label>
                    <br>

                    <label class="phone">
                     <br>
                      <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@Required @JustNumbers" />
                      <span class="empty-message">*This field is required.</span>
                      <!-- <span class="error-message">*This is not a valid phone.</span> -->
                      
                    </label>
                   <br>
                    <label class="message">
                     <br>
                      <textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                      <span class="empty-message">*This field is required.</span>
                      <!-- <span class="error-message">*The message is too short.</span> -->
                      
                    </label>
                    <br>
                    
                    <div class="clear"></div>
                    <div>
                      <a class="btn btn-primary" data-toggle="modal" data-type="submit" data-target="#sent">Send e-mail</a>
                    </div>
                  </fieldset> 

                  <!-- Modal -->
                  <div id="sent" class="modal fade response-message" >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Success</h4>
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

  <!--Login modal -->
<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
      <?php $attr = array('id' =>"login_form",'name' => "login_form"); echo form_open("users/login",$attr); ?>
      <label for="user_name">User name:* </label>
      <input type="text" class="input form-control user_name" name="user_name" required title="Please fill in the required fields">
      <label for="password">Password:* </label>
      <input type="password" class="input form-control password" name="password" required title="Please fill in the required fields">
      <p class="warning_msg">**Please ensure all fields are filled**</p>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary margin-right-sm login_button">Login</button>
        <?php echo form_close(); ?>
      </div>
  </div>
</div>
</div>

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

<script src="<?php echo base_url() .'assets/js/jquery.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/jquery-migrate-1.1.1.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/jquery.easing.1.3.js'?>"></script>
<script src="<?php echo base_url(). 'assets/flat-ui/js/bootstrap.min.js'?>"></script>
      <script src="<?php echo base_url(). 'assets/flat-ui/js/bootstrap-select.js'?>"></script>
      <script src="<?php echo base_url(). 'assets/flat-ui/js/bootstrap-switch.js'?>"></script>
      <script src="<?php echo base_url(). 'assets/flat-ui/js/flatui-checkbox.js'?>"></script>
      <script src="<?php echo base_url(). 'assets/flat-ui/js/flatui-radio.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/home.js'?>"></script> 
<script src="<?php echo base_url() .'assets/js/superfish.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/jquery.equalheights.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/jquery.mobilemenu.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/tmStickUp.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/jquery.ui.totop.js'?>"></script>
<script src="<?php echo base_url(). 'assets/js/script.js'?>"></script>
<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});  
 }); 

</script>
</body>
</html>