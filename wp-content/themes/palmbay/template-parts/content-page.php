<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package palmbay
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
      <div id="index-box">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'palmbay' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
      </div>    

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'palmbay' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

