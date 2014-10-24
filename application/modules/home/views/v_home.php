<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SOUTHERN CROSS</title>
		<link rel="icon" type="image/x-icon" href="<?php echo base_url(). 'assets/icons/hospital.ico'?>" />
		<link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/flat-ui/bootstrap/css/bootstrap.css'?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/flat-ui/css/flat-ui.css'?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/kickstart/css/fonts/font-awesome/css/font-awesome.min.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/script/jquery/jquery-ui.css'?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/stylesheets/animate.css'?>">
    <link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/stylesheets/style.css'?>">

	</head>
	<body>
  <div class="home-body">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" data-toggle="modal" data-target="#myModal" href="#"><img class="home-icon" src="<?php echo base_url(). 'assets/icons/logo.jpg'?>"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
    
        <li class="active"><a href="#Home">Home</a></li>
        <li><a href="#Status">Status</a></li>
        <li><a href="#Contacts">Contacts</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Applications<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Doctoral</a></li>
            <li><a href="#">Masters</a></li>
            <li><a href="#">Bachelor</a></li>
            <li><a href="#">Under-Graduate</a></li>
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url(). 'announcements/announce'?>">Announcements</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">E-Learning<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Courses</a></li>
            <li><a href="#">Library</a></li>
            <li><a href="#">Exams</a></li>
            <li class="divider"></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Clubs</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">SOUTHERN CROSS INSTITUTE OF TROPICAL MEDICINE</h4>
      </div>
      <div class="modal-body southernimage">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


  <div id="carousel-example-generic" class="carousel slide carou" data-ride="carousel">
   <!-- Carousel indicators -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
   </ol>   
   <!-- Carousel items -->
   <div class="carousel-inner">
      <div class="item texted active">
        <h4>"Isn't it a bit unnerving that doctors call what they do "practice" ? "</h4>
         
         <p>- George Carlin</p>
      </div>
      <div class="item texted">
         <h4>"Let food be thy medicine and medicine be thy food."</h4>
         <p>- Hippocrites</p>
      </div>
      <div class="item texted">
         <h4>"Always laugh when you can, it is cheap medicine."</h4>
         <p>- George Gordon Byron</p>
      </div>
      <div class="item texted">
         <h4>"A medicine cat has no time for doubt. Put your energy into today and stop worrying about the past."</h4>
         <p>- Erin Hunter, Rising Storm</p>
         
      </div>
   </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> 



<div class="well well-lg status" id="Status">
  <div class="row">

  <div class="col-sm-6 col-md-4">
    <a href="#">
    <div class="thumbnail status_image">
      <img src="<?php echo base_url(). 'assets/images/blacknigga.jpg'?>" alt="About">
      <div class="caption">
        <h4>About</h4>
      </div>
      </div>
    </a>
    </div>
  

  <div class="col-sm-6 col-md-4">
    <a href="#">
    <div class="thumbnail status_image">
      <img src="<?php echo base_url(). 'assets/images/graduate.jpg'?>" alt="Application">
      <div class="caption">
        <h4>Application</h4>
      </div>
      </div>
    </a>
    </div>
  

  <div class="col-sm-6 col-md-4">
    <a href="#">
    <div class="thumbnail status_image">
      <img src="<?php echo base_url(). 'assets/images/courses.jpg'?>" alt="Courses">
      <div class="caption">
        <h4>Courses</h4>
      </div>
      </div>
    </a>
    </div>

  </div>
  </div>

 



<div class="footer" id="Contacts">
  <div class="footer_form left">

  <form role="form" action="<?php echo base_url(). 'home/enter_comment'?>" method="POST">
     <div class="form-group">
       <label for="exampleInputEmail1">NAME</label>
       <input type="text" class="form-control" name="name" id="InputName" required placeholder="Enter your Name">
     </div>
     <div class="form-group">
       <label for="exampleInputPassword1">EMAIL ADDRESS</label>
       <input type="email" class="form-control" name="email" id="InputEmail" required placeholder="Enter Email">
     </div>
     <div class="form-group">
       <label for="InputMobile">MOBILE NUMBER</label>
       <input type="text" class="form-control" name="mobile" id="InputMobile" required placeholder="Enter Mobile Number">
     </div>
     <div class="form-group">
       <label for="InputMessage">MESSAGE</label>
       <textarea class="form-control" name="message" id="InputMessage" required placeholder="Enter Message"></textarea>
     </div>
     
    <button type="submit" class="btn btn-info">Submit</button>
  </form>

  </div>

  <div class="footer_contacts right">
   <a href="http://www.facebook.com"><img class="contact_icons" src="<?php echo base_url(). 'assets/icons/facebook.jpg'?>"><strong> Facebook</strong></a>
   <a href="http://www.gmail.com"><img class="contact_icons" src="<?php echo base_url(). 'assets/icons/gmail.jpg'?>"><strong> G-Mail</strong></a>
   <a href="http://www.yahoo.com"><img class="contact_icons" src="<?php echo base_url(). 'assets/icons/yahoo.jpg'?>"><strong> Yahoo</strong></a>
   <a href="http://www.twitter.com"><img class="contact_icons" src="<?php echo base_url(). 'assets/icons/twitter.jpg'?>"><strong> Twitter</strong></a>
  </div>
 </div>

</div>

		  <script src="<?php echo base_url(). 'assets/flat-ui/js/jquery-1.8.3.min.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/flat-ui/js/jquery-ui-1.10.3.custom.min.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/flat-ui/js/jquery.ui.touch-punch.min.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/flat-ui/js/bootstrap.min.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/flat-ui/js/bootstrap-select.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/flat-ui/js/bootstrap-switch.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/flat-ui/js/flatui-checkbox.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/flat-ui/js/flatui-radio.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/flat-ui/js/jquery.tagsinput.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/flat-ui/js/jquery.placeholder.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/script/jquery/jquery-ui.js'?>"></script>
	    <script src="<?php echo base_url(). 'assets/js/main.js'?>"></script>
	</body>
</html>