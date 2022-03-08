<!DOCTYPE HTML>

<html>
	<head>
		<title>R&D </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?=url_tmpl();?>albumdetail/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="<?=url_tmpl();?>albumdetail/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading-0 is-loading-1 is-loading-2">

		<!-- Main -->
			<div id="main">

				<!-- Header -->
					<header id="header">
					<!--<div class="logohead">
						<img src="images/logo.png" alt="" width="150">
					</div>-->
						<h1 class="text-center">
							<a class="" href="<?=base_url();?>album"><img src="<?=url_tmpl();?>img/logo_final.png" alt="logo" style="width:60px; margin-top:-5px;"></a>
						</h1>
						
					</header>
				<section id="thumbnails">  
						<?=$content;?> 
				</section> 
				<!-- Thumbnail -->
					<section id="thumbnails">
						
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright text-center">
							<li>&copy; Click</li>
							<li>Copyright 2017 R&D. All rights reserved.</li>
							
						</ul>
					</footer>
			</div>
		<!-- Scripts -->
			<script src="<?=url_tmpl();?>albumdetail/assets/js/jquery.min.js"></script>
			<script src="<?=url_tmpl();?>albumdetail/assets/js/skel.min.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?=url_tmpl();?>albumdetail/assets/js/main.js"></script>
			<script type="text/javascript">
			 $('.toggle').click(function(){
			 	$('.caption').toggle();
			 })
			</script>
	</body>
</html>