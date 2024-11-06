<!DOCTYPE html>
<html lang="EN">
<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php wp_title();?></title>   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400..800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
    <!-- Header-section-start-->
    <div class="outer">
        <div class="header">
            <div class="second-header">
                <div class="container flex">
                    <header>
                        <div class="logo">                        
                            <a href="<?php echo home_url();?>">
                                <img srcset="<?php echo get_field('header_logo','option');?> 480w,<?php echo get_field('header_logo','option');?> 800w" sizes="(max-width: 683) 480px,
                                       800px" src="<?php echo get_field('header_logo','option');?>" alt="logo" decoding="async" />
                            </a>
                        </div>
                        <nav>
                        <?php
                            $defaults = array(
                                'menu' => 'Header Menu',
                                'after' => '',
                                'items_wrap' => '<ul>%3$s</ul>',
                                'theme_location' => 'header',
                                'depth' => 0,
                                'container' => false,
                                'walker'    => new themeslug_walker_nav_menu
                                );
                                wp_nav_menu($defaults);
                        ?>
                            <div class="mobile-only">
                                <a href="<?php echo home_url();?>/contact-us" class="btn"> </a>
                            </div>
                        </nav>
                        <div class="header-btn">
                            <?php
                            /*
                            while( have_rows('header_icons','option') ): the_row();
                                $h_icons    =  get_sub_field('h_icons'); 
                                $h_link    =  get_sub_field('h_link');                                                  
                            ?> 
                            <a href="<?php echo $h_link;?>"><img src="<?php echo $h_icons;?>" alt=""></a>
                            
                            <?php endwhile; ?>
                            */ ?>

                            <a href="<?php echo home_url();?>/my-account"><img src="<?php bloginfo("template_url")?>/img/account.svg" alt=""></a>                           
                            <a href="<?php echo wc_get_cart_url();?>"><img src="<?php bloginfo("template_url")?>/img/cart.svg" alt=""></a>
                            
          

                        </div>
                        <div id="hamburger-1" class="menu-toggle hamburger">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </header>
                </div>
            </div>
        </div>
        <!-- Header-section-end-->
 

