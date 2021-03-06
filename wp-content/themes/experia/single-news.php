<?php
/**
 * The Template for displaying all single posts.
 *
 * @package SKT Spiritedlite
 */

get_header(); ?>

<div class="container">
	 <?php /*if(get_the_post_thumbnail_url()){ ?>
	 <div class="parallax-page-window" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url(); ?>"></div>
	 <?php } */?>
	 <?php include('circular-menu.php'); ?>
     <div class="page_content page_content_inner">

		  <div class="breadcrumbs" typeof="BreadcrumbList">
			  <?php if(function_exists('bcn_display')) bcn_display(); ?>
		  </div>
		  <section class="site-main">
			   <h1 class="entry-title"><?php the_title(); ?></h1>
			   <p><i><?php echo get_the_date('M d Y'); ?></i></p>
			   <?php $img = get_the_post_thumbnail_url(); ?>
			   <?php if(has_post_thumbnail()){
			   		echo '<img src="'.$img.'" width="100%" />';		
			   } ?>
			   
			   <?php echo apply_filters('the_content', $post->post_content); ?>
			   <?php
					//If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
			   ?>        
		  </section>       
		  
		  <div id="sidebar">
		  <?php
			   if ( function_exists('dynamic_sidebar') && is_active_sidebar("experia_ads") ) {
					dynamic_sidebar('experia_ads');
			   }
		  ?>
		  </div>
		  
		
		  <div class="clear"></div>
    </div><!-- page_content -->
</div><!-- container -->	
<?php get_footer(); ?>