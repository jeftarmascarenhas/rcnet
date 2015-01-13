<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Project Name
 */

// if (!is_user_logged_in()) {
//     wp_redirect('http://www.damain.com/subdomain', 302);
//     exit;
// }

?><!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie7 lt-ie9 lt-ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js ie8 lt-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<?php

    // General Variables
    $title_default = get_bloginfo('name');
    $keys_default  = '';
    $link_default  = get_bloginfo('wpurl');
    $image_default = WP_IMAGE_URL . '/thumbnail.jpg';
    $desc_default  = get_bloginfo('description');
    if(is_single() || is_page()){
        $link_default  = get_permalink();
        if(has_post_thumbnail()){
            $image_ID      = get_post_thumbnail_id(get_the_id());
            $image_default = wp_get_attachment_image_src($image_ID, 'thumbnail');
            $image_default = $image_default[0];
        }
    }

?>

<title><?php wp_title('|', true, 'right'); ?></title>

<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->

<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="copyright" content="&copy; Copyright 2013 <?php echo $title_default; ?>" />
<link type="text/plain" rel="author" href="humans.txt" />
<meta name="keywords" content="<?php echo $keys_default; ?>" />
<meta name="description" content="<?php echo $desc_default; ?>" />
<meta name="google-site-verification" content="" />
<?php
    if(is_single() || is_page() || is_category() || is_home()) {
        echo '<meta name="robots" content="all,noodp" />';
        echo "\n";
    }
    else if(is_archive()) {
        echo '<meta name="robots" content="noarchive,noodp" />';
        echo "\n";
    }
    else if(is_search() || is_404()) {
        echo '<meta name="robots" content="noindex,noarchive" />';
        echo "\n";
    }
?>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href="<?php echo WP_IMAGE_URL ?>/favicon.ico" rel="shortcut icon" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo WP_STYLE_URL ?>/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<meta property="og:title" content="<?php echo $title_default; ?>"/>
<meta property="og:type" content="site"/>
<meta property="og:url" content="<?php echo $link_default; ?>"/>
<meta property="og:image" content="<?php echo $image_default; ?>"/>
<meta property="og:site_name" content="<?php echo $title_default; ?>"/>
<meta property="og:description" content="<?php echo $desc_default; ?>"/>

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<?php/* get_template_part('includes/feature', 'custom') */?>

<div class="container">
<div class="row">
    <div class="col-md-10 col-lg-10 pull-right">
        
    <?php
        $header_menu_args = array(
            'theme_location'  => 'area-registrita',
            'menu'            => '',
            'container'       => 'nav',
            'container_class' => 'pull-right',
            'container_id'    => '',
            'menu_class'      => 'list-inline',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        );
 
    wp_nav_menu( $header_menu_args );
?>
        
    </div>
</div>
</div>


<nav class="navbar navbar-default navbar-static-top navbar-menu-primary" role="navigation">
    <div class="container">
        <!-- Marca e alternância se agrupados para melhor visualização móvel-->
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo get_option('home'); ?>">
                <img src="<?php echo WP_IMAGE_URL?>/logo.png" alt="Marca Level System">
            </a>
        </div>

    
     <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 1,
                'container'         => 'nav',
                'container_class'   => 'collapse navbar-collapse',
                 'container_id'     => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?> 

    </div>

 
    
</nav>

 

        <!-- #main -->
        <div id="main">
