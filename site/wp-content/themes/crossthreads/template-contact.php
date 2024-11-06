<?php 
/* Template name: Contact */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 

  <!-- Banner-section-Start-->
  <div class="banner shade-left" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>) no-repeat center center/cover;">
            <div class="container">
                <div class="banner-text flex">
                    <div class="left" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
                        <h1><?php the_title();?></h1>                       
                    </div>
                </div>              
            </div>
            <div class="arrow-container">
                <img src="<?php bloginfo("template_url")?>/img/down-arrow.png" alt="">
             </div>
        </div>
        <!-- Banner-section-end -->
       <div class="contact-page width-shade-left width-shade-right shade-left shade-right">
        <div class="container">
            <div class="contact-page-sec flex">
     <div class="left-sec-contact" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="200">
        <b><?php echo get_field('ct_title');?></b>
        <ul class="contact-links-sec">
            <ul>
                <li><a href="tel:<?php echo get_field('ct_phone');?>"><svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34.0416 11.8093C36.2509 12.2404 38.2813 13.3209 39.873 14.9125C41.4646 16.5042 42.5451 18.5346 42.9762 20.7439M34.0416 2.76172C38.6317 3.27163 42.9119 5.32711 46.1796 8.59066C49.4472 11.8542 51.5081 16.1319 52.0238 20.7212M49.7619 38.7712V45.557C49.7644 46.1869 49.6354 46.8104 49.383 47.3876C49.1307 47.9648 48.7605 48.4829 48.2963 48.9088C47.8321 49.3347 47.2841 49.6589 46.6874 49.8607C46.0906 50.0625 45.4583 50.1375 44.8309 50.0808C37.8707 49.3245 31.1849 46.9461 25.3107 43.1367C19.8455 39.6639 15.212 35.0304 11.7393 29.5653C7.91659 23.6644 5.53767 16.9461 4.79521 9.95458C4.73869 9.32908 4.81303 8.69868 5.01349 8.10349C5.21395 7.5083 5.53615 6.96137 5.95957 6.49753C6.38298 6.03368 6.89834 5.66309 7.47284 5.40933C8.04733 5.15557 8.66837 5.02421 9.29641 5.02362H16.0821C17.1798 5.01282 18.244 5.40154 19.0763 6.11733C19.9087 6.83312 20.4523 7.82713 20.6059 8.9141C20.8923 11.0857 21.4235 13.2179 22.1893 15.2701C22.4936 16.0796 22.5594 16.9595 22.379 17.8054C22.1987 18.6513 21.7795 19.4277 21.1714 20.0427L18.2988 22.9153C21.5187 28.5781 26.2074 33.2668 31.8702 36.4867L34.7428 33.6141C35.3578 33.006 36.1342 32.5869 36.9801 32.4065C37.826 32.2261 38.7059 32.2919 39.5154 32.5962C41.5676 33.362 43.6998 33.8932 45.8714 34.1796C46.9702 34.3346 47.9736 34.888 48+971 56 648 3037.6909 35.7346C49.4083 36.5812 49.7894 37.6619 49.7619 38.7712Z" stroke="#1E1E1E" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg><?php echo get_field('ct_phone');?></a></li>
                    <li><a href="mailto:<?php echo get_field('ct_email');?>"><svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M49.5 13.5C49.5 11.025 47.475 9 45 9H9C6.525 9 4.5 11.025 4.5 13.5M49.5 13.5V40.5C49.5 42.975 47.475 45 45 45H9C6.525 45 4.5 42.975 4.5 40.5V13.5M49.5 13.5L27 29.25L4.5 13.5" stroke="#1E1E1E" stroke-width="3.28125" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <?php echo get_field('ct_email');?></a></li>
            </ul>
        </ul>
                  <?php                                         
                        while( have_rows('ct_address') ): the_row();
                            $ct_location  =  get_sub_field('ct_location'); 
                            $c_address    =  get_sub_field('c_address'); 
                            $ct_link      =  get_sub_field('ct_link');                            
                    ?>
                  <div class="address-list">
                    <span><?php echo $ct_location;?></span>
                    <ul>
                      <li><a href="<?php echo $ct_link;?>"><?php echo $c_address;?></a></li>
                    </ul>
                  </div>
                <?php endwhile;?>
            </div>
            <div class="right-sec" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="300">
                <div class="contact-form-wrap">                 
                    <h3><?php echo get_field('form_title');?></h3>      
                    <?php echo do_shortcode(get_field("form_shortcode"));?>
              </div>
          </div>
            </div>
        </div>
       </div>
        
           <div class="map">
            <?php echo get_field('ct_map');?>
           </div>    

    <?php endwhile; endif;?> 
    <?php get_footer();?>