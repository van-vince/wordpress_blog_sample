
<?php

/**
* 
* Template name: single.php
* template to display entire post coontent.
* 
*/
?>

<!-- get header-color.php file -->
<?php get_header('color'); ?>

 <!--  Category section-->
    <section class="categories">
        <div class="container">
            <div class="flex flex-row flex-wrap">
               <?php
               //load template categories-content.php
               get_template_part('templates/temp/categories', 'content')
               ?>
            </div>
        </div>
    </section>
 <!--  end Category section-->


 
 <!--  Post Area-->
    
    <section class="post-area">
        <div class="wrapper">

            <!-- one sides columms-->
            <div class="row">
                <div class="col-8-lg col-12-md">
                    
                <?php if ( have_posts() ) : 
                while ( have_posts() ) : the_post();?>

                <div class="article">
                    <article class="single-post">
                    <div class="post-title">
                                <a href="<?php the_permalink(); ?>"><span class="text-lg text-dark"> <?php echo the_title(); ?></span></a>
                            </div>
                        <div class="post-thumbnail">
                            <!-- <img src="./assets/images/Feature_image/1-1024x777.jpg" alt="Post image" class="fluid"> -->
                            <?php if(has_post_thumbnail()): ?>
                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Post image" class="fluid"> 
                            
                            <?php endif; ?>
                        </div>
                        <div class="post-content text-md ">
                                <p class="para">
                                <?php echo get_the_content(); ?>
                                </p>
                            </div>
                        <div class="post-info">
                            <div class="post-author">
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><span class="text-sm text-gray"> by <?php the_author();?>, <?php echo get_the_date();?></span></a>
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


                 <!--  pagination section-->
                 <div class="row">
                    <div class="col-12-lg text-center">
                       <div class="pagination">
                           <?php 
                            echo paginate_links(array(
                                'mid_size' => 2,
                                'prev_text' => '<span class="fa fa-arrow-left">Prev</span>',
                                'next_text' => '<span class="fa fa-arrow-rignt">Next</span>'
                            ));
                           ?>
                           <!-- <a href=""><span>1</span></a>
                           <a href=""><span>2</span></a>
                           <a href=""><span>3</span></a>
                           <a href=""><span class="fa fa-arrow-right">Next</span></a> -->
                       </div>
                    </div>
                </div>
                 <!--  end pagination section-->
                </div>

            <div class="col-4-lg col-12-md">

                    <!--  get the sidebar template-->
                    <?php get_sidebar();?>
           
                </div>
            </div>
        </div>
    </section>

  <!--  end post Area-->

<?php get_footer(); ?>





