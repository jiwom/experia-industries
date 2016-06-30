<?php
get_header(); 
?>
<div class="container animated fadeInUp" data-animation="fadeInUp" data-delay="300">
     <div class="page_content page_content_home">
      <div class="container">
		  <section class="site-main" id="sitefull">
			    
			   <?php echo do_shortcode('[pjc_slideshow slide_type="home-slider"]'); ?>
			   
			   <?php /*<div class="dealers">
					<h2>Authorized Dealers</h2>
					<div class="container">
						 <ul class="dealer-list">
						 <?php foreach(get_dealers() as $index => $dealer) { ?>
							  <li><?php echo get_the_post_thumbnail($dealer->ID,array(280,280)); ?></li>
						 <?php
							  //echo ((($index+1) % 3) == 0) ? '</div><div class="row">' : '';
						 } ?>
						 </ul>
						 <div class="clear"></div>
					</div>
			   </div> */ ?>
             
              <div class="col-md-offset-2">
                  <div class="wedobox col-md-3">
                      <div class="boxicon"></div>
                      <div class="boxtitle">
                        <?php esc_attr_e('Authorized Dealers','experia'); ?>
                      </div>
                      <div class="boxdescription">
                        <ul class="dealer-list">
                        <?php foreach(get_dealers() as $index => $dealer) { ?>
                             <li><?php echo get_the_post_thumbnail($dealer->ID,array(200,200)); ?></li>
                        <?php
                             //echo ((($index+1) % 3) == 0) ? '</div><div class="row">' : '';
                        } ?>
                        </ul>
                      </div>
                    
                  </div>
                  <div class="wedobox col-md-3">
                    <div class="boxicon"></div>
                    <div class="boxtitle">
                      <?php esc_attr_e('Latest News','experia'); ?>
                    </div>
                    <div class="boxdescription">
                      <ul class="dealer-list">
                      <?php foreach(get_news(2) as $news){ ?>
                        <li>
                          <a href="<?php echo get_the_permalink($news->ID); ?>">
                          <div class=""><?php echo get_the_post_thumbnail($news->ID,array(100,100)); ?></div>
                            <p><?php echo $news->post_title;?></p>
                          </a> 
                        </li>
                      <?php } ?>
                      </ul>
                      <a href="<?php echo get_site_url(); ?>/news">See all News</a>
                    </div>
                   
                  </div>
                  
                  <div class="wedobox col-md-3">
                    <div class="boxicon"></div>
                    <div class="boxtitle">
                      <?php esc_attr_e('FAQs','experia'); ?>
                    </div>
                    <div class="boxdescription">
                    
                    </div>
                    
                  </div>

              </div>
            
              
		  </section>
          </div>
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- content -->
<?php get_footer(); ?>