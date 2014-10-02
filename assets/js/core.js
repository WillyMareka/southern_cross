$(document).ready(function(){
	// alert(getXMLHTTP());
	$('#login-button').click(function(){
		username = $("#uname").val();
		password = $("#upass").val();

		dologin(username, password);
	});
});

function getXMLHTTP()
{
	var xmlHttp=null;
	try
	{
	    xmlHttp=new XMLHttpRequest();
	}
	catch (e)
	{
	    try
	    {
	        xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
	    }
	    catch(e)
	    {
	        xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	    }
	}
	return xmlHttp;
}

function dologin(usernamei, passwordi)
{
    var req = getXMLHTTP(); // fuction to get xmlhttp object
    // strURL = "dologin.php?usernamei=" + usernamei + "&passwordi=" + passwordi
    var form = document.getElementById('login-form');
    var r = document.getElementById('result');
    if(req)
    {
	    form.onsubmit = function(event) {
	    event.preventDefault();

	    r.innerHTML = '<i class = "fa fa-spinner fa-spin"></i> Working...';

	    var data = $('#login-form :input').serializeArray();
	    // console.log(data);
	    $.post($('#login-form').attr('action'), data, function(info){
	    	if (info == "True") {
	    		window.location = 'users/mainpage';
	    	}
	    	else if(info == "False")
			{
				$('#result').html('Wrong Username or Password.');
			}
	    });
	}
	}
}