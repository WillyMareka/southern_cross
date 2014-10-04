<html lang="en">
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Diploma/Certificate Application Form</title>
		<link rel="icon" type="image/x-icon" href="<?php echo base_url(). 'assets/icons/hospital.ico'?>" />
		<link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/bootstrap/css/bootstrap.css'?>"/>
		<link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/css/custom.css'?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/kickstart/css/fonts/font-awesome/css/font-awesome.min.css'?>">
   		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/script/jquery/jquery-ui.css'?>"/>
		<link rel="stylesheet" href="<?php echo base_url(). 'assets/stylesheets/animate.css'?>">
    	<link rel="stylesheet" type="text/css" href= "<?php echo base_url(). 'assets/stylesheets/style.css'?>">
</head>
<body>
<body id="main_body" >
	<div class="container-fluid">
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	<form class="form-inline">
		<div class="form-group border-row margin_bottom ">
			<label class="name" for="element_1">First Name </label>
			<input id="element_1" name="element_1" class="form-control  text medium" type="text" maxlength="255" value=""/> 
			
			<label class="description" for="element_2">Middle Name </label>
			<input id="element_2" name="element_2" class="form-control  text medium" type="text" maxlength="255" value=""/> 
			<label class="description" for="element_3">Last Name </label>
			<input id="element_3" name="element_3" class="form-control  text medium" type="text" maxlength="255" value="" /> 
		</div>
		<div class="form-group border-row margin_bottom">
			<label class="" for="element_4">Picture:  </label><input id="element_4" name="element_4" class="input inputs file" type="file"/> 
			<label class="description" for="element_21">Year of Entry </label>
			<select class="form-control  select medium" id="element_21" name="element_21"> 
				<option value="" selected="selected"></option>
				<option value="1" >2015</option>
				<option value="2" >2016</option>
				<option value="3" >2017</option>
				<option value="4" >2018</option>
			</select>
		</div>  


		<div class="form-group border-row margin_bottom">
			<label class="description" for="element_22">Diploma Level </label>
			<select class="form-control  select medium" id="element_22" name="element_22"> 
				<option value="1" >Diploma in Community Health and Development Social W ork.</option>
				<option value="2" selected="selected">--Select Option--</option>
				<option value="3" >Diploma in Counseling.</option>

			</select>
			<label class="description" for="element_24">Certificate Level </label>
			<select class="form-control  select medium" id="element_24" name="element_24"> 
				<option value="" selected="selected"></option>
				<option value="1" >Certificate in Community Health and Development Social W ork</option>
				<option value="2" >Certificate in Counseling.</option>
				<option value="3" >Certificate in H I V and Aids.</option>

			</select>
			<label for="element_23">Coming Soon: </label>

			<select class="form-control  select medium" id="element_23" name="element_23"> 
				<option value="" selected="selected"></option>
				<option value="1" >Diploma in Clinical Medicine and Counseling.</option>

			</select>
		</div> 
		
				
		<div class="form-group border-row margin_bottom">
			<label class="description" for="element_25">Campus of Study: Kisumu Main Campus </label>
			
				<input id="element_25_1" name="element_25_1" class=" checkbox" type="checkbox" value="1" />
			<label class="choice" for="element_25_1">Regular Day Classes</label>

			 
		</div>
			
		<div class="form-group border-row margin_bottom">
				<label class="description" for="element_9">Last (family) Name </label>
				<input id="element_9" name="element_9" class="form-control  text medium" type="text" maxlength="255" value="" />  
				<label class="description" for="element_10">Middle Name </label>
			 
				<input id="element_10" name="element_10" class="form-control  text medium" type="text" maxlength="255" value="" />  
			
				<label class="description" for="element_11">First Name
	 			</label>
			 
				<input id="element_11" name="element_11" class="form-control  text medium" type="text" maxlength="255" value="" />  
				</br>
				<label class="description" for="element_12">Date of Birth </label>
			
				<input id="element_12_1" name="element_12_1" class="form-control  text" size="2" maxlength="2" value="" type="text"> /
				<label for="element_12_1">MM</label>
			
			
				<input id="element_12_2" name="element_12_2" class="form-control  text" size="2" maxlength="2" value="" type="text"> /
				<label for="element_12_2">DD</label>
			
			
		 		<input id="element_12_3" name="element_12_3" class="form-control  text" size="4" maxlength="4" value="" type="text">
				<label for="element_12_3">YYYY</label>
		</div>
			
		<div class="form-group border-row margin_bottom">
			<label class="description" for="element_13">Citizenship </label>
			 
				<input id="element_13" name="element_13" class="form-control  text medium" type="text" maxlength="255" value="" />  
			
			<label class="description" for="element_14">Country of Birth </label>
			 
				<input id="element_14" name="element_14" class="form-control  text medium" type="text" maxlength="255" value="" />  
			
				
		
			<label class="description" for="element_26">Gender:  </label>
			
				<input id="element_26_1" name="element_26_1" class=" checkbox" type="checkbox" value="1" />
				<label class="choice" for="element_26_1">Male</label>
				<input id="element_26_2" name="element_26_2" class=" checkbox" type="checkbox" value="1" />
				<label class="choice" for="element_26_2">Female</label>	
			 
			<label class="description" for="element_21">Marital Status:  </label>
			<select class="form-control select medium" id="element_21" name="element_21"> 
				<option value="" selected="selected"></option>
				<option value="1" >Single</option>
				<option value="2" >Married</option>
				<option value="3" >Divorced</option>
				<option value="4" >Widowed</option>
			</select>
		 </div>
		
				
		<div class="form-group border-row margin_bottom">
			<label class="description" for="element_15">Years of formal education in English : </label>
		 
			<input id="element_15" name="element_15" class="form-control  text medium" type="text" maxlength="255" value="" />  
		
				
		
			<label class="description" for="element_16">Level: Primary </label>
		 
			<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  
		
				
		
			<label class="description" for="element_17">Secondary: </label>
		 
			<input id="element_17" name="element_17" class="form-control  text medium" type="text" maxlength="255" value="" />  
		
				
		
			<label class="description" for="element_18"> Post Secondary:  </label>
		 
			<input id="element_18" name="element_18" class="form-control  text medium" type="text" maxlength="255" value="" />  
		
				
		
			<label class="description" for="element_19">Other Languages spoken or written:  </label>
		 
			<input id="element_19" name="element_19" class="form-control  text medium" type="text" maxlength="255" value="" />  
		</div>

		<div class="form-group border-row margin_bottom">
		<label class="description" for="element_28">Do you have any disability?  </label>
		
			<input id="element_28_1" name="element_28_1" class=" checkbox" type="checkbox" value="1" />
			<label class="choice" for="element_28_1">Yes</label>
			<input id="element_28_2" name="element_28_2" class=" checkbox" type="checkbox" value="1" />
			<label class="choice" for="element_28_2">No</label>
		
			<label class="description" for="element_20"> If yes state nature of disability :  </label>
		 
			<input id="element_20" name="element_20" class="form-control  text medium" type="text" maxlength="255" value="" />  
		
		</div>

		<div class="form-group border-row margin_bottom" id="current_address">
		
			<h5>Current Address</h5>
			<label class="description" for="element_16">Postal Address: </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">Postal Code: </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">City/Town  </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">Country:  </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">Telephone (Home): </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">(Office):  </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">Email:  </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">Mobile: </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  
		</div>
		<!-- end of current address -->
		<div class="form-group border-row margin_bottom" id="sponsor_details">
		
			<h5>Parent's/Guardian/Sponsor Details</h5>\
			<label class="description" for="element_16">Names: </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">Relation to Applicant: </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">Address: </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">Telephone (Home): </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">Email:  </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">Mobile: </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  
			
			<label class="description" for="element_16">Occupation: </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">Monthly Income: </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

		</div>
		<!-- end of sponsor details -->

		<div class="form-group border-row margin_bottom" id="institutions">
			 Please list all the schools previously attended in the order which you attended them (Primary, Secondary levels and others if any)
			<table class="table table-bordered">
				<tbody>
				<th>Name of Institution </th>
				<th> Level </th>
				<th> Area of Stu </th>
				<th>Name of Institution </th>
				<th colspan="2"> Duration of Study </th>
				<th> Degree/Diploma/Certificates attained</th>
				<tr>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
				</tr>
				<tr>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
				</tr>
				<tr>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
				</tr>
				<tr>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
					<td><input type="text" class="form-control input institutions text medium"></td>
				</tr>
				</tbody>
			</table> 
		</div>

		<div class="form-group border-row margin_bottom" id="religious_affiliation">
		
			<h5>Protestant</h5>\
			<label class="description" for="element_16">Denomination: </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">Occupational Experience: </label>
			
			 
			<input id="element_28_1" name="element_28_1" class=" checkbox" type="checkbox" value="1" />
			<label class="choice" for="element_28_1">Yes</label>
			<input id="element_28_2" name="element_28_2" class=" checkbox" type="checkbox" value="1" />
			<label class="choice" for="element_28_2">No</label>		

			<label class="description" for="element_16">Address: </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">Telephone (Home): </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">Email:  </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">Mobile: </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  
			
			<label class="description" for="element_16">Occupation: </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  

			<label class="description" for="element_16">Monthly Income: </label>
			 
				<input id="element_16" name="element_16" class="form-control  text medium" type="text" maxlength="255" value="" />  
		</div>
		<!-- end of religious_affiliation -->

		<div class="form-group border-row margin_bottom" id="occupational_experience">
			 Mature applicants only* 
			<h5>Work Experience</h5>
			<table class="table table-bordered">
				<tbody>
				<th>Employer</th>
				<th> Type of Work </th>
				<th colspan="2"> Dates </th>
				<th>Title </th>
				<tr>
					<td><input type="text" class="form-control input text medium"></td>
					<td><input type="text" class="form-control input text medium"></td>
					<td><input type="text" class="form-control input text medium"></td>
					<td><input type="text" class="form-control input text medium"></td>
					<td><input type="text" class="form-control input text medium"></td>
				</tr>

				<tr>
					<td><input type="text" class="form-control input text medium"></td>
					<td><input type="text" class="form-control input text medium"></td>
					<td><input type="text" class="form-control input text medium"></td>
					<td><input type="text" class="form-control input text medium"></td>
					<td><input type="text" class="form-control input text medium"></td>
				</tr>
				<tr>
					<td><input type="text" class="form-control input text medium"></td>
					<td><input type="text" class="form-control input text medium"></td>
					<td><input type="text" class="form-control input text medium"></td>
					<td><input type="text" class="form-control input text medium"></td>
					<td><input type="text" class="form-control input text medium"></td>
				</tr>
				<tr>
					<td><input type="text" class="form-control input text medium"></td>
					<td><input type="text" class="form-control input text medium"></td>
					<td><input type="text" class="form-control input text medium"></td>
					<td><input type="text" class="form-control input text medium"></td>
					<td><input type="text" class="form-control input text medium"></td>
				</tr>
				</tr>
				</tbody>
			</table> 
		</div>

		<div class="form-group border-row margin_bottom" id="additional_information">
			<h5>Additional Information</h5>
			<table>
				<tbody>
					<th colspan="10">How did you learn about Southern Cross Institute of Tropical Medicine? </th>
					<tr>
						<td>
						<select class="form-control">
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
			</table>
		</div>

		<div class="form-group border-row margin_bottom" id="reason_for_study">
			<h5>Why do you wish to study through Southern Cross Institute of Tropical Medicine?('Give a Brief Account')</h5>
			<table>
				<tbody>
					
					<tr>
						<td><textarea class="inputs input form-control reason_for_study"></textarea></td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="student_declaration">
			<p>I </p><input type="text" class="declaration" name="student_declaration"><p> certify that all information given is true and accurate to the best of my knowledge. False information may lead to dismissal if admitted</p>
			Date: <input type="text" disabled="disabled" value="<?php echo date('d /M /y');?>">
		</div>
		<div id="parent_declaration">
			<p>I </p><input type="text" class="declaration" name="parent_declaration"><p> (Parent/Guardian/Sponsor) second that the information given here is true and accurate to the best of my knowledge and i appreciate that any false information may lead to immediate dismissal of the student if admitted.</br> I hereby agree to undertake all tuition,boarding & any other financial responsibilities attracted by their entire stay at Southern Cross Institute of Tropical Medicine.</p>
			Date: <input type="text" disabled="disabled" value="<?php echo date('d /M /y');?>">
		</div>

		<li class="buttons">
			    <input type="hidden" name="form_id" value="911261" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		
		
			</ul>
		</form>	
		<div id="footer">
			Copyright Info
		</div>
	</div>
	</div>
</body>
</html>