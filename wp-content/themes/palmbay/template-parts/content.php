<?php
/**
 * Template part for displaying posts.
 *
 * @package palmbay
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div id="index-box">
        
	<header class="entry-header">

        <?php
        // Display a thumb tack in the top right hand corner if this post is sticky
        if (is_sticky()) {
            echo '<i class="fa fa-thumb-tack sticky-post"></i>';
        }
        ?>
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?> 

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php palmbay_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
                     the_excerpt(); ?>
		

		
	</div><!-- .entry-content -->

        <footer class="entry-footer continue-reading">
            <?php echo '<a href="' . get_permalink() . '" title="' . __('Continue Reading ', 'palmbay') . get_the_title() . '" rel="bookmark">Continue Reading<i class="fa fa-arrow-circle-o-right"></i></a>'; ?>
            <?php the_posts_navigation(); ?>
        </footer><!-- .entry-footer -->
                
    </div><!--.index-box -->     
</article><!-- #post-## -->
