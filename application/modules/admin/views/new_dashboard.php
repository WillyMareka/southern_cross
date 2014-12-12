    <div class="page-header">
      <div class="page-title">
        <h3>Administrator Dashboard <small>The Administrator's home page</small></h3>
      </div>
      <div id="reportrange" class="range">
        <div class="visible-xs header-element-toggle"><a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a></div>
        <div class="date-range"></div>
        <span class="label label-danger">9</span></div>
    </div>
    <!-- /page header -->
    <!-- Breadcrumbs line -->
    <div class="breadcrumb-line">
      <ul class="breadcrumb">
        <li><a href="index.html">Dashboard</a></li>
      </ul>
      <div class="visible-xs breadcrumb-toggle"><a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a></div>
      <ul class="breadcrumb-buttons collapse">
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search3"></i> <span>Search</span> <b class="caret"></b></a>
          <div class="popup dropdown-menu dropdown-menu-right">
            <div class="popup-header"><a href="#" class="pull-left"><i class="icon-paragraph-justify"></i></a><span>Quick search</span><a href="#" class="pull-right"><i class="icon-new-tab"></i></a></div>
            <form action="#" class="breadcrumb-search">
              <input type="text" placeholder="Type and hit enter..." name="search" class="form-control autocomplete">
              <div class="row">
                <div class="col-xs-6">
                  <label class="radio">
                    <input type="radio" name="search-option" class="styled" checked="checked">
                    Students</label>
                  <label class="radio">
                    <input type="radio" name="search-option" class="styled">
                    Lecturers</label>
                </div>
                <div class="col-xs-6">
                  <label class="radio">
                    <input type="radio" name="search-option" class="styled">
                    Users</label>
                  <label class="radio">
                    <input type="radio" name="search-option" class="styled">
                    Employees</label>
                </div>
              </div>
              <input type="submit" class="btn btn-block btn-success" value="Search">
            </form>
          </div>
        </li>
      </ul>
    </div>
    <!-- /breadcrumbs line -->

    <!-- Default panel -->
    <!-- <div class="panel panel-default">
      <div class="panel-heading">
        <h6 class="panel-title">Default panel</h6>
      </div>
      <div class="panel-body"><code>div class="panel panel-default"</code></div>
    </div> -->
    <!-- /default panel -->
    <div class="info-buttons">
      <div class="row block-inner">
        <div class="col-md-3"><a href="#"><i class="fa fa-mortar-board"></i> <span>Students</span> <strong class="label label-danger">0</strong></a></div>
        <div class="col-md-3"><a href="#"><i class="icon-vcard"></i> <span>Employees</span> <strong class="label label-success">0</strong></a></div>
        <div class="col-md-3"><a href="#"><i class="icon-user4"></i> <span>Lecturers</span> <strong class="label label-warning">0</strong></a></div>
        <div class="col-md-3"><a href="#"><i class="icon-quill2"></i> <span>Applications</span> <strong class="label label-info">0</strong></a></div>
      </div>
    </div>

    <div class = "row">
    <!-- Quick Email -->
    <div class = "col-md-6">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h6 class="panel-title"><i class="icon-mail-send"></i> Send a quick message</h6>
        </div>
        <div class = "panel-body">
        <form class = "form-horizontal">
        <div class="form-group">
          <label class="col-sm-2 control-label">Target: </label>
          <div class="col-sm-10">
            <select data-placeholder="Who should receive this message?" multiple="multiple" tabindex="2" class="maximum-select" name = "target">
              <option value="">Choose One</option>
              <optgroup label="Choose Here">
              <option value="lecturer">Lecturers</option>
              <option value="student">Students</option>
              </optgroup>
            </select>
          </div>
        </div>

         <div class="form-group">
            <label class="col-sm-2 control-label">Subject: </label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-12 has-feedback has-feedback-left">
                  <input type="text" class="form-control" placeholder="Subject" name = "subject">
                  <i class="icon-pen form-control-feedback"></i>
                </div>
              </div>
            </div>
          </div>

         <div class="form-group">
          <label class="col-sm-2 control-label">Message: </label>
          <div class="col-sm-10">
            <textarea rows="5" cols="5" class="textarea form-control" placeholder="Message goes here..." name = "subject"></textarea>
          </div>
        </div>

         <div class="form-group">
            <label class="col-sm-2 control-label">Attachment: </label>
            <div class="col-sm-10">
              <input type="file" class="styled" name = "attachment">
            </div>
          </div>
      <div class="text-right">
        <button type="submit" class="btn btn-primary"><span> Send Message </span> <i class = "icon-paper-plane"></i> </button>
      </div>
        </form>
        </div>
      </div>
    </div>
    <!-- /Quick Email -->

    <!-- Calendar -->
    <!-- <div class = "col-md-6">
      <div class = "panel panel-info" style = "">
        <div class = "panel-heading">
          <h6 class="panel-title"><i class="icon-stats3"></i> Student to Lecturer Ratio</h6>
        </div> 
        <div class = "panel-body application" id = "student-lecturer">
          <center>No Data Found</center>
        </div>
      </div>
    </div> -->
    <!-- Calendar -->

    <!-- Messages -->
    <div class = "col-md-6" >
    <div class = "panel panel-info" style = "height: 401px; overflow: auto;">
      <div class = "panel-heading">
        <h6 class="panel-title"><i class = "icon-bubble-user"></i> Recent Messages</h6>
      </div>
       <div class="block">
            <center>No Messages Yet</center>
          </div>
    </div>
    </div>
    <!-- Messages -->
    </div>