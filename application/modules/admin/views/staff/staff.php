        <!-- Grid buttons -->
    <div class="info-buttons">
      <div class="row">
        <div class="col-lg-12">
          <div class="row block-inner">
            <div class="col-md-3"><a href="<?php echo base_url() . 'admin/staff/addmember'?>"><i class="icon-user-plus2"></i> <span>Add Staff Member</span> </a></div>
            <div class="col-md-3"><a href="<?php echo base_url() . 'admin/staff/stafflist'?>"><i class="icon-print"></i> <span>Print List</span></a></div>
            <div class="col-md-3"><a href="<?php echo base_url() . 'admin/staff/staffgroups'?>"><i class="icon-cogs"></i> <span>Manage Staff Groups</span></a></div>
            <div class="col-md-3"><a href="<?php echo base_url() . 'admin/staff/all'?>"><i class="icon-vcard"></i> <span>All Staff Members</span></a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Horizontal form outside panel -->
    <form class="form-horizontal" action = "<?php echo base_url(); ?>admin/search/searchresult" role="form" method = "POST">
      <div class="block">
        <h6 class="heading-hr"><i class="icon-search"></i> Search Staff</h6>
        <div class="form-group">
          <label class="col-sm-2 control-label">Name:</label>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-sm-4">
                <input type="text" class="form-control" name = "s_name">
                <span class="help-block" >Surname</span> </div>
              <div class="col-sm-4">
                <input type="text" class="form-control" name = "f_name">
                <span class="help-block text-center" >First Name</span> </div>
              <div class="col-sm-4">
                <input type="text" class="form-control" name = "o_names">
                <span class="help-block text-right">Other Name</span> </div>
            </div>
          </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
              <div class = "row">
                <div class = "col-sm-6">
                  <span class="help-block" >Group</span>
                  <select data-placeholder="Choose a Group..." class="select-search" tabindex="2" name = "sg_id" id = "groups">
                    <option value=""></option>
                    <?php echo $groups; ?>
                  </select>
                </div>

                <div class = "col-sm-6">
                  <span class="help-block" >Sub Group</span>
                  <input id = "sub-group" name = "ssg_id" class = "select2 col-md-7" />
                </div>
              </div>
            </div>
          </div>
       
        <div class="form-actions text-right">
          <input type="submit" value="Submit form" class="btn btn-primary">
        </div>
      </div>
    </form>
    <!-- /horizontal form outside panel -->

<script type="text/javascript">
  $('#groups').change(function(){
    value = $(this).val();
    loadData(base_url,'get_staffsubgroups',value,'#sub-group','Please Select a Sub Group');
  });
</script>