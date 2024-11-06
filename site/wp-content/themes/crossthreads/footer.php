<?php 
 if(is_page_template( 'template-about.php' ) || is_page_template( 'template-sustainability.php' ) ) {
?>
    <?php  }else {?>
 <!--policy-section-start-->
</div>
 <div class="policy">
            <div class="xl-container">
                <div class="policy-section flex">
                <?php
                    $i=1;
                    while( have_rows('footer_icons','option') ): the_row();
                        $f_icon         =  get_sub_field('f_icon'); 
                        $f_icon_title   =  get_sub_field('f_icon_title'); 
                        $f_icon_content =  get_sub_field('f_icon_content');  
                ?> 
                    <div class="policy-set" data-aos="fade-up" data-aos-delay="<?php echo $i;?>00">
                        <img src="<?php echo $f_icon;?>" alt="Crossthreads">
                        <strong><?php echo $f_icon_title;?></strong>
                        <p><?php echo $f_icon_content;?></p>
                    </div>
                    <?php $i++; endwhile; ?>
                </div>
            </div>
        </div>
        <!--policy-section-end-->
 <?php } ?>


    <!--footer-section-start-->
    <div class="footer">
        <div class="xl-container">
            <div class="first-footer">
                <div class="logo-sec">
                    <img src="<?php echo get_field('footer_logo','option');?>" alt="Crossthreads Logo">
                </div>
                <div class="mail-sec">
                    <input type="email" placeholder="Enter your email id">
                    <button>Subscribe Newletter</button>

                </div>
            </div>
            <div class="second-footer">
                <div class="ft-links">
                    <div class="ft-links-wrap">
                        <strong>Navigate</strong>
                        <?php
                            $defaults = array(
                                'menu' => 'Footer Menu',
                                'after' => '',
                                'items_wrap' => '<ul>%3$s</ul>',
                                'theme_location' => 'footer',
                                'depth' => 0,
                                'container' => false,
                                'walker'    => new themeslug_walker_nav_menu
                                );
                                wp_nav_menu($defaults);
                        ?>
                    </div>
					<?php
					/*
					 *  <?php   
						 $args = array(
          'taxonomy' => 'product_cat',
          'hide_empty' => false,
          'parent'   => 0
      );
  $product_cat = get_terms( $args );

  foreach ($product_cat as $parent_product_cat)
  {

  echo '
      <ul>
        <li><a href="'.get_term_link($parent_product_cat->term_id).'">'.$parent_product_cat->name.'</a>
        <ul>
          ';
  $child_args = array(
              'taxonomy' => 'product_cat',
              'hide_empty' => false,
              'parent'   => $parent_product_cat->term_id
          );
  $child_product_cats = get_terms( $child_args );
  foreach ($child_product_cats as $child_product_cat)
  {
    echo '<li><a href="'.get_term_link($child_product_cat->term_id).'">'.$child_product_cat->name.'</a></li>';
  }

  echo '</ul>
      </li>
    </ul>';
  }
					 ?>
                            
					
					*/
					?>
                    <div class="ft-links-wrap">
                        <strong>Men</strong>						
                        <ul>
							<?php
								$child_args = array(
             					 'taxonomy' => 'product_cat',
              					 'hide_empty' => false,
              					 'parent'   => '18'
          						);
  								$child_product_cats = get_terms( $child_args );
  								foreach ($child_product_cats as $child_product_cat)
  								{
	 						 ?>
							<li>
								<a href="<?php echo get_term_link($child_product_cat->term_id);?>">
									<?php echo $child_product_cat->name;?>
                                </a>
							</li>
                             <?php } ?>
                        </ul>
                    </div>
                    <div class="ft-links-wrap">
                        <strong>Women</strong>
                        <ul>
							<?php
								$child_args = array(
             					 'taxonomy' => 'product_cat',
              					 'hide_empty' => false,
              					 'parent'   => '19'
          						);
  								$child_product_cats = get_terms( $child_args );
  								foreach ($child_product_cats as $child_product_cat)
  								{
	 						 ?>
                            <li>
								<a href="<?php echo get_term_link($child_product_cat->term_id);?>">
									<?php echo $child_product_cat->name;?></a>
							</li>
							 <?php } ?>                          

                        </ul>
                    </div>
                    <div class="ft-links-wrap">
  						<strong>Kids</strong>
                        <ul>
							<?php
								$child_args = array(
             					 'taxonomy' => 'product_cat',
              					 'hide_empty' => false,
              					 'parent'   => '20'
          						);
  								$child_product_cats = get_terms( $child_args );
  								foreach ($child_product_cats as $child_product_cat)
  								{
	 						 ?>
                            <li>
								<a href="<?php echo get_term_link($child_product_cat->term_id);?>">
									<?php echo $child_product_cat->name;?></a>
							</li>
							 <?php } ?>

                        </ul>
                        <strong>Accessories</strong>
                    </div>
                </div>
                <div class="social-links">
                    <ul>
                        <?php                   
                          while( have_rows('ft_social_media','option') ): the_row();
                            $soc_icon   =  get_sub_field('soc_icon'); 
                            $soc_link   =  get_sub_field('soc_link');                         
                        ?>
                            <li>
                                <a href="<?php echo $soc_link;?>"><img src="<?php echo $soc_icon;?>" alt="Social Icon"></a>
                            </li>                       
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="flex">
                    <p><?php echo get_field('copyright_text','option');?></p>
                    <div class="return">
                    <?php                   
                          while( have_rows('footer_links','option') ): the_row();
                            $ft_page_title  =  get_sub_field('ft_page_title'); 
                            $ft_page_url    =  get_sub_field('ft_page_url');                         
                      ?>
                            <a href="<?php echo $ft_page_url;?>"><?php echo $ft_page_title;?></a>                           
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer-section-end-->
    <script type="text/javascript" src="<?php bloginfo("template_url")?>/src/jquery-min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url")?>/src/flickity.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url")?>/src/aos.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url")?>/src/custom.js"></script>


 <script>
	$(function(){
 		$('#cat_id a').click(function(e) {
  		  e.preventDefault();	
	 	  var cvalue = $(this).attr('id');	
		  var template_path = '<?php echo get_bloginfo('template_url'); ?>';
		  var ajaxurl = template_path+"/myurl.php"; 
		 //alert(cvalue);
		   $.ajax({
					type: "POST",
					url: ajaxurl,
					dataType: 'html',
					data: {catID : cvalue},
					success: function(data){               
					   //alert(data);
						if(data=='undefined'){
							 window.location.reload();
						}
						else{							
							$('#urlajax').html(data);
						}              
					}
				});
           return false;
			});
		});	
 </script>

    <?php wp_footer();?>
    
</body>
</html>
