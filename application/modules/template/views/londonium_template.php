<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Southern Cross - <?php echo $pagetitle; ?></title>
<link href="<?php echo base_url(); ?>assets/londonium/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/londonium/css/londinium-theme.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/londonium/css/styles.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/londonium/css/icons.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/charts/flot.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/charts/excanvas.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/charts/flot.resize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/charts/sparkline.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/forms/inputmask.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/forms/autosize.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/forms/inputlimit.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/forms/listbox.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/forms/tags.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/forms/switch.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/forms/uploader/plupload.queue.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/forms/wysihtml5/toolbar.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/interface/fancybox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/interface/moment.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/interface/jgrowl.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/interface/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/interface/fullcalendar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/interface/timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/plugins/interface/collapsible.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/bower_components/highcharts/highcharts.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/bower_components/highcharts/modules/exporting.js"></script>
<script type="text/javascript">
   base_url='<?php  echo base_url(); ?>';
</script>
<script type="text/javascript" src = "<?php echo base_url(); ?>assets/script/custom_admin.js"></script>
<!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/application_blank.js"></script>-->

<!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/charts/widgets/updating_1.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/charts/widgets/updating_2.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/charts/widgets/updating_3.js"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/application.js"></script> 

</head>
<body class="sidebar-wide">
<!-- Navbar -->
<div class="navbar navbar-inverse" role="navigation">
  <div class="navbar-header"><a class="navbar-brand" href="#">Southern Cross</a><a class="sidebar-toggle"><i class="icon-indent-decrease"></i></a>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons"><span class="sr-only">Toggle navbar</span><i class="icon-grid3"></i></button>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar"><span class="sr-only">Toggle navigation</span><i class="icon-paragraph-justify2"></i></button>
  </div>
  <ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-people"></i><span class="label label-default">0</span></a>
      <div class="popup dropdown-menu dropdown-menu-right">
        <div class="popup-header"><a href="#" class="pull-left"><i class="icon-spinner7"></i></a><span>Activity</span><a href="#" class="pull-right"><i class="icon-paragraph-justify"></i></a></div>
        <ul class="activity">
        <!-- add activity right here-->
        </ul>
      </div>
    </li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bubble-user"></i><span class="label label-default">0</span></a>
      <div class="popup dropdown-menu dropdown-menu-right">
        <div class="popup-header"><a href="#" class="pull-left"><i class="icon-spinner7"></i></a><span>Messages</span><a href="#" class="pull-right"><i class="icon-new-tab"></i></a></div>
        <ul class="popup-messages">
          <!-- messages right here -->
        </ul>
      </div>
    </li>
    <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle"><i class="icon-grid"></i></a>
      <div class="popup dropdown-menu dropdown-menu-right">
        <div class="popup-header"><a href="#" class="pull-left"><i class="icon-spinner7"></i></a><span>Tasks list</span><a href="#" class="pull-right"><i class="icon-new-tab"></i></a></div>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Description</th>
              <th>Category</th>
              <th class="text-center">Priority</th>
            </tr>
          </thead>
          <tbody>
            <!-- add taskes -->
          </tbody>
        </table>
      </div>
    </li>
    <li class="user dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><img src="<?php base_url(); ?>assets/londonium/images/demo/users/face15.png" alt="user-image"><span>Scitm Admin</span><i class="caret"></i></a>
      <ul class="dropdown-menu dropdown-menu-right icons-right">
        <li><a href="#"><i class="icon-user"></i> Profile</a></li>
        <li><a href="#"><i class="icon-bubble4"></i> Messages</a></li>
        <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
        <li><a href="#"><i class="icon-exit"></i> Logout</a></li>
      </ul>
    </li>
  </ul>
</div>
<!-- /navbar -->
<!-- Page container -->
<div class="page-container">
  <!-- Sidebar -->
  <div class="sidebar collapse">
    <div class="sidebar-content">
      <!-- User dropdown -->
      <div class="user-menu dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php base_url(); ?>assets/londonium/images/demo/users/face15.png" alt="">
        <div class="user-info">Scitm Admin <span>Administrator</span></div>
        </a>
        <div class="popup dropdown-menu dropdown-menu-right">
          <div class="thumbnail">
            <div class="thumb"><img alt="" src="<?php base_url(); ?>assets/londonium/images/demo/users/face15.png">
              <div class="thumb-options"><span><a href="#" class="btn btn-icon btn-success"><i class="icon-pencil"></i></a><a href="#" class="btn btn-icon btn-success"><i class="icon-remove"></i></a></span></div>
            </div>
            <div class="caption text-center">
              <h6>Scitm Admin <small>Administrator</small></h6>
            </div>
          </div>
          <ul class="list-group">
            <li class="list-group-item"><i class="icon-quill2 text-muted"></i> Applications <span class="label label-danger">0</span></li>
            <li class="list-group-item"><i class="icon-user4 text-muted"></i> Lecturers <span class="label label-success">0</span></li>
            <li class="list-group-item"><i class="fa fa-mortar-board text-muted"></i> Students <span class="label label-success">0</span></li>
            <li class="list-group-item"><i class="icon-book2 text-muted"></i> Courses <span class="label label-success">0</span></li>
          </ul>
        </div>
      </div>
      <!-- /user dropdown -->
      <!-- Main navigation -->
      <ul class="navigation">
        <li class="active"><a href="<?php echo base_url(); ?>admin"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
        <li><a href="<?php echo base_url(); ?>admin"><span>Messages</span> <i class="icon-bubble-user"></i></a></li>
        <li><a href="<?php echo base_url(); ?>admin/applications"><span>Applications</span> <i class="icon-quill2"></i></a></li>
        <li><a href="#" class = "expand"><span>Staff</span> <i class="icon-vcard"></i></a>
          <ul>
            <li><a href = "#"><i class = "icon-user4 text-muted"></i> Teaching Staff </a></li>
            <li><a href = "#"><i class = "icon-people text-muted"></i> Support Staff </a></li>
          </ul>
        </li>
        <li><a href="#"><span>Students</span> <i class="fa fa-mortar-board"></i></a></li>
        <li><a href="#"><span>User Management</span> <i class="icon-users"></i></a></li>
        <li><a href="#" class="expand" id="second-level"><span>School Setup</span> <i class="icon-cogs"></i></a>
          <ul>
            <li><a href="#" class="expand">Courses</a>
              <ul>
                <li><a href = "#">Course Units</a></li>
                <li><a href = "#">Course Management</a></li>
              </ul>
            </li>
            <li><a href="">Classrooms</a></li>
            <li><a href="">System Settings</a></li>
          </ul>
        </li>
        <li><a href = "#"><span>Log Out</span> <i class = "icon-lock"></i></a></li>
      </ul>
      <!-- /main navigation -->
    </div>
  </div>
  <!-- /sidebar -->
  <!-- Page content -->
  <div class="page-content">
    <!-- Page header -->
        <div class="page-header">
      <div class="page-title">
        <h3><?php echo $pagetitle; ?> <small><?php echo $pagedescription; ?></small></h3>
      </div>
      <div id="reportrange" class="range">
        <div class="visible-xs header-element-toggle"><a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a></div>
        <div class="date-range"></div>
        <span class="label label-danger">9</span></div>
    </div>
    <!-- /page header -->
    <!-- Breadcrumbs line -->
    <div class="breadcrumb-line">
      <ul class="breadcrumb">
        <li><a href="index.html"><?php echo $pagetitle; ?></a></li>
      </ul>
      <div class="visible-xs breadcrumb-toggle"><a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a></div>
      <ul class="breadcrumb-buttons collapse">
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search3"></i> <span>Search</span> <b class="caret"></b></a>
          <div class="popup dropdown-menu dropdown-menu-right">
            <div class="popup-header"><a href="#" class="pull-left"><i class="icon-paragraph-justify"></i></a><span>Quick search</span><a href="#" class="pull-right"><i class="icon-new-tab"></i></a></div>
            <form action="#" class="breadcrumb-search">
              <input type="text" placeholder="Type and hit enter..." name="search" class="form-control autocomplete">
              <div class="row">
                <div class="col-xs-6">
                  <label class="radio">
                    <input type="radio" name="search-option" class="styled" checked="checked">
                    Students</label>
                  <label class="radio">
                    <input type="radio" name="search-option" class="styled">
                    Lecturers</label>
                </div>
                <div class="col-xs-6">
                  <label class="radio">
                    <input type="radio" name="search-option" class="styled">
                    Users</label>
                  <label class="radio">
                    <input type="radio" name="search-option" class="styled">
                    Courses</label>
                </div>
              </div>
              <input type="submit" class="btn btn-block btn-success" value="Search">
            </form>
          </div>
        </li>
      </ul>
    </div>

    <?php $this->load->view($content_view); ?>
    <!-- Footer -->
    <div class="footer clearfix">
      <div class="pull-left">&copy; 2014. SOUTHERN CROSS INSTITUTE OF TROPICAL MEDICINE</div>
      <div class="pull-right icons-group"> <a href="#" title = "+2547160399"><i class="icon-phone"></i></a> <a href="#" title = "send emergency email"><i class="icon-mail-send"></i></a> <a href="#" title = "Locate Developers"><i class="icon-cog3"></i></a> </div>
    </div>
    <!-- /footer -->
  </div>
  <!-- /page content -->
</div>
<!-- /content -->


</body>
</html>