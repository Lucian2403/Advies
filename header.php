<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package advies
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="container_nav">
		<div class="container header_items">
            <div class="logo">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('logo', 'option') ):

                    // loop through the rows of data
                    while ( have_rows('logo', 'option') ) : the_row(); ?>
                    <a href="<?php echo site_url(); ?>">
                        <div class="logo_desktop" style="background-image: url(<?php the_sub_field('logo_desktop', 'option'); ?>" );></div>
                        <div class="logo_mobile" style="background-image: url(<?php the_sub_field('logo_mobile', 'option'); ?>" );></div>
                    </a>
                <?php
                    endwhile;
                else :
                    // no rows found
                endif;
                ?>
            </div>


            <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'menu_class' => 'navbar'
                ) );
                ?>
                <div class="tel_number">
                    <span class="tel_number__text">Bel nu direct</span>
                    <a href="tel:+<?php echo preg_replace('#[^0-9]#', '', 'tel_number'); ?>">
                    <?php the_field('tel_number', 'option'); ?>
                    </a>
                </div>
            </nav><!-- #site-navigation -->
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
