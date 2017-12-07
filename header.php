<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header">
        <div class="container">
            <a href="/" class="navbar-brand"><?php echo get_bloginfo("name");?></a>
            <?php wp_nav_menu( array('theme_location' => 'header-menu', 'menu_class' => 'nav navbar-nav')); ?>
            <div class="nav navbar-nav navbar-right">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                    </span>
                    <input data-toggle="search" type="text" class="form-control"/>
                </div>
            </div>
        </div>
    </header>
    <?php if (is_home() == false):?>
        <div id="breadcrumb">
           <?php echo Core::get_view_breadcrumb();?>
        </div>
    <?php endif;?>
    <main id="main">