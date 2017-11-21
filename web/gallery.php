<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<?php include("common/head.php"); ?>
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>

<body>

<?php include("common/header.php"); ?>


<!--About Us-->

<div class="container">
<ul class="grid effect-1" id="grid">
				<li><img src="images/8.jpg"></li>
				<li><img src="images/9.jpg"></li>
				<li><img src="images/10.png"></li>
				<li><img src="images/11.png"></li>
				<li><img src="images/12.png"></li>
				<li><img src="images/13.png"></li>
				<li><img src="images/14.png"></li>
		  </ul>
</div>

<!--//About Us-->



<?php include("common/footer.php"); ?>


<!--for grid view script -->
<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/imagesloaded.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/AnimOnScroll.js"></script>
		<script>
			new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
		</script>
<!-- // for grid view script -->

</body>
</html>