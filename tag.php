
<?php

/**
* 
* Template name: tag
* displays tag results
* 
*/
?>

<!-- get header-color.php -->
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
                <div class="col-8-lg col-12-md">
                    <div class="grid">
                    <?php
                    //load template post-content.php
                    get_template_part('templates/temp/post', 'content')
                    ?>
                    </div>
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





