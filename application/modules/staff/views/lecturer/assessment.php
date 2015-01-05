
<style type="text/css">
.btn.btn-app {
    position: relative;
    padding: 15px 5px;
    margin: 0px 0px 10px 10px;
    min-width: 100px;
    height: 60px;
    box-shadow: none;
    border-radius: 0px;
    text-align: center;
    color: #666;
    border: 1px solid #DDD;
    background-color: #FAFAFA;
    font-size: 12px;
}
.btn {
    font-weight: 500;
    border-radius: 3px;
    border: 1px solid transparent;
    box-shadow: 0px -1px 0px 0px rgba(0, 0, 0, 0.09) inset;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0px;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.42857;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    -moz-user-select: none;
}

.btn.btn-app > .fa, .btn.btn-app > .glyphicon, .btn.btn-app > .ion {
    font-size: 20px;
    display: block;
}

.input-group
{
	width: 100%;
}
.extra
{
	width: 30%;
}
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$('#jq-datatables-example').dataTable();
		$('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
		$('#jq-datatables-example_wrapper .table-caption').text('<?php echo $table_title; ?>');
		value = '<?php echo $this->session->userdata("id");?>';
		loadData(base_url,'createunitscombo',value,'#units','Please Select a unit');

		$('.number').change(function(){
			maximum = '<?php echo $max;?>';
			current_value = $(this).val();
			if(current_value > maximum)
			{
				alert('Sorry, the value you entered ('+current_value+') is beyond the maximum. Try again');
				$(this).val('');
				$(this).focus();
			}
		});
	});

	
</script>

<aside class = "col-md-4">
	<form method = "POST" action = "" id = "filter-table">
		<div class="form-group input-group">
			<span class="input-group-addon text-info extra">Unit</span>
			<input type = "text" class = "select2" id = "units" name = "unit">
		</div>

		<div class="form-group input-group">
			<span class="input-group-addon text-info extra">Assessment</span>
			<input type = "text" class = "select2 form-control" name = "assessment" id = "assessments"/>
			<!-- <select class = "select2" id = "assessments" name = "assessment">
				<option value = "1">CAT</option>
				<option value = "1">Exam</option>
			</select> -->
		</div>
		<div class = "form-group">
			<button class="btn btn-flat btn-labeled btn-primary col-md-12" id ="filter"><span class="btn-label icon ion ion-funnel"></span>Filter</button>
		</div>
	</form>
</aside>
<aside class = "col-md-8">
<form method = "POST" action = "updatemarks">

<?php if($mark_assessment){?>
	<input type = "hidden" value = "<?php echo $group_id; ?>" name = "studentgroup_1">
	<input type = "hidden" value = "<?php echo $assessment_id; ?>" name = "studentassessment_1">
	<div class = "row">
		<hr>
		<div class="col-md-12" style = "margin-button: 10px;">
			<a class = "btn btn-flat btn-info col-md-4"><i class = "ion ion-printer"></i> <span>Print List</span></a>
			<button type="submit" class = "btn btn-flat btn-success col-md-4"><i class = "fa fa-save"></i> <span>Save Changes</span></button>
			<a class = "btn btn-flat btn-danger col-md-4"><i class = "fa fa-trash-o"></i> <span>Clear Data</span></a>
		</div>
	</div>
<?php }?>
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
		<thead>
			<tr>
				<th>#</th>
				<th>Student No</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Mark</th>
			</tr>
		</thead>
		<tbody id = "filter-data">
			<?php
				if($mark_assessment)
				{
					echo $mark_assessment;
				}
			?>
		</tbody>
	</table>
	</form>
</aside>

<script type="text/javascript">
// 	$(document).ready(function(){
// 		$('#filter').click(function(){
// 			var form = document.getElementById('filter-table');

// 			form.onsubmit = function(event){
// 				event.preventDefault();
// 				url = base_url + 'staff/lecturer/' + $('#filter-table').attr('action');

// 				var data = $('#filter-table').serializeArray();

// 				$.post($('#filter-table').attr('action'), data, function(info){
// 					console.log(info);
// 					var t=$('#jq-datatables-example').dataTable();
// 					console.log(t);
// 					t.row.add(info).draw();
// 					// $('#filter-data').innerHTML = info;
// 				});
// 			}
// 		});
// 	});
$('#units').change(function(){
	value = $(this).val();
    loadData(base_url,'assessmentcombo',value,'#assessments','Please Select an Assessment');
});

function loadData(base_url, function_url, value, container, placeholder_text) {
	// alert(placeholder_text);
  if (value !== '') {
    ajax_url = base_url + 'staff/lecturer/' + function_url + '/' + value
  } else {
    ajax_url = base_url + 'staff/lecturer/' + function_url
  }
  $.ajax({
    url: ajax_url,
    async: false,
    beforeSend: function(xhr) {
      xhr.overrideMimeType("text/plain; charset=x-user-defined");

      $(container).empty();
    },
    success: function(data) {
    	console.log(data);
      obj = jQuery.parseJSON(data);
      $(container).select2({
        placeholder: placeholder_text,
        data: obj
      });

    }
  });
}
 </script>