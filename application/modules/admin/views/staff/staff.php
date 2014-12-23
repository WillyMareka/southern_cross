<!-- Horizontal form outside panel -->
    <form class="form-horizontal" action="#" role="form">
      <div class="block">
        <h6 class="heading-hr"><i class="icon-search"></i> Search Staff</h6>

        <div class="form-group">
          <label class="col-sm-2 control-label">Name:</label>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-sm-4">
                <input type="text" class="form-control" name = "search-surname">
                <span class="help-block" >Surname</span> </div>
              <div class="col-sm-4">
                <input type="text" class="form-control" name = "search-firstname">
                <span class="help-block text-center" >First Name</span> </div>
              <div class="col-sm-4">
                <input type="text" class="form-control" name = "search-lastname">
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
                  <select data-placeholder="Choose a Group..." class="select-search" tabindex="2" name = "search-group" id = "groups">
                    <option value=""></option>
                    <?php echo $groups; ?>
                  </select>
                </div>

                <div class = "col-sm-6">
                  <span class="help-block" >Sub Group</span>
                  <select data-placeholder="Choose a Sub Group..." class="select-search" tabindex="2" name = "search-sub-group" id = "sub-groups">
                    <option value=""></option>
                    <optgroup>
                      <span id = "details"></span>
                    </optgroup>
                  </select>
                </div>
              </div>
            </div>
          </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Password:</label>
          <div class="col-sm-10">
            <input type="password" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">With placeholder:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="placeholder">
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-2 control-label">Textarea:</label>
          <div class="col-sm-10">
            <textarea rows="5" cols="5" class="form-control"></textarea>
          </div>
        </div>
        <div class="form-actions text-right">
          <input type="submit" value="Submit form" class="btn btn-primary">
        </div>
      </div>
    </form>
    <!-- /horizontal form outside panel -->