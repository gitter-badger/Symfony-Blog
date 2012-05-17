
<head>			
	<title><?php echo (isset($pageTitle))? $pageTitle : SETTINGS_SITE_TITLE ?></title>

	<meta name="description" content="<?php echo (isset($description))? $description : SETTINGS_SITE_DESCRIPTION ?>" />
	<meta name="keywords" content="<?php echo (isset($keywords))? $keywords : SETTINGS_SITE_KEYWORDS ?>" />
	<meta name="copyright" content="Copyright esub 2011. All rights reserved">
	<meta name="owner" content="esub">
	<meta name="publisher" content="esub">
	<meta name="author" content="esub">
	<meta name="language" content="english">
	<meta name="rating" content="General">
	<meta name="expires" content="never">
	<meta name="distribution" content="Global">
	<meta name="robots" content="index,FOLLOW">
	<meta name="revisit-after" content="1 days">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="ro">
	<!-- FAVICON -->
	<script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>

	<link rel="shortcut icon" href="<?php echo base_url()?>/assets/images/favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="<?php echo base_url()?>/assets/images/favicon.ico" type="image/x-icon"/>
	
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/master.css')?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bgs.css')?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/fonts.css')?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/jquery.fileupload-ui.css')?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap.css')?>" />
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/ie7.css')?>" />
	<![endif]-->
	
	
	
	<script src="<?php echo site_url('assets/js/jquery-1.7.1.min.js')?>"></script>
	<script src="<?php echo site_url('assets/js/global.js')?>"></script>
</head>