<?php
	if(empty($_title)) 			$_title ='';
	if(empty($_keywords)) 		$_keywords ='';
	if(empty($_description)) 	$_description ='';
?>

	<title><?php echo $_title;?></title>
	<meta name="keywords" content="<?php echo $_keywords;?>" />
	<meta name="description" content="<?php echo $_description;?>" />
	<meta name="robot" content="noindex, nofollow" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
	<link type="text/css" rel="stylesheet" href="css/reset.css" media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/dark-hive/jquery-ui-1.8.18.custom.css" media="screen,projection"/>
	<!-- add Bootstrap lib -->
	<link  type="text/css" rel="stylesheet" href="css/bootstrap-theme.css" media="screen,projection"/>
	<link  type="text/css" rel="stylesheet" href="css/bootstrap.css" media="screen,projection"/>
	<!-- end Bootstrap lib -->
	<link type="text/css" rel="stylesheet" href="css/layout.css" media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/print.css" media="print"/>
	<link type="image/ico" rel="shortcut icon" href="images/favicon.ico">
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<!-- js of Bootstrap -->
	<script type="text/javascript" src="bootstrap.js"></script>