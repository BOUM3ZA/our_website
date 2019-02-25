<?php
/**
 * The template file to show single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package easthill
 */

get_header(); ?>			
			<div id="content" class="site-content">
				<div class="container">
					<div class="row">
						<div id="primary" class="content-area">
							<main id="main" class="site-main" role="main">

								<?php
                                    while ( have_posts() ) : the_post();
                            
                                        get_template_part( 'template-parts/content', 'single' );
                                                          
                                        // If comments are open or we have at least one comment, load up the comment template.
                                        if ( comments_open() || get_comments_number() ) :
                                            comments_template();
                                        endif;
                            
                                    endwhile; // End of the loop.
                                ?> 
								
								
							</main>
						</div>
						<?php get_sidebar(); ?>								
					</div>
				</div>
			</div>
<?php get_footer(); ?>
