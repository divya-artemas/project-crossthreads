<?php 
/* Template name: About */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 
     <!--Banner-section-start-->
     <div class="banner g-top h-large" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>) no-repeat center center/cover;">
            <div class="banner-text">
                <h1 data-aos="zoom-in" data-aos-easing="ease-in-out"><?php echo get_field('banner_heading');?></h1>
                <p data-aos="zoom-in" data-aos-easing="ease-in-out"><?php echo get_field('banner_content');?></p>
               <a href="<?php echo get_field('b_button_link');?>" data-aos="fade-in" data-aos-delay="100" class="btn"><?php echo get_field('b_button_text');?></a>
                <div class="arrow-container">
                   <img src="<?php bloginfo("template_url")?>/img/down-arrow.svg" alt="arrow" decoding="async">
                </div>
            </div>
        </div>
        <!--Banner-section-end-->
        <!--text-content-start-->
        <div class="text-description left-align">
            <div class="medium-container">
                <h4 data-aos="fade-in" data-aos-delay="100"><?php echo get_field('ab_title');?></h4>
                <?php echo get_field('ab_content');?>
            </div>
        </div>
        <!--text-content-end-->
        <!--left-section-content-start-->
        <div class="white-wrap-sec">
                <div class="white-sec flex">
                    <div class="left">
                        <img src="<?php echo get_field('mission_image');?>" alt="About Crossthreads">
                    </div>
                    <div class="right" data-aos="fade-left" data-aos-delay="100">
                        <h3><?php echo get_field('season_title');?></h3>
                        <p><?php echo get_field('ab_left_content');?></p>
                    </div>
                </div>

        </div>
         <!--left-section-content-end-->
          <!--Sustainability-description-start-->
          <div class="sustainability-description">
              <div class="medium-container">
                <h4 data-aos="fade-in" data-aos-delay="100"><?php echo get_field('sust_heading');?></h4>          
                <p data-aos="fade-in" data-aos-delay="200"><?php echo get_field('sust_content');?><?php echo get_field('sust_content');?></p>    
                <img src="<?php echo get_field('sust_image');?>" alt="Crossthreads" data-aos="fade-up" data-aos-delay="300">
              </div>
          </div>
          <!--Sustainability-description-end-->
      <!--left-section-content-start-->
        <div class="white-wrap-sec">
                <div class="white-sec flex reverse">
                    <div class="left">
                        <img src="<?php echo get_field('ab_image_right');?>" alt="Crossthreads">
                    </div>
                    <div class="right" data-aos="fade-right" data-aos-delay="100">
                        <h3><?php echo get_field('img_title');?></h3>
                        <p><?php echo get_field('ab_right_content');?></p>
                    </div>
                </div>
        </div>
         <!--left-section-content-end-->      
    
         <!--signature-section-start-->
         <div class="signature left-align">
             <div class="medium-container">
                <h4 data-aos="fade-in" data-aos-delay="100"><?php echo get_field('sign_title');?></h4>
                 <p data-aos="fade-right" data-aos-delay="200"><?php echo get_field('sign_content');?></p>
                 <img src="<?php echo get_field('sign_image');?>" alt="Crossthreads Sign">
             </div>
         </div>
         <!--signature-section-end-->
  <?php endwhile; endif;?> 
  <?php get_footer();?>