
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/bootstrap/css/bootstrap.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/bootstrap/css/bootstrap.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/bootstrap/css/bootstrap-responsive.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/css/announcements.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/font-awesome/css/font-awesome.css'?>">
</head>
<body>
  <div class = "container">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">PROGRAMS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url(). 'home/index'?>">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Application<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo base_url(). 'applications/diploma'?>">Diploma</a></li>
            <li><a href="<?php echo base_url(). 'applications/certificate'?>">Certificate</a></li>
            
            <li><a href="<?php echo base_url(). 'applications/short_courses'?>">Short Courses</a></li>
            
          </ul>
        </li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="<?php echo base_url(). 'admin/index'?>">Log-In</a></li> -->
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
  <div class = "top-section">
  <p>Southern Cross Institute of Tropical Medicine is a Mid-Level Medical Training College located in Migosi Area of Kisumu County, and set up on a 4 storey building previously known as Mamalea, off the Kisumu-Kakamega Road.</p>
  <P>The college offers courses in the following fields:</P><div class="panel-group" id="accordion">
    <div class="panel panel-red">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
            <i class = "fa fa-mortar-board"></i> Diploma Programs<span class = "pull-right">Click to View</span>
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse">
        <div class="panel-body">
          <ol>
            <li>Diploma in Community Health and Development</li>
            <li>Diploma in Medical & Psychological Counseling</li>
            <li>Diploma in Social Work</li>
            <li>Diploma in Clinical Medicine and Surgery <i>(Subject to accreditation)</i></li>
            <li>Diploma in Community Development <i>(Subject to accreditation)</i></li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-red">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
            <i class = "fa fa-mortar-board"></i> Certificate Programs<span class = "pull-right">Click to View</span>
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse">
        <div class="panel-body">
          <ol>
            <li>Certificate in Community Health & Development</li>
            <li>Certificate in Medical & Psychological Counseling</li>
            <li>Certificate in Social Work</li>
            <li>Certificate in HIV Management</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-red">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
            <i class = "fa fa-mortar-board"></i> Professional Programs <span class = "pull-right">Click to View</span>
          </a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse">
        <div class="panel-body">
          <ol>
            <li>Registered Community Health Nursing <i>(Subject to accreditation)</i></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div>
    <p>The curriculum under the <span><a href= "<?php echo base_url() .'courses/category/certificate'?>">Certificate Programs</a></span> is designed to allow students to upgrade to <span><a href = "<?php echo base_url() .'courses/category/diploma'?>">Diploma Level</a></span> on a 1 <sup>1</sup>/<sub>2</sub> year course upon graduation. The College is also seeking to collaborate with public Universities such as Maseno Uuniversity, JKUAT and MOI University for advancement to Degree course in Public Health for our Diploma Students. A strategic alliance with a USA based medical institution will also facilitate deployment of Nursing and Social Work students into the US Market</p>

    <center>
    <p><h4><b>Registration of students is ongoing for the new January 2015 intakes <br/><a href = "<?php echo base_url() .'applications/diploma'?>">Apply here. </a></p>
    <!-- <p>Continuing students are encouraged to register for progressive learning and continuity subject to certification of their course work</b></h4></p>
    </center> -->

    <center><h2>CERTIFICATION TO THE MEDICAL FRATERNITY!!!</h2></center>
  </div>
  </div>

  <script type="text/javascript" src = "<?php echo base_url() .'assets/js/jquery.min.js'?>"></script>
  <script type="text/javascript" src = "<?php echo base_url() .'assets/bootstrap/js/bootstrap.js'?>"></script>
</body>
</html>