<?php
get_header();
?> 
   <!-- About-section-start -->
   <div class="details-wraps width-shade-left width-shade-right shade-left shade-right light-shade">
         <div class="content-area">
             <div class="container">
                 <div class="content-area-sec" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
                    <date><?php echo get_field('blog_date');?></date>
                     <h2><?php the_title();?></h2>
                     <?php the_content();?>   
                  </div>
                 </div>
             </div>
            </div>
         </div>
         <!-- About-section-end -->
        
 
    <?php get_footer();?>