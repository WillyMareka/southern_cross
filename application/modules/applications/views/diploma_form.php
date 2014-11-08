<html lang="en">
<head>
		
		<title>Diploma Application Form</title>
		<link rel="icon" type="image/x-icon" href="<?php echo base_url(). 'assets/icons/hospital.ico'?>" />
		<link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/bootstrap/css/bootstrap.css'?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/kickstart/css/fonts/font-awesome/css/font-awesome.min.css'?>">
   		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/script/jquery/jquery-ui.css'?>"/>
		<link rel="stylesheet" href="<?php echo base_url(). 'assets/stylesheets/animate.css'?>">
    	<link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/css/custom.css'?>">
    	<link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/stylesheets/style.css'?>">
 		
</head>
<body>
	<div class=" content container ">

<div class=" form_header">
	<div class=" top_logo clearfix">
		<div class = "blue_strip clearfix"></div>
		<div class=" light_blue_strip clearfix"></div>
		<center><img class="clearfix" src="<?php echo base_url(). 'assets/images/siteimage.jpg'?>"></center>
		<!-- 
		<center><p class="top_header clearfix ">SOUTHERN CROSS</p></center>
		<center><p class="top_mini_header clearfix">INSTITUTE OF TROPICAL MEDICINE</p></center>
		 -->
		<div class="form_title"><strong><h2>DIPLOMA APPLICATION FORM</h2></strong></div>
		<div class=" logo_information">
		</div>
		
		<div class=" logo_more_information float_left">
			<p><strong class=" float_left clearfix clear_right">Address: </strong> P.O. Box 1280</p>
			<p>Kisumu,Kenya</p>
			<p><strong class=" float_left clearfix">Email: </strong>  southerncrossinstitute@gmail.com</p>
		</div>
		<div class="logo_more_information float_right">
		<p><strong class=" float_left clearfix clear_right">Tel Office: </strong> (+254) 0717 - 056 523</p>
		<p><strong class=" float_left clearfix clear_right">Mobile: </strong> (+254) 0717 - 056 523</p>
		</div>

</div>


    <nav class="navbar navbar-inverse navbar-fixed-top appnav" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><strong>Diploma</strong></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url().'home/index'?>">Home</a></li>
        <li></li>
        <li class="appactive leftdist"><a href="#">Diploma</a></li>
        <li><a href="<?php echo base_url().'applications/certificate'?>">Certificate</a></li>
        <li><a href="<?php echo base_url().'applications/short_courses'?>">Short Courses</a></li>
        <li><a href="<?php echo base_url(). 'home/programs'?>">Programs</a></li>
        
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Applications<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="active"><a href="#">Diploma</a></li>
            <li class="divider"></li>
            <li><a href="#">Bachelor</a></li>
            <li><a href="#">Masters</a></li>  
            <li><a href="#">Doctoral</a></li>
    
          </ul>
        </li> -->
      </ul>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



	<!-- <div class=" large_bcg_img"></div> -->
		<?php $attr = array('id' => 'application_form','class' => 'application_form','enctype'=>'multipart/form-data'); echo form_open(base_url().'applications/application_submit',$attr) ?>
			<div class="border-row">
			<center><h3>Fill in the form below. Observe accuracy and honesty.</h3></center>

			<table class="">
				<tbody>
					<tr>
						<table class="table table-bordered margin_bottom">
							<tbody>
							<tr>
								<td><h5>Required*</h5></td>
							</tr>
							<tr>
							<td>
							<label class=" name form-name" for="top_f_name">First Name </label>
							</td>
							<td>
							<input required = "required"  id="element_1" name="top_f_name" class=" form-control form-inputing" type="text" maxlength="20" value=""/> 	
							</td>
							<tr>
							<td>
							<label class=" description" for="top_s_name">Middle Name </label>
							</td>
							<td>
							<input required = "required"  id="element_2" name="top_s_name" class=" form-control form-inputing " type="text" maxlength="20" value=""/> 
							</td>
						    </tr>
							<tr>
							<td>
							<label class=" description" for="top_l_name">Last Name </label>
							</td>
							<td>
							<input required = "required"  id="element_3" name="top_l_name" class=" form-control form-inputing " type="text" maxlength="20" value="" /> 
							</td>
						    </tr>
							</tr>
							<tr>
							<td>
							<label class=" " for="applicant_picture">Picture:  </label>
							</td>
							<td colspan="4">
							<input required = "required"  id="applicant_picture" name="applicant_picture" class=" input inputs" type="file"/> 
							</td>
							</tr>
							</tbody>
						</table>
					</tr>

					<tr>
						
						<table class=" table table-bordered">
						<tbody>
						<tr>
							<td><h5>Enrollment Information</h5></td>
						</tr>
						<tr>
						<td colspan="6"><label class=" description" for="yr_of_entry">Year of Entry </label></td>
						</tr>
						<tr>
							<td colspan="6">
								<select required = "required" class=" form-control  select medium" id="yr_of_entry" name="yr_of_entry"> 
									<option value="" selected="selected">--Select Option--</option>
									<option value="1" >2015</option>
									<option value="2" >2016</option>
									<option value="3" >2017</option>
									<option value="4" >2018</option>
								</select>
							</td>
						</tr>
						<tr>
						<td>
						<label class=" description" for="course_selection">I would like to be considered for </label>
						</td>
						<td>
						<select required = "required" class=" form-control  select medium" id="diploma_level" name="diploma_level"> 
							<option value="" selected="selected">--Select Option--</option>
							<option disabled="disabled">Diploma Level</option>
							<option value="1" >Diploma in Community Health and Development Social Work.</option>
							<option value="2" >Diploma in Counseling.</option>
							<option class="divider"></option>
							<option disabled="disabled">Certificate Level</option>
							<option value="1" >Certificate in Community Health and Development Social W ork</option>
							<option value="2" >Certificate in Counseling.</option>
							<option value="3" >Certificate in H I V and Aids.</option>
							<option class="divider"></option>
							<option disabled="disabled">Coming Soon:</option>
							<option value="1" >Diploma in Clinical Medicine and Counseling.</option>
						</select>
						</td>
						</tr>
						</tbody>
						</table>
						</td>
						
					</tr>

					<tr>
					<table class=" table table-bordered margin_bottom">
					<tbody>
						<tr>
						<td class="desc1">
						<label class=" description " for="study_campus">Campus of Study : Kisumu Main Campus</label>
						</td>
						<td class="desc2">
						<label class=" choice " for="study_campus">Regular Day Classes</label>
						</td>
						<td>
						<input required = "required"  id="study_campus" name="study_campus" class="  checkbox" type="checkbox" value="1" />
						</td>
						</tr>
					</tbody>
					</table>

					</tr>

					<tr>

					<div class="row">
					<table class=" col-xs-2 table table-bordered margin_bottom">
					<tbody>
					<tr>
						<td colspan="7"><h5>Personal Information</h5></td>
					</tr>
						<tr class="">
						
						<td>
						<label class=" description" for="l_name">Last (family) Name </label>
						</td>
						<td>
						<input required = "required"  id="last_fam_name" name="l_name" class=" form-control  " type="text" maxlength="255" value="" />  
						</td>
						<td>
						<label class=" description" for="s_name">Middle Name </label>
						</td>
						<td>
						<input required = "required"  id="element_10" name="s_name" class=" form-control  " type="text" maxlength="255" value="" /> 
						</td>
						<td>
						<label class=" description" for="f_name">First Name</label>
						</td>
						<td>
						<input required = "required"  id="element_11" name="f_name" class=" form-control  " type="text" maxlength="255" value="" />  
						</td>
						</tr>
						<tr>
						<td>
						<label class=" description" for="dob">Date of Birth </label>
						</td>
						<td>
						<div class=" form-group">
						<input required = "required"  type="text" name="dob" id="datepicker" title="Enter Date Of Birth">
						</div>
						</td>
						</tr>
						<tr>
						<td>
						<label class=" description" for="citizenship">Citizenship </label>
						</td>
						<td>
						<input required = "required"  id="citizenship" name="citizenship" class=" form-control  " type="text" maxlength="255" value="" />  
						</td>
						<td>
						<label class=" description" for="birth_country">Country of Birth </label>
						</td>
						<td>
						<input required = "required"  id="birth_country" name="birth_country" class=" form-control  " type="text" maxlength="255" value="" />  
						</td>
						<td>
						<label class=" description" for="applicant_gender">Gender:  </label>
						</td>
						<td>
						<select required = "required" name="applicant_gender" class="form-control select">
							<option value="">--Select Gender--</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
						</td>
							
						</tr>
						<tr>
						<td>
						<label class=" description" for="marital_status">Marital Status:  </label>
						</td>
						<td>
						<select required = "required" class=" form-control select medium" id="marital_status" name="marital_status"> 
							<option value="" selected="selected">--Select Option--</option>
							<option value="Single" >Single</option>
							<!-- <option value="Married" >Married</option>
							<option value="Divorced" >Divorced</option>
							<option value="Widowed" >Widowed</option> -->
						</select>
						</td>
						</tr>
						<tr>
						<td rowspan="2">
						<label class=" description" for="yrs_of_english_education">Years of formal education in English : </label>
						</td>
						<td rowspan="2">
						<input required = "required"  id="yrs_of_english_education" name="yrs_of_english_education" class=" form-control  " type="text" maxlength="255" value="" />  
						</td>
						<td>
						<label class=" description" for="educ_primary_level">Level: Primary </label>
						</td>
						<td>
						<input required = "required"  id="educ_primary_level" name="educ_primary_level" class=" form-control  " type="text" maxlength="255" value="" /> 
						</td>
						<td>
						<label class=" educ_secondary_level" for="educ_secondary_level">Secondary: </label>
						</td>
						<td>
						<input required = "required"  id="educ_secondary_level" name="educ_secondary_level" class=" form-control  " type="text" maxlength="255" value="" />  	
						</td>
						<tr>
						<td>
						<!-- seth -->
						<label class=" description" for="educ_post_secondary"> Post Secondary:  </label>
						</td>
						<td>
						<input required = "required"  id="educ_post_secondary" name="educ_post_secondary" class=" form-control  " type="text" maxlength="255" value="" /> 
						</td>
						</tr>
						</tr>
						<tr>
						<td>
						<label class=" description" for="other_languages">Other Languages spoken or written:  </label>
						</td>
						<td>
						<input required = "required"  id="other_languages" name="other_languages" class=" form-control  " type="text" maxlength="255" value="" />
						</td>
						</tr>
						<tr>
							
						<td>
						<label class=" description" for="applicant_disability">Do you have any disability?  </label>
						</td>
						<td>
						<select required = "required" id="applicant_disability" name="applicant_disability">
							<option value="">--Select Option--</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
						</td>
						<td>
						<label class=" description" for="applicant_disability_info"> If yes state nature of disability :  </label>
						</td>
						<td>
						<input id="applicant_disability_info" name="applicant_disability_info" class=" form-control  " type="text" maxlength="255" value="" />  
						</td>
						</tr>	
						</tr>
					</tbody>
					</table>
					</div>
					</tr>

					<tr>
						
						
					</tr>

					<tr>
					<table class=" table table-bordered margin_bottom">
					<tbody>
						<tr>
						<td colspan="8">
						<h5>Current Address</h5>
						</td>
						</tr>
						<tr>
						<td>
						<label class=" description" for="applicant_postal_address">Postal Address: </label>
						</td>
						</td>
						<td>
						<input required = "required"  id="applicant_postal_address" name="applicant_postal_address" class=" form-control  " type="text" maxlength="255" value="" />  
						</td>
						<td>
						<label class=" description" for="applicant_postal_code">Postal Code: </label>
						</td>
						<td>
						<input required = "required"  id="applicant_postal_code" name="applicant_postal_code" class=" form-control  " type="text" maxlength="255" value="" />  
						</td>
						</tr>
						<tr>
						<td>
						<label class=" description" for="applicant_city">City/Town  </label>
						</td>
						<td>
						<input required = "required"  id="applicant_city" name="applicant_city" class=" form-control  " type="text" maxlength="255" value="" />  
						</td>
						<td>
						<label class=" description" for="applicant_country">Country:  </label>
						</td>
						<td>
						<input required = "required"  id="applicant_country" name="applicant_country" class=" form-control  " type="text" maxlength="255" value="" />  
						</td>
						</tr>
						<tr>
						<td>
						<label class=" description" for="applicant_email">Email:  </label>
						</td>
						<td colspan="3">
						<input required = "required"  id="applicant_email" name="applicant_email" class=" form-control form-email " type="email" maxlength="255" value="" />  
						</td>
						<tr>
						<td>
						<label class=" description" for="applicant_telephone_no">Telephone (Home): </label>
						</td>
						<td>
						<input required = "required"  id="applicant_telephone_no" name="applicant_telephone_no" class=" form-control  " type="number" title = "Please enter only numbers"  maxlength="25" value="" />  
						</td>
						<td>
						<label class=" description" for="applicant_office_no">(Office):  </label>
						</td>
						<td>
						<input id="applicant_office_no" name="applicant_office_no" class=" form-control  " type="number" title = "Please enter only numbers"  maxlength="255" value="" />  
						</td>
						<td>
						<label class=" description" for="applicant_mobile_no">Mobile: </label>
						</td>
						<td>
						<input id="applicant_mobile_no" name="applicant_mobile_no" class=" form-control  " type="number" title = "Please enter only numbers"  maxlength="255" value="" /> 
						</td>
						</tr>
						</tr>
					</tbody>
					</table>
					
						
					</tr>

					<tr>
					<table class=" table table-bordered margin_bottom">
					<tbody>
					<tr>
						<td><h5>Parent/Guardian/Sponsor Details</h5></td>
					</tr>
					<tr>
						<td>
						<label class=" description" for="sponsor_names">Names: </label>			 
						</td>
						<td>
						<input required = "required"  id="sponsor_names" name="sponsor_names" class=" form-control  " type="text" maxlength="255" value="" />  
						</td>
						<td>
						<label class=" description" for="sponsor_relation">Relation to Applicant: </label>
						</td>
						<td>
						<input required = "required"  id="sponsor_relation" name="sponsor_relation" class=" form-control  " type="text" maxlength="255" value="" />  
						</td>
					</tr>
					<tr>
						
						<td>
						<label class=" description" for="sponsor_address">Address: </label>
						</td>
						<td>
						<input required = "required"  id="sponsor_address" name="sponsor_address" class=" form-control  " type="text" maxlength="255" value="" />  
						</td>
						<td>
						<label class=" description" for="sponsor_telephone_no">Telephone (Home): </label>
						</td>
						<td>
						<input required = "required"  id="sponsor_telephone_no" name="sponsor_telephone_no" class=" form-control  " type="number" title = "Please enter only numbers"  maxlength="255" value="" />  
						</td>
						
					</tr>
					<tr>
						
						<td>
						<label class=" description" for="sponsor_email">Email:  </label>
						</td>
						<td>
						<input required = "required"  id="sponsor_email" name="sponsor_email" class=" form-control  " type="email" value="" />  
						</td>
						<td>
						<label class=" description" for="sponsor_mobile">Mobile: </label>
						</td>
						<td>
						<input required = "required"  id="sponsor_mobile" name="sponsor_mobile" class=" form-control  " type="number" title = "Please enter only numbers"  maxlength="13" value="" />  
						</td>
						</tr>
						<tr>
						<td>
						<label class=" description" for="sponsor_occupation">Occupation: </label>
						</td>
						<td>
						<input required = "required"  id="sponsor_occupation" name="sponsor_occupation" class=" form-control  " type="text" maxlength="255" value="" />  
						</td>
						<td>
						<label class=" description" for="sponsor_monthly_income">Monthly Income(No Comma's): </label>
						</td>
						<td>
						<input required = "required"  id="sponsor_monthly_income" name="sponsor_monthly_income" class=" form-control  " type="number" title = "Please enter only numbers"  maxlength="255" value="" />  
						</td>
						
					</tr>
					</tbody>
					</table>
						
					</tr>



					<tr>
						<div class="row container">
							
						<table class=" table table-bordered margin_bottom padding_none">
						<tbody>

							<tr>
								<th colspan="5">Please list all the schools previously attended in the order which you attended them (Secondary levels, Primary Levels)</th>
							</tr>
							<tr>
								
								<td class="institute" rowspan="2">Name of Institution</td>
								<td class="level" rowspan="2">Level</td>
								<td rowspan="2">Area of Study</td>
								<td colspan="2">
								<center>
								Duration of Study
								</center>
								</td>
								<td rowspan="2">Degree/Diploma/Certificates attained</td>
								
							</tr>
							<tr>
								<td>From</td>
								<td>To</td>
							</tr>
							<tr>
								
								<td><input required = "required"  type="text" name="applicant_educ_institution_name_1" class=" form-control inputs institutions "></td>
								<td><input required = "required"  type="text" name="applicant_educ_level_1" class=" form-control inputs institutions "></td>
								<td><input required = "required"  type="text" name="applicant_educ_study_area_1" class=" form-control inputs institutions"></td>
								<td><input required = "required"  type="text" id="datepicker_duration_from_1" name="applicant_educ_duration_from_1" class=" form-control inputs institutions width_sm "></td>
								<td><input required = "required"  type="text" id="datepicker_duration_to_1" name="applicant_educ_duration_to_1" class=" form-control inputs institutions width_sm"></td>
								<td><input required = "required"  type="text" name="applicant_educ_certificates_1" class=" form-control inputs institutions "></td>
								
							</tr>

							<tr>
								
								<td><input type="text" name="applicant_educ_institution_name_2" class=" form-control inputs input institutions "></td>
								<td><input type="text" name="applicant_educ_level_2" class=" form-control inputs input institutions "></td>
								<td><input type="text" name="applicant_educ_study_area_2" class=" form-control inputs input institutions "></td>
								<td><input type="text" id="datepicker_duration_from_2" name="applicant_educ_duration_from_2" class=" form-control inputs input institutions width_sm"></td>
								<td><input type="text" id="datepicker_duration_to_2" name="applicant_educ_duration_to_2" class=" form-control inputs input institutions width_sm"></td>
								<td><input type="text" name="applicant_educ_certificates_2" class=" form-control inputs input institutions "></td>
								
							</tr>

							<tr>
								
								<td><input  type="text" name="applicant_educ_institution_name_3" class=" form-control inputs input institutions "></td>
								<td><input  type="text" name="applicant_educ_level_3" class=" form-control inputs input institutions "></td>
								<td><input  type="text" name="applicant_educ_study_area_3" class=" form-control inputs input institutions "></td>
								<td><input  type="text" id="datepicker_duration_from_3" name="applicant_educ_duration_from_3" class=" form-control inputs input institutions width_sm "></td>
								<td><input  type="text" id="datepicker_duration_to_3" name="applicant_educ_duration_to_3" class=" form-control inputs input institutions  width_sm"></td>
								<td><input  type="text" name="applicant_educ_certificates_3" class=" form-control inputs input institutions "></td>
								
							</tr>
						</tbody>
						</table>
						</div>
						
					</tr>

					<tr>
						
						<table class=" table table-bordered margin_bottom">
						<tbody>
						<tr>
							<th colspan="5">Religious Affiliations</th>
						</tr>
						
						<tr>
						<td>
						<label class=" description" for="applicant_denomination">Denomination: </label>
						</td>
						<td>
						<select required="required" class=" form-control input" name="applicant_denomination">
							<option value="">--Select Denomination--</option>
							<option value="Roman Catholic">Roman Catholic</option>
							<option value="Protestant">Protestant</option>
							<option value="Hindu">Hindu</option>
							<option value="African Traditional Religion">African Traditional Religion</option>
							<option value="Muslim">Muslim</option>
							<option value="Other(Specify)">Other(Specify)</option>
						</select>
						<!-- 
						<td>
							<input required = "required"  class=" input" class=" " type="text" name="denomination_other">
						</td> 
						-->
						</td>
						</tr>	
						</tbody>
						</table>
						
					</tr>

					<tr>
					<table class=" table table-bordered padding_none">
						<tr>
							<th colspan="5">Occupational Experience</th>
						</tr>
						<tr>
							<td colspan="6">Mature Applicants Only</td>
						</tr>
						<!-- <tr>
							<td>
							<label class=" description" for="applicant_work_experience">Occupational Experience: </label>
							</td>
							<select class="form-control" name="applicant_work_experience">
								<option value="">--Select Option--</option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
							</select>
						</tr> -->
						<tr>
							<table class=" margin_bottom table table-bordered">
							<tbody>
							<tr>
							<th rowspan="2">Employer</th>
							<th rowspan="2"> Type of Work </th>
							<th colspan="2"> Dates </th>
							<th>Title </th>
							</tr>
							
							<th> To </th>
							<th>From</th>
							<th> </th>
							<tr>
								
							</tr>
							<tr>
								<td><input  type="text" name="applicant_work_employer_1" class=" form-control inputs "></td>
								<td><input  type="text" name="applicant_work_type_1" class=" form-control inputs "></td>
								<td><input  type="text" id="datepicker_work_to_1" name="applicant_work_to_1" class=" form-control inputs "></td>
								<td><input  type="text" id="datepicker_work_from_1" name="applicant_work_from_1" class=" form-control inputs "></td>
								<td><input  type="text" name="applicant_work_title_1" class=" form-control inputs "></td>
							</tr>

							<tr>
								<td><input  type="text" name="applicant_work_employer_2" class=" form-control inputs "></td>
								<td><input  type="text" name="applicant_work_type_2" class=" form-control inputs "></td>
								<td><input  type="text" id="datepicker_work_to_2" name="applicant_work_to_2" class=" form-control inputs "></td>
								<td><input  type="text" id="datepicker_work_from_2" name="applicant_work_from_2" class=" form-control inputs "></td>
								<td><input  type="text" name="applicant_work_title_2" class=" form-control inputs "></td>
							</tr>

							<tr>
								<td><input  type="text" name="applicant_work_employer_3" class=" form-control inputs "></td>
								<td><input  type="text" name="applicant_work_type_3" class=" form-control inputs "></td>
								<td><input  type="text" id="datepicker_work_to_3" name="applicant_work_to_3" class=" form-control inputs "></td>
								<td><input  type="text" id="datepicker_work_from_3" name="applicant_work_from_3" class=" form-control inputs "></td>
								<td><input  type="text" name="applicant_work_title_3" class=" form-control inputs "></td>
							</tr>
							</tbody>
							</table>
						</tr>
					</table>
					</tr>

					<tr>
						<tr>
							<table class=" table table-bordered margin_bottom">
							<tbody>
							<tr>
								<td colspan="7">Additional Information</td>
							</tr>
							<tr>
								<th colspan="10"><label  for="source_of_discovery">How did you learn about Southern Cross Institute of Tropical Medicine? </label></th>
								<tr>
									<td>
									<select required = "required" class="form-control select" name="source_of_discovery">
									<option value="">--Select Option--</option>
										<option value="Newpaper">Newpaper</option>
										<option value="Family/Friend">Family/Friend</option>
										<option value="Church Announcement">Church Announcement</option>
										<option value="University Prospectus">University Prospectus</option>
										<option value="Website">Website</option>
										<option value="Radio">Radio</option>
										<option value="Exhibition">Exhibition</option>
										<option value="Other">Other(Specify):</option>
									</select>
								</tr>
							</tbody>
							</tr>
							</table>
						</tr>
					</tr>

					<tr>
						<table class=" table table-bordered margin_bottom">
							<tbody>
								<tr>
								<td colspan="1"><h5><label for="reason_for_study">Why do you wish to study through Southern Cross Institute of Tropical Medicine?('Give a Brief Account')</label></h5></td>
								</tr>
								<tr>
								<td><textarea name="reason_for_study" class=" inputs input form-control reason_for_study"></textarea></td>							
								</tr>
							</tbody>
						</table>
					</tr>

					<tr>
					<div id="applicant_declaration">
						<table  class=" table table-bordered margin_bottom">
							<tbody>
							<tr>
								<h5><label for="applicant_declaration">Student Declaration: </label></h5>
							</tr>
							<tr>
								<td>
									<p>I <input required = "required"  type="text" class=" declaration" name="applicant_declaration"> certify that all information given is true and accurate to the best of my knowledge. False information may lead to dismissal if admitted</p>
									<!-- <p type="text" disabled="disabled" value="">Agreement made on: <?php echo date('d /M /y');?></p> -->
								</td>
							</tr>
							</tbody>
						</table>
					</div>
					</tr>

					<!-- <tr>
					<div id="applicant_declaration">
						<table  class=" table table-bordered margin_bottom">
							<tbody>
							<tr>
								<h5><label for="parent_declaration">Parent/Guardian/Sponsor Declaration: </label></h5>
							</tr>
							<tr>
								<td>
									<p>I <input required = "required"  type="text" class="declaration parent_declaration" name="parent_declaration"> (Parent/Guardian/Sponsor) second that the information given here is true and accurate to the best of my knowledge and i appreciate that any false information may lead to immediate dismissal of the applicant if admitted.</br> I hereby agree to undertake all tuition,boarding & any other financial responsibilities attracted by their entire stay at Southern Cross Institute of Tropical Medicine.</p>
									<p type="text" disabled="disabled" value="">Agreement made on: <?php echo date('d /M /y');?></p>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
					</tr> -->


				</tbody>
			
				<tr>
					<td>
					    <input required = "required"  type="hidden" name="form_id" value="911261" />
						<input required = "required"  id="saveForm" class="btn button_text button" type="submit" name="submit" value="Submit" />
					</td>
				</tr>
			</table>
		<?php echo form_close(); ?>

		<footer id="footer" class="bottom_blue_strip">
		    <div class="container">
		      <div class="row">
		        <div class="grid_12"> 
		          <div class="copyright"><span class="brand">Southern Cross</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
		          </div>
		        </div>
		      </div>
		    </div>  
		  </footer>
	</div>
	</div>



	<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
  		<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
  		<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-ui.js' ?>"></script>
  		<script>
  			 $(function() {
				$( "#datepicker" ).datepicker();
				$( "#datepicker_work_from_1" ).datepicker();
				$( "#datepicker_work_from_2" ).datepicker();
				$( "#datepicker_work_from_3" ).datepicker();

				$( "#datepicker_work_to_1" ).datepicker();
				$( "#datepicker_work_to_2" ).datepicker();
				$( "#datepicker_work_to_3" ).datepicker();

				$( "#datepicker_duration_from_1" ).datepicker();
				$( "#datepicker_duration_from_2" ).datepicker();
				$( "#datepicker_duration_from_3" ).datepicker();

				$( "#datepicker_duration_to_1" ).datepicker();
				$( "#datepicker_duration_to_2" ).datepicker();
				$( "#datepicker_duration_to_3" ).datepicker();
				});
  		</script>
</body>
</html>