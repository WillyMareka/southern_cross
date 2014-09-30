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
		<link rel="stylesheet" href="<?php echo base_url(). 'assets/stylesheets/animate.css'?>">
    <link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/stylesheets/style.css'?>">

	</head>
	<body>
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
      <a class="navbar-brand" data-toggle="modal" data-target="#myModal" href="#">SOUTHERN CROSS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
		
        <li><a href="#Home">Home</a></li>
        <li><a href="#Contacts">Contacts</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Applications<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="doctoralapp.php">Doctoral</a></li>
            <li><a href="mastersapp.php">Masters</a></li>
            <li><a href="bachelorapp.php">Bachelor</a></li>
            <li><a href="underapp.php">Under-Graduate</a></li>
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="courses.php">Courses</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">E-Learning<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Course</a></li>
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
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">SOUTHERN CROSS INSTITUTE OF TROPICAL MEDICINE</h4>
      </div>

      <div class="modal-body southernimage">
        
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-inverse" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<div class="jumbotron home-top" id="Home">
  <div class="home-top-text"> 
  <h1>Condusive environment</h1>
  <h3>Feel confortable while studying</h3>
  </div>

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner home-slide">

    <div class="item active">
      <div class="carousel-caption">
    <h4>"Isn't it a bit unnerving that doctors call what they do "practice"?"</h4>
    <p>- George Carlin</p>
  </div>
  <img src="<?php echo base_url(). 'assets/images/slideimage.jpg'?>" alt="plain_black_image">
</div>

<div class="item">
  <div class="carousel-caption">
    <h4>"Let food be thy medicine and medicine be thy food."</h4>
    <p>- Hippocrites</p>
  </div>
  <img src="<?php echo base_url(). 'assets/images/slideimage.jpg'?>" alt="plain_black_image">
  
</div>

<div class="item">
  <div class="carousel-caption">
    <h4>"Always laugh when you can, it is cheap medicine."</h4>
    <p>- George Gordon Byron</p>
  </div>
  <img src="<?php echo base_url(). 'assets/images/slideimage.jpg'?>" alt="plain_black_image">
</div>

<div class="item">
  <div class="carousel-caption">
    <h4>"A medicine cat has no time for doubt. Put your energy into today and stop worrying about the past."</h4>
    <p>- Erin Hunter, Rising Storm</p>
  </div>
  <img src="<?php echo base_url(). 'assets/images/slideimage.jpg'?>" alt="plain_black_image">
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
</div>

<div class="jumbotron home-bottom" id="Contacts">
  <div class="home-bottom-text">
      <h1>Contact us to know more</h1>
  </div>
  <div id="img_container" onmouseout="hide(this.id);">
    <img id="large_img" src="" />
  </div>
  <div class="contact-images">

    <a href="http://www.facebook.com">
    <button type="button" class="btn btn-default contact-button" data-toggle="tooltip" data-placement="top" title="Facebook">
     <img id="img1"  class="littleright" width="98" height="100" src="<?php echo base_url(). 'assets/icons/facebook.jpg'?>" onmouseover="show('img_container',this,'large_img');">
    </button></a>

    <a href="http://www.gmail.com">
    <button type="button" class="btn btn-default contact-button" data-toggle="tooltip" data-placement="top" title="Gmail">
     <img id="img2" class="littleright" width="98" height="100" src="<?php echo base_url(). 'assets/icons/gmail.jpg'?>" onmouseover="show('img_container',this,'large_img');">
    </button></a>

    <a href="http://www.twitter.com">
    <button type="button" class="btn btn-default contact-button" data-toggle="tooltip" data-placement="top" title="Twitter">
     <img id="img3" class="littleright" width="98" height="100" src="<?php echo base_url(). 'assets/icons/twitter.jpg'?>" onmouseover="show('img_container',this,'large_img');">
    </button></a>

    <a href="http://www.instragram.com">
    <button type="button" class="btn btn-default contact-button" data-toggle="tooltip" data-placement="top" title="Instagram">
     <img id="img4" class="littleright" width="98" height="100" src="<?php echo base_url(). 'assets/icons/instagram.jpg'?>" onmouseover="show('img_container',this,'large_img');">
    </button></a>

    <a href="http://www.yahoo.com">
    <button type="button" class="btn btn-default contact-button" data-toggle="tooltip" data-placement="top" title="Yahoo">
     <img id="img5" class="littleright" width="98" height="100" src="<?php echo base_url(). 'assets/icons/yahoo.jpg'?>" onmouseover="show('img_container',this,'large_img');">
    </button></a>

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