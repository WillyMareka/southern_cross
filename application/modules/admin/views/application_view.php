<div>
    <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Applications
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Applications</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <?php
                if ($application != NULL)
                {
            ?>
            <div class="row">

                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Students Details</h3>
                            <div class="box-tools">
                                <div class="input-group">
                                    <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                    <div class="input-group-btn">
                                       <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th rowspan="2">#</th>
                                        <th rowspan="2">First Name</th>
                                        <th rowspan="2">Last Name</th>
                                        <th rowspan="2">Other Names</th>
                                        <th rowspan="2">Student Phone</th>
                                        <th rowspan="2">Student Email</th>
                                        <th rowspan="2">Admission Date</th>
                                        <th rowspan="2">Status</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                    <tr>
                                        <th>Disapprove</th>
                                        <th>Approve</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $i=1; 
                                        foreach ($application as $value) {
                                        $id = $value['id'];
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $value['firstname'];?></td>
                                        <td><?php echo $value['lastname'];?></td>
                                        <td><?php echo $value['othernames'];?></td>
                                        <td><?php echo $value['student_phone'];?></td>
                                        <td><?php echo $value['student_email'];?></td>
                                        <td><?php echo $value['admission_date'];?></td>

                                    <?php
                                        if($value['status'] == 1)
                                        {
                                            $span = "<span class='label label-warning'>Pending</span>";
                                        }else if ($value['status'] == 2)
                                        {
                                            $span = "<span class='label label-success'>Approved</span>";
                                        }
                                        else if ($value['status'] == 3)
                                        {
                                            $span = "<span class='label label-danger'>Rejected</span>";
                                        }
                                    ?>
                                        
                                        <td><center><?php echo $span;?></center></td>
                                        <td><center><a href="admin/deactivate/<?php echo $id;?>"><span style="font-size: 1.4em;color: #E80207;" class="glyphicon glyphicon-remove-sign"></span></a></center></td>
                                        <td><center><a href="admin/activate/<?php echo $id;?>"><span style="font-size: 1.4em;color: #36F;" class="glyphicon glyphicon-ok-sign"></span></a></center></td>
                                    </tr>
                                    <?php
                                        $i++;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
                <?php
                    }else
                    {
                ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Students Details</h3>
                                <div class="box-tools">
                                    <div class="input-group">
                                        <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                        <div class="input-group-btn">
                                           <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                            
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Other Names</th>
                                            <th>Student Phone</th>
                                            <th>Student Email</th>
                                            <th>Admission Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="7"><center>No data found in this table...</center></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>

                </section><!-- /.content -->
            </aside><!-- /.right-si
</div>