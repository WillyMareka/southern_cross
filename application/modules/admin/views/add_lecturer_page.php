<div><?php //echo "<pre>";print_r($reg_status);echo "</pre>"; ?>
<script type="text/javascript">
$(function(){
	$("#dob").datepicker();
});
</script>
    <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Lecturer Registration
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
                                    <h3 class="box-title"> Lecturer Registration</h3>

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
                                <p style="margin: 2px 10px;"><?php echo $reg_status;?></p>
                                   <?php echo form_open_multipart(base_url().'admin/register_lecturers') ?>
                                        <div>
                                         <div class="input-group" style="width: 100%;padding:4px;">
				                                <span class="input-group-addon" style="width: 40%;" >Select Course:</span>
				                                <select class="lec_course form-control" id="lec_course" name="lec_course" required>
				                                	<option value="">--Select Course--</option>
				                                	<?php foreach ($courses as $crs) {
				                                		echo "<option value=".$crs['course_id'].">".$crs['course_name']."</option>";
				                                	} ?>
				                                </select>
				                            </div>

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
				                                <span class="input-group-addon" style="width: 40%;">National ID/Passport Number: </span>
				                                <input class="textfield form-control" type="text" name="passport_id" id="passport_id" required/>
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
				                                <span class="input-group-addon" style="width: 40%;">Lecturer Email@: </span>
				                                <input class="textfield form-control" type="text" name="lec_email" id="lec_email" required/>
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
				                                <input type = "file" name = "lec_photo" class="textfield form-control" required/>
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