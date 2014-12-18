$(document).ready(function(){

	$.ajax({
		url: base_url + 'admin/getApplicants',
        beforeSend: function(xhr) {
          xhr.overrideMimeType("text/plain; charset=x-user-defined");
        },
        success: function(data)
        {
        	mydatatable = '<div class = "datatable"><table class="table table-bordered" id = "awesomedata"><thead><tr><th>#</th><th>First Name</th><th>Action</th></tr></thead><tbody id = "applicant">';
        	counter = 0; 
			obj = jQuery.parseJSON(data);
			total = obj.length;
			for (var i = obj.length - 1; i >= 0; i--) {
				counter++;
				mydatatable += '<tr>';
				mydatatable += '<td>' + counter +'</td>';
				mydatatable += '<td>' + obj[i].f_name +'</td>';
				mydatatable += '<td>' +  obj[i].l_name +'</td>';
				mydatatable += '</tr>';
			};

			mydatatable += '</tbody></table></div>';
			console.log(mydatatable);

			var data_div = document.getElementById('dt');

			data_div.innerHTML = mydatatable;
        },
        fail: function()
        {
          alert("failed");
        }
	});
	get_staff_sub_groups(2);

	// $('#awesomedata').dataTable();
});

function get_staff_sub_groups(group_id)
{
	$.ajax({
		url: base_url + 'admin/get_staffsubgroups/'+group_id,
        beforeSend: function(xhr) {
          xhr.overrideMimeType("text/plain; charset=x-user-defined");
        },
        success: function(data)
        {
        	obj = jQuery.parseJSON(data);
        	for (var i = obj.length - 1; i >= 0; i--) {
        		console.log(obj[i].sg_id);
        	};
        },
        fail: function()
        {
          alert("failed");
        }
	});
}