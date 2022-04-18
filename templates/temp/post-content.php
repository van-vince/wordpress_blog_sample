
<?php

/**
 * 
 * Template name: Add post content
 * 
 * 
 */

//get blog post

?>

<?php if ( have_posts() ) : 
    while ( have_posts() ) : the_post();?>

    <div class="article">
        <article class="blog-post">
            <div class="post-thumbnail">
                <!-- <img src="./assets/images/Feature_image/1-1024x777.jpg" alt="Post image" class="fluid"> -->
                <?php if(has_post_thumbnail()): ?>
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Post image" class="fluid"> 
                
                <?php endif; ?>
            </div>
            <div class="post-info">
                <div class="post-author">
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><span class="text-sm text-gray"> by <?php the_author();?>, <?php echo get_the_date();?></span></a>
                </div>
                <div class="post-title">
                    <a href="<?php the_permalink(); ?>"><span class="text-lg text-dark"> <?php echo the_title(); ?></span></a>
                </div>
                <div class="post-content">
                    <p class="para">
                    <?php echo get_the_excerpt(); ?>
                    </p>
                </div>
                <hr>
                <div class="post-categories">
                <?Php get_template_part('templates/temp/post', 'categories')?>
                </div>
            </div>
        </article>
    </div>

 <?php   endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
 
?>


<!-- <div class="article">
    <article class="blog-post">
        <div class="post-thumbnail">
            <img src="./assets/images/Feature_image/1-1024x777.jpg" alt="Post image" class="fluid">
        </div>
        <div class="post-info">
            <div class="post-author">
                <a href="#"><span class="text-sm text-gray"> by Admin, March 15, 2022</span></a>
            </div>
            <div class="post-title">
                <a href="#"><span class="text-lg text-dark"> My new work</span></a>
            </div>
            <div class="post-content">
                <p class="para">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate officiis quisquam consequatur dignissimos illum velit aperiam unde et error quae?
                </p>
            </div>
            <hr>
            <div class="post-categories">
                <a href="#"><span class="text-sm uppercase text-gray">People</span></a>
                <a href="#"><span class="text-sm uppercase text-gray">Travel</span></a>
            </div>
        </div>
    </article>
</div> -->




