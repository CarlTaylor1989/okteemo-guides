<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">

<title></title>
<meta name="description" content="">
<meta name="author" content="">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
<script src="<?php echo base_url(); ?>assets/js/libs/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/libs/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/libs/modernizr-2.5.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

</head>

<body>

<div id="container">
	<div class="container">
		<div class="row">
			<header class="span12">
				<?php //$this->load->view('assets/_navigation'); ?>
			</header>
		</div>
	</div>

	<div id="main">
		<?php echo $yield; ?>
	</div>

	<footer class="container">
		<div class="row">
			<div class="span12">
			</div>
		</div>
	</footer>

</div> <!--! end of #container -->

<!-- Javascript at the bottom for fast page loading -->
<script type="text/javascript">

</script>

</body>
</html>