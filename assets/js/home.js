$(function(){
// IPad/IPhone
  var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
  ua = navigator.userAgent,

  gestureStart = function () {viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";},

  scaleFix = function () {
    if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
      viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
      document.addEventListener("gesturestart", gestureStart, false);
    }
  };
  
  scaleFix();
  // Menu Android
  if(window.orientation!=undefined){
  var regM = /ipod|ipad|iphone/gi,
   result = ua.match(regM)
  if(!result) {
   $('.sf-menu li').each(function(){
    if($(">ul", this)[0]){
     $(">a", this).toggle(
      function(){
       return false;
      },
      function(){
       window.location.href = $(this).attr("href");
      }
     );
    } 
   })
  }
 }
// CUSTOM JS
//random change to enable commit
$(".warning_msg").hide();
 $(".login_button").click(function(e){
  e.preventDefault();
  var pwd=$(".password").val();
  var uname = $(".user_name").val();

  if (pwd == "" || uname == "") {
    $(".warning_msg").slideDown();
  }else{
    //alert(pwd);alert(uname);return;
    $.ajax({
      type:"POST",
      url:"users/login",
      data:{'username':uname,
            'password':pwd
            },
            success:function(msg){
              // alert(msg);return;
              var redirection = "users/check_type/";
              var full_url = redirection.concat(msg);

<<<<<<< HEAD
              //alert(full_url);return;
               window.location.href = full_url;
=======
              // alert(full_url);return;
              window.location.href = full_url;
>>>>>>> dadde0b7f18f6d80dde9d2ecde7ae72c0a1794c7
            }
    });
  };

 });
 //END OF CUSTOM JS
});
var ua=navigator.userAgent.toLocaleLowerCase(),
 regV = /ipod|ipad|iphone/gi,
 result = ua.match(regV),
 userScale="";
if(!result){
 userScale=",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0'+userScale+'">')

var currentYear = (new Date).getFullYear();
  $(document).ready(function() {
  $("#copyright-year").text( (new Date).getFullYear() );
  });

  $(function(){
  $('.sf-menu').superfish({autoArrows: true})
})



// DEVICE.JS AND SMOOTH SCROLLIG

function include(url){document.write('<script type="text/javascript" src="'+url+'"></script>')}
include('js/device.js');
include('js/jquery.mousewheel.js');
include('js/jquery.simplr.smoothscroll.js');

  $(function () { 
    if ($('html').hasClass('desktop')) {
        $.srSmoothscroll();
    }
  });
