<?php
/**
*
 **/

get_header();

?>		
<div class="outer"> 
	<div class="blog-bt">
        <div class="container-full">
            <div class="blog-area">
                <div class="blog-head">
                    <h3><?php echo get_field('blog_page_title', 'options') ?></h3>
                </div>
                <ul>
            	<?php
            	if(have_posts()):
					while(have_posts()): the_post();
            	?>
                    <li>
                       <span><?php the_date(); ?> | <?php the_category(',') ?></span>
                        <h2><?php the_title(); ?></h2> <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt=""> 
                   	<?php the_excerpt(); ?>
                   	<a class="link" href="<?php the_permalink() ?>">Läs mer</a>
                   	</li>
                <?php
                	endwhile;
				endif;
				
				posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;'));
                ?>
                </ul>
            </div>
        </div>
    </div>
		
<?php
get_footer();
