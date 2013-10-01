<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark" class="photo">
        <figure>
            <figcaption class="photo__cut">
                <h1>If you <em><?php the_title(); ?></em>, then fuck you.</h1>
            </figcaption>
        	<?php the_content(); ?>
        </figure>
    </a>
    
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- iydttfy -->
    <ins class="adsbygoogle iydttfy" data-ad-client="ca-pub-5996049043771362" data-ad-slot="5290399535"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script> 

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>