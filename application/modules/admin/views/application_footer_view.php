<script>
function applications (id,fname,sname,lname,citizen,slevel,plevel,institution,guardian,status) {
	
	$('#editid').val(id);
    $('#f_name').val(fname);
    $('#s_name').val(sname);
    $('#l_name').val(lname);
    $('#citizen').val(citizen);
    $('#s_level').val(slevel);
    $('#p_level').val(plevel);
    $('#school').val(institution);
    $('#guardian').val(guardian);

   		$('input[name=editstatus][value=1]').prop('checked', false);
		$('input[name=editstatus][value=2]').prop('checked', false);
		$('input[name=editstatus][value=3]').prop('checked', false);

		$('input[name=editstatus][value='+status+']').prop('checked', true);
    
	
	$('#applicant_details').modal('show');
}
</script>