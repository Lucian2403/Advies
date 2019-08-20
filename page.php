<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package advies
 */

get_header();

$imageHeader = get_field("header_image");
?>
    <div class="content-image-header">
        <h1 class="main_title"><?php the_field('main_title'); ?></h1>
        <div class="dark_area"></div>
        <section class="image_header" style="background-image: url(<?php echo $imageHeader['url'] ?>);"></section>
        <div class="grey_area"></div>
    </div>
<?php

// check if the repeater field has rows of data
if( have_rows('content_home_page') ):

    // loop through the rows of data
    while ( have_rows('content_home_page') ) : the_row();

        // display a sub field value ?>
       <section class="container  default-page_info">
            <div class="text_container">
                <h3 class="the_title">
                    This page is: <span><?php the_title(); ?></span>
                </h3>
                <h2>
                    <?php the_sub_field('title_home_page'); ?>
                </h2>

                <?php the_sub_field('paragraph_home_page') ?>
            </div>
           <?php
           $contact_aside = get_field('contact_aside');
           echo do_shortcode($contact_aside); ?>
        </section>
<?php
    endwhile;

else :

    // no rows found

endif;

?>
<?php
get_footer();