<div>
<script type="text/javascript">
$(function(){
	$("#dob").datepicker();
});
</script>
    <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Applications
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Registration</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"> Employee Registration</h3>
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
                                   <?php echo form_open_multipart(base_url().'admin/register_employees') ?>
                                        <div>
				                            <div class="input-group" style="width: 100%;padding:4px;">
				                                <span class="input-group-addon" style="width: 40%;" >First Name:</span>
				                                <input class="textfield form-control" type="text" name="firstname" id="firstname" required/>
				                            </div>
				                            <div class="input-group" style="width: 100%;padding:4px;">
				                                <span class="input-group-addon" style="width: 40%;">Second Name: </span>
				                                <input class="textfield form-control" type="text" name="surname" id="surname" required/>
				                            </div>
				                            <div class="input-group" style="width: 100%;padding:4px;">
				                                <span class="input-group-addon" style="width: 40%;">Other Name: </span>
				                                <input class="textfield form-control" type="text" name="othername" id="othername" required/>
				                            </div>
				                             <div class="input-group" style="width: 100%;padding:4px;">
				                                <span class="input-group-addon" style="width: 40%;">Phone Number: </span>
				                                <input class="textfield form-control" type="text" name="phonenumber" id="phonenumber" required/>
				                            </div>
				                             <div class="input-group" style="width: 100%;padding:4px;">
				                                <span class="input-group-addon" style="width: 40%;">Gender: </span>
				                                <select class="textfield form-control"name="gender" id="gender">
				                                    <option value="" selected="true" disabled="on">**Select a gender**</option>
				                                    <option value="male">Male</option>
				                                    <option value="female">Female</option>
				                                </select>
				                            </div>
				                             <div class="input-group" style="width: 100%;padding:4px;">
				                                <span class="input-group-addon" style="width: 40%;">Staff Email@: </span>
				                                <input class="textfield form-control" type="text" name="staff_email" id="staff_email" required/>
				                            </div>
				                            <div class="input-group" style="width: 100%;padding:4px;">
				                                <span class="input-group-addon" style="width: 40%;">National ID/ Passport No: </span>
				                                <input class="textfield form-control" type="text" name="identification" id="identification" required/>
				                            </div>
				                            <div class="input-group" style="width: 100%;padding:4px;">
				                                <span class="input-group-addon" style="width: 40%;">Date of Birth: </span>
				                                <!--  <input type="text" name="dob" id="dob" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask /> -->
				                                <input class="textfield form-control" type="text" name="dob" id="dob" required/>
				                            </div>
				                            <div class="input-group" style="width: 100%;padding:4px;">
				                                <span class="input-group-addon" style="width: 40%;">Location: </span>
				                                <input class="textfield form-control" type="text" name="location" id="location" required/>
				                            </div>
				                           <div class="input-group" style="width: 100%;padding:4px;">
				                                <span class="input-group-addon" style="width: 40%;">Photo: </span>
				                                <input type = "file" name = "photos" class="textfield form-control" />
				                           </div>
				                           
				                           
				                            <div style="">
				                                <button type="submit" class="btn btn-default"> Save User</button>
				                            </div>
				                                    
				                        </div>
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-si-->
</div>