<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package protechinfinity
 */

get_header();
?>
	<div id="main-content">
        <div class="page-wrapper regular-page">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href='<?php echo home_url();?>'>Home</a></li>
                    <li class='active'><?php echo get_the_title();?></li>
                </ol>                    

                <div class="toranj-vc-row-wrapper">

                	<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );

							the_post_navigation(
								array(
									'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'protechinfinity' ) . '</span> <span class="nav-title">%title</span>',
									'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'protechinfinity' ) . '</span> <span class="nav-title">%title</span>',
								)
							);

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
					?>  
					                    
	                <hr/>

	                <a class="back-to-top" href="#"></a>

	                <div class="clearfix"></div>

	            </div>
	        </div>
	    </div> 
    </div>	 

<?php 
get_footer();
