<?php
$_button_index = 0;
?>
<!doctype html>
<html class="no-js" lang="en" style="margin-top: 0px !important;">
<head>
  <meta charset="utf-8" />
	<link rel="manifest" href="<?php bloginfo('template_url');?>/assets/favicon/manifest.json">
	<link rel="shortcut icon" href="<?php bloginfo('template_url');?>/assets/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php bloginfo('template_url');?>/assets/favicon/favicon.ico" type="image/x-icon">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url');?>/assets/favicon/favicon-32x32.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php wp_title(); ?></title>
	<?php wp_head();?>
</head>
<body <?php body_class();?>>
