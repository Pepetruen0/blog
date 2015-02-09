<!DOCTYPE html>
<html>
<head lang="en">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?> <?php wp_title(' - ', true, 'left'); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,700italic,300,300italic,400italic,500' rel='stylesheet' type='text/css'>
<!--	<link rel="stylesheet" href="css/styles.css"/>-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>

</head>
<body>

<div class="header">
	<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo"/></div>
	<div class="banner"><img src="<?php echo get_template_directory_uri(); ?>/images/ad.png" alt="Ad"/></div>
</div>

<div class="navCont">
	<nav class="nav-collapse">
		<ul>
			<?php wp_list_categories('orderby=id&title_li='); ?>
		</ul>

	</nav>

</div>

