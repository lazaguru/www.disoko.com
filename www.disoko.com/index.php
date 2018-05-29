<!DOCTYPE html>
<html lang="en">
	<head>

		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>www.disoko.com</title>
		<meta name="generator" content="product listing" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
        <style type="text/css">
<!--
body{margin:0px; padding:0px;}
#fl_menu{position:absolute; top:50px; left:0px; z-index:9999; width:150px; height:50px;}
#fl_menu .label{padding-left:20px; line-height:50px; font-family:"Arial Black", Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; background:#168ccc; color:#ffffff; letter-spacing:7px;}
#fl_menu .menu{display:none;}
#fl_menu .menu .menu_item{display:block; background:#168ccc; color:#ffffff; border-top:1px solid #333; padding:10px 20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; text-decoration:none;}
#fl_menu .menu a.menu_item:hover{background:#333; color:#fff;}
.content{width:520px; margin:50px auto;}
-->
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>

 <script 
      src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAA-j4r1Ft3AXUvtHpmQed5QBT1Od6h1-72Y7prpYCpJn9DFtoeIBRtm8wkEs7US-rldb6QtKa-S45Ezw"
      type="text/javascript">
    </script>  <!--add own key here-->


    <script type="text/javascript">
    //<![CDATA[
    function load() {
	if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.setCenter(new GLatLng(38.893813, -77.073733), 13);
      }
     // Create a base icon for all of our markers that specifies the
	// shadow, icon dimensions, etc.
	var baseIcon = new GIcon();
	baseIcon.shadow = "http://www.google.com/mapfiles/shadow50.png";
	baseIcon.iconSize = new GSize(20, 34);
	baseIcon.shadowSize = new GSize(37, 34);
	baseIcon.iconAnchor = new GPoint(9, 34);
	baseIcon.infoWindowAnchor = new GPoint(9, 2);
	baseIcon.infoShadowAnchor = new GPoint(18, 25);

	// Creates a marker whose icon is an image and whose.
	
	function createMarker(point, index) {
	  var icon = new GIcon(baseIcon);
	  var imageAddr = "../../images/1300N17TH.jpg";
	  icon.image =  imageAddr;
	  var marker = new GMarker(point, icon);
	
	  GEvent.addListener(marker, "click", 
		  function() {
		    marker.openInfoWindowHtml(
		    "<img src="+imageAddr+" \"width=125\" height=\"150\" />"
		    );
		  }
	  );
	  return marker;
	}               
	var point = map.getCenter();
	map.addOverlay(createMarker(point, 0));
}
    //]]>
    </script>
	</head>
	<body onload="load()" onunload="GUnload()">
    <div id="fl_menu">
	<div class="label">MENU</div>
	<div class="menu">
        <a href="#" class="menu_item"><span class="glyphicon glyphicon-option-vertical"></span>Home</a>  
    	<a href="#" class="menu_item"><span class="glyphicon glyphicon-globe"></span>Share with Friends</a>
        <a href="#" class="menu_item"><span class="glyphicon glyphicon-envelope"></span>Notifications</a>
        <a href="#" class="menu_item"><span class="glyphicon glyphicon-heart"></span>Improve Results</a>
        <a href="#" class="menu_item"><span class="glyphicon glyphicon-user"></span>Import Friends</a>
        <a href="#" class="menu_item"><span class="glyphicon glyphicon-gift"></span>Suggested Items</a>
        <a href="#" class="menu_item"><span class="glyphicon glyphicon-apple"></span>Related Items</a>
        <a href="#" class="menu_item"><span class="glyphicon glyphicon-map-marker"></span>Nearby Items</a>
        <a href="#" class="menu_item"><span class="glyphicon glyphicon-plus"></span>Offers</a>
        <a href="#" class="menu_item"><span class="glyphicon glyphicon-glass"></span>Promotions</a>
    
    </div>
<?php 
require("navbar.php");
 ?>
</div>
<div class="container">
<div class="row">
 <div class="col-sm-10 col-md-8" id="map" style="width: 500px; height: 600px">
</div>

<div class="col-sm-2 col-md-4" style="background-color:lavenderblush;">
<p>
<u>sponsored links</u>
</p>
<img src="img/iphone-6srrr.jpg" height="300" width="380"></img>
<p>hot iphone 6s on sale at <a href="www.jumia.co.ke">kamau shop<a></p>


<div class="row" style="background-color:lavender;">
<p><u>trending hot products and services</u></p>
<img src="img/iphone-6svff.jpg" height="300" width="380"></img>
</div>
</div>
</div>
<!-- script references -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
		<script src="js/scripts.js"></script>
        <script>
//config
$float_speed=1500; //milliseconds
$float_easing="easeOutQuint";
$menu_fade_speed=500; //milliseconds
$closed_menu_opacity=0.75;

//cache vars
$fl_menu=$("#fl_menu");
$fl_menu_menu=$("#fl_menu .menu");
$fl_menu_label=$("#fl_menu .label");

$(window).load(function() {
	menuPosition=$('#fl_menu').position().top;
	FloatMenu();
	$fl_menu.hover(
		function(){ //mouse over
			$fl_menu_label.fadeTo($menu_fade_speed, 1);
			$fl_menu_menu.fadeIn($menu_fade_speed);
		},
		function(){ //mouse out
			$fl_menu_label.fadeTo($menu_fade_speed, $closed_menu_opacity);
			$fl_menu_menu.fadeOut($menu_fade_speed);
		}
	);
});

$(window).scroll(function () { 
	FloatMenu();
});

function FloatMenu(){
	var scrollAmount=$(document).scrollTop();
	var newPosition=menuPosition+scrollAmount;
	if($(window).height()<$fl_menu.height()+$fl_menu_menu.height()){
		$fl_menu.css("top",menuPosition);
	} else {
		$fl_menu.stop().animate({top: newPosition}, $float_speed, $float_easing);
	}
}
</script>

</body>
</html>