<?php
/**
 * Template Name: staff
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			

		<?php endwhile; // End of the loop. ?>
                    
           
        <div class="staff">      
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();    

                    $args = array(
                      'post_type' => 'attachment',
                      'category_name' => 'Staff Thumb',
                      'numberposts' => -1,
                      'post_status' => null,
                      'post_parent' => $post->ID
                     );

                     $attachments = get_posts( $args );
                        if ( $attachments ) {
                           foreach ( $attachments as $attachment ) {

                              echo '<div class="col-md-6">';
                              echo wp_get_attachment_image( $attachment->ID, 'thumbnail' );
                              echo '<p class="staff-title">';
                              echo apply_filters( 'the_title', $attachment->post_title );
                              echo '<p class="staff-description">';
                              echo apply_filters( 'the_caption', $attachment->post_caption );
                              echo '<p>';
                              echo apply_filters( 'Description', $attachment->post_content );
                              echo '</p></div>';
                             }
                        }

                endwhile; endif; ?>  
        </div>                  

        </main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
