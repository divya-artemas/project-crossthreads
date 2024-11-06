<?php
/**
**/

get_header();
?>
<?php
					if(have_posts()):
						while(have_posts()) : the_post();
					?>
 
             
    
                <div class="terms-condtions bg-color left-align g-top">
                  <div class="xl-container">
                   <div class="conditions-wrap" data-aos="fade-in" data-aos-delay="100">
                         <h3><?php echo get_field('c_heading');?></h3>
                        <h4><?php echo get_field('left_content');?></h4>
                
                                         
                            <?php the_content();?>
            
                    </div>                
                  </div>
                </div>
            
                <?php
                    	endwhile;	
					endif;
                    ?>      


                
<?php
get_footer();
