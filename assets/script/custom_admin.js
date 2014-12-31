$(document).ready(function(){

	// get_staff_sub_groups(2);
	sourceurl = base_url + 'admin/search/json_search';
	$('#stafftable').dataTable();
	$('.datepicker').datepicker({
	    format: "yyyy-m-d",
	    autoclose: 'true'
	});
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
        	var option_result = '';
        	for (var i = obj.length - 1; i >= 0; i--) {
        		option_result += '<option value = "'+obj[i].ssg_id+'">' +obj[i].ssg_name+ '</option>';
        	};
        	$('#option').innerHTML = 'Administartive Staff';
        	$('#details').innerHTML = option_result;
        },
        fail: function()
        {
          alert("failed");
        }
	});
}

function loadData(base_url, function_url, value, container, placeholder_text) {
	alert(placeholder_text);
  if (value !== '') {
    ajax_url = base_url + 'admin/' + function_url + '/' + value
  } else {
    ajax_url = base_url + 'admin/' + function_url
  }
  $.ajax({
    url: ajax_url,
    async: false,
    beforeSend: function(xhr) {
      xhr.overrideMimeType("text/plain; charset=x-user-defined");

      $(container).empty();
    },
    success: function(data) {
      obj = jQuery.parseJSON(data);
      $(container).select2({
        placeholder: placeholder_text,
        data: obj
      });

    }
  });
}