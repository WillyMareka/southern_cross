<div>
	<aside class="left-side sidebar-offcanvas">
     <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
        <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="../img/avatar3.png" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Hello, Jane</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
                    <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
    	            <span class="input-group-btn">
	    	            <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="<?php echo base_url().'admin'?>">
            	        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'admin/application'?>">
                        <i class="fa fa-th"></i> <span>Applications</span> <small class="badge pull-right bg-green">new</small>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url().'admin/form'?>">
            	        <i class="fa fa-dashboard"></i> <span>Dummy Brief Form</span>
                    </a>
                </li>
                        
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i>  Multilevel Menu
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="treeview">
                            <a href="#">
                               First level
                               <i class="fa fa-angle-left pull-right"></i>
                            </a>

                                    <ul class="treeview-menu">
                                        <li class="treeview">
                                            <a href="#">
                                                Second level
                                                <i class="fa fa-angle-left pull-right"></i>
                                            </a>

                                            <ul class="treeview-menu">
                                                <li>
                                                    <a href="#">Third level</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
</div>