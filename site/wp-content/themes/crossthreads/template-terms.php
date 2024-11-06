<?php 
/* Template name: Terms and Conditions */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 
    <!--banner-section-start-->
    <div class="terms-condtions bg-color left-align g-top">
            <div class="xl-container">
                <div class="conditions-wrap" data-aos="fade-in" data-aos-delay="100">
                    <h2><?php the_title();?></h2>
                    <?php the_content();?>
                </div>
            </div>
        </div>
        <!--banner-section-end-->


  <?php endwhile; endif;?> 
  <?php get_footer();?>