<?php
require_once('../../../wp-load.php');

	$ck = $_REQUEST['catID']; 


        $query = new WP_Query( array( 'post_type' => 'product','posts_per_page' =>3,
            'tax_query' => array(           
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' =>  $ck,				
            ),
            
     	   ),
   		 ));  

 	//echo "<pre>";print_r($query);echo "<pre/>";

  		while ( $query->have_posts() ) : $query->the_post();
            $image    	= 	wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');  
            $title      =   get_the_title();                          
            $permalink  =   get_the_permalink();                   
        ?> 	
		  		<div class="product-set" data-aos="fade-up" data-aos-delay="100">
                     <img src="<?php echo $image[0];?>" alt="Crossthreads">
                      <div class="product-desc">
                           <strong><?php echo $title;?></strong>
                           <?php $product = wc_get_product( get_the_ID() ); ?>
                            <b><?php echo get_woocommerce_currency_symbol(); ?><?php echo $product->get_price();?></b>	
                           <div class="flex divide-flex">
                               <a href="<?php echo $permalink;?>" class="line">View Details</a>
                               <?php							
							 		$product_id = $product->get_id();
    								$checkout_url = wc_get_checkout_url();
									if( $product->is_type( 'simple' ) ){
   										 echo '<a href="' . esc_url( $checkout_url . '?add-to-cart=' . $product_id ) . '" class="btn">Buy Now</a>';
									}
									else {
									?>
								<a href="<?php echo $permalink;?>" class="btn">BUY NOW</a>
								<?php } ?>
                           </div>
                       </div>
                </div>

		   <?php
                wp_reset_query();
                wp_reset_postdata();
                endwhile;                               
            ?>