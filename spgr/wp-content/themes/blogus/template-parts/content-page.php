<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blogus
 */

?>
<!--==================== breadcrumb section ====================-->
<?php do_action('blogus_breadcrumb_content'); ?>

<?php if( class_exists('woocommerce') && (is_account_page() || is_cart() || is_checkout())) { ?>
	<div class="col-md-12">
		<div class="bs-card-box padding-20">
		<?php if (have_posts()) {  while (have_posts()) : the_post(); ?>
			<?php the_content(); endwhile; } } else {?>
			 <?php 
                    $blogus_page_layout = get_theme_mod('blogus_page_layout','page-align-content-right');
                    if($blogus_page_layout == "page-align-content-left")
                    { ?>
                    <aside class="col-lg-4">
                        <?php get_sidebar();?>
                    </aside>
                    <?php } ?>
                    <?php if($blogus_page_layout == "page-align-content-right"){
                    ?>
                    <div class="col-lg-8">
                    <?php } elseif($blogus_page_layout == "page-align-content-left") { ?>
                    <div class="col-lg-8">
                    <?php } elseif($blogus_page_layout == "page-full-width-content") { ?>
                     <div class="col-md-12">
                     <?php } ?>
                 <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="bs-card-box padding-20">
				 <?php while (have_posts()) : the_post(); ?>
				 	<h1 class="entry-title"><?php the_title(); ?></h1>
	               <?php if(has_post_thumbnail()) {
					if ( is_single() ) { ?>
						<figure class="post-thumbnail">
							<?php the_post_thumbnail('full'); ?>					
						</figure>
					<?php }
					else { ?>
						<figure class="post-thumbnail">
							<a href="<?php the_permalink(); ?>" >
								<?php the_post_thumbnail('full'); ?>
							</a>				
						</figure>
					<?php }
					}		
					the_content();
					blogus_edit_link();
					
	                if (comments_open() || get_comments_number()) :
	                        comments_template();
	                    endif;
	                    
	               endwhile;
            	   ?>	
				</div>
			</div>
			</div>
	<!--Sidebar Area-->
			<?php if($blogus_page_layout == "page-align-content-right") { ?>
      		<!--sidebar-->
	          <!--col-md-4-->
	            <aside class="col-lg-4">
	                  <?php get_sidebar();?>
	            </aside>
	          <!--/col-md-4-->
      <!--/sidebar-->
      <?php } ?>
	<?php } ?>
	<!--Sidebar Area-->