<div>
    <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Applications
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
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
                                    <button class = "btn btn-primary" data-url = ""><i class = "fa fa-print" style = "margin-right: 4px;"></i> Print</button>
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
                                        <th >#</th>
                                        <th >First Name</th>
                                        <th >Last Name</th>
                                        <th >Other Names</th>
                                        <th >Citizenship</th>
                                        <th >Gender</th>
                                        <th >Date of Birth</th>
                                        <th >Status</th>
                                        <th >View</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php echo $application; ?>
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
            </aside><!-- /.right-si-->
</div>

<div class="modal fade" id="applicant_details">
    <div class="modal-dialog" style="width:60%;margin-bottom:2px;">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h5 class="modal-title">Applicant Details</h5>
                </div>
                <div class="modal-body" style="padding-bottom:0px;">    
                        <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Applicant Details Details</h3>
                                <div class="box-tools">
                                    <div class="input-group">
                                        <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                        <div class="input-group-btn">
                                           <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.box-header -->
                        </div>
                    </div>
                </div>
                    <?php echo form_open_multipart(base_url().'admin/edit_application') ?>
                        <div>

                        <input type="hidden" name="editid" id="editid" />
                           <div class="input-group" style="width: 100%;padding:4px;">
                                <span class="input-group-addon" style="width: 40%;" >Applicant`s Names:</span>
                                <input class="textfield form-control" type="text" name="f_name" id="f_name" readonly/>
                                <input class="textfield form-control" type="text" name="s_name" id="s_name" readonly/>
                                <input class="textfield form-control" type="text" name="o_name" id="l_name" readonly/>
                            </div>
                            
                            <div class="input-group" style="width: 100%;padding:4px;">
                                <span class="input-group-addon" style="width: 40%;">Citizenship: </span>
                                <input class="textfield form-control" type="text" name="citizen" id="citizen" readonly/>
                            </div>
                            <div class="input-group" style="width: 100%;padding:4px;">
                                <span class="input-group-addon" style="width: 40%;">School: </span>
                                <input class="textfield form-control" type="text" name="school" id="school" readonly/>
                            </div>
                             <div class="input-group" style="width: 100%;padding:4px;">
                                <span class="input-group-addon" style="width: 40%;">Secondary Level: </span>
                                <input class="textfield form-control" type="text" name="s_level" id="s_level" readonly/>
                            </div>
                            <div class="input-group" style="width: 100%;padding:4px;">
                                <span class="input-group-addon" style="width: 40%;">Primary Level: </span>
                                <input class="textfield form-control" type="text" name="p_level" id="p_level" readonly />
                            </div>
                            
                            <div class="input-group" style="width: 100%;padding:4px;">
                                <span class="input-group-addon" style="width: 40%;">Guardian`s Names: </span>
                                <input class="textfield form-control" type="text" name="guardian" id="guardian" readonly />
                           </div>
                           <div class="input-group" style="width: 100%;padding:4px;">
                            <span class="input-group-addon" style="width: 40%;"> Status :</span>
                            <span class="input-group-addon" style="width: 30%;"><input type="radio" name="editstatus" value="2"> <span class='label label-success'>Accept</span></input></span>
                            <span class="input-group-addon" style="width: 30%;"><input type="radio" name="editstatus" value="3"> <span class="label label-danger">Reject</span></input></span>
                            <span class="input-group-addon" style="width: 30%;"><input type="radio" name="editstatus" value="1"> <span class="label label-warning">Pending</span></input></span>
                        </div>  

                            <div style="margin-left:685px;">
                                <button type="submit" class="btn btn-default"> Edit User</button>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer" style="height:11px;padding-top:11px;">
                        <?php //echo $this->config->item("copyrights");?>
                    </div> 
                </div>
            </div>
        </div>
</div>

<?php $this->load->view("application_footer_view"); ?>
