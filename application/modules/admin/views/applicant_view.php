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
		<div class = "col-md-3" style = "position: fixed;">
			<div class = "input-group"></div>
		</div>
	</div>
</aside>