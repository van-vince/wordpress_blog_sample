<?php

 /**
 * 
 * Template name: categoty.php
 * Template to display page results
 * 
 */
?>


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

                <!-- two sides columms-->
                <div class="row">
                    <div class="col-lg-12">

                    <?php if ( have_posts() ) : 
                while ( have_posts() ) : the_post();?>

                <div class="article">
                    <article class="single-post">
                    <div class="post-title">
                                <a href="<?php the_permalink(); ?>"><span class="text-lg text-dark"> <?php echo the_title(); ?></span></a>
                            </div>
                        <div class="post-content text-md ">
                                <p class="para">
                                <?php echo get_the_content(); ?>
                                </p>
                            </div> 
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

                    </div>
                </div>
            </div>
        </section>

      <!--  end post Area-->
 
<?php get_footer(); ?>





