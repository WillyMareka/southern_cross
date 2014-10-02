<html>
<head>
<style>
#img_container
{
 position:absolute;
 display:none;
 border:1px solid #f00;
 background:#fff;
 }
#large_img
{
 width:304px;
 height:400px;
 }
</style>
<script>
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
</script>
</head>
<body>
<div>

 <img id="img1" width="117" height="180" src="resource/facebook.jpg" onmouseover="show('img_container',this,'large_img');">

 <img id="img2" width="117" height="180" src="resource/gmail.jpg" onmouseover="show('img_container',this,'large_img');">

 <img id="img3" width="117" height="180" src="resource/twitter.jpg" onmouseover="show('img_container',this,'large_img');">

 <img id="img4" width="117" height="180" src="resource/instagram.jpg" onmouseover="show('img_container',this,'large_img');">

 <img id="img5" width="117" height="180" src="resource/yahoo.jpg" onmouseover="show('img_container',this,'large_img');">

</div>
<div id="img_container" onmouseout="hide(this.id);">
 <img id="large_img" src="" />
</div>


</body>
</html> 