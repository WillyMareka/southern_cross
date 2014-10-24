<html>
	<head>
		<title><?php echo $title; ?></title>
		<!-- Loading Bootstrap -->
	    <link href="assets/flat-ui/bootstrap/css/bootstrap.css" rel="stylesheet">

	    <!-- Loading Flat UI -->
	    <link href="assets/flat-ui/css/flat-ui.css" rel="stylesheet">
		<style type="text/css">
		/*custom classes*/
		.mani
		{
			padding-top: 50px;
		}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"><?php echo $heading;?></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Home</a></li>
		        <li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			<button type="button" class="btn btn-default navbar-btn">Sign in</button>
			<!--<p class="navbar-text">Signed in as Mark Otto</p>-->
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>		
		<?php 
			$this->load->view($sidebar);
		?>
		<?php
			$this->load->view($content_view);
		?>
	<script src="assets/flat-ui/js/jquery-1.8.3.min.js"></script>
    <script src="assets/flat-ui/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="assets/flat-ui/js/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/flat-ui/js/bootstrap.min.js"></script>
    <script src="assets/flat-ui/js/bootstrap-select.js"></script>
    <script src="assets/flat-ui/js/bootstrap-switch.js"></script>
    <script src="assets/flat-ui/js/flatui-checkbox.js"></script>
    <script src="assets/flat-ui/js/flatui-radio.js"></script>
    <script src="assets/flat-ui/js/jquery.tagsinput.js"></script>
    <script src="assets/flat-ui/js/jquery.placeholder.js"></script>
	</body>
</html>