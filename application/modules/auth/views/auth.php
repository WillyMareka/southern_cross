<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Authentication Panel</title>
<link href="<?php echo base_url(); ?>assets/londonium/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/londonium/css/londinium-theme.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/londonium/css/styles.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/londonium/css/icons.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/londonium/js/application.js"></script>
</head>
<body class="full-width page-condensed">
<!-- Navbar -->
<div class="navbar navbar-inverse" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-right"><span class="sr-only">Toggle navbar</span><i class="icon-grid3"></i></button>
    <a class="navbar-brand" href="#">Southern Cross</a></div>
  <ul class="nav navbar-nav navbar-right collapse">
    <li><a href="#"><i class="icon-home"></i></a></li>
    <li><a href="#"><i class="icon-search"></i></a></li>
  </ul>
</div>
<!-- /navbar -->
<!-- Login wrapper -->
<div class="login-wrapper">
  <form action="<?php echo base_url(); ?>auth/login" role="form" method = "POST">
    <div class="popup-header"><a href="#" class="pull-left"><i class="icon-user-plus"></i></a><span class="text-semibold">Authentication Panel</span>
      <div class="btn-group pull-right"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i></a>
        <ul class="dropdown-menu icons-right dropdown-menu-right">
          <li><a href="#"><i class="icon-info"></i> Forgot password?</a></li>
          <li><a href="#"><i class="icon-support"></i> Contact admin</a></li>
        </ul>
      </div>
    </div>
    <div class="well">
      <div class="form-group has-feedback">
        <label>Username</label>
        <input type="text" class="form-control" placeholder="Username" name = "username">
        <i class="icon-users form-control-feedback"></i></div>
      <div class="form-group has-feedback">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Password" name = "password">
        <i class="icon-lock form-control-feedback"></i></div>
      <div class="row form-actions">
        <div class="col-xs-6">
          <div class="checkbox checkbox-success">
            <label>
              <input type="checkbox" class="styled">
              Remember me</label>
          </div>
        </div>
        <div class="col-xs-6">
          <button type="submit" class="btn btn-warning pull-right"><i class="icon-lock"></i> Sign in</button>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- /login wrapper -->
<!-- Footer -->
<div class="footer clearfix">
      <div class="pull-left">&copy; 2014. SOUTHERN CROSS INSTITUTE OF TROPICAL MEDICINE</div>
      <div class="pull-right icons-group"> <a href="#" title = "+2547160399"><i class="icon-phone"></i></a> <a href="#" title = "send emergency email"><i class="icon-mail-send"></i></a> <a href="#" title = "Locate Developers"><i class="icon-cog3"></i></a> </div>
</div>
<!-- /footer -->
</body>
</html>