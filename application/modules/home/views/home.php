<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/flat-ui/bootstrap/css/bootstrap.css'?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/flat-ui/css/flat-ui.css'?>" />
<link rel="<?php echo base_url() .'assets/css/icons/icon.css'?>" href="<?php echo base_url() .'assets/images/favicon.ico'?>">
<link rel="shortcut icon" href="<?php echo base_url() .'assets/images/favicon.ico'?>" /> 
<link rel="stylesheet" href="<?php echo base_url() .'assets/font-awesome/css/font-awesome.css'?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/css/home.css'?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/stylesheets/style.css'?>" />



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
<body class="page1" id="top">
  <!--==============================
                header
  =================================-->
  <header>
  <div class="tint">
    <div class="container">
      <div class="row">
        <div class="grid_2 rel">
          <h1>
            <a href="#">
              <img class="top_icon" src="<?php echo base_url() .'assets/images/siteimage.jpg'?>" alt="Logo alt" width = "150">
            </a>
          </h1>
        </div>


      <section id="stuck_container">
    <!--==============================
                Stuck menu
    =================================-->
      <div class="container">
        <div class="row">
          <div class="grid_8 ">
            <div class="navigation mynav">
              <nav>
                <ul class="sf-menu">
                 <li class="current"><a href="#">Home</a></li>
                 <li><a href="<?php echo base_url(). 'home/programs'?>">Programs</a></li>
                 <li><a href="<?php echo base_url(). 'announcements/course_details'?>">Courses Details</a></li>
                 <li><a href="<?php echo base_url(). 'home/contacts'?>">Contacts</a></li>
                 <li><a href="<?php echo base_url(). 'home/services'?>">About Us</a></li>
                 <li><a href="#" class="white-text" data-toggle="modal" data-target="#login_modal">Login</a></li>
               </ul>
        </nav>
              <div class="clear"></div>
            </div>       
           <div class="clear"></div>  
          </div>
       </div> 
      </div> 
    </section>


      </div>
    </div>
    
    <section class="page1_header">
      <div class="container">
        <div class="row">
          <div class="grid_4">
            <a style="width:370px" href="<?php echo base_url(). 'applications/diploma'?>" class="banner globe"><div class="maxheight">
              <div class="fa fa-globe"></div>Diploma / Certificate</div>
            </a>
            <a style="height:186px" href="<?php echo base_url(). 'home/about'?>" class="banner brief"><div class="maxheight">
              <div class="fa fa-briefcase"></div>Preamble</div>
            </a>
            <a href="<?php echo base_url(). 'applications/short_courses'?>" class="banner "><div class="maxheight">
              <div class="fa fa-cog"></div>Short Courses</div>
            </a>
            <!-- <a href="<?php echo base_url(). 'applications/short_courses'?>" class="banner "><div class="maxheight">
              <div class="fa fa-cog"></div>Short Courses</div>
            </a> -->
            <!-- <a href="<?php echo base_url(). 'home/about'?>" class="banner "><div class="maxheight">
              <i class="fa fa-line-chart"></i>Preamble</div>
            </a> -->

          </div>
          <div class="grid_5">
            <h2>Southern Cross Institute of Tropical Medicine</h2>

            MID-LEVEL MEDICAL TRAINING COLLEGE
          </div>
        </div>
        <!-- <div><span class="glyphicon glyphicon-circle-arrow-up"></span>Registrations</div> -->
      </div>
    </section>
  </div>
  </header>
 <!--  <div class="block-1">
    <div class="container">
      <div class="row">
        Certification to the Medical Fraternity
        <div class="grid_3">
          <div class="block-1_count">10</div>
          Years of <br> Educating the Nation
          <div class="clear"></div>
        </div>
        <div class="grid_3">
          <div class="block-1_count">200</div>
          Successful <br> Working Class Citizens
          <div class="clear"></div>
        </div>
        <div class="grid_3">
          <div class="block-1_count">20</div>
          Partner <br> Universities
          <div class="clear"></div>
        </div>
         <div class="grid_3">
          <a href="#" class="support"><img src="<?php echo base_url() .'assets/images/support.png'?>" alt=""></a>
        </div> 
      </div>
    </div>
  </div> -->
  <!--=====================
            Content
  ======================-->
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


  <section id="content">
    <div class="container">
      <div class="row">
        <div class="grid_10 preffix_1 ta__center">
          <div class="greet">
            <h2 class="head__1">
              Welcome
            </h2>
            <h4>
               Certification to the Medical Fraternity
            </h4>
            <p>To the <span class="light-blue-color">Southern Cross Institute</span> Homepage. <br> Register for Courses <a href="<?php echo base_url(). 'applications/diploma'?>" rel="nofollow" class="color1">Here</a> <br > <!-- OR <br> <a href = "<?php echo base_url() .'information/application_form.pdf'?>" download> <i class = "fa fa-file-pdf-o"></i> Download the Application Form</a></p> -->
            
          </div>
        </div>
      </div>
    </div>
    <article class="content_gray">
      <div class="container">
        <div class="row">
          <div class="grid_12">
            <h3>Why You Should Study at Southern Cross Institute</h3>

            <div class="block-2">
              <img width="170px" height="170px" src="<?php echo base_url() .'assets/images/doctor.jpg'?>" alt="" class="img_inner fleft">
              <div class="extra_wrapper">
                <div class="text1"><a href="#">Career Advancement</a></div>
                <p>The curriculum under the Certificate programs is designed to allow students to upgrade to Diploma level over 18 months bridging course upon graduation. <p>The College is also seeking to collaborate with Public Universities such as Maseno University, JKUAT and Moi University for advancement to a Degree course in Public Health for our Diploma students.</p>
                <br>
                
              </div>
            </div>

            <div class="block-2">
              <img width="170px" height="170px" src="<?php echo base_url() .'assets/images/experience1.jpg'?>" alt="" class="img_inner fleft">
              <div class="extra_wrapper">
                <div class="text1"><a href="#">Exposure</a></div>
                <p>American hospitals in the United States recruit nurses from overseas, especially from the Philippines and Africa, to accommodate the nursing shortage, and our College is negotiating with a US based College of Medicine to formalize a Student Exchange program. Our College will institute a curriculum from a US based Medical College into our local curriculum to allow Transfer of Credits and Student Exchange between the affiliate Colleges. The College intends to pioneer in this unique arrangement that will create preferential job opportunities in the United States and other international markets for our graduates. 
                <br>
               
              </div>
            </div>
            <div class="block-2">
              <img width="170px" height="170px" src="<?php echo base_url() .'assets/images/nursework.jpg'?>" alt="" class="img_inner fleft">
              <div class="extra_wrapper">
                <div class="text1"><a href="#">Marketability</a></div>
                <p> A strategic alliance with a USA based Medical Institution will also facilitate deployment of Nursing and Social Work student into the US market.</p>
                <br>
                <p style="font-size:15px"><strong class='marketbold'>Kenya’s Health Workforce Training Capacity: a Situation Analysis</strong></p>
                 <a href="<?php echo base_url(). 'home/market'?>"><button type="button" class="btn btn-primary">More</button></a>

                 <!-- <a class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">More</a> -->

                 <!-- Button trigger modal -->
         <!-- <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
             Launch demo modal
        </button> -->

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-lg">
      <div class="modal-header modal-lg">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Kenya’s Health Workforce Training Capacity: A Situation Analysis</h4>
      </div>
      <div class="modal-body">
       <p> 
        The health workforce is a vital component of any health system. Moving from a disease-specific approach to healthcare promotion, policy makers are now shifting towards a health systems approach, which includes strengthening the health workforce. The impetus for this new focus on health systems strengthening and human resources for health (HRH) came, in part, 
           as a result of research from the 2004 Joint Learning Initiative and The World Health Report in 2006, which demonstrated a clear 
         link between health workforce density and a number of health indicators (2004; 2006b).Numerous studies have explored the link between an adequate 
           supply and deployment of HRH and health services delivery. The Joint Learning Initiative, comprised of global health experts, 
        found that a density of 2.3 health care workers per 1,000 population was associated with 80% coverage in skilled birth attendance and measles vaccination (2004), and a distinct 
           relationship between the density of the health workforce and mortality rates for mothers, infants and children under five. However, thirty-six sub-Saharan African countries, including 
        Kenya, are facing a critical shortage of heath care workers. The Government of Kenya (GoK), in partnership with the President’s Emergency Plan for AIDS Relief (PEPFAR), is 
           considering interventions to scale-up Kenya’s health workforce, increasing the number of doctors, nurses, midwives, clinical 
        officers and community workers, among other cadres. It should be noted that registration as a professional health worker requires enrolling in and completing an approved training 
           institution (i.e. intake and graduation), taking a licensure exam, and applying for registration.Kenya’s Health WorkforceInformation on workforce registration and licensure renewals can be used to calculate Kenya’s workforce-to-population density and 
        compare it to the WHO recommendation of 2.3 health workers per 1,000 populations.
        </p>

<table class="table modal-table">
  <tr style="background-color:#0099CC">
    <strong class="str"><td style="text-align:center" 

colspan="7">Table 1: Kenya's Health WorkForce</td></strong>
  </tr>
  <tr style="background-color:#0099CC">
    <strong>
    <td></td>
    <td>Doctors</td>
    <td>Dentists</td>
    <td>Nurses/Mid-Wives</td>
    <td>Clinical Officers</td>
    <td>Laboratory Techs</td>
    <td>Total</td>
    </strong>
  </tr>
  <tr style="background-color:#66FFFF">
    <td>Registered</td>
    <td>6,306</td>
    <td>780</td>
    <td>43,970</td>
    <td>8,300</td>
    <td>4,699</td>
    <td>64,055</td>
  </tr>
  <tr style="background-color:#66FFFF">
    <td>Licensure Renewals</td>
    <td>4,756</td>
    <td>590</td>
    <td>28,214</td>
    <td>6,300</td>
    <td>2,092</td>
    <td>41,952</td>
  </tr>
</table>


<p>
  Calculating workforce-to-population ratios based on both the number of “registered” and “retained” health care workers provides a range for workforce density estimates. According to 
   the number of registered health personnel, Kenya has 1.54 health workers (doctors, nurses, midwives, and clinical officers) per 
  1,000 people. Based on the number of retained health personnel, Kenya has 1.03 health workers (doctors, nurses, midwives, and 
    clinical officers) per 1,000 people based on the 2009 Census data for an estimated national population of 38.6M in 2010. Using 
  either estimate, the density of health workers in Kenya is below the recommended 2.30 per 1,000 people. 
</p>

      </div>


    <div class="modal-footer modal-lg">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
              </div>
            </div>
            



          </div>
        <!--   <div class="grid_4 preffix_1">
            <h3>Testimonials</h3>
            <blockquote class="bq1">
              <p>“Curabitur vel lorem sit amet nulla erero fermentum. In vitae varius auguectetu ligula. Etiam dui eros, laoreet site am est vel commodo venenatisipiscing... ”</p>
              <span>Testimonial One</span>
            </blockquote>
            <blockquote class="bq1">
              <p>“Burabitur vel lorem sit amet nulla erero fermentum. In vitae varius auguectetu ligula. Etiam dui eros, laoreet site am ast vel commodo venenatisipiscino... ”</p>
              <span>Testimonial Two</span>
            </blockquote>
          </div> -->
        </div>
      </div>
    </article>
    <div class="container">
      <div class="row">
        <div class="grid_5">
          <h4>More about <span class="light-blue-color">Southern Cross</span></h4>
          <img width="170px" height="170px" src="<?php echo base_url() .'assets/images/siteimage.jpg'?>" alt="" class="img_inner fleft">
            <p>A limited liability company incorporated in Kenya, made up of a team of professionals with a combined experience in medical services, project management and finance. The consortium of professionals has been put together for the sole purpose of running a Mid-Level Medical College. </p>
            <!-- <p class="offset__1">Eligulaam dui eros dertolisce dertolo adipiscing quam id risus sagittis</p>
            Curabitur vel lorem sit amet nulla ullamcorper fermentum In vitae dert rius augue, eu consectetur larem dui eros dertolisce dertolo  -->
        </div>
        <!-- <div class="grid_4">
          <h4>Other useful Links</h4>
          <ul class="list-1">
            <li><a href="#">Vivamus at magna non nunc tristique </a></li>
            <li><a href="#">Aliquam nibh ante, egestas id</a></li>
            <li><a href="#">Ommodo luctus libero</a></li>
            <li><a href="#">Faucibus malesuada faucibusonec </a></li>
            <li><a href="#">Laoreet metus id laoreet</a></li>
            <li><a href="#">Jalesuadaorem ipsum dolor sit ame</a></li>
          </ul>
        </div> -->
        <div class="grid_3">
          <h4>Contact Info</h4>
          <address>
            <ul class="cont_address">
              <li>P.O. Box 1280-40100, Kisumu Kenya</li>
              <li>Email:<a href="#">southerncrossinstitute@gmail.com</a></li>
              <li><a href="#">Tel Office:  +254(0)717 - 056 523</a></li>
              <li><a href="#">Mobile: +254(0)717 - 056 523</a></li>
            </ul>
          </address>
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
          <div class="copyright"><span class="brand">Southern Cross Institute</span> &copy; <span id="copyright-year"></span> | <a class="privacy" href="#">Privacy Policy</a>
          </div>
        </div>
      </div>
    </div>  
  </footer>
  <a href="#" id="toTop" class="fa fa-chevron-up"></a>



<script src="<?php echo base_url() .'assets/js/jquery.js'?>"></script>
<script src="<?php echo base_url() .'assets/bootstrap/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/jquery-migrate-1.1.1.js'?>"></script>
<script src="<?php echo base_url() .'assets/js/jquery.easing.1.3.js'?>"></script>
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
<style type="text/css">
  .mynav > nav > ul > li > a
  {
    color: #fff !important;
  }
</style>
<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});  
 }); 
</script>

</body>
</html>