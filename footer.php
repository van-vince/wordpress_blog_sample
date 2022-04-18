

   </main>
    <!--  end main site area  -->

    <!--  footer area  -->
    <footer class="footer-area">
        <div class="row">
            <div class="col-4-lg col-4-md col-12-sm">

                 <!--  About me  -->
                <section class="about-me">
                    <div class="site-logo">
                        <!-- <img src="./assets/images/logo.png" alt="logo" class=""> -->
                        <?php
                   if (function_exists('the_custom_logo')){
                        the_custom_logo( );
                   }else{
                    bloginfo( 'name' );
                   }
                   ?>
                    </div>
                    <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, necessitatibus reprehenderit facilis atque quas labore?</p>
                    <div class="social-media">
                        <a href="" class="text-primary"><span class="fab fa-facebook-f"></span></a>
                        <a href="" class="text-primary"><span class="fab fa-instagram"></span></a>
                        <a href="" class="text-primary"><span class="fab fa-twitter"></span></a>
                        <a href="" class="text-primary"><span class="fab fa-youtube"></span></a>
                    </div>
                </section>
            </div>
            <div class="col-4-lg col-4-md col-12-sm">
                 <!--  Recent posts  -->
                 <section class="recent-post">
                     <a href="" class="text-md text-light">Recent Post</a>
                     <div class="post flex flex-row flex-wrap">
                        <?php 
                        //get template file recent-post.php
                        get_template_part('templates/temp/recent', 'post');
                        ?>
                     </div>
                 </section>
            </div>
            <div class="col-4-lg col-4-md col-12-sm">
                     <!--  popular tags-->
                        <section class="popular-tags">
                            <a href="#" class="text-md text-light">Popular tags</a>
                            <div class=" tags flex flex-row flex-wrap">
                              
                            <?php 
                            //get tags template file
                            get_template_part('templates/temp/post', 'tags')
                            ?>
                            <!-- <a href="#"><span>Camera</span></a>
                                <a href="#"><span>bike</span></a>
                                <a href="#"><span>Craft</span></a>
                                <a href="#"><span>Photography</span></a>
                                <a href="#"><span>article</span></a>
                                <a href="#"><span>events</span></a>
                                <a href="#"><span>wordpress</span></a> -->
                            </div> 
                        </section>
                        <!--  end popular tags--> 
            </div>
        </div>

        <div class="rights text-center text-gray">
            Wordpress theme by <a href="<?php echo home_url('/');?>" 
            class="text-primary">vvstechnology.com</a> &copy; <?php the_date('Y');?>
        </div>

    </footer>
    <!--  End footer area  -->


</body>

</html>