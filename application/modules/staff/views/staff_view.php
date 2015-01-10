<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Member of Staff</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url().'assets/admin/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url().'assets/admin/css/font-awesome.min.css' ?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url().'assets/admin/css/ionicons.min.css' ?>" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url().'assets/admin/css/morris/morris.css' ?>" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url().'assets/admin/css/jvectormap/jquery-jvectormap-1.2.2.css' ?>" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo base_url().'assets/admin/css/datepicker/datepicker3.css' ?>" rel="stylesheet" type="text/css" />
        <!-- iCheck for checkboxes and radio inputs -->
        <link href="<?php echo base_url().'assets/admin/css/iCheck/all.css' ?>" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url().'assets/admin/css/daterangepicker/daterangepicker-bs3.css' ?>" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url().'assets/admin/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css' ?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url().'assets/admin/css/AdminLTE.css' ?>" rel="stylesheet" type="text/css" />

        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-ui.js' ?>"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <?php echo $userdetails[0]['ssg_name'];?>
            </a>
			<!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src='<?php echo $profile_picture; ?>' class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src='<?php echo $profile_picture; ?>' class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $userdetails[0]['f_name']." ".$userdetails[0]['s_name']; ?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                       <?php echo $userdetails[0]['f_name']." ".$userdetails[0]['s_name'];echo " - "; echo $userdetails[0]['ssg_name']; ?>
                                        <small>Member since Nov. 2015</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url().'staff/end_session'?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
        <?php
           $this->load->view('sidebar');
        ?>

        <?php
            $this->load->view($content_view);
        ?>
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url().'assets/js/jquery.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/admin/js/jquery-ui-1.10.3.min.js' ?>" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url().'assets/admin/js/bootstrap.min.js' ?>" type="text/javascript"></script>
        <!-- Morris.js charts -->
        
        <script src="<?php echo base_url().'assets/admin/js/plugins/morris/morris.min.js' ?>" type="text/javascript"></script>
        <!--<script src="<?php echo base_url().'assets/admin/js/AdminLTE/dashboard.js'?>" type="text/javascript"></script>-->
        <!-- Sparkline -->
        <script src="<?php echo base_url().'assets/admin/js/plugins/sparkline/jquery.sparkline.min.js' ?>" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url().'assets/admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js' ?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js' ?>" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url().'assets/admin/js/plugins/jqueryKnob/jquery.knob.js' ?>" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url().'assets/admin/js/plugins/daterangepicker/daterangepicker.js' ?>" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="<?php echo base_url().'assets/admin/js/plugins/datepicker/bootstrap-datepicker.js' ?>" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url().'assets/admin/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js' ?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js' ?>" type="text/javascript"></script>
         <!-- InputMask -->
        <script src="<?php echo base_url().'assets/admin/js/plugins/input-mask/jquery.inputmask.js' ?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/admin/js/plugins/input-mask/jquery.inputmask.date.extensions.js' ?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'assets/admin/js/plugins/input-mask/jquery.inputmask.extensions.js' ?>" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url().'assets/admin/js/AdminLTE/app.js' ?>" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url().'assets/admin/js/AdminLTE/dashboard.js' ?>" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url().'assets/admin/js/AdminLTE/demo.js' ?>" type="text/javascript"></script>
       
        
        <script type="text/javascript">
     $(function() {
                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Datemask2 mm/dd/yyyy
                $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
                //Money Euro
                $("[data-mask]").inputmask();

                //Date range picker
                $('#reservation').daterangepicker();
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
                //Date range as a button
                $('#daterange-btn').daterangepicker(
                        {
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                                'Last 7 Days': [moment().subtract('days', 6), moment()],
                                'Last 30 Days': [moment().subtract('days', 29), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                            },
                            startDate: moment().subtract('days', 29),
                            endDate: moment()
                        },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
                );

                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal',
                    radioClass: 'iradio_minimal'
                });
                //Red color scheme for iCheck
                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass: 'iradio_minimal-red'
                });
                //Flat red color scheme for iCheck
                $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                    checkboxClass: 'icheckbox_flat-red',
                    radioClass: 'iradio_flat-red'
                });

                //Colorpicker
                $(".my-colorpicker1").colorpicker();
                //color picker with addon
                $(".my-colorpicker2").colorpicker();

                //Timepicker
                $(".timepicker").timepicker({
                    showInputs: false
                });
            });


</script>


    </body>
</html>