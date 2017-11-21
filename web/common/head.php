<head>
<title>Jai Hind Academy</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src='js/jquery-1.8.1.min.js' type='text/javascript'></script>
<script src='js/jquery.kwicks.js' type='text/javascript'></script>
<script type='text/javascript'>
	$(function() {
	$('.kwicks').kwicks({
		maxSize : 250,
		spacing : 5,
		behavior: 'menu'
		});
	});
</script>
 <link rel='stylesheet' id='camera-css'  href='<?php echo SITEPATH;?>/web/css/camera.css' type='text/css' media='all'> 
<!-- Scripts--> 
    <script type='text/javascript' src='<?php echo SITEPATH;?>/web/js/jquery.min.js'></script>
    <script type='text/javascript' src='<?php echo SITEPATH;?>/web/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='<?php echo SITEPATH;?>/web/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='<?php echo SITEPATH;?>/web/js/camera.min.js'></script> 
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true
			});

			jQuery('#camera_wrap_2').camera({
				height: '400px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
</script>

</head>