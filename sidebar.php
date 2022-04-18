
<?php

/**
* 
* Template name: sidebar.php
* sidebar template
* 
*/
?>


<aside class="sidebar">

    <section class="latest-post">
        <a href="#" class="text-md text-dark title">Latest Post</a>
        <div class="flex flex-column">
            <?php
            //get template file
            get_template_part('templates/temp/sidebar', 'latest-post');
            
            ?>
        </div>
    </section>
    <!--  end side bar latest post section-->

    <!--  search area-->
    <section class="search-area">
        <div class="search">
            <h3 class="text-md text-dark">Search</h3>
            <!-- <form class="form-group">
                <input type="search" class="input-control mr-sm-2" placeholder="Search">
                <button class="btn btn-submit" type="submit"><i class="fa fa-search"></i></button>
            </form> -->
            <?php 
            //get searchform.php template file
            get_search_form();
            ?>
        </div>
    </section>
    <!--  end search area-->

    <!--  popular tags-->
    <section class="popular-tags">
        <h4 class="text-md">Popular tags</h4>
        <div class=" tags flex flex-row flex-wrap">
        
            <?php 
            //get tags template file
            get_template_part('templates/temp/post', 'tags')
            ?>
            
            <!-- <a href=""><span>Camera</span></a>
            <a href=""><span>bike</span></a>
            <a href=""><span>Craft</span></a>
            <a href=""><span>Photography</span></a>
            <a href=""><span>article</span></a>
            <a href=""><span>events</span></a>
            <a href=""><span>wordpress</span></a> -->
        </div> 
    </section>
    <!--  end popular tags-->
</aside>