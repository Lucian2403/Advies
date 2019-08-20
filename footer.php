<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package advies
 */

?>
	</div>

<?php
$image_footer = get_field('footer_image', 'option');
?>

	<footer id="colophon" class="site-footer">
        <section class="info">
            <section class="info__image-footer" style="background-image: url(<?php echo $image_footer['url'] ?>");></section>
            <div class="info__image-right">
                <div class="info__image-right__text">
                    <?php the_field('footer_text_right', 'option') ?>
                    <a class="button button_primary" href="<?php the_field('button_url', 'option') ?>"><?php the_field('button_text', 'option') ?></a>
                </div>
            </div>
        </section>

        <section class="container contact_footer">
            <div class="contact_info">
                <h2>Contact</h2>
                <aside class="contact_info__description">
                    <p><strong>Aliquam nec ex diam. Maecenas eros est, pulvinar eget sagittis a.</strong></p>
                    <p>Phasellus ac dictum mi. Suspendisse potenti. Nam molestie erat turpis</p>
                </aside>
                <ul class="contact_info__direct">
                    <li class="contact_info__direct__tel">
                        <a href="tel:+<?php echo preg_replace('#[^0-9]#', '', 'contact_tel'); ?>">
                            <?php the_field('contact_tel', 'option') ?>
                    </li>
                    <li class="contact_info__direct__email">
                        <a href="mailto://<?php 'contact_email' ?>">
                            <?php the_field('contact_email', 'option') ?>
                    </li>
                </ul>
                <div class="contact_info__icons">
                    <a class="contact_info__icons__link" href="<?php the_field('twitter','option') ?>" target="_blank"> <i class="fab fa-twitter"></i> </a>
                    <a class="contact_info__icons__link" href="<?php the_field('facebook','option') ?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a>
                </div>
            </div>
            <?php
    $contact_footer = get_field('contact_footer', 'option');
    echo do_shortcode($contact_footer); ?>
        </section>
        <div class="container copyright_text">
            <div class="copyright_text__left">
                <?php the_field('copyright_text_left', 'option') ?>
            </div>
            <div class="copyright_text__right">
                <?php the_field('copyright_text_right', 'option') ?>
            </div>
        </div>



	</footer><!-- #colophon -->

</div>
<?php wp_footer(); ?>

</body>
</html>
