<?php
/**
 * Template part for displaying single posts.
 *
 * @package palmbay
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
	<header class="entry-header">
            
        <?php
            /* translators: used between list items, there is a space after the comma */
            $category_list = get_the_category_list( __( ', ', 'palmbay' ) );

            if ( palmbay_categorized_blog() ) {
                echo '<div class="category-list">' . $category_list . '</div>';
            }
        ?>    
            
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>



	<div class="entry-content">
		<?php the_content(); ?>

	</div><!-- .entry-content -->
 

	<footer class="entry-footer">
		<?php palmbay_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

