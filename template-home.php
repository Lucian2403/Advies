<?php
/**
 * Template Name: Home Page
 */

get_header();

$imageHeader = get_field("header_image");
?>
    <div class="content-image-header">
        <h1 class="main_title"><?php the_field('main_title'); ?></h1>
        <div class="dark_area"></div>
        <section class="image_header" style="background-image: url(<?php echo $imageHeader['url'] ?>" );></section>
        <div class="grey_area"></div>
    </div>
<?php

// check if the repeater field has rows of data
if (have_rows('content_home_page')): ?>

    <main class="home_content">
    <?php
    // loop through the rows of data
    while (have_rows('content_home_page')) : the_row();

        $image_green = get_field('image_green');

        // display a sub field value
        ?>

        <section class="container  home_info">
            <div class="text_container">
                <h1>
                    <?php the_sub_field('title_home_page'); ?>
                </h1>

                <?php the_sub_field('paragraph_home_page') ?>
            </div>
        </section>

        <section class="home_content_green">
            <div class="home_content_green__left">
                <div class="home_content_green__left--info">
                    <?php the_field('text_green_left') ?>
                    <a class="button button_primary" href="<?php the_field('button_url') ?>"><?php the_field('button_text') ?></a>
                </div>
            </div>
            <div class="home_content_green__right">
                <div class="home_content_green__right--info">
                    <section class="image_green" style="background-image: url(<?php echo $image_green['url'] ?>" );></section>
                    <div class="home_content_green__right--info--text">
                        <?php the_field('text_green_right') ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="container home_content_maat">
            <div class="home_content_maat__text">
                <?php the_field('text_maat') ?>
            </div>

            <?php

            $rows = get_field('images_link');
            if ($rows) {
                echo '<ul class="owl-carousel page-links">';
                foreach ($rows as $row) {
                    $page_image = $row['link_image'];
                    $page_title = $row['block_title'];
                    $page_subtitle = $row['block_subtitle'];
                    $page_link = $row["block_url"];
//echo '<pre>';
//var_dump($row);
//echo '</pre>';
                    ?>
                        <li>
                            <a href="<?php echo $page_link; ?>">
                                <div class="block_images">
                                    <img class='image_slide' src="<?php echo $page_image; ?>" alt="image slider">
                                    <div class="hover-image">
                                        <div class="hover-image__text">
                                            <h4>
                                                <?php echo $page_title; ?>
                                            </h4>
                                            <p>
                                                <?php echo $page_subtitle; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php

                }
                echo '</ul>';
            }
            ?>
        </section>

    <?php endwhile; ?>
<?php else : // no rows found
endif;
?></main>
<?php
get_footer();

