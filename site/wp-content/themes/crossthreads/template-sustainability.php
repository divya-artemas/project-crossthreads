<?php 
/* Template name: Sustainability */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 
    <!--Banner-section-start-->
    <div class="banner g-top h-medium" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>) no-repeat center center/cover;">
            <div class="banner-text">
                <h1 data-aos="zoom-in" data-aos-easing="ease-in-out"><?php echo get_field('banner_heading');?></h1>
                <p data-aos="zoom-in" data-aos-easing="ease-in-out"><?php echo get_field('banner_content');?></p>
                <div class="arrow-container">
                    <img src="<?php bloginfo("template_url")?>/img/white-arroe.svg" alt="arrow" decoding="async" />
                </div>
            </div>
        </div>
        <!--Banner-section-end-->
        <!--text-content-start-->
        <div class="text-description">
            <div class="small-container">
                <p data-aos="fade-in" data-aos-delay="100"><?php echo get_field('sust_content');?></p>
            </div>
        </div>
        <!--text-content-end-->
        <!--sustainability-start-->
        <div class="sustain">
            <div class="small-container">
                <h2 data-aos="zoom-in" data-aos-easing="ease-in-out"><?php echo get_field('sust_title');?></h2>
            </div>
            <div class="sustain-sec">
                <div class="container">
                    <div class="sustain-list flex">
                    <?php
                    $i=1;
                        while( have_rows('sust_imagecontent') ): the_row();
                            $sust_image      =  get_sub_field('sust_image');                            
                            $sust_name       =  get_sub_field('sust_name');
                            $sust_content    =  get_sub_field('sust_content');
                    ?> 
                        <div class="sustain-block" data-aos="fade-up" data-aos-delay="<?php echo $i;?>00">
                            <img src="<?php echo $sust_image;?>" alt="Crossthreads">
                            <div class="sustain-content">
                                <h3><?php echo $sust_name;?></h3>
                                <p><?php echo $sust_content;?></p>
                            </div>
                        </div>
                        <?php $i++; endwhile;?>                        
                    </div>
                </div>
            </div>
        </div>
        <!--sustainability-start-->
        <!--video-sec-start-->
        <div class="video-sec">
            <div class="container">
        <h4 data-aos="zoom-in" data-aos-easing="ease-in-out"><?php echo get_field('video_title');?>
          </h4>
                <div class="video-container">
                    <video id="video" poster="<?php echo get_field('video_image');?>">
                        <source src="<?php echo get_field('video_src');?>" type="video/mp4">
                    </video>
                    <div class="play-button-wrapper">
                        <div title="Play video" class="play-gif" id="circle-play-b" style="opacity: 1;">
                            <!-- SVG Play Button -->
                            <svg fill="#C0DD92" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <path d="M256,0C114.511,0,0,114.497,0,256c0,141.49,114.495,256,256,256c141.49,0,256-114.497,256-256C512,114.51,397.503,0,256,0 z M348.238,284.418l-120.294,69.507c-10.148,5.864-22.661,5.874-32.826,0.009c-10.158-5.862-16.415-16.699-16.415-28.426V186.493 c0-11.728,6.258-22.564,16.415-28.426c5.076-2.93,10.741-4.395,16.406-4.395c5.67,0,11.341,1.468,16.42,4.402l120.295,69.507 c10.149,5.864,16.4,16.696,16.4,28.418C364.639,267.722,358.387,278.553,348.238,284.418z"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>

                </div>
                <p data-aos="fade-in" data-aos-delay="100"><?php echo get_field('video_content');?></p>
            </div>
        </div>
        <!--video-sec-end-->

        <!--about-section-start-->
        <div class="about-sec purpose" style="background: url(<?php echo get_field('bt_background_image');?>) no-repeat center center/cover;">
            <div class="medium-container">
                <b data-aos="zoom-in" data-aos-easing="ease-in-out"><?php echo get_field('bt_heading');?></b>
                <h4 data-aos="zoom-in" data-aos-easing="ease-in-out"><?php echo get_field('bt_content');?>
                </h4>

                <a href="<?php echo get_field('bt_button_link');?>" class="btn green" data-aos="zoom-in" data-aos-easing="ease-in-out"><?php echo get_field('bt_button_text');?></a>
            </div>
        </div>
        <!--about-section-end-->
         <!--signature-section-start-->
         <div class="signature">
             <div class="small-container">
                <p data-aos="fade-in" data-aos-delay="100"><?php echo get_field('signature_content');?></p>
                <img src="<?php echo get_field('upload_sign');?>" alt="Sinature Crossthreads">
             </div>
         </div>
         <!--signature-section-end-->
  <?php endwhile; endif;?> 
  <?php get_footer();?>