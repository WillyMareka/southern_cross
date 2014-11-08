<style type="text/css">
	.btn
	{
		border-radius: 0;
	}
	.form-group
	{
		width: 100%;
		/*padding-top: 3px;*/
	}
	.sponsor
	{
		width: 40%;
	}
</style>
<script src = "<?php echo base_url(). 'assets/js/jquery.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("form :input").attr("disabled", true);
	});
</script>
<aside class = "right-side">
	<div clas = "row">
		<div class = "col-md-2" style = "padding: 10px !important;">
			<img src = "<?php echo $application['applicant_picture']; ?>" style = "width: 100%;" height = "150"/>
		</div>
		<div class = "col-md-7" style = "padding: 0 !important;">
			<h1><?php echo $application['f_name'] .', ' . $application['l_name'] . ' ' . $application['s_name'];?></h1>
			<h4>Course Applied For: <?php echo $application['course_name']; ?></h4>
			<h4>Intake: <?php echo $application['intake']; ?></h4>
			<h4>Date: <?php echo date("d-M-Y", strtotime($application['date_applied'])); ?></h4>
		</div>
	</div>
	<div class = "row">
		<div class = "col-md-12">
			<table class = "table table-bordered">
				<thead style = "text-align: center;">
					<th>Date of Birth</th>
					<th>Citizenship</th>
					<th>County of Birth</th>
					<th>Gender</th>
					<th>Marital Status</th>
					<th>Disability</th>
				</thead>
				<tbody>
					<td><?php echo date("d-M-Y", strtotime($application['dob'])); ?></td>
					<td><?php echo strtoupper($application['citizenship']); ?></td>
					<td><?php echo strtoupper($application['birth_country']); ?></td>
					<td><?php echo strtoupper($application['gender']); ?></td>
					<td><?php echo strtoupper($application['marital_status']); ?></td>
					<td>
					<?php
					if($application['disability'] == 'Yes') 
					{
						echo "Yes";
					}
					else
					{
						echo "None";
					}
					?>
					</td>
				</tbody>
			</table>
		</div>
	</div>
	<div class = "row col-md-12">
		<div class = "col-md-5">
			<form>
				<legend>Sponsor Information</legend>
				<div class = "input-group form-group">
					<span class = "input-group-addon sponsor">Sponsor Name</span>
					<input type = "text" class = "form-control" value = "<?php echo $application['sponsor_names']?>" readonly = "readonly" />
				</div>

				<div class = "input-group form-group">
					<span class = "input-group-addon sponsor">Relationship</span>
					<input type = "text" class = "form-control" value = "<?php echo $application['sponsor_relation']?>" />
				</div>

				<div class = "input-group form-group">
					<span class = "input-group-addon sponsor">Phone Number</span>
					<input type = "text" class = "form-control" value = "<?php echo $application['sponsor_mobile_no']?>" />
				</div>

				<div class = "input-group form-group">
					<span class = "input-group-addon sponsor">Email Address</span>
					<input type = "text" class = "form-control" value = "<?php echo $application['sponsor_email']?>" />
				</div>

				<div class = "input-group form-group">
					<span class = "input-group-addon sponsor">Occupation</span>
					<input type = "text" class = "form-control" value = "<?php echo $application['sponsor_occupation']?>" />
				</div>

				<div class = "input-group form-group">
					<span class = "input-group-addon sponsor">Address</span>
					<input type = "text" class = "form-control" value = "<?php echo $application['sponsor_postal_address']?>" />
				</div>

				<div class = "input-group form-group">
					<span class = "input-group-addon sponsor">Monthly Income</span>
					<input type = "text" class = "form-control" value = "<?php echo $application['sponsor_monthly_income']?>" />
				</div>
			</form>
		</div>

		<div class = "col-md-7">
			<legend>Educational Information</legend>
			<div class = "table-responsive">
				<table class = "table table-bordered table-striped">
				<thead>
					<th>Institution Name</th>
					<th>Level</th>
					<th>Date Started</th>
					<th>Date Completed</th>
					<th>Certificate Awarded</th>
				</thead>
					<?php
						$applicant_id = $application['applicant_id'];

						foreach ($education as $detail) {
							echo "<tr><td>".$detail['institution_name']."</td><td>".$detail['study_area']."</td><td>".$detail['studied_from']."</td><td>".$detail['studied_to']."</td><td>".$detail['additional_certificates']."</td></tr>";
						}
					?>
				</table>
			</div>
			<a class = "btn btn-success"><i class = "fa fa-save"></i> Accept Student</a>
			<a class = "btn btn-danger"><i class = "fa fa-user"></i> Decline Student</a>
		</div>
		<div></div>
	</div>
</aside>