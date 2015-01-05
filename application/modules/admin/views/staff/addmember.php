	<!-- Add staff member form -->
    <form class="form-horizontal" action="<?php echo base_url() .'admin/staff/registermember'?>" role="form" method = "POST" enctype = "multipart/form-data">
      <div class="block">
        <h6 class="heading-hr"><i class="icon-user-plus2"></i> Register Staff Member</h6>
        <div class="form-group">
          <label class="col-sm-2 control-label">Surname:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name = "s_name">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">First Name: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name = "f_name">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Other Names:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name = "o_names">
          </div>
        </div>

         <div class="form-group">
          <label class="col-sm-2 control-label">Date of Birth:</label>
          <div class="col-sm-4 has-feedback has-feedback-left">
            <input type="text" class="form-control datepicker" name = "dob" data-provide="datepicker">
            <i class="icon-calendar form-control-feedback"></i>
          </div>

          <label class="col-sm-1 control-label">Gender: </label>
            <div class="col-sm-4">
              <label class="radio-inline radio-success">
                <div class="choice"><span><input name="gender" class="styled" type="radio" value = "Male"></span></div>
                <i class = "icon-male"></i> <span>Male</span></label>
              <label class="radio-inline radio-success">
                <div class="choice"><span class="checked"><input name="gender" class="styled" type="radio" value = "Female"></span></div>
                <i class = "icon-female"></i> <span>Female</span></label>
            </div>
        </div>

        <div class="form-group">
            
            <label class="col-sm-2 control-label"><i class="icon-phone2"></i> Contact Details: </label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-6 has-feedback has-feedback-left">
                  <input class="form-control" placeholder="Email Address" type="email" name = "email">
                  <i class="icon-mail-send form-control-feedback"></i></div>
                <div class="col-sm-6 has-feedback has-feedback-left">
                  <input class="form-control" placeholder="Phone Number" type="text" name = "phone_no">
                  <i class="icon-phone form-control-feedback"></i></div>
              </div>
            </div>
          
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label">Image: </label>
            <div class="col-sm-10">
              <input class="styled" type = "file" name = "profile_picture" />
            </div>
          </div>

          <div class = "form-group">
          	<label class="col-sm-2 control-label">Location:</label>
	          <div class="col-sm-10">
	            <input type="text" class="form-control" name = "location">
	          </div>
          </div>

           <div class = "form-group">
          	<label class="col-sm-2 control-label">Staff Role:</label>
	          <div class="col-sm-10">
	            <select name = "ssg_id" class = "select">
	            	<?php echo $groups; ?>
	            </select>
	          </div>
          </div>
        <div class="form-actions text-right">
          <button type="submit" class="btn btn-primary"><i class = "icon-box-add"></i> <span>Complete Registration</span></button>
        </div>
      </div>
    </form>
    <!-- /horizontal form outside panel -->
