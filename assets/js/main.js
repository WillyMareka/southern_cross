$(document).ready(function()
{
	var start = new Date();
	$(window).load(function() {
	var timetaken = (new Date() - start);
	});

$(function() {
	$('a[href*=#]:not([href=#])').click(function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	    var target = $(this.hash);
	    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	    if (target.length) {
	        $('html,body').animate({
	        scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
});


});

function show(obj,obj1,obj2)
{
 document.getElementById(obj).style.display="block";
 document.getElementById(obj2).src=obj1.src;
 var x_coords=findPosX(obj1);
 var y_coords=findPosY(obj1);
 document.getElementById(obj).style.left=x_coords;
 document.getElementById(obj).style.top=y_coords;
 }
 
function hide(id)
{
 document.getElementById(id).style.display="none";
 }
 
function findPosX(obj)
{
 var curleft = 0;
 if (document.getElementById || document.all)
 {
  while (obj.offsetParent)
  {
   curleft += obj.offsetLeft
   obj = obj.offsetParent;
  }
 }
 else if (document.layers)
  curleft += obj.x;
 return curleft;
}
 
function findPosY(obj)
{
 var curtop = 0;
 if (document.getElementById || document.all)
 {
  while (obj.offsetParent)
  {
   curtop += obj.offsetTop
   obj = obj.offsetParent;
  }
 }
 else if (document.layers)
  curtop += obj.y;
 return curtop;
}