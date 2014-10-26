<script>
function applications (id) {
	alert(id);

	$('#applicant_details').html({
		"bJQueryUI":true, 
		"sAjaxSource": "<?php echo base_url('admin/admin/ss_applicants_details'); ?>" ,
		"aoColumnDefs": [
		{ "bSortable": false, "aTargets": [ 0 ] }
		],
		"aaSorting": [[1, 'asc']]

	});	
}
</script>