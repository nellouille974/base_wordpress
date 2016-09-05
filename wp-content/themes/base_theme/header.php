<!-- Exemple : DocType, les balises META, les liens vers les feuilles de styles CSS, ainsi que d’autres infos utiles -->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
	<title><?php bloginfo('name')  ?>
		<?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?>
		<?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description')?>
		<?php else : ?><?php wp_title() ?><?php endif ?>
	</title>   
	 <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 
	 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> 
	 <?php wp_head(); ?>  
</head>

<body>
